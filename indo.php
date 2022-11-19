<style>
td {
    border: 1px solid black;
}

th {
    border: 1px solid black;

}

* {
    font-size: 30pt;
}

a {
    text-decoration: none;
}

table {
    margin-left: auto;
    margin-right: auto;
}

img {
    width: 250px;
    height: 250px;
}
</style>

<form action="search.php" method="GET">
    <input type="text" name="search">
    <button name="btn">search</button>
</form>

<?php
include ('conf.php');
$q="SELECT * FROM `img` ";
$data=mysqli_query($con,$q);   
     while($result=mysqli_fetch_assoc($data)){
        $id=$result["id"];
        echo 
          $result['name'].'<img src='.$result['ionk'].' /><a href="indo.php?id='.$id.'">edit </a><a href="?id='.$id.'">x</a><br>';
}

if(isset($_GET['id'])){
    $ido=$_GET['id'];

$del="DELETE FROM `img` WHERE id='$ido'";
$data=mysqli_query($con,$del);
header("Refresh:0; url=indo.php");

}
?>