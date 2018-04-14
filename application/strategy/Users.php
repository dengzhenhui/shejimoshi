<?php
/**
 * Created by PhpStorm.
 * User: dzh
 * Date: 2018/4/14
 * Time: 17:54
 */
/**
 * 策略模式接口
 */
 namespace app\strategy;

interface Users{
    function showAd();
    function showCat();
}