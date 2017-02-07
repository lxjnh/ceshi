<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * 调用成员属性和成员方法
 * 修改成员属性的值
 * 调用成员方法添加参数
 * @author leixiaojie <1258411342@qq.com>
 */
class Car{
	// 成员属性
	public $name = "兰博基尼";
	public $age = "15";
	// 成员方法
	public function biao(){
		return "正在飚……";
	}
	public function pao(){
		return "正在跑……";
	}
}
$obj = new Car();
echo $obj -> name;
$obj -> name = "阿斯顿马丁";
echo "<br />";
echo $obj -> name;
echo $obj -> pao();