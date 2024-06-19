<?php
include("_meta.php");
include("_navbar.php");
?>

<div class="container">
    <h1>Registration</h1>

    <form action="action.php" method="POST">
        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" name="first_name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="col">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <div class="col">
                <select class="form-select" name="gender" required>
                    <option selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" class="form-control" placeholder="Age" id="age" name="age" required>
            </div>
        </div>
        <a href="login.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Have an account? Log in</a>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" name="register">Submit</button>
    </form>

</div>