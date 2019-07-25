<?php

namespace Index\Service;

class CompanyService
{
    public static function introduct()
    {
        $data = M()->query("SELECT * FROM about_index WHERE id = 1");
        if (!empty($data) && is_array($data)) {
            $introduct = $data[0]['text'];
            $introduct = $text=iconv("gb2312", "UTF-8", $introduct);
            $introduct = explode('<BR>', $introduct);
        } else{
            $introduct = [];
        }
        return $introduct;
    }

    public static function brief()
    {
        $data = M()->query("SELECT * FROM about WHERE id = 1");
        if (!empty($data) && is_array($data)) {
            $introduct = $data[0]['text'];
            $introduct = $text=iconv("gb2312", "UTF-8", $introduct);
            $introduct = explode('<BR>', $introduct);
        } else{
            $introduct = [];
        }
        return $introduct;
    }

    public static function contact()
    {
        $data = M()->query("SELECT * FROM contact_index WHERE id = 1");
        if (!empty($data) && is_array($data)) {
            $contact = $data[0]['text'];
            $contact = $text=iconv("gb2312", "UTF-8", $contact);
            $contact = explode('<BR>', $contact);
        } else{
            $contact = [];
        }
        return $contact;
    }
}