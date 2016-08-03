<?php

class News_mod extends model
{

public function all()
{
  $res   = $this->Query("SELECT * FROM news");
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

public function select($newsid)
{
  $res   = $this->Query("SELECT * FROM news WHERE news_id=$newsid");
  $row   = $this->fetch($res, PDO::FETCH_ASSOC);
  if ($row) {
      $result = array('status' => '200', 'message' => 'ok', 'data' => $row);
   } else {
      $result = array('status' => '500', 'message' => 'Bad Request', 'data' => $row);
   }
   return $result;
}

public function delete($newsid)
{
  $res   = $this->Query("DELETE FROM `news` WHERE id = $newsid");
  $row   = $this->fetch($res, PDO::FETCH_ASSOC);
  if ($row) {
  $result = array('status' => '200', 'message' => 'ok', 'data' => $row);
  } else {
  $result = array('status' => '500', 'message' => 'Bad Request', 'data' => $row);
  }
  return $result;
}

public function getcmt($newsid)
{
  if ($newsid==0) {
    $sql = sprintf("SELECT * FROM comment");
  } else {
    $sql = sprintf("SELECT * FROM comment WHERE news_id=%s",$newsid);
  }
    $res   = $this->Query($sql);
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

public function postcmt($newsid, $username, $cmtcontent, $cmtdate)
{
  $sql = sprintf("INSERT INTO news (news_id, user_name, comment_content, comment_date) VALUES (%s, %s, %s, %s)", $newsid, $username, $cmtcontent, $cmtdate);
   $res   = $this->Query($sql);
   $row   = $this->fetch($res, PDO::FETCH_ASSOC);
   if ($row) {
      $result = array('status' => '200', 'message' => 'ok', 'data' => $row);
   } else {
      $result = array('status' => '500', 'message' => 'Bad Request', 'data' => $row);
   }
   return $result;
}



}
