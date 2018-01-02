<?php

/**
 * 工具箱（https://www.4ui.cn）
 * 常用功能，不想重复造轮子
 */
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
     *
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

    /**
     * 生成24位唯一订单号码（格式：YYYY-MMDD-HHII-SS-NNNN,NNNN-CC，其中：YYYY=年份，MM=月份，DD=日期，HH=24格式小时，II=分，SS=秒，NNNNNNNN=随机数，CC=检查码）
     */
    public static function build_order_id(){
        // 订购日期
        $order_date = date('Y-m-d');
        
        // 订单号码主体（YYYYMMDDHHIISSNNNNNNNN）
        $order_id_main = date('YmdHis') . rand(10000000, 99999999);
        
        // 订单号码主体长度
        $order_id_len = strlen($order_id_main);
        $order_id_sum = 0;
        
        for($i = 0; $i < $order_id_len; $i++){
            $order_id_sum += (int)(substr($order_id_main, $i, 1));
        }
        
        // 唯一订单号码（YYYYMMDDHHIISSNNNNNNNNCC）
        $order_id = $order_id_main . str_pad((100 - $order_id_sum % 100) % 100, 2, '0', STR_PAD_LEFT);
        
        return $order_id;
    }

    /**
     * 判断微信浏览器
     * @return boolean
     */
    public static function is_weixin_browser(){
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false){
            return true;
        }
        return false;
    }
}