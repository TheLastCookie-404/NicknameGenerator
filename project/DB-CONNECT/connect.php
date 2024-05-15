<?php

$db = mysqli_connect("localhost", "root", "", "nickname");
if(!$db) die("Database is not connected and it`s sad :(");

$subjects = mysqli_query($db, "SELECT * FROM `mysubjects`");
$subjects = mysqli_fetch_all($subjects);
$predicates = mysqli_query($db, "SELECT * FROM `mypredicates`");
$predicates = mysqli_fetch_all($predicates);
$words = [$subjects, $predicates];

?>

<!-- Converting php array to js array -->
<script>
    let words = <?= json_encode($words); ?>;
</script>
