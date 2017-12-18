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
}