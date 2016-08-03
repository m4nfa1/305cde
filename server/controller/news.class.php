<?php
class News extends Controller
{
public function index()
{
  $model = $this->LoadModel('news_mod');  //loading modle
  $res = $model->all();
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
public function select()
{
  $model = $this->LoadModel('news_mod');  //loading modle
  $res = $model->select($_GET['newsid']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
	public function getcomment()
{
  $model = $this->LoadModel('news_mod');  //loading modle
  $res = $model->getcmt($_GET['newsid']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
	public function postcomment()
{
  $model = $this->LoadModel('news_mod');  //loading modle
  $res = $model->postcmt($_GET['newsid'], $_GET['user'], $_GET['content'], $_GET['date']);
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
	public function update()
{
  $model = $this->LoadModel('news_mod');  //loading modle
  $res = $model->update();
  header('Content-type: application/json');
  echo json_encode($res, JSON_PRETTY_PRINT);
}
	public function delete()
{
  $model = $this->LoadModel('news_mod');  //loading modle
  $res = $model->delete();
    header('Content-type: application/json');

  echo json_encode($res, JSON_PRETTY_PRINT);
}
}
?>