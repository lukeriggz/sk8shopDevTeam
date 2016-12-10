<?php
$uname = $pword = $cpword = $fname = $mname = $lname = "";
$number = $street = $city = $state = "";
?>
<div class="container center-text">
    <form>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <div class="form-group">
            <label for="confPassword">Confirm Password:</label>
            <input type="password" class="form-control" id="confPassword" required>
        </div>
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" class="form-control" id="fname" required>
        </div>
        <div class="form-group">
            <label for="mname">Middle Name:</label>
            <input type="text" class="form-control" id="mname">
        </div>
        <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" class="form-control" id="lname" required>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Address</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="anumber">Number:</label>
                    <input type="text" class="form-control" id="anumber" required>
                </div>
                <div class="form-group">
                    <label for="street">Street:</label>
                    <input type="text" class="form-control" id="street" required>
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" required>
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" id="state" required>
                </div>
                <div class="form-group">
                    <label for="zip">Zip:</label>
                    <input type="number" class="form-control" id="zip" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
    </br>

</div>
