<?php

namespace App\Service;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class UrlService
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public function someMethod()
    {
        $this->router->generate('blog', array(
            'page' => 2,
            'category' => 'Symfony',
        ));
    }
}