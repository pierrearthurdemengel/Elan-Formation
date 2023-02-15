<?php
class Compte
{
    private string $libellé;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;
    private float $transfert;


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
        if ($this->solde < 0) 
        {
            $this->solde = 0;
            echo "Retrait impossible : Fonds inssufisants<br>";
        }
    }

    public function depot(float $depot)
    {
        $this->solde += $depot; //ajoute depot de this à solde
    }

    // Débiter le compte de X euros
    public function retrait(float $retrait)
    {
        $this->solde -= $retrait; //soustrait retrait de this à solde
        $this->empecher_neg();
    }

public function transfert(Compte $compteSource, Compte $compteCible, float $montant)
{
    if ($compteSource->getSolde() < $montant) {
        echo "Transfert impossible : fonds insuffisants<br>";
        return;
    }
    $compteSource->retrait($montant);
    $compteCible->depot($montant);
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
    
    // public function addCompte()
    // {
    //     return $this->compte;
    // }
    
    public function __toString()
    {
        return "Libellé du compte : " . $this->libellé . "<br>" .
        "Solde du compte : " . $this->solde . $this->devise . "<br>";
    }
}
?>