<?php

interface ICache{
    
    public function getData($key);

    public function setData($key,$data);

    public function putData($key,$data);

    
}

?>