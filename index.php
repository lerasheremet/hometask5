<?php
    include 'form.php';


    /*$files = scandir("uploads");
    //виведення файлів, але не папок
    foreach ($files as $file){
        if(is_file("uploads/" . $file)){
            echo "<a href='uploads/$file'>$file</a>";
            echo " - ";
            echo "<a href='delete.php?file=$file'>Видалити</a><br>";
        }
    }*/

    $files = scandir("uploads/images");
    foreach ($files as $file){
        if(is_file("uploads/images/" . $file)){
            echo "<a href='uploads/images/$file'>$file</a>";
            echo " - ";
            echo "<a href='delete.php?file=$file'>Видалити</a><br>";
        }
    }


    $files = scandir("uploads/docs");
    foreach ($files as $file){
        if(is_file("uploads/docs/" . $file)){
            echo "<a href='uploads/docs/$file'>$file</a>";
            echo " - ";
            echo "<a href='delete.php?file=$file'>Видалити</a><br>";
        }
    }


