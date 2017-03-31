<?php

require 'boostrap.php';

$config = require 'config.php';

$pdo = Connection::make($config['database']);
$query = new Query($pdo);


require 'issue.view.php';

if (isset($_POST['title'])) {
    //Upload image
    if (isset($_FILES['upload'])) {
        $name = $_FILES['upload']['name'];
        $dest = UPLOAD_PATH . $name;
        
        if (!move_uploaded_file($_FILES['upload']['tmp_name'], $dest)) {
            
            echo "Upload file not success!";
            exit();
        }
    }
    if (!isset($name)) {
        $name ='default.png';
    }
    //Insert data to table issue
    $sql = "INSERT INTO issues SET title =:title, due=:due, assignee=:assign, status=:status, filename =:filename"
    ;

    $s = $pdo->prepare($sql);

    $s->bindValue(':title', $_POST['title']);
    $s->bindValue(':due', $_POST['due']);

    $s->bindValue(':assign', $_POST['assign']);
    $s->bindValue(':status', $_POST['status']);

    $s->bindValue(':filename', $name);

    if (!$s->execute()) {
        dd('Could not created issue');
    }

    //Upload image

    header('Location: .');
    exit();
}