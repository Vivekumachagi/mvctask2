<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/signup.css">
<div class="form">

    <form action="<?php echo URLROOT . 'Methods/edit/' . $data->id; ?> " name="editForm" onsubmit="return scearch()" method="post" class="frm" enctype="multipart/form-data">
        <div class="imgs">
            <h3>please enter details to edit</h3>
        </div>
        <label>First name :</label> <input type="text" id="fname" name="fname" value='<?= $data->fname ?>' required>
        <label>Last name :</label> <input type="text" id="lname" name="lname" value='<?= $data->lname ?>' required>
        <label>Email:</label><input type="email" id="email" name="email" value='<?= $data->email ?>' required>
        <label>Phone:</label><input type="text" id="phone" name="phone" value='<?= $data->phone ?>' required>
        <label>Street :</label> <input type="text" id="street" name="street" value='<?= $data->street ?>' required>
        <label>City :</label> <input type="text" id="city" name="city" value='<?= $data->city ?>' required>
        <label>State :</label> <input type="text" id="state" name="state" value='<?= $data->state ?>' required>
        <label>Country :</label> <input type="text" id="country" name="country" value='<?= $data->country ?>' required>
        <label>Pincode :</label> <input type="text" id="pincode" name="pincode" value='<?= $data->pincode ?>' required>
        <label>Photo :</label> <input type="file" name="fileToUpload" accept=".png, .jpg, .jpeg" required>
        <input type="submit" name="edit" value="add" id="inputEdit" required>
    </form>
</div>
<script src="<?php echo URLROOT; ?>/js/edit.js"></script>