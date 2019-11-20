<?php

declare(strict_types=1);

namespace Prometee\SyliusGoogleRecaptchaV3Plugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('prometee_sylius_google_recaptcha_v3_plugin');

        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
