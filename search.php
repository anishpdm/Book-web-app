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
<div class="col col-12 col-sm-2"> </div>
<div class="col col-12 col-sm-8">

<form method="post">

<table class="table table-borderless">
<tr>
    <td>Book name</td>
    <td> <input type="text" class="form-control" name="bname"> </td>
</tr>

<tr>
    <td></td>
    <td><button name="searchbtn" class="btn btn-success"> SEARCH </button></td>
</tr>

</table>
</form>

 </div>
<div class="col col-12 col-sm-2"> </div>


</div>
</div>
    
</body>
</html>


<?php

if(isset($_POST['searchbtn']))
{
     $bookname=$_POST['bname'];

    $connection=new mysqli("localhost","root","","bookdemo");

    $sql="SELECT `id`, `title`, `author`, `price` FROM `books` WHERE `title`='$bookname'";
   
    $result=$connection->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
          
            $getauthor=$row['author'];
            $getprice=$row['price'];

            echo "<table class='table'>
             <tr> <td>Author </td>
            <td>  $getauthor  </td>
            </tr>
            
            <tr> <td>Price </td>
            <td>  $getprice  </td>
            </tr>

            </table>
            ";


        }

    }
    else{
        echo "No book has found";
    }
 
}

?>