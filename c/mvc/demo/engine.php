<?php
/*
 * {lo $data $v}
			<li>{$v}</li>
		{/lo}
*/
//正则
//读取文件内容以字符串的方式读取,   把整个文件读入一个字符串中。
$str=file_get_contents("demo.html");

$preg='/\{lo\s+(\$\w+)\s+(\$\w+)\}([^\{]*)\{(\$\w+)\}([^\{]*)\{\/lo\}/';//指定匹配的规则  \w 匹配任意一个字母数字下划线
preg_match($preg,$str,$arr); //用于进行正则表达式匹配，成功返回 1 ，否则返回 0 。 第一个是php正则表达式  第二个是匹配 的字符串  第三个是存储匹配结果的数组 可有可无
//echo $arr[i];
$result="<?php
 foreach({$arr[1]} as {$arr[2]}){
   echo '{$arr[3]}'.$arr[4].'{$arr[5]}';
 }
?>";
file_put_contents("demo.php",preg_replace($preg,$result,$str)); //把一个字符串写入文件中。

?>