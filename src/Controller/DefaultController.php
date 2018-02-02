<?php

namespace App\Controller;

use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @return Response
     *
     * @Route("/{page}")
     */
    public function indexAction($page)
    {
        return new Response(
            '<html><body>Page number: '.$page.'</body></html>'
        );
    }
}