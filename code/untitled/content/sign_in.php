<?php
$uname = $pword = $cpword = $fname = $mname = $lname = "";
$number = $street = $city = $state = "";
$zip;
if(isset($_POST['submit'])){
    if (empty($_POST["uname"]) || empty($_POST["pword"])) {
        //$emailErr = "Email is required";
        echo "no Username";
    } else {
        echo "Username";
        $uname =$_POST["uname"];
        $_SESSION["username"] = $uname;
        header("location: home.php");
        exit;
        ///$email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //  $emailErr = "Invalid email format";
        //}
    }
}

?>

<div class="container center-text">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>
