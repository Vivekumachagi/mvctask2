<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/logged.css">


<div class="topnav">
  <form action="<?php echo URLROOT . 'Methods/search' ?>" method="post" class="logfrm">
    <input type="text" name="inputname">
    <input type="submit" value="search">
  </form>
  <a href="<?php echo URLROOT . "Methods/addUser" ?>">add user</a>
  <a href="<?php echo URLROOT . "Methods/export" ?>">export</a>
  <a href="<?php echo URLROOT . "Methods/logout" ?>">logout</a>
  <p>welcome<?php echo " " . USER_NAME ?> </p>
</div>
<div id="error_login"><?php {
  print_r($_SESSION['error']);
  unset($_SESSION['error']);
}?></div>

<div class="table">
  <table>
    <tr>
      <th>id</th>
      <th>fname</th>
      <th>lname</th>
      <th>email</th>
      <th>phone</th>
      <th>street</th>
      <th>city</th>
      <th>state</th>
      <th>country</th>
      <th>pincode</th>
      <th>photo</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
    <tr>
      <?php foreach ($data['posts'] as $post) : ?>
        <td><?= $post->id ?></td>
        <td><?= $post->fname ?></td>
        <td><?= $post->lname ?></td>
        <td><?= $post->email ?></td>
        <td><?= $post->phone ?></td>
        <td><?= $post->street ?></td>
        <td><?= $post->city ?></td>
        <td><?= $post->state ?></td>
        <td><?= $post->country ?></td>
        <td><?= $post->pincode ?></td>
        <td><img src="<?php echo URLROOT . "img/" . $post->photo; ?>" alt="" height="50px" width="50px"></td>
        <td><a href="<?php echo URLROOT . "Methods/edit/" . $post->id; ?>"><input type="button" name="edit" value="edit"></a></td>
        <td><a href="<?php echo URLROOT . "Methods/delete/" . $post->id; ?>"><input type="button" name="delete" value="delete"></a></td>
    </tr>
  <?php endforeach ?>
  </table>
</div>
<script src="<?php echo URLROOT; ?>/js/usernotfound.js"></script>