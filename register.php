
<?php include('process.php') ?>
<html>

<body>
  <form method="post" action="register.php" id="register_form">
    <h1>Register</h1>
    <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
    <input type="text" name="name" placeholder="Username" value="<?php echo $name; ?>">
    <?php if (isset($name_error)): ?>
      <span><?php echo $name_error; ?></span>
    <?php endif ?>
    </div>
    <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
      <?php if (isset($email_error)): ?>
        <span><?php echo $email_error; ?></span>
      <?php endif ?>
    </div>
    <!-- <div>
      <input type="password"  placeholder="Password" name="pass">
    </div> -->
    <div>
      <button type="submit" name="register" id="reg_btn">Register</button>
    </div>
  </form>
  </body>
</html>
