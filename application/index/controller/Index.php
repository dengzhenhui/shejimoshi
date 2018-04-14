<?php
namespace app\index\controller;

class Index
{
    protected $strategy;

    function __construct()
    {
        //这一段使用 设计模式 之 策略模式(strategy)
        if(isset($_GET['p'])){
            $strategy = new \app\strategy\FemaleUserS();
        }else{
            $strategy = new \app\strategy\MaleUserS();
        }
        $this->setStrategy($strategy);
    }

    public function index()
    {
        dump($this->strategy);
        $this->strategy->showAd();
        $this->strategy->showCat();
    }

    function setStrategy(\app\strategy\Users $strategy)
    {
        $this->strategy = $strategy;
    }
}


