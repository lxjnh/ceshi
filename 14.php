<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * $this 应用
 * 一个类是不是灵活一些,可扩展性
 * @author leixiaojie <1258411342@qq.com>
 */
class Car{
	// 成员属性
	public $name = "法拉利";
	public $age = "15";
	
	// 成员方法
	public function pao(){
		$this -> name = "宝马";
		return $this->name."正在跑……";
	}
	public function biao(){
		echo $this -> pao(); //调用类中的成员方法
		return "正在飚……";
	}
}
//实例化一个对象
$obj = new Car();
echo $obj -> biao();