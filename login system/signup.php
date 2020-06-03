<?php
require "header.php";
?>
<main>
    <h1>Sign Up</h1>
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo "<p>Fill in all fields</p>";
        } else if ($_GET['error'] == "invaliduidmail") {
            echo "<p>Invalid User name or enmail</p>";
        }
    }
    ?>
    <form action="includes/signup.inc.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="uid" class="form-control" id="exampleInputEmail1" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" name="mailuid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <label for="exampleInputPassword1">Password Again</label>
            <input type="password" name="pwd-repeat" class="form-control" id="exampleInputPassword1" placeholder="Password confirm">
        </div>

        <button type="submit" name="signup-submit" class="btn btn-primary">SignUp</button>
    </form>
</main>

<?php
require "footer.php";
?>