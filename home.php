<?php
require('index.php');




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .maincontainer{
        display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    height: 100vh;
    gap: 80px;
}
     h1{
        font-size: 50px;
     }
     .homeimg{
        width: 50%;
     }
     .img{
        width: 100%;
     }
     .sub_container {
    position: relative;
    left: 55px;
}


        </style>
</head>
<body>


<div class="maincontainer">
     <div class="sub_container">
        <h1>Welcome to my home page</h1><br>
         <br>
           <button type="button" class="btn btn-primary">READ MORE</button>
     </div>
<div class="homeimg">

<img  class="img"src="i.png">
</div>
    
</div>

    
</body>
</html>
<?php

require('footer.php');
?>