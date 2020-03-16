<?php


class CodeBarre
{
    public $gardegauche;
    public $gardedroite;
    public $gardecentre;
    public $elementA;
    public $elementB;
    public $elementC;
    public $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function getCodeBarre() {
        return $this->$numero;
    }

    public function dessine($numero)
    {

        $gardegauche = "X_X";
        $gardedroite = "X_X";
        $gardecentrale = "_X_X_";

        $elementA = [];
        $elementA[0] = "___XX_X";
        $elementA[1] = "__XX__X";
        $elementA[2] = "__X__XX";
        $elementA[3] = "_XXXX_X";
        $elementA[4] = "_X___XX";
        $elementA[5] = "_XX___X";
        $elementA[6] = "_X_XXXX";
        $elementA[7] = "_XXX_XX";
        $elementA[8] = "_XX_XXX";
        $elementA[9] = "___X_XX";

        $elementB = [];
        $elementB[0] = "_X__XXX";
        $elementB[1] = "_XX__XX";
        $elementB[2] = "__XX_XX";
        $elementB[3] = "_X____X";
        $elementB[4] = "__XXX_X";
        $elementB[5] = "_XXX__X";
        $elementB[6] = "____X_X";
        $elementB[7] = "__X___X";
        $elementB[8] = "___X__X";
        $elementB[9] = "__X_XXX";

        $elementC = [];
        $elementC[0] = '1110010';
        $elementC[1] = '1100110';
        $elementC[2] = '1101100';
        $elementC[3] = '1000010';
        $elementC[4] = '1011100';
        $elementC[5] = '1001110';
        $elementC[6] = '1010000';
        $elementC[7] = '100X000';
        $elementC[8] = '1001000';
        $elementC[9] = '1110100';
    }
}
