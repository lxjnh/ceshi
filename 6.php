<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * 实例化一个类
 * @author leixiaojie <1258411342@qq.com>
 */
class Car{
	// 成员属性
	public $name = "布加迪";
	public $age = "15";
	
	// 成员方法
	public function pao(){
		return "正在跑……";
	}
	public function biao(){
		return "正在飚……";
	}
}
// 实例化一个类
$obj = new Car();
// 使用成员属性 不要加$符
echo $obj -> name;
// 调用方法
echo $obj -> pao();
