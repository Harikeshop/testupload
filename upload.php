<?php
if(isset($_POST['upload'])){

    $file = $_FILES['file']; 
    print_r($file)

    $fileName = $_FILES['file']['name'];

}
?>