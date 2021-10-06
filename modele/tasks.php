<?php
class Tasks
{
    private $_id;
    private $_date_crea;
    private $_commentaires;
    private $id_demandeur;
    private $id_intervenant;
    private $urgence;
    private $statut;

    function __construct(int $id, $date_crea, $commentaires, int $id_demandeur, int $id_intervenant, $urgence, $statut)
    {
        $this->_id = $id;
        $this->date_crea = $date_crea;
        $this->_commentaires = $commentaires;
        $this->id_demandeur = $id_demandeur;
        $this->id_intervenant = $id_intervenant;
        $this->urgence = $urgence;
        $this->statut = $statut;

    }

    function getTasks()
    {
        $afficher = "SELECT * FROM tasks";

        $stmt = $this->_dbh->prepare($afficher);

        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }
}
