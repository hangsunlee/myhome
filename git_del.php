<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-03-26
 * Time: 오전 9:50
 */
include_once './db/db.php';
$idx=$_POST['idx'];
$sql="delete from git where idx=$idx";
echo $sql;
$stmt=$pdo->prepare($sql);
$stmt->execute();
echo "<script>location.href='./git_list.php'</script>";
?>