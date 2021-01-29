<?php
// src/DependencyInjection/ReportMakerExtension.php
namespace vendor\Module\ReportMaker\DependencyInjection;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use vendor\Module\ReportMaker\DocumentRepository;
class ReportMakerExtension extends Extension
{
    function load(array $configs, ContainerBuilder $container)
    {
        $configDir = new FileLocator(__DIR__ . '/../../config');
        // Load the bundle's service declarations
        $loader = new YamlFileLoader($container, $configDir);
        $loader->load('services.yaml');
        // Apply our config schema to the given app's configs
        $schema = new ConfigSchema();
        $options = $this->processConfiguration($schema, $configs);
        // Set our own "storageDir" argument with the app's configs
        $repo = $container->getDefinition(DocumentRepository::class);
        $repo->replaceArgument(0, $options['storageDir']);
    }
}