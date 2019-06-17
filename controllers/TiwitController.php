<?php
/**
 * Created by PhpStorm.
 * User: remcr
 * Date: 14/06/2019
 * Time: 17:16
 */

namespace Controllers;


use app\src\App;
use app\src\request\Request;
use Model\Finder\TiwitFinder;
use Model\Gateway\TiwitGateway;

class TiwitController extends ControllerBase
{

    public function __construct(App $app)
    {
        parent::__construct($app);
    }
    public function TiwitDBHandler(Request $request){
        $tiwits = [
            'contenu' => $request->getParameters('tiwit'),
            'utilisateurID' => $_SESSION['user']['id'],

        ];
        $result = $this->app->getService('tiwitFinder')->createTiwit($tiwits);

        if (!$result)
            /*return $this->app->getService('render')('Home', ['registered' => false);*/
            $this->app->getService('redirect')('/home');
       else
           $this->app->getService('redirect')('/home');
            /*return $this->app->getService('render')('Home'/*, ['registered' => true]);*/

}

}