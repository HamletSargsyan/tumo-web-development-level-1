<?php
include("_meta.php");
include("_navbar.php");
?>

<div class="container">
    <h1>Login</h1>

    <form action="action.php" method="POST">
        <div class="row mb-2">
            <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
            </div>
            <div class="col">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
        </div>

        <a href="register.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">No account? Register now</a>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" name="login">Submit</button>
    </form>

</div>