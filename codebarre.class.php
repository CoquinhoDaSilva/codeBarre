<?php

class CodeBarre
{

    public $numero;


    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function dessine()
    {


        $codeBarre = str_split($this->numero);

        $gardecentre = "01010";
        $gardegauche = "101";
        $gardedroite = "101";

        $elementA = [];
        $elementA[0] = "0001101";
        $elementA[1] = "0011001";
        $elementA[2] = "0010011";
        $elementA[3] = "0111101";
        $elementA[4] = "0100011";
        $elementA[5] = "0110001";
        $elementA[6] = "0101111";
        $elementA[7] = "0111011";
        $elementA[8] = "0110111";
        $elementA[9] = "0001011";

        $elementB = [];
        $elementB[0] = "0100111";
        $elementB[1] = "0110011";
        $elementB[2] = "0011011";
        $elementB[3] = "0100001";
        $elementB[4] = "0011101";
        $elementB[5] = "0111001";
        $elementB[6] = "0000101";
        $elementB[7] = "0010001";
        $elementB[8] = "0001001";
        $elementB[9] = "0010111";

        $elementC = [];
        $elementC[0] = '1110010';
        $elementC[1] = '1100110';
        $elementC[2] = '1101100';
        $elementC[3] = '1000010';
        $elementC[4] = '1011100';
        $elementC[5] = '1001110';
        $elementC[6] = '1010000';
        $elementC[7] = '1000100';
        $elementC[8] = '1001000';
        $elementC[9] = '1110100';

        $chaine = $gardegauche;
        for ($i = 0; $i < 4; $i++) {
            $chaine .= $elementA[$codeBarre[$i]];
        }
        $chaine .= $gardecentre;
        for ($i = 4; $i < 8; $i++) {
            $chaine .= $elementC[$codeBarre[$i]];
        }
        $chaine .= $gardedroite;

        $resultat = str_split($chaine);

        foreach ($resultat as $result) {
            if ($result == 0) {
                echo "<div style='background-color:white;width:2px;height:50px;float:left'></div>";
            } else {
                echo "<div style='background-color:black;width:2px;height:50px;float:left'></div>";
            }
        }


    }

    public function affiche()
    {


        $codeBarre = str_split($this->numero);

        $gardecentre = "01010";
        $gardegauche = "101";
        $gardedroite = "101";

        $elementA = [];
        $elementA[0] = "0001101";
        $elementA[1] = "0011001";
        $elementA[2] = "0010011";
        $elementA[3] = "0111101";
        $elementA[4] = "0100011";
        $elementA[5] = "0110001";
        $elementA[6] = "0101111";
        $elementA[7] = "0111011";
        $elementA[8] = "0110111";
        $elementA[9] = "0001011";

        $elementB = [];
        $elementB[0] = "0100111";
        $elementB[1] = "0110011";
        $elementB[2] = "0011011";
        $elementB[3] = "0100001";
        $elementB[4] = "0011101";
        $elementB[5] = "0111001";
        $elementB[6] = "0000101";
        $elementB[7] = "0010001";
        $elementB[8] = "0001001";
        $elementB[9] = "0010111";

        $elementC = [];
        $elementC[0] = '1110010';
        $elementC[1] = '1100110';
        $elementC[2] = '1101100';
        $elementC[3] = '1000010';
        $elementC[4] = '1011100';
        $elementC[5] = '1001110';
        $elementC[6] = '1010000';
        $elementC[7] = '1000100';
        $elementC[8] = '1001000';
        $elementC[9] = '1110100';

        $matrice = [];
        $matrice[0] = "AAAAAA";
        $matrice[1] = "AABABB";
        $matrice[2] = "AABBAB";
        $matrice[3] = "AABBBA";
        $matrice[4] = "ABAABB";
        $matrice[5] = "ABBAAB";
        $matrice[6] = "ABBBAA";
        $matrice[7] = "ABABAB";
        $matrice[8] = "ABABBA";
        $matrice[9] = "ABBABA";

        $chaine = $gardegauche;

        /* ean13
        $elementAB = [];

        $elementAB[
            'A' =>  [
                    '0' => "0001101",
                    '1' => "0011001",
                    '2' => "0010011",
                    '3' => "0111101",
                    '4' => "0100011",
                    '5' => "0110001",
                    '6' => "0101111",
                    '7' => "0111011",
                    '8' => "0110111",
                    '9' => "0001011",
            ]
            'B' => [
                    '0' => "0100111",
                    '1' => "0110011",
                    '2' => "0011011",
                    '3' => "0100001",
                    '4' => "0011101",
                    '5' => "0111001",
                    '6' => "0000101",
                    '7' => "0010001",
                    '8' => "0001001",
                    '9' => "0010111",
            ]
        ]

        $elementAB[str_split($matrice[substr(($this->numero), 0, 1)])][[$codeBarre[$i]];

        $matrice[substr(($this->numero), 0, 1)];
        str_split($matrice[substr(($this->numero), 0, 1)])[1];

        */

        for ($i = 0; $i < 7; $i++) {
            $chaine .= $elementA[$codeBarre[$i]];
        }
        $chaine .= $gardecentre;
        for ($i = 7; $i < 13; $i++) {
            $chaine .= $elementC[$codeBarre[$i]];
        }
        $chaine .= $gardedroite;

        $resultat = str_split($chaine);

        foreach ($resultat as $result) {
            if ($result == 0) {
                echo "<div style='background-color:white;width:2px;height:50px;float:left'></div>";
            } else {
                echo "<div style='background-color:black;width:2px;height:50px;float:left'></div>";
            }
        }


    }
}

