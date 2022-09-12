<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/loginn.css">
<form action="<?php echo URLROOT . "Methods/search" ?>" method="post">
    <input type="text" name="inputname">
    <input type="submit" value="search">
</form>
</a>
<a class="active" href="<?php echo URLROOT . "Pages/loginn" ?>">Home</a>
<a href="<?php echo URLROOT . "Pages/loginn" ?>">login</a>
</div>
<div class="table">
    <table>
        <tr>
            <th>id</th>
            <th>fname</th>
            <th>status</th>
            <th>photo</th>
        </tr>
        <tr>
            <?php foreach ($data as $post) : ?>
                <td><?= $post->id ?></td>
                <td><?= $post->fname ?></td>
                <td><?= "user found" ?></td>
                <td><img src="<?= $post->photo ?>" alt="" height="50px" width="50px"></td>
        </tr>
    <?php endforeach ?>
    </table>
</div>