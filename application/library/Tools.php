<?php

/**
 * Created by PhpStorm.
 * User: jaackie
 * Date: 2017/3/11
 * Time: 下午9:39
 */
class Tools
{

    /**
     * 截取字符串，支持中文
     *
     * @param        $str
     * @param        $max_length
     * @param string $suffix
     *
     * @return string
     */
    public static function truncate($str, $max_length, $suffix = '...') {
        if (Tools::strlen($str) <= $max_length)
            return $str;
        $str = utf8_decode($str);

        return (utf8_encode(substr($str, 0, $max_length - Tools::strlen($suffix)) . $suffix));
    }

    /**
     * 计算字符串长度
     *
     * @param        $str
     * @param string $encoding
     *
     * @return bool|int
     */
    public static function strlen($str, $encoding = 'UTF-8') {
        if (is_array($str) || is_object($str))
            return false;
        $str = html_entity_decode($str, ENT_COMPAT, 'UTF-8');
        if (function_exists('mb_strlen'))
            return mb_strlen($str, $encoding);

        return strlen($str);
    }

}