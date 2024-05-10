<?php

require "../DB-CONNECT/connect.php";

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$selectedSubjects = $_POST["selectedSubjects"];
$selectedPredicates = $_POST["selectedPredicates"];

function DeleteSelectedById($database, $tableName, $tableId, $arrayOfSelected){
    if($arrayOfSelected != null){
        foreach($arrayOfSelected as $selectedElem){
            mysqli_query($database, "DELETE FROM `$tableName` WHERE `$tableName`.`$tableId` = '$selectedElem';");
        }
    }
}

DeleteSelectedById($db, 'mysubjects', 'id', $selectedSubjects);
DeleteSelectedById($db, 'mypredicates', 'id', $selectedPredicates);

header("location: ../admin.php");



// if($selectedSubjects != null){
//     foreach($selectedSubjects as $selectedSubject){
//         mysqli_query($db, "DELETE FROM `mysubjects` WHERE `mysubjects`.`id` = '$selectedSubject';");
//     }
// }