<?php
class User_mod extends model
{

public function all()
{
  $res   = $this->Query("SELECT user_id, user_loginname, user_logintime FROM users");
  while ($row   = $this->fetch($res, PDO::FETCH_ASSOC)) {
  $ans[] = $row;
  }
  if ($ans) {
  $result = array('status' => '200', 'message' => 'ok', 'data' => $ans);
  } else {
  $result = array('status' => '500', 'message' => 'Bad Request', 'data' => $ans);
  }
  return $result;
}

public function type($usrtype)
{
  $res   = $this->Query("SELECT * FROM users WHERE user_type='$usrtype'");
  while ($row   = $this->fetch($res, PDO::FETCH_ASSOC)) {
  $ans[] = $row;
  }
  if ($ans) {
  $result = array('status' => '200', 'message' => 'ok', 'data' => $ans);
  } else {
  $result = array('status' => '500', 'message' => 'Bad Request', 'data' => $usrtype);
  }
  return $result;
}

public function count()
{
  $res   = $this->Query("SELECT count(*) FROM users");
  $row   = $this->fetch($res, PDO::FETCH_ASSOC);
  if ($row) {
  $result = array('status' => '200', 'message' => 'ok', 'data' => $row);
  } else {
  $result = array('status' => '500', 'message' => 'Bad Request', 'data' => $row);
  }
  return $result;
}

public function login($usrname, $usrpass)
{
  $md5pass = md5($usrpass);
  $sql = sprintf("SELECT user_id, user_loginname, user_logintime FROM users WHERE user_loginname='%s' AND user_password='%s'", $usrname, $md5pass);
  $res   = $this->Query($sql);
  $row   = $this->fetch($res, PDO::FETCH_ASSOC);
  if ($row) {
  $result = array('status' => '200', 'message' => 'logged', 'data' => $row);
  } else {
  $result = array('status' => '404', 'message' => 'No User', 'data' => $row);
  }
  return $result;
}

public function delete($usrname, $usrpass)
{
  $sql = sprintf("DELETE FROM users WHERE user_loginname='%s' AND user_password='%s'", $usrname, $usrpass);
  $res   = $this->Query($sql);
  if ($res) {
  $result = array('status' => '200', 'message' => 'Delete success', 'data' => $res);
  } else {
  $result = array('status' => '500', 'message' => 'Bad Request', 'data' => $res);
  }
  return $result;
}

public function register($usrname, $usrpass, $usremail, $usrbday, $usrgender)
{
  if ($usrname == ''){
    return array('status' => '500', 'message' => 'Bad Request', 'data' => 'null');
  } else {
  $md5pass = md5($usrpass);
  date_default_timezone_set('UTC');
  $today = getdate();
  $day = $today[mday];
  $mon = $today[mon];
  $year = $today[year];
  $create = "$year-$mon-$day";
	$sql = sprintf("INSERT INTO users(user_status,user_type,user_createtime,user_loginname,user_password,user_email,user_emailkey,user_birthday,user_gender,user_logintime) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", 'notactive','user',$create,$usrname,$md5pass,$usremail,'emailkey',$usrbday,$usrgender,$create);
  $res   = $this->Query($sql);
   if ($res) {
  $result = array('status' => '200', 'message' => 'OK', 'data' => $res);
  } else {
  $result = array('status' => '500', 'message' => 'Error', 'data' => $res);
  }
  return $result;
}
}

public function emailcheck($usrid, $emailkey)
{
  $sql = sprintf("SELECT * FROM users WHERE user_id='%s' AND user_emailkey='%s'", $usrid, $emailkey);
  $res = $this->Query($sql);
  $row   = $this->fetch($res, PDO::FETCH_ASSOC);
  if($row){
     $result = $this->Query("UPDATE users SET user_status='ckeched' WHERE user_id=$usrid");
     return array('status' => '200', 'message' => 'ok', 'result' => $result);;
  } else {
     return array('status' => '500', 'message' => 'Bad Request', 'result' => $result);;
  }

}

public function check($usrname)
{
  if ($usrname == ''){
    return array('status' => '500', 'message' => 'Bad Request', 'data' => 'null');
  } else {
  $res   = $this->Query("SELECT * FROM users WHERE user_loginname = '$usrname'");
  $row   = $this->fetch($res, PDO::FETCH_ASSOC);
  if ($row) {
  $result = array('status' => '200', 'message' => 'ok', 'data' => $row);
  } else {
  $result = array('status' => '404', 'message' => 'Not found', 'data' => $row);
  }
  return $result;
}
}


public function update($usrname, $usrpass, $usremail)
{
  $md5pass = md5($usrpass);
  $sql = sprintf("UPDATE users SET user_password='%s', user_email='%s' WHERE user_loginname='%s'", $md5pass, $usremail, $usrname);
  $res = $this->Query($sql);
  if($res){
     return array('status' => '200', 'message' => 'Updated', 'data' => $res);
  } else {
     return array('status' => '500', 'message' => 'Not success', 'data' => $res);
  }

}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

}
