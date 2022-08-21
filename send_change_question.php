<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "root");
    mysqli_select_db($link, "byticinfo");
    $name = $_POST["question_input"];
    $question_id = $_GET["question_id"];
    
    $answ_query = mysqli_query($link, "UPDATE questions SET question = '$name' WHERE id = $question_id;");
    
    header("Location: change_question_change_question.php?question_id=$question_id");
    print_r($_POST);
?>