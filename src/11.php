  <?php
 $con = mysqli_connect('localhost','root','');
 if(!$con){
 echo 'Connection Failed';
 }
 //create database
 mysqli_select_db($con,'projectschool');
 //create table
 $sql = "CREATE TABLE IF NOT EXISTS students(id int(11) PRIMARY KEY AUTO_INCREMENT,name varchar(255),email varchar(255),password varchar(255))";
 if(mysqli_query($con,$sql)){
 echo 'Table Created';
 }else{
 echo 'Error creating table';
 }
 mysqli_close($con);
 ?>