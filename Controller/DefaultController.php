<?php

namespace QAlliance\QSendgridBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QAllianceQSendgridBundle:Default:index.html.twig');
    }
}
