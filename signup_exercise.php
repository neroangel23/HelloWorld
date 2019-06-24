<?php
include_once('conn.php');
?>
<html>
<head>
    <title>signup_exercise</title>
    <link rel='stylesheet' href='exercise.css'>
</head>
<body>
<form action="signup_exercise.php" method="post">
    <input type="text" name="username" placeholder="Enter Username" required="">
    <input type="text" name="email" placeholder="Enter Email" required="">
    <input type="password" name="password" placeholder="Enter Password" required="">
    <button type="submit">Submit</button>
</form>

<?php
    
    if(isset($_POST['username']) || isset($_POST['email']) || isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql="INSERT into usertablev2(username, email, password) VALUES ('$username','$email','$password')";
        mysqli_query($conn,$sql);


    }

?>
</body>
</html>


