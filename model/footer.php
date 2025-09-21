<?php

class footer extends model{
    public $table="footer";

    protected function updateOrCreate($data){
        $count=$this->countFooter();   
        if($count==0){
            $this->create($data);
        }
        if($count==1){
         $this->update($data);
    }
    }
    protected function countFooter(){
        $result=$this->select(["*"])->from()->get();
        return $result->num_rows;

    }
}