<?php


namespace DesignPattern\Creational\Singleton;


class LoginUser
{
    /**
     * @var
     */
    private static $instance;

    /**
     * @var
     */
    private $userInfo;

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    /**
     * @return mixed
     */
    public static function getInstance() : LoginUser
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }

    /**
     * @param mixed $userInfo
     */
    public function setUserInfo($userInfo): void
    {
        $this->userInfo = $userInfo;
    }
}