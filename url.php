<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];

for($i=0;$i<=10;$i++)
{
header('Location:https://www.calcatraz.com/calculator/api?c='.$i.'%2B'.$i.'');

}
//header('Location: http://www.nikhilkulkarni.info/');
?>