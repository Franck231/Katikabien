<?php // phpinfo();


/** Include PHPExcel */
require_once  'PHPExcel.php';
// Create new PHPExcel object

function getClientByIdTransactionAndDate($date, $tmpfnametf)
{
 $test = false;
 $error = "";
 $tmpfname = $tmpfnametf;
 $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
 $excelObj = $excelReader->load($tmpfname);
 $worksheet = $excelObj->getSheet(0);
 $lastRow = $worksheet->getHighestRow();
 $a = "";
 $index = 0;
 
	 $a = $a . "<h2>Kunde, die zu diesem Tag gezahlt haben</h2>";
	 
	 $a = $a . "<table>";
	 
	 				$a = $a . "<tr>
				<th>Clientid</th>
				<th>Prenom</th>
				<th>Nom du client </th>
				<th>Numero de transactions</th>
				<th>Montant</th>
				<th>Datum</th>
			    </tr>";
	 
			for ($row = 1; $row <= $lastRow; $row++) {
				
				$dt = $worksheet->getCell('F'.$row)->getFormattedValue();
				$dtt = date("d-m-Y", strtotime($dt));
				$dateTemp = date("d-m-Y", strtotime($date));
				
				
				if($dtt == $dateTemp){
					 $a = $a . "<tr><td>";
					 $a = $a . $worksheet->getCell('A'.$row)->getValue();
					 $a = $a . "</td>";
					 $a = $a . "<td>";
					 $a = $a . $worksheet->getCell('B'.$row)->getValue();
					 $a = $a . "</td>";
					 $a = $a . "<td>";
					 $a = $a . $worksheet->getCell('C'.$row)->getValue();
					 $a = $a . "</td>";
					 $a = $a . "<td>";
					 $a = $a . $worksheet->getCell('D'.$row)->getValue();
					 $a = $a . "</td>";
					 $a = $a . "<td>";
					 $a = $a . $worksheet->getCell('E'.$row)->getValue();
					 $a = $a . "</td>";
					 $a = $a . "<td>";
					 $a = $a . $worksheet->getCell('F'.$row)->getFormattedValue();
					 $a = $a . "</td><tr>";
					 $index++;
				}
			}
		
		$a = $a . "</table>"; 
		
		
		
		if($index == 0){
			$a = "Am ".$date." haben keine Kunde bezahlt";
			
		}
		
		$a = $a . "<button id=\"btnPru\" class=\"login100-form-btn\" onclick=\"showlikeReset()\"> Neue Prüfung </button>";
		
		echo $a;
		
		unlink($tmpfname);
	 
}

		$tmpfname = "merdatiel.xlsx";
	    file_put_contents($tmpfname,  
          file_get_contents('Tableauventes.xlsx')
		  // file_get_contents_curl('www.hotmail.com')
        );	
		
		$tmpfdateValue = $_GET['q'];
		
		getClientByIdTransactionAndDate($tmpfdateValue, $tmpfname);

?>



