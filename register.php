<?php
$con=new mysqli("localhost","root","yadav@4977Atul","test");
$sql1="select * from login where id=$_POST[id]";
$result1=$con->query($sql1);
$n=$result1->num_rows;
if($n>0)
{
    echo " This Id already exist";
}
else
{
    if($_POST['id']=="" || $_POST['fname']=="" || $_POST['lname']=="" || $_POST['email']=="" || $_POST['gender']=="" || $_POST['pass1']=="" || $_POST['pass2']=="")
    {
       echo "Please Fill All entries properly"; 
    }
    else
    {
    if($_POST['pass1'] != $_POST['pass2'])
       {
           echo "Password Not Mached";
       }
    else 
        {
            $sql="insert into login values($_POST[id],'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[gender]','$_POST[pass1]');";
            $result = $con-> query($sql);
            if ($result==true)
                echo "<b><u>Student Added</u></b>";
            else
                echo"error";
        }
 
    }
}
$con->close();
?>