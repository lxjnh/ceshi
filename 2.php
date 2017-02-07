<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * @author leixiaojie <1258411342@qq.com>
 */
class Car{
	// 成员属性
	public $name = "特斯拉";
	
	public $age = "25";
	
	// 成员方法
	public function pao(){
		return "正在跑……";
	}
	public function biao(){
		return "正在飚……";
	}
}
class Person{
	// 成员属性
	public $yan = "眼睛";
	public $bizi = "鼻子";
	public $erdou = "耳朵";
	public $zui = "嘴";
	
	// 成员方法
	public function eat(){
		return "正在吃饭……";
	}
	public function shui(){
		return "正在睡觉……";
	}
	public function dadoudou(){
		return "正在打豆豆……";
	}
}
// 实例化一个对象
$obj = new Car();
var_dump($obj);
$obj1 = $obj;
var_dump($obj1);

