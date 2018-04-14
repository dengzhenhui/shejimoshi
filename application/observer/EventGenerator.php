<?php

/**
 * Created by PhpStorm.
 * User: dzh
 * Date: 2018/4/14
 * Time: 19:25
 */
/**
 * 观察者模式
 * 事件产生着
 */
namespace app\observer;

abstract class EventGenerator
{
    private $observers = [];
    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    //逐个的去通知 各个观察者
    function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }
}