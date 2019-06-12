<?php
/**
 * Created by PhpStorm.
 * User: Corentin
 * Date: 29/03/2019
 * Time: 10:08
 */

namespace Controllers;

use App\Src\App;
use App\Src\Request\Request;
use Model\Finder\UserFinder;

class UserController extends ControllerBase
{
    /**
     * @var static String User connected now
     */
    private static $currentConnectedUser;

    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    public function UserHandler(Request $request)
    {
        if (isset($_POST['username']) && isset($_POST['password']))
        {
            $userInfos = [
                'username' => $_POST['username'],
                'password' => $_POST['password']
            ];

            $check = $this->app->getService('userFinder')->VerrifyLogIn($userInfos['username'], $userInfos['password']);

            if ($check == true)
            {
                self::setConnectedUser($userInfos['username']);
                return $this->app->getService('render')('Home', [ 'objectList' => $this->app->getService('objectFinder')->findAllToJson(), 'username' => self::getConnectedUser()]);
            }
            else
                return $this->AccessDenied();

        }
        else
        {
            return $this->AccessDenied();
        }


    }

    private function AccessDenied()
    {
        return $this->app->getService('render')('index', ['accessDenied' => true]);
    }

    public function HomeHandler(Request $request, $id = null)
    {
        if ($id != null)
            $this->app->getService('objectFinder')->ChangeState($this->app->getService('objectFinder')->findOneById($id));

        return $this->app->getService('render')('Home', [ 'objectList' => $this->app->getService('objectFinder')->findAllToJson(), 'username' => self::getConnectedUser()]);
    }

    public function RegisterHandler(Request $request)
    {
        return $this->app->getService('render')('Register');
    }

    public function RegisterDBHandler(Request $request)
    {
        $userInfos = [
            'firstName' => $_POST['firstName'],
            'familyName' => $_POST['familyName'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'email' => $_POST['email']
        ];

        $result = $this->app->getService('userFinder')->CreateUser($userInfos);


        if (!$result)
            return $this->app->getService('render')('Register', ['registered' => false]);
        else
            return $this->app->getService('render')('index', ['registered' => true]);
    }

    
    public static function setConnectedUser($currentConnectedUser)
    {
        self::$currentConnectedUser = $currentConnectedUser;
    }

    public static function getConnectedUser()
    {
        return self::$currentConnectedUser;
    }

}