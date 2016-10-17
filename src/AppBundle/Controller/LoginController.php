<?php
/**
 * Created by PhpStorm.
 * User: ponbiki
 * Date: 10/13/16
 * Time: 12:55 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    /**
     * @Route("/login")
     */
    public function showAction()
    {
        $text = 'placeholder';
        return $this->render('login/show.html.twig', [
            'placeholder' => $text
        ]);
    }
}