<?php
/**
 * Created by PhpStorm.
 * User: ponbiki
 * Date: 10/12/16
 * Time: 2:08 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new Response("I am gonna mess you up");
    }
}