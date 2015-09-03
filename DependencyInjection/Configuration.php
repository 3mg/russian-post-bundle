<?php

namespace a3mg\RussianPostBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package a3mg\RussianPostBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('a3mg_russian_post');

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('login')->cannotBeEmpty()->end()
                ->scalarNode('password')->cannotBeEmpty()->end()
                ->scalarNode('wsdl_endpoint')->defaultValue('%a3mg_russian_post.wsdl_endpoint%')->end()

                ->scalarNode('full_name')->defaultTrue()->end()
                ->scalarNode('short_name')->defaultTrue()->end()
                ->scalarNode('fcindex')->defaultTrue()->end()
                ->scalarNode('resp_mail')->defaultTrue()->end()
                ->scalarNode('resp_person')->defaultTrue()->end()
                ->scalarNode('inn')->defaultTrue()->end()
                ->scalarNode('type_users_id')->defaultTrue()->end()
                ->scalarNode('url')->defaultTrue()->end()
            ->end();

        return $treeBuilder;
    }
}
