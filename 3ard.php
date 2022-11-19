<style>
* {
    font-size: 30pt;
}

a {
    text-decoration: none;
    border: 1px solid green;
    color: white;
    background-color: green;
    margin-left: 2px;
    padding-left: 5px;
}

img {
    width: 250px;
    height: 250px;
}

.mn {
    border-radius: 40px;
    background-color: #76ff03;
}

a:hover {
    background-color: #81d4fa;
    letter-spacing: 1px;

}

.mn:hover {
    background-color: #81d4fa;
    letter-spacing: 1px;

}
</style>


<?php
include ('conf.php');
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page=1;
}
$num_per_page=3;
$start_from=($page-1)*3;
$q="SELECT * FROM `img` LIMIT $start_from,$num_per_page ";
$data=mysqli_query($con,$q);   
     while($result=mysqli_fetch_assoc($data)){
        $id=$result["id"];
        echo 
          $result['name'].'<img src='.$result['ionk'].' /><br>';
}

?>
<?php
$pr_query="SELECT * FROM `img`";
$pr_result=mysqli_query($con,$pr_query);
$total_record=mysqli_num_rows($pr_result);
$total_page=ceil($total_record/$num_per_page);
if($page>1){
    echo "<a class='mn' href='3ard.php?page=".($page-1)."'><</a>";
}
for($i=1;$i<$total_page;$i++){
echo "<a href='3ard.php?page=".$i."'>$i</a>";
}
if($i>$page){
    echo "<a class='mn' href='3ard.php?page=".($page+1)."'>></a>";
}
?>