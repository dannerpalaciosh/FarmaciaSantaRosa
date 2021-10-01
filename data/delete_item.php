<?php 
require_once('../class/Item.php');
if(isset($_POST['item_id'])){
	
	if($deletemodal){
		$return['valid'] = true;
		$return['msg'] = "Eliminado Correctamente!";
	}
	echo json_encode($return);
}//end isset
$item->Disconnect();
