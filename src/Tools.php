<?php

namespace wxkxklmyt;

class Tools{

    /**
     * 内容原样输出
     *
     * @param string|array $str 打印内容
     * @param string $exit 退出程序
     * @return string
     */
    public static function pre($str = '', $exit = false){
        // 用html代码pre标签包裹
        echo '<pre>';
        print_r($str);
        echo '<pre>';
        
        if($exit === true){
            exit();
        }
    }

    /**
     * 浏览器console控制台输出
     * @param string $str 内容
     */
    public static function console_log($str = ''){
        if(empty($str)){
            exit('浏览器console输出不能为空');
        }
        
        if(is_array($str) || is_object($str)){
            $str = json_encode($str, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
        
        echo "<script>console.log('$str');</script>";
    }
}