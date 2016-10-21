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

class NpcBondsController extends Controller
{
    /**
     * @var array  List of NPC Bonds
     */
    private $bonds = array(
        "Personal goal or achievement",
        "Family members",
        "Colleagues or companions",
        "Benefactor, patron, or employer",
        "Romantic interest",
        "Special place",
        "Keepsake",
        "Valuable possession",
        "Revenge",
        2
        );

    /**
     * @Route("/npcbonds")
     */
    public function showAction()
    {
        /**
         * @var int Random array key
         */
        $random_key = array_rand($this->bonds, 1);

        /**
         * @var
         */
        $bond_list = $this->bonds[$random_key] === 2 ? $this->doubleDown($this->bonds) : [$this->bonds[$random_key]];

        return $this->render('npcbonds/show.html.twig', [
            'bonds' => $bond_list
        ]);
    }

    /**
     * @param array $bond_list Input list of all bonds
     * @return array $bonded List of selected bonds
     */
    static function doubleDown(array $bond_list)
    {
        $bonded = [];
        array_pop($bond_list);
        $bonded[] = $bond_list[array_rand($bond_list, 1)];
        $bonded[] = $bond_list[array_rand($bond_list, 1)];
        return $bonded;
    }
}
