<?php 

$connection = mysqli_connect("localhost","root","","event");  

if(isset($_POST['save']))
    {
       $id= $_POST['aboutus_id'];
        $heading1 = $_POST['heading1'];
        $description1 = $_POST['description1'];
        $heading2 = $_POST['heading2'];
        $description2 = $_POST['description2'];
		$image = $_FILES['image'];
		

        // print_r($_REQUEST);

        $query = "UPDATE aboutus SET heading1= '$heading1',  description1 =  '$description1', heading2 = '$heading2', description2=' $description2', image= '$image'  WHERE aboutus_id= '$id'";
		echo $query;
        $query_run =mysqli_query($connection,$query);
		header("Location:aboutuspage.php");
		}
		
?>