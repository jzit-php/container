<?php

namespace JzIT\Container\ServiceProvider;

use DI\Container;

interface ServiceProviderInterface
{
    public function register(Container $container);
}