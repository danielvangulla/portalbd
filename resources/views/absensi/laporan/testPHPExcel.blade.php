<?php 
$query = "SELECT * FROM employees"; //building query 
$rows=$db->select($query); //running query 
$i=1; 

function export2xls(){ 
require_once 'PHPExcel/PHPExcel.php'; 
$objPHPExcel = new PHPExcel(); 
$objPHPExcel->setProperties()->setCreator("Me")
                ->setLastModifiedBy("Me")
                ->setTitle("Office 2007 XLSX Report")
                ->setSubject("Office 2007 XLSX Report")
                ->setDescription("Test XLSX, generated using PHP classes.")
                ->setKeywords("office 2007 openxml php")
                ->setCategory("Deposits Report");
$headings = array('First Name','Last Name','Company','Phone','Gender');
    $rowNumber = 1; 
    $col = 'A';

    foreach($headings as $heading) {
        $objPHPExcel->getActiveSheet()->setCellValue($col.$rowNumber,$heading); 
        $col++; 
    }
$rowNumber = 2;
    foreach($rows as $row) {
        $col = 'A';
        foreach($row as $cell) { 
            $objPHPExcel->getActiveSheet()->setCellValue($col.$rowNumber,$cell); 
            $col++; 
        } 
        $rowNumber++; 
    }
    $objPHPExcel->getActiveSheet()->freezePane('A2');
$objPHPExcel->getActiveSheet()->setTitle('Report'); 
$objPHPExcel->setActiveSheetIndex(0); 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
header('Content-Disposition: attachment;filename="Report.xlsx"'); 
header('Cache-Control: max-age=0'); 

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
$objWriter->save('php://output'); 
exit; 
} 
?> 

<html>
<head> <?php include_once('incs/head.php'); ?> </head> <body class="iframed">
<div class="title">Report</div> <br />
<div class="clear"></div> <button id="export" name"export" onclick="export2xls">Export</button> 
<br /> 
<br />
<table > <thead> <tr> <th>First name</th> <th>Last name</th> <th>Company</th> <th>Phone</th> <th>Gender</th> </tr> </thead> <tbody> <?php foreach ($rows as $row){ <tr> <td><?php echo $row['fname']?>.</td> <td><?php echo $row['lname']?></td> <td><?php echo $row['company']?></td> <td><?php echo $row['phone']?></td> <td><?php echo $row['gender']?></td> </tr> <?php $i++; } } ?> </tbody> </table> <br /> 
<br /> 
</body> 
</html>