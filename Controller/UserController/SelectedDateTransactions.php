<?php
include "../../Controller/User/admin.php";
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  header('location: ../../View/User/Login_Register_User/Login.php');
  exit;
}

// Memastikan tanggal yang diterima dari JavaScript dalam format yang diharapkan (YYYY-MM-DD)
if (isset($_GET['date'])) {
  $selected_date = $_GET['date'];
  if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $selected_date)) {
    echo json_encode(['success' => false, 'message' => 'Invalid date format']);
    exit;
  }
} else {
  echo json_encode(['success' => false, 'message' => 'Date parameter is missing']);
  exit;
}
// Membuat instance class pembeli
$admin = new Admin();

// Memanggil method get_transaction_by_date dan memasukkan parameter yang diperlukan
$transaction_details = $admin->get_transaction_by_date($selected_date);

if ($transaction_details !== false) {
  echo json_encode(['success' => true, 'detailPembelian' => $transaction_details]);
} else {
  echo json_encode(['success' => false, 'message' => 'No transactions found for the selected date']);
}
?>
