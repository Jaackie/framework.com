<?php

/**
 * Created by PhpStorm.
 * User: jaackie
 * Date: 2017/10/24
 * Time: 下午6:44
 */
class resultModel extends base_model
{
    protected $__table_name = 'result';

    public function find($id)
    {
        return $this->table()->whereField('id', $id)->getOne();
    }

}