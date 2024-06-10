<?php
error_reporting(E_ERROR|E_PARSE);
$mysqli = mysqli_connect('localhost', 'root', '', 'php_ad');
if (mysqli_connect_errno()) {
    echo "Error connecting to MySQL: " . mysqli_connect_error();
}
$sql_khach = "SELECT * FROM tblcart, tbldangky WHERE tblcart.id_khachhang = tbldangky.id_dangky";
$query_khach = mysqli_query($mysqli, $sql_khach);
$sql_don = "SELECT * FROM tblcart_details, tblproduct WHERE tblcart_details.id_product = tblproduct.id_product
AND tblcart_details.code_cart = '$_GET[code]'";
$query_don = mysqli_query($mysqli, $sql_don);
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetFillColor(193, 229, 252);
$pdf->Write(10, 'Ngan Company');
$pdf->Ln(10);
$pdf->Write(10, 'Thong tin cua khach hang:');
$pdf->Ln(10);

$width_cell1 = array(10, 30, 48, 45, 25, 40);

$pdf->Cell($width_cell1[0], 10, 'ID', 1, 0, 'C', true);
$pdf->Cell($width_cell1[1], 10, 'Ma hang', 1, 0, 'C', true);
$pdf->Cell($width_cell1[2], 10, 'Ten khach hang', 1, 0, 'C', true);
$pdf->Cell($width_cell1[3], 10, 'Email', 1, 0, 'C', true);
$pdf->Cell($width_cell1[4], 10, 'Dia chi', 1, 0, 'C', true);
$pdf->Cell($width_cell1[5], 10, 'So dien thoai', 1, 1, 'C', true);
$pdf->SetFillColor(235, 236, 236);
while ($row = mysqli_fetch_array($query_khach)) {
    $pdf->Cell($width_cell1[0], 10, $row['id_cart'], 1, 0, 'C', false);
    $pdf->Cell($width_cell1[1], 10, $row['code_cart'], 1, 0, 'C', false);
    $pdf->Cell($width_cell1[2], 10, $row['hoten'], 1, 0, 'C', false);
    $pdf->Cell($width_cell1[3], 10, $row['email'], 1, 0, 'C', false);
    $pdf->Cell($width_cell1[4], 10, $row['diachi'], 1, 0, 'C', false);
    $pdf->Cell($width_cell1[5], 10, $row['sodienthoai'], 1, 1, 'C', false);
}

$pdf->SetFillColor(193, 229, 252);
$pdf->Write(10, 'Don hang:');
$pdf->Ln(10);
$width_cell = array(10, 30, 60, 27, 30, 40);

$pdf->Cell($width_cell[0], 10, 'ID', 1, 0, 'C', true);
$pdf->Cell($width_cell[1], 10, 'Ma hang', 1, 0, 'C', true);
$pdf->Cell($width_cell[2], 10, 'Ten san pham', 1, 0, 'C', true);
$pdf->Cell($width_cell[3], 10, 'So luong', 1, 0, 'C', true);
$pdf->Cell($width_cell[4], 10, 'Gia', 1, 0, 'C', true);
$pdf->Cell($width_cell[5], 10, 'Tong tien', 1, 1, 'C', true);
$pdf->SetFillColor(235, 236, 236);

while ($row = mysqli_fetch_array($query_don)) {
    $tong_tien_san_pham = $row['soluong'] * $row['gia'];
    $pdf->Cell($width_cell[0], 10, $row['id_cart_details'], 1, 0, 'C', false);
    $pdf->Cell($width_cell[1], 10, $row['code_cart'], 1, 0, 'C', false);
    $pdf->Cell($width_cell[2], 10, $row['name_product'], 1, 0, 'C', false);
    $pdf->Cell($width_cell[3], 10, $row['soluong'], 1, 0, 'C', false);
    $pdf->Cell($width_cell[4], 10, number_format($row['gia'], 0, ',', '.'), 1, 0, 'C', false);
    $pdf->Cell($width_cell[5], 10, number_format($tong_tien_san_pham, 0, ',', '.'), 1, 1, 'C', false);
}

$pdf->Output();
?>
