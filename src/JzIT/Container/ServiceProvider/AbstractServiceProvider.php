<?php

namespace JzIT\Container\ServiceProvider;

use DI\Container;
use JzIT\Kernel\ConfigResolverTrait;
use JzIT\Kernel\FactoryResolverTrait;

abstract class AbstractServiceProvider implements ServiceProviderInterface
{
    use FactoryResolverTrait;
    use ConfigResolverTrait;

    /**
     * @var \DI\Container
     */
    protected $container;

    /**
     * @param \DI\Container $container
     *
     * @return $this|\JzIT\Container\ServiceProvider\ServiceProviderInterface
     */
    public function setContainer(Container $container): ServiceProviderInterface
    {
        $this->container = $container;
        return $this;
    }
}