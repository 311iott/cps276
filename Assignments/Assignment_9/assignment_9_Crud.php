<?php
require 'phpmysqltest/classes/PdoMethods.php';

class Crud extends PdoMethods{

    public function addNote(){
	
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO notes_To_Self ( time_Stamp, note) VALUES (:tStamp, :note)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			
			[':tStamp', $_POST['dateAndTime'], 'str'],
			[':note', $_POST['noteToSelf'], 'str']
			
		];
		
		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the file';
		}
		else {
			return 'File has been added';
		}
	}
	public function getNotes(){
		
		/* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
		$pdo = new PdoMethods();

		/* CREATE THE SQL */
		$sql = "SELECT * FROM notes_To_Self WHERE time_Stamp >= :startDate AND time_Stamp <= :endDate ORDER BY time_Stamp DESC";
		
		$bindings = [
			
			[':startDate', $_POST['begDate'], 'str'],
			[':endDate', $_POST['endDate'], 'str']
			
		];
		
		//PROCESS THE SQL AND GET THE RESULTS
		$records = $pdo->selectBinded($sql, $bindings);

		

		/* IF THERE WAS AN ERROR DISPLAY MESSAGE */
		if($records == 'error'){
			return 'There has been and error processing your request';
		}
		else {
			if(count($records) != 0){
			    return $this->createTable($records);
			   }
			else {
				return 'no files found';
			}
		}
	}
    private function createTable($records){
		$table = '<table class="table table-striped"><tr><th>Date and Time</th><th>Note</th></tr>';
		

		foreach ($records as $row){
			$tStamp = strtotime($row['time_Stamp']);

			$prettyDate = date("j/d/Y h:i a", $tStamp );
			$table .= "<tr><td>" .$prettyDate . "</td><td>".$row['note']."</td></tr>";
		}
		$table .= '</table>';
		return $table;
	}
}
?>