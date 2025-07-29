<?php

include('db.php');

if($_POST['loginaction'] == 'yes') {

	$uname = $_POST['uname']; 
	$password = $_POST['psw'];

 	$sql_query = "select count(*) as cntUser, id as user_id, fullname from registration where username='".$uname."' and password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['user_id'] = $row['user_id'];
        header('Location: dashboard.php');
    } else {
        //echo "Invalid username and password";
        //print_r($_SESSION);
	    echo ("<script LANGUAGE='JavaScript'>
	    window.location.href='index.php';
	    window.alert('Invalid username and password');
	    </script>");
    }

    

}



if($_POST['register_action'] == 'yes') {

	//print_r($_POST);

	//Array ( [register_action] => yes [fullname] => fdsfsf [contact] => sfsfsf [dob] => 2022-02-18 [gender] => male [address] => 508, GURUDEV ARCADE, SEC-9, PLOT-7/A, KHANDA COLONY, NEW PANVEL(W) [email] => mamata.lahane@gmail.com [psw] => fdsfsf [username] => dsfs )

	$fullname = $_POST['fullname'];
	$contact = $_POST['contact'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	$username = $_POST['username'];


	$sql = "INSERT INTO registration (fullname, contact, dob, gender, address, email, password, username) VALUES ('".$fullname."', '".$contact."', '".$dob."', '".$gender."', '".$address."', '".$email."', '".$psw."', '".$username."')";
	mysqli_query($con,$sql);

	//header('Location: index.php');

	echo ("<script LANGUAGE='JavaScript'>
	    window.location.href='index.php';
	    window.alert('Registration successful!');
	    </script>");

}

if($_POST['deposite_action'] == 'yes') {

	$user_id = $_SESSION['user_id'];
	$deposite = $_POST['deposite_amount'];
	$comment = $_POST['comment'];
	$cheque_no = $_POST['cheque_no'];

	$sql = "INSERT INTO account (user_id, deposite, comment, cheque_no) VALUES (".$user_id.", ".$deposite.", '".$comment."', '".$cheque_no."')";
	mysqli_query($con,$sql);



	$sql_update = "SELECT sum(deposite)-sum(withdraw) as balance FROM `account` where user_id = ".$user_id;
    $result = mysqli_query($con, $sql_update);
    $row = mysqli_fetch_array($result);
    $balance = 0;
    if(count($row) > 0) {
    	$balance = $row['balance'];
    }


    $q = "SELECT max(id) as recent_id FROM `account` WHERE user_id = ".$user_id;
    $res = mysqli_query($con,$q);
    $row = mysqli_fetch_array($res);
    if(count($row) > 0) {
        $recent_id = $row['recent_id'];
    }


    $sql_update = "UPDATE account set balance=".$balance." WHERE id = ".$recent_id;
	mysqli_query($con,$sql_update);

	echo ("<script LANGUAGE='JavaScript'>
	    window.alert('Amount deposite successful!');
	    window.location.href='deposite.php';
	    </script>");

}


if($_POST['withdraw_action'] == 'yes') {

	$user_id = $_SESSION['user_id'];
	$withdraw = $_POST['withdraw_amount'];
	$comment = $_POST['comment'];
	$cheque_no = $_POST['cheque_no'];

	$sql = "INSERT INTO account (user_id, withdraw, comment, cheque_no) VALUES (".$user_id.", ".$withdraw.", '".$comment."', '".$cheque_no."')";
	mysqli_query($con,$sql);



	$sql_update = "SELECT sum(deposite)-sum(withdraw) as balance FROM `account` where user_id = ".$user_id;
    $result = mysqli_query($con, $sql_update);
    $row = mysqli_fetch_array($result);
    $balance = 0;
    if(count($row) > 0) {
    	$balance = $row['balance'];
    }


    $q = "SELECT max(id) as recent_id FROM `account` WHERE user_id = ".$user_id;
    $res = mysqli_query($con,$q);
    $row = mysqli_fetch_array($res);
    if(count($row) > 0) {
        $recent_id = $row['recent_id'];
    }


    $sql_update = "UPDATE account set balance=".$balance." WHERE id = ".$recent_id;
	mysqli_query($con,$sql_update);

	echo ("<script LANGUAGE='JavaScript'>
	    window.alert('Amount withdraw successful!');
	    window.location.href='withdraw.php';
	    </script>");

}



?>