<?php 

$connection = mysqli_connect("localhost","root","","event");  

if(isset($_POST['save']))
    {
       $id= $_POST['contactuspage_id'];
        $heading1 = $_POST['heading1'];
        $description1 = $_POST['description1'];
        $heading2 = $_POST['heading2'];
        $description2 = $_POST['description2'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];


        // print_r($_REQUEST);

        $query = "UPDATE editcontact SET heading1= '$heading1',  description1 =  '$description1', heading2 = '$heading2', description2=' $description2', phone= '$phone', address= '$address', email='$email'  WHERE contactuspage_id= '$id'";
		echo $query;
        $query_run =mysqli_query($connection,$query);
		header("Location:contactuspage.php");
		}
		
?>