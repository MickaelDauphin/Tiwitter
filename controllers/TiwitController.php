<?php
/**
 * Created by PhpStorm.
 * User: remcr
 * Date: 14/06/2019
 * Time: 17:16
 */

namespace Controllers;

use controllers\ControllerBase;
use app\src\App;
use app\src\request\Request;

class TiwitController extends ControllerBase
{
    public function __construct(App $app)
    {
        parent::__construct($app);
    }
    public function TiwitDBHandler(Request $request){
        $message = $request->getParameters('message');
        $this->app->getService('postFinder')->post($message);
        $followings = $this->app->getService('postFinder')->getFollowings();
        $posts = $this->app->getService('postFinder')->getPostsFromAccounts($followings);
        return $this->render('timeline', ['posts'=>$posts]);
    }

}