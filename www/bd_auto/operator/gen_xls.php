<?php
session_start();
if (!$_SESSION['user']) {
        unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../auth.php');
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

require '../PHPExcel-1.8/Classes/PHPExcel.php';
$pExcel = new PHPExcel();
$aSheet = $pExcel->setActiveSheetIndex(0);
$aSheet->setTitle('Автомобили в наличии');
$aSheet->setCellValue('A1','№');
$aSheet->setCellValue('B1','Марка');
$aSheet->setCellValue('C1','Модель');
$aSheet->setCellValue('D1','Год выпуска');
$aSheet->setCellValue('E1','Трансмиссия');
$aSheet->setCellValue('F1','Стоимость');
$aSheet->setCellValue('G1','Название автосалона');
$aSheet->setCellValue('H1','Адрес');
$i = 1;
while ($st = mysqli_fetch_assoc($result)) {
$date = (new IntlDateFormatter('ru_RU', null, null, null, null, 'd MMM Y '))
      ->format(new DateTime($st['auto_date']));
    $aSheet->setCellValue('A'.($i+1), $i);
    $aSheet->setCellValue('B'.($i+1), $st['auto_mar']);
    $aSheet->setCellValue('C'.($i+1), $st['auto_model']);
    $aSheet->setCellValue('D'.($i+1), $date);
    $aSheet->setCellValue('E'.($i+1), $st['auto_trans']);
    $aSheet->setCellValue('F'.($i+1), $st['auto_sum']);
    $aSheet->setCellValue('G'.($i+1), $st['salon_name']);
    $aSheet->setCellValue('H'.($i+1), $st['salon_add']);
    $i++;
}
 echo 'uspeh1';
ob_end_clean();
header('Content-Type:xlsx:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition:attachment;filename="simple.xlsx"');
ob_end_clean();
$objWriter = new PHPExcel_Writer_Excel2007($pExcel);
$objWriter->save('php://output');
exit;
?>