<?php

class Calculator{

    public function calc($V="", $i="", $j=""){
        
        if(!$this->checkNum($i)||!$this->checkNum($j)) return "You must enter a string and two numbers<br />";
        switch ($V){
            case "+": 
                return $this->addish($i, $j);
                break;
            case "-": 
                return $this->subtraksh($i, $j);
                break;
            case "*": 
                return $this->multiplikaysh($i, $j);
                break;
            case "/": 
                return $this->divish($i, $j);
                break;
            default: 
                return "You must enter a string and two numbers<br />";
                break;
            
        }
    }
    
    

    private function checkNum($Z){
        return is_int($Z);
    }

    private function addish($i,$j){
        return "The sum is ".$i + $j."<br />";
    }
    private function subtraksh($i,$j){
        return "The difference is ".$i - $j."<br />";
    }
    private function multiplikaysh($i,$j){
        return "The product is ".$i * $j."<br />";
    }
    private function divish($i,$j){
        if ($j === 0) return "Cannot divide by Zero<br />";
        return "The division is ".$i / $j."<br />";
    }

    




    
}

?>