<?php
/**
 * Created by PhpStorm.
 * User: dzh
 * Date: 2018/4/14
 * Time: 19:30
 */
/**
 * 观察者 要去做什么
 */
namespace app\observer;


interface Observer
{
    function update($event_info = null);
}