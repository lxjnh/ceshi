<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * 实例化一个类
 * 调用类中的成员属和成员方法
 * @author leixiaojie <1258411342@qq.com>
 */
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
// 实例化一个类
$obj = new Person();
// 调用成员属性，不要加$符
// echo $obj -> yan;
// echo $obj -> bizi;
// echo $obj -> erdou;
echo $obj -> zui;
// 调用方法
echo $obj -> eat();

