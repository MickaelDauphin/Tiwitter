<?php
/**
 * Created by PhpStorm.
 * User: remcr
 * Date: 14/06/2019
 * Time: 17:18
 */

namespace Model\Finder;

use model\gateway\PostGateway;
use model\gateway\UserGateway;
use model\finder\FinderInterface;
use app\src\App;

class TiwitFinder implements FinderInterface
{
    public function __construct(App $app) {
        $this->app = $app;
        $this->conn = $this->app->getService('database')->getConnection();
    }
    public function findAll(){}
    public function findOneById($id){}

    public function getPost($id){
        $query = $this->conn->prepare('SELECT id, message, writerId, writingDate FROM post WHERE message like :id'); // Création de la requête + utilisation order by pour ne pas utiliser sort
        $query->execute([':id' => $id]); // Exécution de la requête
        $element = $query->fetchAll(\PDO::FETCH_ASSOC);

        if($element == null) return null;

        $post = new PostGateway($this->app);
        $post->hydrate($element);

        return $post;
    }

    public function post($message)
    {
        $post = new PostGateway($this->app);
        $post->setMessage($message);
        $post->setWriterId($_SESSION['id']);
        $post->insert();
    }
}