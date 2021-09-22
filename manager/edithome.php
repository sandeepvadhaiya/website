<?php 

$connection = mysqli_connect("localhost","root","","event");  

if(isset($_POST['save']))
    {
       $id= $_POST['homepage_id'];
        $description1 = $_POST['description1'];
        $description2 = $_POST['description2'];
        $description3 = $_POST['description3'];
        $description4 = $_POST['description4'];
        $description5 = $_POST['description5'];
        $description6= $_POST['description6'];
		


        // print_r($_REQUEST);

        $query = "UPDATE home SET description1 ='$description1',description2='$description2',description3='$description3',description4=' $description4',description5=' $description5',description6=' $description6' WHERE homepage_id= '$id'";
		echo $query;
        $query_run =mysqli_query($connection,$query);
		header("Location:homepage.php");
		}
		
?>