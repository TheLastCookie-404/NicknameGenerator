<?php

require "../DB-CONNECT/connect.php";

$subjects = $_POST['enteredSubjects'];
$predicates = $_POST['enteredPredicates'];

$subjects = explode(" ", $subjects);
$predicates = explode(" ", $predicates);

foreach($subjects as $subject){
    if($subject != null) mysqli_query($db, "INSERT INTO `mysubjects` (`subject`) VALUES ('$subject')");
}

foreach($predicates as $predicate){
    if($predicate != null) mysqli_query($db, "INSERT INTO `mypredicates` (`predicate`) VALUES ('$predicate')");
}

header("location: ../admin.php");