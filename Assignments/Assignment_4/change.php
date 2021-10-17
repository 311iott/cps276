<?php

class NameChange{

    public function displayProp(){
        if ($_POST['personName'] == "Clear Names"){
            return "";
        }else if($_POST['names'] === ""){
            return $_POST['namelist'];
        }else{
            $output = $this->formatString();
            return $output;
        }
    }

    private function formatString(){
        $rawName = explode(" ", $_POST['names']);
        $names = explode("\n", $_POST['namelist']);
        $names[] = $rawName[1].", ".$rawName[0];
        sort($names);
        $output = implode("\n", $names);
        return $output;
    }
}
?>