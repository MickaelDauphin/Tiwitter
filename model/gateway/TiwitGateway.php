<?php
/**
 * Created by PhpStorm.
 * User: remcr
 * Date: 14/06/2019
 * Time: 17:21
 */

namespace Model\Gateway;

use App\Src\App;

class TiwitGateway
{
    private $conn;

    private  $id;


    private $utilisateurID;

    private $contenu;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return mixed
     */
    public function getUtilisateurID()
    {
        return $this->utilisateurID;
    }

    /**
     * @param mixed $utilisateur
     */
    public function setUtilisateurID($utilisateurID)
    {
        $this->utilisateurID = $utilisateurID;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenue
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function __construct(App $app)
    {
        $this->conn = $app->getService('database')->getConnection();
    }
    public function insert():void{
        $query = $this->conn->prepare('INSERT INTO tiwitter.tiwit ( utilisateurID, contenu) VALUES ( :utilisateurID,:contenu)');
        $executed = $query->execute([
            ':utilisateurID' => $this->utilisateurID,
            ':contenu' => $this->contenu,

        ]);
        if(!$executed) throw new \Error('Insert failed');

        $this->id = $this->conn->lastInsertId();
    }
    public function update():void
    {
        if (!$this->id) throw  new \Error('Instance does not exist in base');

        $query = $this->conn->prepare('UPDATE tiwitter.tiwit SET utilisateurID = :utilisateurID, contenu = :contenu WHERE id = :id');
        $exected = $query->execute([
            ':utilisateurID' => $this->utilisateurID,
            ':contenu' => $this->contenu,
        ]);
        if (!$exected) throw  new \Error('Update failed');
    }

    public function hydrate(array $elements){
        $this->id = $elements['id'];
        $this->utilisateurID = $elements['utilisateurID'];
        $this->contenu = $elements['contenu'];
    }

}