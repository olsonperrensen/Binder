<?php
require_once 'conn.php';

// INSERT data to the .db
$sql = "INSERT INTO profiles(name,age,gender)
VALUES (?,?,?)";
$stmt = $conn->stmt_init();

if (!$stmt->prepare($sql)) {
  die('SQL error: ' . $conn->error);
}

$stmt->bind_param(
  'sss',
  $_POST['name'],
  $_POST['age'],
  $_POST['gender']
);

$stmt->execute();

$conn->commit();

// TODO: check for potential errors before redirecting
header('Location: swiping.php');
