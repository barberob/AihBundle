<?php

namespace Aih\AihBundle\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;

class AbstractHapply
{
    public ContainerBagInterface $params;

    public function __construct(ContainerBagInterface $params)
    {
        $this->params = $params;
    }
}