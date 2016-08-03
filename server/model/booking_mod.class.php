<?php
class Booking_mod extends model
{

public function all()
{
  $res   = $this->Query("SELECT * FROM booking");
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

public function check($usrname)
{
  $res   = $this->Query("SELECT * FROM booking WHERE booking_user='$usrname'");
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

public function book($bklocation, $bktype, $bkuser, $bkdate, $bktime)
{
  $sql = sprintf("INSERT INTO booking(booking_name,booking_location,booking_type,booking_user,booking_date,booking_time) VALUES ('%s','%s','%s','%s','%s','%s')", $bklocation,$bklocation,$bktype,$bkuser,$bkdate,$bktime);
  $res  = $this->Query($sql);
  if ($res) {
       return array('status' => '200', 'message' => 'booking success', 'data' => $res);
   } else {
      return array('status' => '404', 'message' => 'booking error', 'data' => $res);
   }
}

public function delete($bkid, $bkuser)
{
  $sql = sprintf("DELETE FROM booking WHERE booking_id='%s' AND booking_user='%s'", $bkid, $bkuser);
  $res = $this->Query($sql);
  if ($res) {      
    $result = array('status' => '200', 'message' => 'ok', 'data' => $res);
   } else {
    $result = array('status' => '500', 'message' => 'Bad Request', 'data' => $res);
   }
   return $result;
}

}