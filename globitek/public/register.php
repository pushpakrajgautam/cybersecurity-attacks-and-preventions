<?php
  require_once('../private/initialize.php');

  // Set default values for all variables the page needs.

  // if this is a POST request, process the form
  // Hint: private/functions.php can help

    // Confirm that POST values are present before accessing them.

    // Perform Validations
    // Hint: Write these in private/validation_functions.php

    // if there were no errors, submit data to database

      // Write SQL INSERT statement
      // $sql = "";

      // For INSERT statments, $result is just true/false
      // $result = db_query($db, $sql);
      // if($result) {
      //   db_close($db);

      //   TODO redirect user to success page

      // } else {
      //   // The SQL INSERT statement failed.
      //   // Just show the error, not the form
      //   echo db_error($db);
      //   db_close($db);
      //   exit;
      // }

?>

<?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $firstname = $_POST["firstname"] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST["email"] ?? '';
    $username = $_POST["username"] ?? '';

    $errors = [];
    if (is_blank($firstname)) {
      $errors[] = "First name cannot be blank.";
    } elseif (!has_length($firstname, ['min' => 2, 'max' => 255])) {
      $errors[] = "First name must be between 2 and 255 characters.";
    }
    if (is_blank($lastname)) {
      $errors[] = "Last name cannot be blank.";
    } elseif (!has_length($lastname, ['min' => 2, 'max' => 255])) {
      $errors[] = "Last name must be between 2 and 255 characters.";
    }
    if (is_blank($email)) {
      $errors[] = "Email cannot be blank.";
    } elseif (!has_length($email, ['max' => 255])) {
      $errors[] = "Last name must be less than 255 characters.";
    }
    if (is_blank($username)) {
      $errors[] = "Username cannot be blank.";
    } elseif (!has_length($_POST['username'], ['min' => 8, 'max' => 255])) {
      $errors[] = "Last name must be between 8 and 255 characters.";
    }
    if(!has_valid_email_format($email)) {
      $errors[] = "Invalid email format.";
    }

    if(empty($errors)) {
     $sql = "INSERT INTO users (first_name, last_name, username, 
     			email, created_at) VALUES (" . "'". 
                $firstname . "'" . "," . "'" . $lastname . "'" . "," . "'" . 
                $username . "'" . "," . "'" . $email . "'" . 
                "," . "'" . date("Y-m-d H:i:s") . "'" . ")";
     $db = db_connect();
     $result = db_query($db, $sql);

     if($result) {
      ob_start();
      header("Location: registration_success.php");
      db_close();
     }
     else {
      echo $result;
      echo htmlspeciachars(db_error());
      exit;
     }
    } 
  }
?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    $output = display_errors($errors);
    echo $output;
  ?>

  <!-- TODO: HTML form goes here -->
  <form action="register.php" method="POST">
  	First Name:<br><input type="text" name="firstname" value = 
  	"<?php echo $firstname;?>"><br>
  	Last Name:<br><input type="text" name="lastname" value=
  	"<?php echo $lastname;?>"><br>
  	Email:<br><input type="text" name="email" value=
  	"<?php echo $email;?>"><br>
  	Username:<br><input type="text" name="username" value=
  	"<?php echo $username;?>"><br>
  	<br><button type="submit" name="submit">submit</button>
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
