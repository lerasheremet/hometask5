<?php

    if(!isset($_POST["submit"])){
        header("Location: index.php");
    }

    $fileName = $_FILES["fileToUpload"]["name"];
    $fileSize = $_FILES["fileToUpload"]["size"];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $fileExtensions = ['txt', 'pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png', 'gif'];


    //якщо файл в папці docs та images вже існує, то вивести повідомлення про це
    if(file_exists("uploads/images/" . $fileName)){
        echo "Файл з ім'ям $fileName вже існує.";
    }
    elseif(file_exists("uploads/docs/" . $fileName)){
        echo "Файл з ім'ям $fileName вже існує.";
    }


    elseif(!in_array($fileExtension, $fileExtensions)){
        echo "Цей тип файлу не підтримується.";
    }

    elseif($fileSize > 10000000){
        echo "Файл занадто великий. Максимальний розмір файлу - 10MB.";
    }

elseif(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])){
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/images/" . $fileName);
    echo "Файл $fileName успішно завантажено.";
}

else{
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/docs/" . $fileName);
    echo "Файл $fileName успішно завантажено.";
}



?>
    <p>
        <a href="index.php">Go home</a>
    </p>

