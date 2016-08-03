<?php
class Booking extends Controller
{
	public function index()
{
	$model = $this->LoadModel('booking_mod');  //loading modle
	$res = $model->all();
	header('Content-type: application/json');
	echo json_encode($res, JSON_PRETTY_PRINT);
}
	public function check()
{
	$model = $this->LoadModel('booking_mod');  //loading modle
	$res = $model->check($_GET['usrname']);
	header('Content-type: application/json');
	echo json_encode($res, JSON_PRETTY_PRINT);
}
	public function book()
{
	$model = $this->LoadModel('booking_mod');  //loading modle
	$res = $model->book($_GET['bklocation'],$_GET['bktype'],$_GET['bkuser'],$_GET['bkdate'],$_GET['bktime']);
	header('Content-type: application/json');
	echo json_encode($res, JSON_PRETTY_PRINT);
}
	public function update()
{
	$model = $this->LoadModel('booking_mod');  //loading modle
	$res = $model->update();
	header('Content-type: application/json');
	echo json_encode($res, JSON_PRETTY_PRINT);
}
	public function delete()
{
	$model = $this->LoadModel('booking_mod');  //loading modle
	$res = $model->delete($_GET['bkid'], $_GET['bkuser']);
	header('Content-type: application/json');
	echo json_encode($res, JSON_PRETTY_PRINT);
}

}
?>