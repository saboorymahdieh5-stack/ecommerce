<?php 
// include('mainDB.php');
class modelFooter extends mainDB{
    public $table="footersetting";

    public function create($data){
        $nameDesigner=$data['nameDesigner'];
         $phonNumber=$data['phonNumber'];
        $description=$data['description'];
        $this->conn->query("INSERT INTO footersetting(nameDesigner,phonNumber,description) VALUES('$nameDesigner' , '$phonNumber' , '$description')");

    }
    public function update($data){
       // $id = $data['id'];
        $nameDesigner=$data['nameDesigner'];
        $phonNumber=$data['phonNumber'];
        $description=$data['description'];
        $this->conn->query("UPDATE footersetting SET nameDesigner='$nameDesigner' , phonNumber='$phonNumber' , description='$description'");
    }

    public function updateOrCreate($data){
    
        // $result=$this->countFooter();
        // if($result->num_rows==0){
        //     return $this->create($data);
        // }
        // if($result->num_rows==1){
        //     $data['id']=$result->fetch_assoc()['id'];
        //     return $this->update($data);
        
        $count=$this->countFooter();
        //$footer=$result->fetch_assoc();
        $nameDesigner=$data['nameDesigner'];
        $phonNumber=$data['phonNumber'];
        $description=$data['description'];
        if($count==0){
            $this->create($data);
           // $this->conn->query("INSERT INTO footersetting(nameDesigner,phonNumber,description) VALUES('$nameDesigner' , '$phonNumber' , '$description')");
        }
        if($count==1){
            $this->update($data);
        //$id=$footer['id'];
    //$this->conn->query("UPDATE footersetting SET nameDesigner='$nameDesigner' , phonNumber='$phonNumber' , description='$description' ");
    }
    }
    public function countFooter(){
        $result=$this->select();
       return $result->num_rows;

    }
}

?>