<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/signup.css">
<div class="form">
    <form action="<?php echo URLROOT . 'Methods/insert' ?>" name="editForm" onsubmit="return scearch()" method="post" class="frm" enctype="multipart/form-data">
        <div class="imgs">
            <h2>EMPLOYEE MANAGEMENT SYSTEM</h2>
        </div>
        <label>First name :</label> <input type="text" id="fname" name="fname" required>
        <label>Last name :</label> <input type="text" id="lname" name="lname" required>
        <label>Email:</label><input type="email" id="email" name="email" required>
        <label>Phone:</label><input type="text" id="phone" name="phone" required>
        <label>Street :</label> <input type="text" id="street" name="street" required>
        <label>City :</label> <input type="text" id="city" name="city" required>
        <label>State :</label> <input type="text" id="state" name="state" required>
        <label>Country :</label> <input type="text" id="country" name="country" required>
        <label>Pincode :</label> <input type="text" id="pincode" name="pincode" required>
        <label>Photo :</label> <input type="file" accept=".png, .jpg, .jpeg" name="fileToUpload" required>
        <input type="submit" name="signup" value="add" id="input" x>
    </form>
</div>
<script src="<?php echo URLROOT; ?>/js/edit.js"></script>