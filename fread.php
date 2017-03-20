<?php
if(isset($_POST['submit'])){
    $filename=$_POST['file']; 
    $filepath='uploads/'.$filename;

    if(!file_exists("uploads/".$filename)){
        echo "File does not exist";
    }else{
        header('Content-Disposition: attachment; filename='.$filename);
        $data = file_get_contents($filepath);
        print ($data);

    }  
}



?>