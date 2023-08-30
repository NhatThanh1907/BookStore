<?php
function Product(){
    include_once "connect/openConnect.php";
    $search = '';
    if (isset($_POST['search'])){
        $search = $_POST['search'];
    }
    $sql = "SELECT * FROM book where book.name like '%$search%'";
    $book = mysqli_query($connect,$sql);
    $sql = "SELECT * FROM categories";
    $categories = mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
    $array = array();
    $array['book'] = $book;
    $array['categories'] = $categories;
    $array['search'] = $search;
    return $array;
}

function detail() {
    $productid = $_GET['id'];
    include_once "connect/openConnect.php";
    $sqlBook = "SELECT * FROM book WHERE id = '$productid'";
    $book = mysqli_query($connect,$sqlBook);
    include_once "connect/closeConnect.php";
    return $book;
}
function category() {
    $productid = $_GET['id'];
    include_once "connect/openConnect.php";
    $sqlBook = "SELECT * FROM book WHERE id = '$productid'";
    $book = mysqli_query($connect,$sqlBook);
    include_once "connect/closeConnect.php";
    return $book;
}
function create(){
    include_once "connect/openConnect.php";
    $sql = "SELECT * FROM categories";
    $categories = mysqli_query($connect,$sql);

    $sql = "SELECT * FROM version";
    $version = mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
    $array = array();
    $array['categories'] = $categories;
    $array['version'] = $version;
    return $array;
}
function store(){
    $name = $_POST['prd_name'];
    $status = $_POST['prd_status'];
    $price = $_POST['prd_price'];
    $image = $_FILES['image']['name'];;
    $id_categories = $_POST['cat_id'];
    $amount = $_POST['prd_amount'];
    $content = $_POST['prd_content'];
    include_once "connect/openConnect.php";
    $file_tmp = $_FILES['prd_image']['tmp_name'];;
    move_uploaded_file($file_tmp, 'admin/images/'. $image);

    $sql = "INSERT INTO book (name,status,price,image,id_categories,amount,content) 
        VALUES('$name','$status','$price','$image','$id_categories','$amount','$content')";
    mysqli_query($connect,$sql);

    include_once "connect/closeConnect.php";
}

function edit(){
    $productid = $_GET['id'];
    include_once "connect/openConnect.php";
    $sql = "SELECT * FROM categories";
    $categories = mysqli_query($connect,$sql);

    $sql = "SELECT * FROM version";
    $version = mysqli_query($connect,$sql);
    $sql = "SELECT * FROM book WHERE id = '$productid'";
    $book = mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
    $array = array();
    $array['categories'] = $categories;
    $array['version'] = $version;
    $array['book'] = $book;
    return $array;
}
function update(){
    $productid = $_POST['prd_id'];
    $name = $_POST['prd_name'];
    $status = $_POST['prd_status'];
    $price = $_POST['prd_price'];
    $image = $_POST['prd_image'];
    $id_categories = $_POST['cat_id'];
    $amount = $_POST['prd_amount'];
    $content = $_POST['prd_content'];
    include_once "connect/openConnect.php";
    $sql = "UPDATE book SET name = '$name', status = '$status', price ='$price', image = '$image', 
                id_categories = '$id_categories',amount = '$amount', content = '$content'  
            WHERE id = $productid";
    mysqli_query($connect, $sql);
    include_once "connect/closeConnect.php";
}
function remove(){
    $productid = $_GET['id'];
    include_once "connect/openConnect.php";
    $sql = "DELETE FROM book WHERE id = '$productid' ";
    mysqli_query($connect, $sql);
    include_once "connect/closeConnect.php";
}

function add_to_cart() {
    $product_id = $_GET['id'];
    if (isset($_SESSION['cart'])){
        if (isset($_SESSION['cart'][ $product_id ])){
            $_SESSION['cart'][ $product_id ]++;
        }else {
            $_SESSION['cart'][ $product_id ] = 1;
        }
    } else {
        $_SESSION['cart'] =array();
        $_SESSION['cart'][ $product_id ] = 1;

    }
}
function cart() {
    $cart = array();
    $temp = array();
    include_once "connect/openConnect.php";
    $sub = 0;
    foreach ($_SESSION['cart'] as $product_id  => $amount){

        $sqlNameAndPrice = "SELECT name, price, image FROM book WHERE id = '$product_id'";
        $nameAndPrice = mysqli_query($connect, $sqlNameAndPrice);

        foreach ($nameAndPrice as $each){
            $temp[$product_id]['image'] = $each['image'];
            $temp[$product_id]['name'] = $each['name'];
            $temp[$product_id]['price'] = $each['price'];
            $temp[$product_id]['amount'] = $amount;
           // echo($temp[$product_id]['price']);die;
            $temp[$product_id]['subtotal'] = $temp[$product_id]['price'] * $temp[$product_id]['amount'];
            $temp[$product_id]['total'] = $sub += $temp[$product_id]['subtotal'];

        }
    }
    include_once "connect/closeConnect.php";
    $cart['product'] = $temp;
    return $cart;
}

    function update_cart() {
        $items =$_POST['amount'];
        foreach ($items as $product_id => $amount){
            if ($amount < 1 ){
                echo 'khong cho day';
            }else{$_SESSION['cart'][$product_id] = $amount;}
        }
    }
    function delete_one_book() {
    $product_id = $_GET['id'];
    unset($_SESSION['cart'][$product_id]);
    }
    function add_order(){

        $invoicedate = date("Y-m-d");
        $invoicestatus = 0;
        $customerid = $_SESSION['customer_id'];
        include_once "connect/openConnect.php";
        $sqladmin = "SELECT id_admin FROM admin WHERE id_admin =1";
        $admin = mysqli_query($connect,$sqladmin);
        foreach ($admin as $ad){
            $adminid = $ad['id_admin'];

        }
        $sql = "INSERT INTO invoice (status, date, id_ad, id_custumer) VALUES ('$invoicestatus', '$invoicedate','$adminid','$customerid')";
        $invoice = mysqli_query($connect, $sql);
        $sqlinvoice ="SELECT MAX(id) as id FROM invoice WHERE id_custumer = '$customerid'";
        $invoices = mysqli_query($connect, $sqlinvoice);
        foreach ($invoices as $inv){
            $invoiceid = $inv['id'];
        }
        foreach ($_SESSION['cart'] as $product_id => $amount){
            $sqlprice = "SELECT price FROM book WHERE id = '$product_id'";
            $bookprice = mysqli_query($connect, $sqlprice);
            foreach ($bookprice as $value){
                $price = $value['price'];
            }
            $sqlDetailInvoice = "INSERT INTO detailed_invoice VALUES ('$amount', '$price','$product_id', '$invoiceid')";
            mysqli_query($connect, $sqlDetailInvoice);
        }
        include_once "connect/closeConnect.php";
        unset($_SESSION['cart'] );
        $_SESSION['cart'] = array();
    }
switch ($action){
    case '';
        $array = Product();
        break;
    case 'detail':
        $book = detail();
        break;
    case 'create';
         $array = create();
         break;
    case 'store';
        store();
        break;
    case 'edit';
        $array = edit();
        break;
    case 'update';
        update();
        break;
    case 'remove';
        remove();
        break;
    case 'category':
        $book = category();
        break;
    case 'add_to_cart' :
        add_to_cart();
        break;
    case 'cart' :
        $cart = cart();
        break;
    case 'update_cart' :
        update_cart();
        break;
    case 'delete_one_book' :
        delete_one_book();
        break;
    case 'add_order':
        add_order();
        break;
}


?>