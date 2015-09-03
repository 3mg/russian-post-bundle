<?php
namespace a3mg\RussianPostBundle\Service;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Construction\UnserializeObjectConstructor;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;

use Goetas\Xsd\XsdToPhp\Jms\Handler\BaseTypesHandler;
use Goetas\Xsd\XsdToPhp\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\SerializerInterface;

class RussianPostApiFactory {
    const WSDL_ENDPOINT = "http://voh.russianpost.ru:8080/niips-operationhistory-web/OperationHistory?wsdl";

    /**
     * @param                          $login
     * @param                          $password
     * @param string                   $wsdlEndpoint
     * @param SerializerInterface|null $serializer
     * @return RussianPostApi
     */
    public static function createApi($login, $password, $wsdlEndpoint = self::WSDL_ENDPOINT, SerializerInterface $serializer = null) {
        if (null == $serializer) {
            $serializer = self::initSerializer();
        }
        $api = new RussianPostApi($serializer, $login, $password, $wsdlEndpoint);

        return $api;
    }

    /**
     * @return \JMS\Serializer\Serializer
     */
    private static function initSerializer() {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__.'/../Resources/config/serializer', 'a3mg\RussianPostBundle');
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
            $handler->registerSubscribingHandler(new \a3mg\RussianPostBundle\Service\DateHandler()); // XMLSchema date handling
        });
        
        $propertyNamingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());
        $objectConstructor = new UnserializeObjectConstructor();
        
        $serializerBuilder->setDeserializationVisitor('array', new \a3mg\RussianPostBundle\Service\ArrayDeserializationVisitor($propertyNamingStrategy, $objectConstructor));
        
        $serializer = $serializerBuilder->build();
        
        return $serializer;
    }
}