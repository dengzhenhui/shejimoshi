<?php
/**
 * Created by PhpStorm.
 * User: dzh
 * Date: 2018/4/14
 * Time: 19:45
 */

namespace app\observer;


class Observer2 implements \app\observer\Observer
{
    function update($event_info = null)
    {
        echo 2;
    }
}