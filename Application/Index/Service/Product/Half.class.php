<?php

namespace Index\Service\Product;

class Half extends AbstractProduct
{
    public function index($page, $pageSize, $categoryId = 0)
    {
        if (empty($categoryId)) {
            if ($page == 1) {
                $sql = "SELECT TOP " . $pageSize . " * FROM cp_product ORDER BY product_index, id";
            } else {
                $sql = "SELECT TOP " . $pageSize . " * FROM [select top " . $pageSize * $page . " * from cp_product order by 
                product_index,id]. AS [%$##@_Alias] WHERE id not in (select top " . $pageSize * ($page - 1) . " 
                id from cp_product order by product_index,id) ORDER BY product_index, id";
            }
            $data = M()->query($sql);
        } else {

            if ($page == 1) {
                $sql = "SELECT TOP " . $pageSize . " * FROM cp_product WHERE type_id2 = $categoryId ORDER BY product_index, id";
            } else {
                $sql = "SELECT TOP " . $pageSize . " * FROM [select top " . $pageSize * $page . " * from cp_product WHERE type_id2 = $categoryId order by 
                product_index,id]. AS [%$##@_Alias] WHERE id not in (select top " . $pageSize * ($page - 1) . " 
                id from cp_product WHERE type_id2 = $categoryId order by product_index,id) ORDER BY product_index, id";
            }

            $data = M()->query($sql);
        }
        foreach ($data as &$value) {
            $value['product_name'] = iconv("gb2312", "UTF-8", $value['product_name']);
            $value['picurl1'] = self::PICTURE_HOST . $value['picurl1'];
        }
        return $data;
    }

    public function detail($id)
    {
        $data = M()->query("SELECT * FROM cp_product WHERE id = $id");
        foreach ($data as &$value) {
            $value['product_name'] = $text=iconv("gb2312", "UTF-8", $value['product_name']);
            $value['content'] = iconv("gb2312", "UTF-8", $value['content']);
            $value['picurl1'] = self::PICTURE_HOST . $value['picurl1'];
            $value['content'] = explode('<BR>', $value['content']);
        }
        return !empty($data) ? $data[0] : [];
    }

    public function total($categoryId = 0)
    {
        if (empty($categoryId)) {
            $data = M()->query("SELECT count(*) AS count FROM cp_product");
        } else {
            $data = M()->query("SELECT count(*) AS count FROM cp_product WHERE type_id2 = $categoryId");
        }
        if (is_array($data) && count($data) == 1) {
            return $data[0]['count'];
        }
        return 0;
    }
}