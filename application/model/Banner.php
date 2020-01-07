<?php
namespace app\model;

use think\Model;

class Banner extends Model {

    public function getBanner(){

        $list = Banner::all(function ($query){
            $query->where('status',1);
        });

        return $list;
    }
}

