<?php

namespace ChallengeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChallengeBundle:Default:index.html.twig');
    }
    public function pageAction()
    {
        return $this->render('@Challenge/Default/page_une.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('@Challenge/Layout/layout.html.twig');
    }
    public function layoutBackAction()
    {
        return $this->render('@Challenge/Layout/layoutBack.html.twig');
    }

    public function challengeAction()
    {
        return $this->render('@Challenge/Layout/challenge.html.twig');
    }
    public function registerAction()
    {
        return $this->render('@Challenge/Layout/register.html.twig');
    }
}
