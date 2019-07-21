<?php

namespace Index\Service;

class CategoryService
{
    public static function category()
    {
        $data = M()->query("SELECT * FROM cp1_type WHERE type_state=0 ORDER BY type_index, type_id");
        foreach ($data as &$value) {
            $value['type_name'] = $text=iconv("gb2312", "UTF-8", $value['type_name']);
        }
        return $data;
    }

    public static function halfCategory()
    {
        $data = M()->query("SELECT * FROM cp_type WHERE type_state=0 ORDER BY type_index, type_id");
        foreach ($data as &$value) {
            $value['type_name'] = $text=iconv("gb2312", "UTF-8", $value['type_name']);
        }
        return $data;
    }
}