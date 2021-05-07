<?php
require 'vendor/autoload.php'; //mengupload data ke direktory vendor
use PhpOffice\PhpSpreadsheet\Spreadsheet; //menanggil library fungsi phpSpreadsheet
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; //menuliskan file excel berekstensi xlsx

$spreadsheet = new Spreadsheet(); //membuat varibel baru untuk library
$sheet = $spreadsheet->getActiveSheet(); // membuat sheet activr
$sheet->setCellValue('A1', 'Hello World !'); // mengisi sheet excel

$writer = new Xlsx($spreadsheet); //membuat varibel baru dan menyimpan dari varibel lama
$writer->save('hello world.xlsx'); // menuliskan nama file
?>