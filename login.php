<?php
$con=new mysqli("localhost","root","yadav@4977Atul","test");
$sql1="select password from login where id=$_POST[userid] and password='$_POST[pass]'";
$result=$con->query($sql1);
$sql2="select first_name,last_name from login where id=$_POST[userid]";
$result2=$con->query($sql2);
if($_POST['userid']=="" || $_POST['pass']=="")
{
    echo "Enter all entries properly";
}
 else
{
if ($result->num_rows > 0)
{
    echo "Welcome";
    while($row = $result2->fetch_assoc())
    {
        echo " ".$row["first_name"]." ".$row["last_name"]."!";
    }
    echo '<br /><a href="index.php">Click Here</a>';   
    //header("Location: quiz.html");
}
 else {
        echo "Id or Password is not correct";    
      }
}
$con->close();
?>