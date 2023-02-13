<?php
class compte
{
    private string $libellé;
    private int $solde;
    private string $devise;
    private string $titulaire;


    public function __construct($libellé, $solde, $devise, $titulaire)
    { //initialisation
        $this->libellé = $libellé;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);

    }

    // Créditer le compte de X euros
    private function empecher_neg()
    {
        if ($this->solde < 0) {
            $this->solde = 0;
            echo "Retrait impossible : Fonds inssufisants<br>";
        }
    }

    public function depot($depot)
    {
        $this->solde += $depot; //ajoute depot de this à solde
        $this->empecher_neg();
        var_dump($this->solde);
    }

    // Débiter le compte de X euros
    public function retrait($retrait)
    {
        $this->solde -= $retrait; //soustrait retrait de this à solde
        $this->empecher_neg();
        var_dump($this->solde);
    }


    // Getters
    public function getLibellé()
    {
        return $this->libellé;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function getDevise()
    {
        return $this->devise;
    }

    public function getTitulaire()
    {
        return $this->titulaire;
    }


    public function __toString()
    {
        return "Libellé du compte : " . $this->libellé . "<br>" .
            "Solde du compte : " . $this->solde . $this->devise . "<br>
            Compte de " . $this->titulaire;
    }
}
?>