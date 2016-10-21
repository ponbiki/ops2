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

class NpcCharController extends Controller
{
    /**
     * @Route("/npcchar")
     */
    public function showAction()
    {
        $characteristics = array(
            "Absentminded",
            "Arrogant",
            "Boorish",
            "Chews Something",
            "Clumsy",
            "Curious",
            "Dim-witted",
            "Fiddles and fidgets nervously",
            "Frequently uses the wrong word",
            "Friendly",
            "Irritable",
            "Prone to predictions of certain doom",
            "Pronounced scar",
            "Slurs words, lisps, stutters",
            "Speaks loudly or whispers",
            "Squints",
            "Stares into distance",
            "Suspicious",
            "Uses colorful oaths and exclamations",
            "Uses flowery speech or long words"
        );

        $random_key = array_rand($characteristics, 1);

        return $this->render('npcchar/show.html.twig', [
            'characteristic' => $characteristics[$random_key]
        ]);
    }
}
