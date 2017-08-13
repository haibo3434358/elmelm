<?php

    function getValueName($pid)
    {
        if ($pid == '0') {
            return '顶级分类';
        } else {
            $res = DB::table('elm_cate')->where('cid', $pid)->first();

            return $res->cate_name;
        }
    }