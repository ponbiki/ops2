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

class NameGenController extends Controller
{
    /**
     * @Route("/namegen")
     */
    public function showAction()
    {
        $beginning = array(
            "A",
            "Be",
            "De",
            "El",
            "Fa",
            "Jo",
            "Ki",
            "La",
            "Ma",
            "Na",
            "O",
            "Pa",
            "Re",
            "Si",
            "Ta",
            "Va"
        );

        $middle = array(
            "bar",
            "ched",
            "dell",
            "far",
            "gran",
            "hal",
            "jen",
            "kel",
            "lim",
            "mor",
            "net",
            "penn",
            "quil",
            "rond",
            "sark",
            "shen",
            "tur",
            "vash",
            "yor",
            "zen"
        );

        $end = array(
            "a",
            "ac",
            "ai",
            "al",
            "am",
            "an",
            "ar",
            "ea",
            "el",
            "er",
            "ess",
            "ett",
            "ic",
            "id",
            "il",
            "in",
            "is",
            "or",
            "us"
        );

        $random_key0 = array_rand($beginning, 1);
        $random_key1 = array_rand($middle, 1);
        $random_key2 = array_rand($end, 1);

        return $this->render('namegen/show.html.twig', [
            'name' => $beginning[$random_key0].$middle[$random_key1].
                $end[$random_key2]
        ]);
    }
}
