<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

/**
 * @author Łukasz Chruściel <lchrusciel@gmail.com>
 */
class AppKernel extends Kernel
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        return array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(function ($container) {
            $container->loadFromExtension('framework', array(
                'test' => null,
                'secret' => 'secret',
                'router' => array(
                    'resource' => '%kernel.root_dir%/config/routing.yml',
                ),
            ));
        });
    }
}