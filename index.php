<?php
if (isset($_FILES['upload']) == TRUE) {
    $message="successfully uploades";
        
    $files = $_FILES['upload'];
    print_r($files);
    for ($x = 0; $x < count($files['name']); $x++) {
        $name =$files['name'][$x];
        $temp_name = $files['tmp_name'][$x];
        move_uploaded_file($temp_name,'uploads/'.$name);
       

        }
 
    }

?>

<html>
    <head>
        <title>File Uploads</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="upload[]" multiple><br><br>
            <input type="submit" value="upload"><?php if(isset($message)){ echo $message;}?>
        </form>
    </body>
</html>