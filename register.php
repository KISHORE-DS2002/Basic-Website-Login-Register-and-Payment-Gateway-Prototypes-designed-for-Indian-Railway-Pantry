<?php
$db=mysqli_connect('localhost','root','railway pantry system') or die("could not connect to database");
$errors=array();
if(isset($_POST['Register']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $securityquestion=mysqli_real_escape_string($db,$_POST['securityquestion']);
    $securityanswer=mysqli_real_escape_string($db,$_POST['securityanswer']);
    $firstname=mysqli_real_escape_string($db,$_POST['firstname']);
    $middlename=mysqli_real_escape_string($db,$_POST['middlename']);
    $lastname=mysqli_real_escape_string($db,$_POST['lastname']);
    $gender=mysqli_real_escape_string($db,$_POST['gender']);
    $dob=mysqli_real_escape_string($db,$_POST['dob']);
    $occupation=mysqli_real_escape_string($db,$_POST['occupation']);
    $mstatus=mysqli_real_escape_string($db,$_POST['mstatus']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $mobile=mysqli_real_escape_string($db,$_POST['mobile']);
    $nationality=mysqli_real_escape_string($db,$_POST['nationality']);
    $flat=mysqli_real_escape_string($db,$_POST['flat']);
    $street=mysqli_real_escape_string($db,$_POST['street']);
    $area=mysqli_real_escape_string($db,$_POST['area']);
    $pincode=mysqli_real_escape_string($db,$_POST['pincode']);
    $state=mysqli_real_escape_string($db,$_POST['state']);
    $city=mysqli_real_escape_string($db,$_POST['city']);
    $postoffice=mysqli_real_escape_string($db,$_POST['postoffice']);
    $phone=mysqli_real_escape_string($db,$_POST['phone']);
    $sbi=mysqli_real_escape_string($db,$_POST['sbi']);
    $tc=mysqli_real_escape_string($db,$_POST['tc']);
    $checkuni="SELECT*FROM usertable WHERE username='$username' LIMIT 1";
    $results=mysqli_query($db,$checkuni);
    $user=mysqli_fetch_assoc($results);
    $p=0;
    if($user)
    {
        if($user['username']==$username)
        {
            echo "Username already exists";
            $p=1;
        }
    }
    if($p==0)
    {
        $query="INSERT INTO user table (username,password,securityquestion,securityanswer,firstname,middlename,lastname,gender,dob,occupation,mstatus,email,mobile,nationality,flat,street,area,pincode,state,city,postoffice,phone,sbi,tc) VALUES('$username','$password','$securityquestion','$securityanswer','$firstname','$middlename','$lastname','$gender','$dob','$occupation','$mstatus','$email','$mobile','$nationality','$flat','$street','$area','$pincode','$state','$city','$postoffice','$phone','$sbi','$tc')";
        mysqli_query($db,$query);
    }
}
?>