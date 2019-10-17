<?php


namespace DesignPattern\Creational\Singleton;

/**
 * 单例模式
 *
 * Class LoginUser
 * @package DesignPattern\Creational\Singleton
 */
class LoginUser
{
    /**
     * @var LoginUser
     */
    private static $instance;

    /**
     * @var array
     */
    private $userInfo = [];

    /**
     * 禁止外部实例化
     *
     * LoginUser constructor.
     */
    private function __construct()
    {

    }

    /**
     * 禁止克隆
     */
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
    public function getUserInfo() : ?array
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