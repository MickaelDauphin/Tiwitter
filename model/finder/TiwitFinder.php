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
}