<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * $this 应用
 * 一个类是不是灵活一些,可扩展性
 * @author leixiaojie <1258411342@qq.com>
 */
class Car{
	// 成员属性
	public $name = "布加迪";
	public $age = "15";
	
	// 成员方法
	public function pao(){
		$this -> name = "奔驰";
		return $this->name."正在跑……";
	}
	public function biao(){
		echo $this -> pao();
		return "正在飚……";
	}
}
//实例化一个对象
$obj = new Car();
echo $obj -> biao();