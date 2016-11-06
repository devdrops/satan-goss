<?php

namespace SatanGoss\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @author Davi Marcondes Moreira (@devdrops) <davi.marcondes.moreira@gmail.com>
 */
class IndexController
{
    public function indexAction(Request $request, Application $app)
    {
        return new JsonResponse(['whois' => 'THE MIGHTY SATAN GOSS']);
    }
}
