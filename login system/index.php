<?php
require "header.php";
?>
<main>
    <?php
    if (isset($_SESSION['userId'])) {
        echo '<form class="mt-10" action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit" class="btn btn-primary ">Logout</button>
    </form>';
    } else {
        echo '<div>
        <h1>LOGIN</h1>
        <form action="includes/login.inc.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="mailuid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
        </form>
        <a href="signup.php">Sign Up</a>
        
    </div>';
    }
    ?>

    <?php
    if (isset($_SESSION["userId"])) {
        echo "<p>You Are Logged In</p>";
    } else {
        echo "<p>You Are Logged Out</p>";
    }
    ?>


</main>

<?php
require "footer.php";
?>