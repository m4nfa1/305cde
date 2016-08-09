<?php
class User extends Controller
{
public function index()
{
  $model = $this->LoadModel('user_mod');  //loading modle
  $res = $model->all();
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
  // echo $controlFile;
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
    $request_method = strtolower($_SERVER['REQUEST_METHOD']); 
    switch ($request_method){  
        case 'put':  
            parse_str(file_get_contents('php://input'), $data);  
            $usrname = $data['usrname'];
            $usrpass = $data['usrpass'];
            $usremail = $data['usremail'];
            $usrbday = $data['usrbday'];
            $usrgender = $data['usrgender'];
            break;  
    }
  $res = $model->register($usrname, $usrpass, $usremail, $usrbday, $usrgender);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function update()
{
  $model = $this->LoadModel('user_mod'); //loading modle
  $res = $model->update($_POST['usrname'],$_POST['usrpass'],$_POST['usremail']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function delete()
{
  $model = $this->LoadModel('user_mod'); //loading modle
  $request_method = strtolower($_SERVER['REQUEST_METHOD']); 
    switch ($request_method){  
        case 'delete':  
            parse_str(file_get_contents('php://input'), $data);  
            $usrname = $data['usrname'];
            $usrpass = $data['usrpass'];
            break;  
    }
  $res = $model->delete($usrname,$usrpass);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function type()
{
  $model = $this->LoadModel('user_mod');  //loading modle
  $res = $model->type($_GET['usrtype']);
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
  $res = $model->check($_GET['usrname']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public static function test(){  
    // get our verb 获取动作  
    $request_method = strtolower($_SERVER['REQUEST_METHOD']); 
    $request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));
    switch ($request_method){  
        case 'post':  
            $data = sprintf("SELECT user_id, user_loginname, user_logintime FROM users WHERE user_id=$request[2]");   
            echo $data;
            break; 
        case 'put':  
            parse_str(file_get_contents('php://input'), $data);  
            echo json_decode($data);
            break;  
    }
}

}
