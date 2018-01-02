<h3>工具箱</h3>
<ul>
	<li>pre($str = '', $exit = false)【原样输出】</li>
	<li>console_log($str = '')【浏览器console控制台输出】</li>
	<li>build_order_id()【生成24位唯一订单号码（格式：YYYY-MMDD-HHII-SS-NNNN,NNNN-CC，其中：YYYY=年份，MM=月份，DD=日期，HH=24格式小时，II=分，SS=秒，NNNNNNNN=随机数，CC=检查码】</li>
	<li>is_weixin_browser()【判断微信浏览器】</li>
	<li>check_id_card($card = '')【校验身份证号码格式：$card = '18位身份证号码'】</li>
	<li>id_card_15to18($card = '')【身份证号码15位升18位：$card = '15位身份证号码'】</li>
</ul>
<h3>composer安装</h3>
<pre>
composer require wxkxklmyt/tools
</pre>