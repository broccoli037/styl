<?php 
$page='login';
include 'includes/header.php'; ?>

<div class="login-page">
    <form action="">
        <h1 class="form-heading">
            LOGIN
        </h1>
        <div class="form-fill">
            <label for="user-id">Email or Phone</label> <br>
            <input type="text" id="user-id"><br> <br>
            <label for="user-id">Password</label><br>
            <input type="text" id="user-pw">
        </div>

        <input type="checkbox" id="remember-login">
        <label for="remember-login">Remember login?</label> <br>
        <div class="button">
            <button class="submit">Login</button>

        </div>

    </form>
    <div class="new-user">
        <h5 class="not-member">Not a member? <span><a href="signup">Sign up now</a></span> </h5>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
