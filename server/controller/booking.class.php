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
	  $request_method = strtolower($_SERVER['REQUEST_METHOD']); 
    switch ($request_method){  
        case 'put':  
            parse_str(file_get_contents('php://input'), $data);  
            $bklocation = $data['bklocation'];
            $bktype = $data['bktype'];
            $bkuser = $data['bkuser'];
            $bkdate = $data['bkdate'];
            $bktime = $data['bktime'];
            break;  
    }
	$res = $model->book($bklocation,$bktype,$bkuser,$bkdate,$bktime);
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

	  $request_method = strtolower($_SERVER['REQUEST_METHOD']); 
    switch ($request_method){  
        case 'delete':  
            parse_str(file_get_contents('php://input'), $data);  
            $bkid = $data['bkid'];
            $bkuser = $data['bkuser'];
            break;  
    }

	$res = $model->delete($bkid, $bkuser);
	header('Content-type: application/json');
	echo json_encode($res, JSON_PRETTY_PRINT);
}

}
?>