<?php
// src/DependencyInjection/ConfigSchema.php
namespace vendor\Module\ReportMaker\DependencyInjection;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
class ConfigSchema implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('report-maker');

        $rootNode = $treeBuilder->getRootNode();
        $treeBuilder->getRootNode()
            ->fixXmlConfig('storage')
            ->children()
            ->scalarNode('storageDir')->isRequired()->end()
            ->end();
        return $treeBuilder;
    }
}