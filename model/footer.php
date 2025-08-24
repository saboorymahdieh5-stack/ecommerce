<?php

class footer extends model{
    protected static $table="footer";

     public static function updateOrCreate($data){
        $count=self::countFooter();
        $nameDesigner=$data['nameDesigner'];
        $phonNumber=$data['phonNumber'];
        $description=$data['description'];
        
        
        
        if($count==0){
            self::create($data);
        }
        if($count==1){
            $result=self::select(["id"]);
            $id = $result->fetch_assoc()["id"];
            self::update($data,$id);
    }
    }
    public static function countFooter(){
        $result=self::select(["id","nameDesigner","phonNumber","description"]);
        return $result->num_rows;

    }
}