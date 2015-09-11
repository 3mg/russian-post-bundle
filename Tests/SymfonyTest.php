<?php

namespace a3mg\RussianPostBundle\Tests;

use a3mg\RussianPostBundle\a3mgRussianPostBundle;
use a3mg\RussianPostBundle\Service\RussianPostApi;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use a3mg\RussianPostBundle\Exception\InvalidTrackException;
use a3mg\RussianPostBundle\Exception\RussianPostApiException;
use a3mg\RussianPostBundle\Model\OperationHistoryData;
use JMS\Serializer\SerializationContext;
use Symfony\Component\DependencyInjection\Compiler\ResolveParameterPlaceHoldersPass;
use Doctrine\Common\Annotations\AnnotationReader;
use JMS\SerializerBundle\JMSSerializerBundle;
use JMS\SerializerBundle\Tests\DependencyInjection\Fixture\SimpleObject;
use JMS\SerializerBundle\Tests\DependencyInjection\Fixture\VersionedObject;
use Symfony\Component\DependencyInjection\Compiler\ResolveDefinitionTemplatesPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Class SymfonyTest
 * @package a3mg\RussianPostBundle\Tests
 */
class SymfonyTest extends \PHPUnit_Framework_TestCase
{
    public function testApi()
    {
        if (!class_exists('Symfony\Component\HttpKernel\Bundle\Bundle') ||
            !class_exists('JMS\SerializerBundle\JMSSerializerBundle')) {
            return;
        }
        
        // Invalid wsdl endpoint
        $container = $this->getContainer("fail");

        /** @var RussianPostApi $api */
        $api = $container->get('russian_post_api');

        try {
            /** @var OperationHistoryData $object */
            $object = $api->getTrackOperationHistory("RA322481130RU", $debug);
            $this->assertFalse($object instanceof OperationHistoryData);
        } catch (\Exception $e) {
            $this->assertTrue($e instanceof RussianPostApiException);
        }

        try {
            /** @var OperationHistoryData $object */
            $object = $api->getTrackOperationHistory("EE123456785AP", $debug); // Invalid country code
            $this->assertFalse($object instanceof OperationHistoryData);
        } catch (\Exception $e) {
            $this->assertTrue($e instanceof InvalidTrackException);
        }

        // Valid wsdl endpoint
        $container = $this->getContainer("success");

        /** @var RussianPostApi $api */
        $api = $container->get('russian_post_api');

        try {
            /** @var OperationHistoryData $object */
            $object = $api->getTrackOperationHistory("RA322481130RU", $debug);
            $this->assertTrue($object instanceof OperationHistoryData);
            file_put_contents("dump.html", $debug["Request"]."\n".$debug["Response"]);
            $this->assertGreaterThan(0, count($object->getHistoryRecord()));
        } catch (\Exception $e) {
            throw $e;
            $this->assertTrue(null === $e); // Always false because exception must not occurs
        }
    }
    
    private function getContainer($env) {
        $kernel = new \RussianPostApiTestingAppKernel($env, true);
        $kernel->boot();
        return $kernel->getContainer();
    }
}