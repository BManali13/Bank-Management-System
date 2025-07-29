<?php

/* Database credentials. Assuming you are running MySQL*/
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "banksystem"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


// Turn off error reporting
error_reporting(0);


//get userwise information
  $user_id = $_SESSION['user_id'];

    $sql = "SELECT sum(deposite) as deposite, sum(withdraw) as withdraw, sum(deposite)-sum(withdraw) as balance FROM `account` where user_id = ".$user_id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $balance_amt = $withdraw_amt = $deposite_amt = 0;
    if(count($row) > 0) {
      $balance_amt = $row['balance'];
      $withdraw_amt = $row['withdraw'];
      $deposite_amt = $row['deposite'];
    }

    $sql1 = "SELECT * FROM `account` where user_id = ".$user_id." order by id desc";
    $result1 = mysqli_query($con, $sql1);

    $q = "SELECT count(id) as transaction_cnt FROM `account` where user_id = ".$user_id;
    $res = mysqli_query($con, $q);
    $row1 = mysqli_fetch_array($res);
    $transaction_cnt = 0;
    if(count($row1) > 0) {
      $transaction_cnt = $row1['transaction_cnt'];
    }


    

?>