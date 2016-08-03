<?php
class Controller
{
public function Run()
{
$this->Analysis(); //开始解析URL获得请求的控制器和方法
$control = $_GET['c'];
$action = $_GET['a'];
//这里构造出控制器文件的路径
$controlFile = ROOT_PATH . '/controller/' . $control . '.class.php';
if(!file_exists($controlFile)) //如果文件不存在提示错误, 否则引入
{
exit('控制器不存在' . $controlFile);
}
include($controlFile);
$class = ucwords($control); //将控制器名称中的每个单词首字母大写,来当作控制器的类名
if(!class_exists($class)) //判断类是否存在, 如果不存在提示错误
{
exit('为定义的控制器类' . $class);
}
$instance = new $class(); //否则创建实例
if(!method_exists($instance, $action)) //判断实例$instance中是否存在$action方法, 不存在则提示错误
{
exit('不存在的方法' . $action);
}
$instance->$action();
}
/**
* 解析URL获得控制器与方法
*
* @access protected
* @return void
*/
protected function Analysis() {
global $C;
if($C['URL_MODE'] == 1) {
$control = !empty($_GET['c']) ? trim($_GET['c']) : '';
$action = !empty($_GET['a']) ? trim($_GET['a']) : '';
}
else if($C['URL_MODE'] == 2) {
if(isset($_SERVER['PATH_INFO'])) {
$path = trim($_SERVER['PATH_INFO'], '/');
$paths = explode('/', $path);
$control = array_shift($paths);
$action = array_shift($paths);
}
}
$_GET['c'] = $control = !empty($control) ? $control : $C['DEFAULT_CONTROL'];
$_GET['a'] = $action = !empty($action) ? $action : $C['DEFAULT_ACTION'];
}

protected function LoadModel($modelName)
{
  $modelFile = ROOT_PATH . '/model/' . $modelName . '.class.php';   //构造模型文件路径
  !file_exists($modelFile) && exit('模型' . $modelName . '不存在');  //如果模型文件不存在提示错误
  include($modelFile);              //存在, 则引入
  $class = ucwords($modelName);           //获得模型类名
  !class_exists($class) && exit('模型' . $modelName . '未定义');;  //判断是否定义了模型类, 如果没有提示错误
  $model = new $class();             //实例化模型类
  return $model;               //返回实例
}

}
