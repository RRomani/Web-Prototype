<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "El fichero es una imagen - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "El fichero no es una imagen.<br>";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Disculpa, el fichero ya existe.<br>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Disculpa, el fichero es demasiado grande.<br>";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG") {
        echo "Disculpa, solo las extensiones JPG, JPEG & PNG pueden subirse.<br>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Disculpa, no se ha podido subir el fichero.<br>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            header('Location: denuncias2.html');
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
        } else {
            echo "Disculpa, ha habido un error al subir tu archivo.<br>";
        }
    }
?>