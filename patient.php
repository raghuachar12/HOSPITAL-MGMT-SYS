<?php
include("db.php");
extract($_GET);

$sql="insert into dpat(name,age,ht,wt,g,bg,no,em,addr,mhis) values('$name','$age','$ht','$wt','$g','$bg','$no','$em','$add','$mhis')";
echo $sql;
mysqli_query($con,$sql);
if(!mysqli_error($con))
    
{
    $sql= "select max(id) as max from dpat";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    
    $id =$val['max'];
    echo "<script> alert('Your patient id is : $id');window.location='patient.html';  </script>";
}
else
{echo "<script> alert('Error occured'); </script>";}