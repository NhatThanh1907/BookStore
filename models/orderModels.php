<?php
function vieworder(){
    include_once "connect/openConnect.php";
    $sql = "SELECT customer.name, invoice.* FROM invoice INNER JOIN customer ON invoice.id_custumer = customer.id";
//    $sql = "SELECT customer.* , book.name AS bookname, book.price ,  invoice.status, invoice.id AS invoice_id FROM invoice inner join customer ON invoice.id_custumer = customer.id
//    inner join detailed_invoice ON detailed_invoice.id_invoice = invoice.id
//    inner join book ON detailed_invoice.id_book = book.id";

    $invoice = mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
    return $invoice;
}
function update(){
    include_once "connect/openConnect.php";
    $invoice = $_GET['id'];
    $status = $_GET['ors'];
    if ($status == 0 ){
        $sql = "UPDATE invoice SET status = 1 WHERE id = '$invoice'";
        mysqli_query($connect, $sql);

    }
    else {
        $sql = "UPDATE invoice SET status = 0 WHERE id = '$invoice'";
        mysqli_query($connect, $sql);
    }
    include_once "connect/closeConnect.php";
}
function detail(){
    $id_invoice = $_GET['id'];
    include_once "connect/openConnect.php";
    $sql = "SELECT * FROM detailed_invoice inner join book ON detailed_invoice.id_book = book.id WHERE id_invoice = '$id_invoice'";
    $invoice = mysqli_query($connect, $sql);
    include_once "connect/closeConnect.php";
    return $invoice;

}
switch ($action) {
    case '';
        $invoice = vieworder();
        break;
    case 'edit':
        update();
    break;
    case 'detail':
       $invoice = detail();
        break;
}
?>