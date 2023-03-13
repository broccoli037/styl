<?php
$page='signup';
include 'includes/header.php'; ?>

<div class="login-page">
    <form action="">
        <h1 class="form-heading">
            Sign Up
        </h1>
        <div class="form-fill">
            <label for="user-id">Email or Phone</label> <br>
            <input type="text" id="user-id"><br> <br>
            <label for="user-id">Password</label><br>
            <input type="text" id="user-pw">
        </div>

        
        <div class="button">
            <button class="submit">Sign up</button>

        </div>
        <div class="login-with fb"><a class="link" href="">Login With Facebook</a>  </div>
        <div class="login-with gmail"> <a href="" class="link">Login with Google</a> </div>

    </form>
   
</div>

<?php include 'includes/footer.php'; ?>
