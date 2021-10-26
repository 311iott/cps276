<?php

class Directories {
    public $pathName = "assignment_5/directories/";
    public $fileName = "readme.txt";
    
    
    public function makeAnchor(){
        $dir = $_POST['dirNames'];
        $file = $_POST['fileContent'];
        if ($this->checkDir($dir)){
           $this->createDir($dir);
           $this->writeFile($dir, $file);
           return "<p>File and directory were created.</p><p><a href='".$this->pathName.$dir.'/'.$this->fileName."'>Path where file is located</a></p>";

        }else{
            return "<p>A directory already exists with that name.</p>";
        }
      

    }
    
    
    private function checkDir($dir){
        $output = glob($this->pathName.$dir);
        if (count($output) > 0){
            return False;
        }else{
            return True;
        }
    }

    private function createDir($dir){
        mkdir ($this->pathName.$dir);
        chmod ($this->pathName.$dir, 0777);
    }
    
    private function writeFile($dir, $info){
        $handle = fopen($this->pathName.$dir."/".$this->fileName, "w");
        fwrite($handle, $info);
        fclose($handle);
    }



}

?>