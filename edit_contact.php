<html>
<head>
	
	<style>
.personal{
	align-items="center",
	color:pink;
}

.container{
/*	align-items: center;
	background-color: blue;*/
	margin-left: 38%;
	margin-top: 5%;
}
input[type="text"]{
    /*background-color:yellow;*/
    padding:10px 80px;
    align:center;
    margin-top: 15%;
    margin-left:30%;
    border-radius: 6px;

}

input[type=submit]{
    padding:10px 80px;
    border:2px;
    border-color:black;
    cursor: pointer;
    border-radius: 6px;
    margin-top: 15%;
   margin-bottom: 200px;
   background-color:lightblue;
   color:white;


}
input[type=submit]:hover{
background-color: black;
color: white;
align:center;
}

body{
    background-image: linear-gradient(darkgray, gray, lightgray);
    background-color: #cccccc;
	align-items: center;

}
</style>
</head>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST['contact'])){
            session_start();
            $flag = 0;
            $zero_flag = "";
            $uid=$_SESSION['uid'];
            $con=mysqli_connect("localhost","root","","lock_status");
            $db_name = array();
            $db_status = array();
            $cname = '';
            if (mysqli_connect_errno($con)) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }
            if (!$con) {
                die("database not connected");
            }else{
                $sql = "SELECT * from traffic_control where status = 1";
                $result=mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    array_push($db_name,$row['db_name']);
                    array_push($db_status,$row['status']);
                }
                $con->close();
                $con=mysqli_connect("localhost","root","","#YOUR DATABASE NAME");
                $sql = "SELECT college from student_info2 where uid = '$uid'";
                $result=mysqli_query($con,$sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $cname = $row;
                $con->close();
            }
            $con=mysqli_connect("localhost","root","","lock_status");
            $cname = $cname['college'];
            
            $index = array_search($cname,$db_name);
            if ((string)gettype($index)!="boolean"){
                if (mysqli_connect_errno($con)) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    exit();
                }
                if (!$con) {
                    die("database not connected");
                }else{                    
                    $sql = "UPDATE traffic_control set status = '0' where db_name = '$cname'";
                    $zero_flag = $cname;
                    $flag = 1;
                    $result=mysqli_query($con,$sql);
                }
            }
            else if(count($db_name)>0){
                $temp = $db_name[0];
                $flag = 1;
                $zero_flag = $db_name[0];
                $sql = "UPDATE traffic_control set status = '0' where db_name = '$temp'";
                $result=mysqli_query($con,$sql);
                
            }
            else{
                echo "<script>alert('User doesn't exist');</script>";
				header("location:edit_contact.php");
            }

            if ($flag==1){
                $con->close();
                $con2=mysqli_connect("localhost","root","",'#YOUR DATABASE NAME');
				if (mysqli_connect_errno($con2)) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					exit();
				}
				if (!$con2) {
					die("database not connected");
                }
                else{
                    $cn = $_POST['contact'];
                    $sql = "UPDATE student_info set mobile_no = '$cn' where uid = $uid";
                    $result=mysqli_query($con2,$sql);
                }
                $con2->close();
                
                $con2=#ADD here;
                #An online database is used here you can add the details in the format requied by the mysqli_connect()
                              ##3sra
                              if($con2==true)
                              {
                                  echo "hello hua hua" ; 
                              }
				if (mysqli_connect_errno($con2)) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					exit();
				}
				if (!$con2) {
					die("database not connected");
                }
                else{
                    $cn = $_POST['contact'];
                    $sql = "UPDATE student_info set mobile_no = '$cn' where uid = $uid";
                    $result=mysqli_query($con2,$sql);
                }
                $con2->close();
                $con2=mysqli_connect("localhost","root","",'#Your database name');
				if (mysqli_connect_errno($con2)) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					exit();
				}
				if (!$con2) {
					die("database not connected");
                }
                else{
                    $cn = $_POST['contact'];
                    
                    $sql = "UPDATE student_info set mobile_no = '$cn' where uid = $uid";
                    $result=mysqli_query($con2,$sql);
                }
                $con2->close();
                $con=mysqli_connect("localhost","root","","lock_status");
		
				if (mysqli_connect_errno($con)) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					exit();
				}
				if (!$con) {
					die("database not connected");
                }

                $sql = "UPDATE traffic_control set status = '1' where db_name = '$zero_flag'";
                $result=mysqli_query($con,$sql);
                $con->close();
                echo "<script>alert('Successfully updated number');</script>";
				header("location:displayads.php");
            }
          
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="edit_contact.php" method = "post">
        <input type="text" name="contact" placeholder="Contact number">
	    <input type="submit" value="update">
    </form>
    
</body>
</html>