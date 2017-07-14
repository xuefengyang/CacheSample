<?php 
  /**
    $file = 'cache.html';
    if (file_exists($file)) {
        $val = file_get_contents($file);
        if (!empty($val)) {
            echo $val;
            exit();
        }   
    }

    ob_start();
    $val="<h1>hello world</h1>";
    echo $val;
   
    file_put_contents($file,ob_get_contents());
    ob_end_flush();

    $val=file_get_contents($file);

    echo $val; */

    //$file = 'cache2.html';
    ob_start();

    $val = 'hi';
     echo $val;
    ob_end_flush();


    
?>