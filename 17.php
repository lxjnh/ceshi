<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 构造方法和析构方法 
 * 一个类是不是灵活一些,可扩展性
 * 构造方法 __construct() 类在实例化一个对象的时候会自动调用构造方法
 * @author leixiaojie <1258411342@qq.com>
 */
class Dog{
	public $name = "藏獒";
	public $age = "20";
	// 构造方法 初始化 __construct()
	public function __construct(){
		echo "我想养一只狗";
	}
	// 吃的方法
	public function eat(){
		return $this -> name."正在吃……";
	}
	// 析构方法
	public function __destruct(){
		echo "对象已不用";
	}
}
$zangao = new Dog;
echo $zangao -> eat();
