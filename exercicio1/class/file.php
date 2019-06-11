<?php

class File{

    private $file;

    public function getUpload(){

        return $this->file;

    }

    public function setUpload($file){

        $this->file = $file;
    }

    public function Upload($file){

        echo $file;

    }


}

?>