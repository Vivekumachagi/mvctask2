<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/loginn.css">



  <?php
  if (isset($_SESSION['name'])) {
    header("location: http://localhost/mvc/Pages/userv");
    exit();
  }
  ?>


<div class="topnav">
  <a href="#">
    <form action="<?php echo URLROOT . "Methods/guestSearch" ?>" method="post" id="searchBox">
      <input type="text" name="inputname">
      <input type="submit" value="search">
    </form>
  </a>
  <a href="<?php echo URLROOT . "Pages/loginn" ?>">login</a>
</div>
<div  id="InvalidUserDetail">
<?php {
  if(isset($_SESSION['error']))
  {
    print_r($_SESSION['error']);
    unset($_SESSION['error']);
  }
  else
  {
    print_r($_SESSION['incorrect']);
  unset($_SESSION['incorrect']);
}
  }
  
  
?>

</div>

<div id="h1">
  <h2>Welcome to employee management system</h2>
</div>
<div>
  <h3>Please login for more access </h3>
</div>
<div class="table">
  <table>
    <tr>
      <th>fname</th>
      <th>lname</th>
      <th>email</th>
      <th>city</th>
      <th>state</th>
      <th>country</th>
      <th>photo</th>
    </tr>

    <?php foreach ($data['posts'] as $post) : ?>
      <tr>
        <td><?= $post->fname ?></td>
        <td><?= $post->lname ?></td>
        <td><?= $post->email ?></td>
        <td><?= $post->city ?></td>
        <td><?= $post->state ?></td>
        <td><?= $post->country ?></td>
        <td><img src="<?php echo URLROOT . "img/" . $post->photo; ?>" alt="" height="50px" width="50px"></td>
      </tr>
    <?php endforeach ?>
  </table>
</div>
<script src="<?php echo URLROOT; ?>/js/usernotfound.js"></script>