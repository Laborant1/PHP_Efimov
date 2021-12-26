<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
?>
<?php

$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");


      
 $result=mysqli_query($link,"select auto_mar, auto_model, auto_date, 
 auto_trans, auto_sum, salon_name, salon_add from Auto_nal left outer JOIN Auto on Auto_nal.nal_id_auto=Auto.auto_id
 left outer JOIN Auto_salon on Auto_nal.nal_id_salon=Auto_salon.salon_id 
 order by Auto.auto_id");


$header= array("№ п/п","Марка","Модель","Год выпуска","Трансмиссия","Стоимость", "Название автосалона","Адрес");
require('FPDF/fpdf.php');

define('FPDF_FONTPATH',"FPDF/font/");

class PDF extends FPDF
{
function Headr($header)
{   $this->SetFillColor(200);
    $this->Cell(12,7,iconv('utf-8', 'windows-1251',$header[0]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[1]),1,'','',true);
    $this->Cell(30,7,iconv('utf-8', 'windows-1251',$header[2]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[3]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[4]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[5]),1,'','',true);
    $this->Cell(35,7,iconv('utf-8', 'windows-1251',$header[6]),1,'','',true);
    $this->Cell(35,7,iconv('utf-8', 'windows-1251',$header[7]),1,'','',true);
    $this->Ln();
}
function BasicTable($result)
{
    $a=1;
    $fill=true;
    while($object = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $date = (new IntlDateFormatter('ru_RU', null, null, null, null, 'd MMM Y '))
      ->format(new DateTime($object['auto_date']));
        $this->SetFillColor(235);
        $this->Cell(12,6,$a,1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['auto_mar']),1,'','',$fill);
        $this->Cell(30,6,iconv('utf-8', 'windows-1251',$object['auto_model']),1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$date),1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['auto_trans']),1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['auto_sum']),1,'','',$fill);
        $this->Cell(35,6,iconv('utf-8', 'windows-1251',$object['salon_name']),1,'','',$fill);
        $this->Cell(35,6,iconv('utf-8', 'windows-1251',$object['salon_add']),1,'','',$fill);
        $this->Ln();
        $a++;
        $fill=!$fill;
    }
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,iconv('utf-8', 'windows-1251',$data[$row]),1);
        $this->Ln();
    }
}
}

//create a FPDF object
$pdf=new PDF();
//set document properties
$pdf->AddFont('Arial','','arial.php');

$pdf->SetTitle('Автомобили в наличии',true);
//set font for the entire document
$pdf->SetFont('Arial');
//set up a page
$pdf->AddPage('L','A3');
$pdf->SetDisplayMode('real','default');
$pdf->SetXY (10,20);
$pdf->SetFontSize(10);
//Output the document
$pdf->Headr($header);
$pdf->BasicTable($result);
$pdf->Output('Таблица автомобилей в наличии.pdf','D',true);
?>
