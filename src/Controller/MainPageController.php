<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class MainPageController
{
    public function index(Environment $templating)
    {
        return new Response($templating->render('main_page.html.twig'));
    }
}
