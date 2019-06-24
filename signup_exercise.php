

<form action="signup_exercise.php" method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="text" name="email" placeholder="Enter Email">
    <input type="password" name="password" placeholder="Enter Password">
    <button type="submit">Submit</button>
</form>

<?php
    $conn=mysqli_connect('localhost','root','');
    mysqli_select_db($conn, 'test');
    if(isset($_POST['username']) || isset($_POST['email']) || isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql="INSERT into usertablev2(username, email, password) VALUES ('$username','$email','$password')";
        mysqli_query($conn,$sql);


    }

?>
