<?php
namespace a3mg\RussianPostBundle\Service;

use RuntimeException;
use JMS\Serializer\VisitorInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\Context;

class DateHandler implements SubscribingHandlerInterface
{
    protected $defaultTimezone;

    public static function getSubscribingMethods()
    {
        return array(
            array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'array',
                'type' => 'Goetas\Xsd\XsdToPhp\XMLSchema\DateTime',
                'method' => 'deserializeDateTime'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'array',
                'type' => 'Goetas\Xsd\XsdToPhp\XMLSchema\Time',
                'method' => 'deserializeTime'
            ),
        );
    }
    
    public function __construct($defaultTimezone = 'UTC')
    {
        $this->defaultTimezone = new \DateTimeZone($defaultTimezone);
    }

    public function deserializeDateTime(VisitorInterface $visitor, $data, array $type)
    {
        if (null === $data) {
            return null;
        }
        
        return $this->parseDateTime($data, $type);
    }

    public function deserializeTime(VisitorInterface $visitor, $data, array $type)
    {
        $data = (string) $data;
        return new \DateTime( $data, $this->defaultTimezone );
    }

    private function parseDateTime($data, array $type)
    {
        $timezone = isset($type['params'][1]) ? new \DateTimeZone($type['params'][1]) : $this->defaultTimezone;
        $datetime = new \DateTime((string) $data, $timezone);
        if (false === $datetime) {
            throw new RuntimeException(sprintf('Invalid datetime "%s", expected valid XML Schema dateTime string.', $data));
        }

        return $datetime;
    }
}

