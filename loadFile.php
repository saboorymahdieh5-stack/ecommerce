<?php

class loadFile{
    public function loadFile($addres){
        $addres=$addres .".php";
        if(!file_exists($addres)){
            $addres="404.php";
        }

        include($addres);

    }
}