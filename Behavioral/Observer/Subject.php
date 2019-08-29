<?php


namespace DesignPattern\Behavioral\Observer;


use SplObserver;
use SplSubject;
use SplObjectStorage;

class Subject implements SplSubject
{
    /**
     * 用于存储观察者对象
     *
     * @var SplObjectStorage
     */
    private $observerStorage;

    public function __construct()
    {
        $this->observerStorage = new SplObjectStorage();
    }

    /**
     * Attach an SplObserver
     * @link https://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $this->observerStorage->attach($observer);
    }

    /**
     * Detach an observer
     * @link https://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        $this->observerStorage->detach($observer);
    }

    /**
     * Notify an observer
     * @link https://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        foreach ($this->observerStorage as $observer) {
            $observer->update();
        }
    }
}