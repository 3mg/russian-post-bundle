<?php

namespace a3mg\RussianPostBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class a3mgRussianPostExtension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $apiDefinition = $container->getDefinition("a3mg_russian_post.russian_post_api");
        $apiDefinition->replaceArgument(0, $config['login']);
        $apiDefinition->replaceArgument(1, $config['password']);
        $apiDefinition->replaceArgument(2, $config['wsdl_endpoint']);
    }
    
    public function prepend(ContainerBuilder $container)
    {
        // get all bundles
        $bundles = $container->getParameter('kernel.bundles');
        
        // determine if JMSSerializerBundle is registered
        if (isset($bundles['JMSSerializerBundle'])) {
            $config = array(
                'metadata' => array (
                    'directories' => array (
                        'a3mg_russian_post' => array (
                            'namespace_prefix' => 'a3mg\RussianPostBundle',
                            'path' => '@a3mgRussianPostBundle/Resources/config/serializer', 
                        )
                    )
                )
            );

            foreach ($container->getExtensions() as $name => $extension) {
                switch ($name) {
                    case 'jms_serializer':
                        $container->prependExtensionConfig($name, $config);
                        break;
                }
            }
        }
    }
}
