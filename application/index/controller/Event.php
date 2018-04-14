<?php
namespace app\index\controller;
use app\observer\EventGenerator;

class Event extends EventGenerator
{
    function __construct()
    {
        //添加观察者
        $observer1 = new \app\observer\Observer1();
        $observer2 = new \app\observer\Observer2();
        $this->addObserver($observer1);
        $this->addObserver($observer2);

    }

    public function index()
    {
        echo "事件<br />";
        $this->notify();//通知这些观察者 去做一些事情
    }

}


