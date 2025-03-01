<?php 
     $conn = mysqli_connect("localhost","root","","e_parts");
     if(!$conn){
         die("Connection failed: ". mysqli_connect_error());
     }
  ?>