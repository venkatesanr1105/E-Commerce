<style>
        .box{
                width: 240px;
                border: 1px solid lightblue;
                background-color: lightblue;
                color: blue;
        }
        input{
                display: block;
                margin: auto;
                background: red;
                color: white;
                cursor: pointer;
                border: 1px solid lightgray;
                border-radius: 10px;
                height: 25px;
                width: 75px;

        }
</style>
<div class = "box">
        <p>User name already exists</p>
        <input type="button" value = "reset form" id = "reset">
</div>
<script>
        reset.onclick = (event)=>{
                window.location.href = 'http://onlineshoppingportal.com/signup.php';
        }
</script>
<?php 
        function redirect($url){
                header("Location: ".$url);
                exit;
        }
        $connection = mysqli_connect('localhost','root','Venky@2001','Application');
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql = "select Email_address from Account where Email_address = '".$email."'";
        $result = $connection->query($sql);
        if(mysqli_num_rows($result)!=0){
                exit;
        }
        $mobile = $_POST['mobile'];
        $cpass = $_POST['confirmpassword'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $sql =  "insert into Account (First_name, Last_name, Email_address, Mobile_number, Password, Address, Pincode) values ('".$fname."','".$lname."','".$email."','".$mobile."','".$cpass."','".$address."','".$pincode."')";
        $connection->query($sql);
        redirect('http://onlineshoppingportal.com/index.php')
?>

