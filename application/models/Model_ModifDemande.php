<?php
class Model_ModifDemande extends CI_Model
{
    public function ModifierDemande()
    {
        $sql = $this->db->query('UPDATE demande
                                SET descriptionDemande="'.$_POST["descDemande"].'",
                                    idService='.$_POST["idService"].'
                                WHERE idDemande='.$_POST["idDemande"].' AND idUser='.$this->session->idUser);
    }
}
?>