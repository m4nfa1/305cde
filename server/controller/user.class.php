<?php
class User extends Controller
{
public function index()
{
  $model = $this->LoadModel('user_mod');  //loading modle
  $res = $model->all();
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function login()
{
  $model = $this->LoadModel('user_mod'); //loading modle
  $res = $model->login($_POST['usrname'], $_POST['usrpass']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function register()
{
  $model = $this->LoadModel('user_mod');  //loading modle
  $res = $model->register($_POST['usrname'],$_POST['usrpass'],$_POST['usremail'],$_POST['usrbday'],$_POST['usrgender']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function update()
{
  $model = $this->LoadModel('user_mod'); //loading modle
  $res = $model->update($_GET['usrname'],$_GET['usrpass'],$_GET['usremail']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function delete()
{
  $model = $this->LoadModel('user_mod'); //loading modle
  $res = $model->delete($_GET['usrname'],$_GET['usrpass']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function type()
{
  $model = $this->LoadModel('user_mod');  //loading modle
  $res = $model->type($_POST['usrtype']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function count()
{
  $model = $this->LoadModel('user_mod');  //loading modle
  $res = $model->count();
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function emailcheck()
{
  $model = $this->LoadModel('user_mod');  //loading modle
  $res = $model->emailcheck($_GET['usrid'],$_GET['emailkey']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function check()
{
  $model = $this->LoadModel('user_mod');  //loading modle
  $res = $model->check($_POST['usrname']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}

}
