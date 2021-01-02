<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">


<div class="row">
<div class="col col-12 col-col-sm-2">   </div>
<div class="col col-12 col-col-sm-8">  

<form method="POST">
<table class="table table-borderless">
<tr>
    <td>Book Name</td>
    <td>  <input type="text" class="form-control" name="bname"></td>
</tr>

<tr>
    <td>Book Author</td>
    <td>  <input type="text" class="form-control" name="bauthor"></td>
</tr>
<tr>
    <td>Book Price</td>
    <td>  <input type="text" class="form-control" name="bprice"></td>
</tr>


<tr>
    <td></td>
    <td>  <button name="subbtn" class="btn btn-primary">SUBMIT</button></td>
</tr>
</table>
</form>
 </div>

<div class="col col-12 col-col-sm-2">   </div>

</div>
</div>
    


</body>
</html>


<?php

if(isset($_POST['subbtn']))

{

    $Bookname=$_POST['bname'];
    $BookAuthor=$_POST['bauthor'];
    $Bookprice=$_POST['bprice'];

   $connection=new mysqli("localhost","root","","bookdemo");

   $sql="INSERT INTO books(`title`, `author`, `price`) 
   VALUES( '$Bookname','$BookAuthor',$Bookprice )";


    $result=$connection->query($sql);

    if($result===true)
    {
     echo "<script> alert('successfully inserted') </script>";   
    }
    else{
        echo "error happened";   
  
    }




}

?>