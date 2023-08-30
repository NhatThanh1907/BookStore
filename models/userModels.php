<?php
function user(){
    include_once "connect/openConnect.php";
    $sql = "SELECT * FROM customer";
    $user = mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
    return $user;
}
function store(){
    $name = $_POST['user_full'];
    $email = $_POST['user_mail'];
    $password = $_POST['user_pass'];
    $repassword = $_POST['user_re_pass'];
    $address = $_POST['user_add'];
    $phone = $_POST['user_phone'];
    include_once "connect/openConnect.php";
    $sql = "INSERT INTO customer (name,email,password,address,phone) 
            VALUES('$name','$email','$password','$address','$phone')";
    mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
}
function edit(){
    $cusid = $_GET['id'];
    include_once "connect/openConnect.php";
    $sql = "SELECT * FROM customer WHERE id = '$cusid'";
    $customer = mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
    return $customer;
}
function update(){
    $cusid = $_POST['id'];
    $cusname = $_POST['user_full'];
    $email = $_POST['user_mail'];
    $phone = $_POST['user_phone'];
    $address = $_POST['user_add'];
    include_once "connect/openConnect.php";
    $sql = "UPDATE customer SET name = '$cusname', email = '$email', phone = '$phone', address = '$address' WHERE id = '$cusid' ";
    mysqli_query($connect, $sql);
    include_once "connect/closeConnect.php";
}
function remove(){
    $cusid = $_GET['id'];
    include_once "connect/openConnect.php";
    $sql = "DELETE FROM customer WHERE id = '$cusid' ";
    mysqli_query($connect, $sql);
    include_once "connect/closeConnect.php";
}
function loginProcess(){
    $email = $_POST['mail'];
    $password = $_POST['pass'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT *, COUNT(*) AS count_customer FROM customer WHERE email = '$email' AND password = '$password'";
    $customers = mysqli_query($connect, $sql);
    foreach ($customers as $customer){
        if($customer['count_customer'] == 0){
//                login sai
            return 0;
        } else {
//                login đúng
            $_SESSION['email'] = $customer['email'];
            $_SESSION['customer_id'] = $customer['id'];
            return 1;
        }
    }
    include_once 'connect/closeConnect.php';
}

function logout(){
    session_destroy();
}
switch ($action){
    case '';
        $customer = user();
        break;
    case 'store';
        store();
        break;
    case 'edit';
        $customer = edit();
        break;
    case 'update';
        update();
        break;
    case 'remove';
        remove();
        break;
    case 'loginProcess':
        $test = loginProcess();
        break;
    case 'logout':
        logout();
        break;
}
?>
