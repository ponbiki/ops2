<?php
/**
 * Created by PhpStorm.
 * User: ponbiki
 * Date: 10/20/16
 * Time: 9:32 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NpcIdealsController extends Controller
{
    /**
     * @Route("/npcideals")
     */
    public function showAction()
    {
        $ideals = array(
            "Aspiration (any)",
            "Charity (good)",
            "Community (lawful)",
            "Creativity (chaotic)",
            "Discovery (any)",
            "Fairness (lawful)",
            "Freedom (chaotic)",
            "Glory (any)",
            "Greater good (good)",
            "Greed (evil)",
            "Honor (lawful)",
            "Independence (chaotic)",
            "Knowledge (neutral)",
            "Life (good)",
            "Live and let live (neutral)",
            "Might (evil)",
            "Nation (any)",
            "People (neutral)",
            "Power (evil)",
            "Redemption (any)"
        );

        $random_key = array_rand($ideals, 1);

        return $this->render('npcideals/show.html.twig', [
            'ideal' => $ideals[$random_key]
        ]);
    }
}
