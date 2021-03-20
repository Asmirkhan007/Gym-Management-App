<?php
$con=mysqli_connect("localhost","root","root123","gym");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
	
}
	else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    }
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    } 
    
        if(isset($_POST['pay_submit']))
        {
            $gym_id=$_POST['gym_id'];
            $name=$_POST['name'];
            $payment_type=$_POST['payment_type'];
            $payment_date=$_POST['date_of_payment'];
            $date_of_payment=date('Y-m-d',strtotime($payment_date));
            $query="insert into Payment(gym_id,name,payment_type,date_of_payment)values('$gym_id','$name','$payment_type','$date_of_payment')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
              echo "<script>window.open('payments.php','_self')</script>";
            }
            } 
 function get_patient_details(){
    global $con;
    $query="select * from doctorapp";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
         $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
    $docapp=$row['docapp'];
      echo "<tr>
          <td>$fname</td>
        <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
          <td>$docapp</td>
        </tr>";
    }
}


function get_payment(){
    global $con;
    $query="select * from Payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
       $gym_id=$row['gym_id'];
       $name=$row['name'];
       $payment_type=$row['payment_type'];
       $date_of_payment=$row['date_of_payment'];
         $date_of_payment=date('d-m-Y',strtotime($date_of_payment));
        /*$customer_name=$row['customer_name'];*/
        
        echo"<tr>
        <td>$gym_id</td>
        <td>$name</td>
        <td>$payment_type</td>
        <td>$date_of_payment</td>
        
            </tr>";

    }
}


?>



