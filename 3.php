<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * 
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
class Person{
	// 成员属性
	public $yan = "眼睛";
	public $bizi = "鼻子";
	public $erduo = "耳朵";
	public $zui = "嘴";
	// 成员方法
	public function eat(){
		return "正在吃饭……";
	}
	public function shui(){
		return "正在睡觉……";
	}
	public function dajia(){
		return "正在打架……";
	}
}
// 实例化一个对象
$obj = new Car();
var_dump($obj);
$obj1 = $obj;
var_dump($obj1);
