<?php
$pdo = new PDO('mysql:dbname=palpx_vcpluss;user=root;host=localhost;port=3306');
$oper = $_REQUEST['oper'];        
                                          /*DB Connect*/
if($oper == "patient") 
{
	$output = array("dbStatus" => "","dbMessage" => "");
	$first_name =isset( $_POST['first_name'])?$_POST['first_name']:'';
	$last_name = isset( $_POST['last_name'])?$_POST['last_name']:'';
	$contact = isset( $_POST['phone'])?$_POST['phone']:'';
	$email = isset( $_POST['email'])?$_POST['email']:'';

	$stmt = $pdo->prepare("SELECT * FROM registration where email= :email");
	$stmt->execute(['email' => $email]); 
	$data = $stmt->fetchAll();
	if(count($data) > 1){
        $dbStatus = "FAILURE";
        $dbMessage = "Data already exists..";
        $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);  
	}
    else{
        $query = "insert into registration(first_name,last_name,phone,email,status,created_by) values(:first_name,:last_name,:contact,:email,:status,:created_by)";
        $res = $pdo->prepare($query);
        $status = 1;
        if ($res) {
            $res->bindParam(":first_name",$first_name);
            $res->bindParam(":last_name",$last_name);
            $res->bindParam(":contact",$contact);
            $res->bindParam(":email",$email);
            $res->bindParam(":status",$status);
            $res->bindParam(":created_by",$email);
        }
        if ($res->execute()) {
            $dbStatus = "SUCCESS";
            $dbMessage = "Thank You! For joining us..";
            $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
        } else {
            $dbStatus = "FAILURE";
            $dbMessage ="Data already exists..";
            $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
            }
    }
       
    $pdo = NULL;
    echo json_encode($output);                       
}else if($oper == "provider")
{
	$output = array("dbStatus" => "","dbMessage" => "");
	$first_name =isset( $_POST['first_name'])?$_POST['first_name']:'';
	$last_name = isset( $_POST['last_name'])?$_POST['last_name']:'';
	$contact = isset( $_POST['phone'])?$_POST['phone']:'';
	$email = isset( $_POST['email'])?$_POST['email']:'';
    $city = isset( $_POST['city'])?$_POST['city']:'';
    $country = isset( $_POST['country'])?$_POST['country']:'';
    $specialty = isset( $_POST['specialty'])?$_POST['specialty']:'';
    $licence = isset( $_POST['licence'])?$_POST['licence']:'';
    $message = isset( $_POST['message'])?$_POST['message']:'';

	$stmt = $pdo->prepare("SELECT * FROM providers where email= :email");
	$stmt->execute(['email' => $email]); 
	$data = $stmt->fetchAll();
	if(count($data) > 1){
        $dbStatus = "FAILURE";
        $dbMessage = "You are already a member..";
        $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage); 
	}

    else{
        $query = "insert into providers(first_name,last_name,phone,email,city,country,specialty,licence,message,status,created_by) values(:first_name,:last_name,:contact,:email,:city,:country,:specialty,:licence,:message,:status,:created_by)";
        $res = $pdo->prepare($query);
        $status = 1;
        if ($res) {
            $res->bindParam(":first_name",$first_name);
            $res->bindParam(":last_name",$last_name);
            $res->bindParam(":contact",$contact);
            $res->bindParam(":email",$email);
            $res->bindParam(":city",$city);
            $res->bindParam(":country",$country);
            $res->bindParam(":specialty",$specialty);
            $res->bindParam(":licence",$licence);            
            $res->bindParam(":message",$message);
            $res->bindParam(":status",$status);
            $res->bindParam(":created_by",$email);
        }
        if ($res->execute()) {
            $dbStatus = "SUCCESS";
            $dbMessage = "Thank You!! You are sucessfully registered..";
            $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
        } else {
            $dbStatus = "FAILURE";
            $dbMessage ="You are already a member..";
            $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
        }
    }
       
    $pdo = NULL;
    echo json_encode($output);                       
}
else if($oper == "pharmacy")
{
	$output = array("dbStatus" => "","dbMessage" => "");
	$first_name =isset( $_POST['first_name'])?$_POST['first_name']:'';
	$last_name = isset( $_POST['last_name'])?$_POST['last_name']:'';
	$contact = isset( $_POST['phone'])?$_POST['phone']:'';
	$email = isset( $_POST['email'])?$_POST['email']:'';
    $city = isset( $_POST['city'])?$_POST['city']:'';
    $country = isset( $_POST['country'])?$_POST['country']:'';
    $address = isset( $_POST['address'])?$_POST['address']:'';
    $message = isset( $_POST['message'])?$_POST['message']:'';

	$stmt = $pdo->prepare("SELECT * FROM pharmacies where email= :email");
	$stmt->execute(['email' => $email]); 
	$data = $stmt->fetchAll();
	if(count($data) > 1){
        $dbStatus = "FAILURE";
        $dbMessage = "Your pharmacy details are already registered..";
        $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);  
	}
    else{
        $query = "insert into pharmacies(first_name,last_name,phone,email,city,country,address,message,status,created_by) values(:first_name,:last_name,:contact,:email,:city,:country,:address,:message,:status,:created_by)";
        $res = $pdo->prepare($query);
        $status = 1;
        if ($res) {
            $res->bindParam(":first_name",$first_name);
            $res->bindParam(":last_name",$last_name);
            $res->bindParam(":contact",$contact);
            $res->bindParam(":email",$email);
            $res->bindParam(":city",$city);
            $res->bindParam(":country",$country);
            $res->bindParam(":address",$address);            
            $res->bindParam(":message",$message);
            $res->bindParam(":status",$status);
            $res->bindParam(":created_by",$email);
        }
        if ($res->execute()) {
            $dbStatus = "SUCCESS";
            $dbMessage = "Thank You!! You are sucessfully registered..";
            $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
        } else {
            $dbStatus = "FAILURE";
            $dbMessage ="Your pharmacy details are already registered..";
            $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
            }
    }
       
    $pdo = NULL;
    echo json_encode($output);                       
} 	
else if($oper == "contactus")
{
	$output = array("dbStatus" => "","dbMessage" => "");
	$first_name =isset( $_POST['first_name'])?$_POST['first_name']:'';
	$last_name = isset( $_POST['last_name'])?$_POST['last_name']:'';
	$contact = isset( $_POST['phone'])?$_POST['phone']:'';
	$email = isset( $_POST['email'])?$_POST['email']:'';
    $city = isset( $_POST['city'])?$_POST['city']:'';
    $country = isset( $_POST['country'])?$_POST['country']:'';
    $message = isset( $_POST['message'])?$_POST['message']:'';

	$stmt = $pdo->prepare("SELECT * FROM contactus where email= :email");
	$stmt->execute(['email' => $email]); 
	$data = $stmt->fetchAll();
	if(count($data) > 30){
        $dbStatus = "FAILURE";
        $dbMessage = "Already have a lot queries..";
        $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);  
	}
    else{
        $query = "insert into contactus(first_name,last_name,phone,email,city,country,message,status,created_by) values(:first_name,:last_name,:contact,:email,:city,:country,:message,:status,:created_by)";
        $res = $pdo->prepare($query);
        $status = 1;
        if ($res) {
            $res->bindParam(":first_name",$first_name);
            $res->bindParam(":last_name",$last_name);
            $res->bindParam(":contact",$contact);
            $res->bindParam(":email",$email);
            $res->bindParam(":city",$city);
            $res->bindParam(":country",$country);          
            $res->bindParam(":message",$message);
            $res->bindParam(":status",$status);
            $res->bindParam(":created_by",$email);
        }
        if ($res->execute()) {
            $dbStatus = "SUCCESS";
            $dbMessage = "Thank You..!! ";
            $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
        } else {
            $dbStatus = "FAILURE";
            $dbMessage ="Error.. Try after sometimes..";
            $output = array("dbStatus" => $dbStatus,"dbMessage" => $dbMessage);
            }
    }
       
    $pdo = NULL;
    echo json_encode($output);                       
}
else if($oper == "country")
{
	$output = array("aaData" => array(),"dbStatus" => "");

    $query = "SELECT id,name,iso3 FROM countries ORDER BY id";
	$res = $pdo->prepare($query);
	$slno =1;
	if($res->execute())
	{
        $dbStatus = "SUCCESS";
        $output = array("dbStatus" => $dbStatus);		
	    $result = $res->fetchAll();
	    foreach($result as $row){
			array_unshift($row,$slno);
			$output['aaData'][] = $row;
			$slno++;
		}
		
	}
	$pdo = NULL;
	echo json_encode($output);                  
}
?>