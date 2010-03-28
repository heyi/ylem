<?php
include("ylem_fe_cli/ylem.inc");

// 请求返回数据为xml格式，默认为json格式
$ylm = new ylem("xml");

// namespace需要提前申请，test只对测试环境有效
$namespace = "test";
// 卷ID(0)-文件ID(0002w.jpg)
$id = "0-0007w.jpg";

// 删除文件
// remove函数参数含义，参考ylem/ylem.ini中remove函数的定义
$data = $ylm->remove($namespace,$id);

// 显示处理信息
echo $data."\n";

?>
