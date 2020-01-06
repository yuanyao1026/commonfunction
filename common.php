<?php
// 公共文件


if(!function_exists('get13TimeStamp')){
    /**
     * 获取13位时间戳
     * @return int
     */
    function get13TimeStamp()
    {
        list($t1,$t2) = explode(' ',microtime());

        $t = ceil(($t1 + $t2) * 1000);

        return $t;
    }
}


if (!function_exists('dp')) {

    /**
     * 断点打印
     * @param areay $array 打印的数据
     * @return mixed
     */
    function dp($array)
    {
        echo "<pre>";
        var_dump($array);
        die();
    }
}
