<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\{
    RedirectResponse, Request, Response
};
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;

class AuthController
{
    public function showLoginPage(Environment $templating)
    {
        return new Response($templating->render('login_page.html.twig'));
    }


    public function handleLoginRequest(Request $request, UrlGeneratorInterface $urlGenerator)
    {
        $username = $request->get('login');
        $password = $request->get('password');

        if ('user' !== $username || $password !== 'secret') {
            return new RedirectResponse($urlGenerator->generate('login'));
        }

        $request->getSession()->set('username', $username);
        return new RedirectResponse($urlGenerator->generate('index'));
    }
}