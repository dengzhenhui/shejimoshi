<?php

/**
 * Created by PhpStorm.
 * User: dzh
 * Date: 2018/4/14
 * Time: 17:58
 */
namespace app\strategy;
class FemaleUserS implements Users
{
   function showAd()
   {
       echo  '女装';
   }

   function showCat()
   {
       echo  '女';
   }
}