<?php
require 'phpmysqltest/classes/PdoMethods.php';

class Crud extends PdoMethods{

    public function addFile(){
	
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO uploaded_files ( file_name, file_path) VALUES (:fname, :fpath)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			
			[':fname',$_POST['fileName'],'str'],
			[':fpath','testdocuments/' .$_FILES['file']['name'],'str']
			
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
	public function getFileNames(){
		
		/* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
		$pdo = new PdoMethods();

		/* CREATE THE SQL */
		$sql = "SELECT * FROM uploaded_files";

		//PROCESS THE SQL AND GET THE RESULTS
		$records = $pdo->selectNotBinded($sql);

		/* IF THERE WAS AN ERROR DISPLAY MESSAGE */
		if($records == 'error'){
			return 'There has been and error processing your request';
		}
		else {
			if(count($records) != 0){
			    return $this->createList($records);
				}
			else {
				return 'no files found';
			}
		}
	}
    private function createList($records){
		$list = '<ul>';
		foreach ($records as $row){
			$list .= "<li><a href='".$row['file_path']."' target='_blank'>".$row['file_name']."</a></li>";
		}
		$list .= '</ul>';
		return $list;
	}
}
?>