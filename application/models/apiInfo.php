<?php

/**
 * Created by PhpStorm.
 * User: jaackie
 * Date: 2017/10/24
 * Time: 下午6:44
 */
class apiInfoModel extends base_model
{
    protected $__table_name = 'api_info';

    public function find($id)
    {
        return $this->table()->whereField('api_id', $id)->getOne();
    }

}