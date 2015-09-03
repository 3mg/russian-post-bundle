<?php
namespace a3mg\RussianPostBundle\Service;

use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\Metadata\PropertyMetadata;
use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Context;
use JMS\Serializer\GenericDeserializationVisitor;

class ArrayDeserializationVisitor extends GenericDeserializationVisitor
{
    public function visitProperty(PropertyMetadata $metadata, $data, Context $context)
    {
        $name = $this->namingStrategy->translateName($metadata);

        if (null !== $data && !is_array($data)) {
            return;
        }

        if (null === $data || ! array_key_exists($name, $data)) {
            return;
        }

        if ( ! $metadata->type) {
            throw new RuntimeException(sprintf('You must define a type for %s::$%s.', $metadata->reflection->class, $metadata->name));
        }

        $v = $data[$name] !== null ? $this->getNavigator()->accept($data[$name], $metadata->type, $context) : null;

        if (null === $metadata->setter) {
            $metadata->reflection->setValue($this->getCurrentObject(), $v);

            return;
        }

        $this->getCurrentObject()->{$metadata->setter}($v);
    }
    
    protected function decode($str)
    {
        return $str;
    }
}
