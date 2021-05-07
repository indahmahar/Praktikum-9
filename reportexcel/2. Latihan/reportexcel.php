<?php
include('koneksi.php');// menyambungkan koneksi dengan database
require 'vendor/autoload.php'; // menyambungkan vendor/autoload.php
use PhpOffice\PhpSpreadsheet\Spreadsheet; //menanggil library fungsi phpSpreadsheet
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; //menuliskan file excel berekstensi xlsx

$spreadsheet = new Spreadsheet(); //membuat variabel baru di spreadsheet
$sheet = $spreadsheet->getActiveSheet(); // mengaktivkan sheet 
$sheet->setCellValue('A1', 'No'); //mengisi sheet cell value 
$sheet->setCellValue('B1', 'Nama'); //mengisi sheet cell value
$sheet->setCellValue('C1', 'Kelas'); //mengisi sheet cell value
$sheet->setCellValue('D1', 'Alamat'); //mengisi sheet cell value

$query = mysqli_query($koneksi,"select * from tb_siswa"); //menampilka form tabel_siswa
$i = 2; //nilai variabel i = 2
$no = 1; //nilai no bernilai = 1
while($row = mysqli_fetch_array($query)) // data query akan tersimpan pada data row
{
	$sheet->setCellValue('A'.$i, $no++); //menampilkan data row kedalam sheet
	$sheet->setCellValue('B'.$i, $row['nama']); //menampilkan data row kedalam sheet
	$sheet->setCellValue('C'.$i, $row['kelas']); //menampilkan data row kedalam sheet
	$sheet->setCellValue('D'.$i, $row['alamat']); //menampilkan data row kedalam sheet	
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, //mengatur boreder sheet
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray); //mengikti data array


$writer = new Xlsx($spreadsheet);//membuat file excel baru dengan extensi xlsx
$writer->save('Report Data Siswa.xlsx'); // membuat file excel dengan nama report data siswa
?>