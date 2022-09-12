<?php require  APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/login.css">
<div class="logform" id="form1">
    <form action="<?php echo URLROOT . 'Methods/login'  ?>" name="logInForm" method="post" onsubmit="return checkLogin()">
        <input type="button" name="cancel" value="X" id="b1">
        <h2 id="h2">Login</h2>
        <label>Email:</label><input type="email" name="email" class="in" id="email">
        <label>Password:</label><input type="password" name="password" class="in" id="password">
        <input type="submit" name="signup" value="login" id="input">
    </form>
</div>
<?php require  APPROOT . '/views/inc/footer.php'; ?>
<script src="<?php echo URLROOT; ?>/js/login.js"></script>