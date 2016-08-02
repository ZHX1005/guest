<?php
class newClass{
function magic($str){
    //空格
    $str=trim($str);//Trim()删除字符串首尾的空白
    //判断系统是否转译了，转译了则不过滤
    if (!get_magic_quotes_gpc()){//设置是否自动为GPC(get,post,cookie)传来的数据中的\'\"\\加上反斜
        $str=addslashes($str);//增加斜杠语法，使用反斜线引用字符串
    }
    //过滤html
    return htmlspecialchars($str);//把预定义html标签转换为 HTML 实体：
}
}
