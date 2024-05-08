<?php

$db = mysqli_connect("localhost", "root", "", "nickname");
if(!$db) die("Database is not connected and it`s sad :(");

$subjects = mysqli_query($db, "SELECT * FROM `mysubjects`");
$subjects = mysqli_fetch_all($subjects);
$predicates = mysqli_query($db, "SELECT * FROM `mypredicates`");
$predicates = mysqli_fetch_all($predicates);


