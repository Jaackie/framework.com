<?php

/**
 * Created by PhpStorm.
 * User: jaackie
 * Date: 2017/3/11
 * Time: 下午3:48
 */
class IndexController extends base_controller
{
    public function indexAction()
    {
        __d(resultModel::instance()->find(1));
    }

    public function displayAction()
    {
        $this->_view->assign('name', 'Jaackie');
        $this->_view->name = 'Jaackie';
        $this->display('index');
    }
}