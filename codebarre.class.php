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
        $elementC[0] = 'XXX__X_';
        $elementC[1] = 'XX__XX_';
        $elementC[2] = 'XX_XX__';
        $elementC[3] = 'X____X_';
        $elementC[4] = 'X_XXX__';
        $elementC[5] = 'X__XXX_';
        $elementC[6] = 'X_X____';
        $elementC[7] = 'X__X___';
        $elementC[8] = 'X__X___';
        $elementC[9] = 'XXX_X__';
    }
}