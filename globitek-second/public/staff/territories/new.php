<?php
require_once('../../../private/initialize.php');

$errors = array();
$territory = array(
  'name' => '',
  'position' => '',
  'state_id' => '');

if(!isset($_GET['id']))
	redirect_to('index.php');
else
	$territory['state_id'] = $_GET['id'];

if(is_post_request()) {

  // Confirm that values are present before accessing them.
  if(isset($_POST['name'])) { $territory['name'] = $_POST['name']; }
  if(isset($_POST['position'])) { $territory['position'] = $_POST['position']; }

  $result = insert_territory($territory);
  if($result === true) {
  	$new_id = db_insert_id($db);
    redirect_to('show.php?id=' . urlencode($new_id));
  } else {
    $errors = $result;
  }
}
?>
<?php $page_title = 'Staff: New Territory'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="../states/show.php?id= <?php echo urlencode($territory['state_id'])?>">Back to State Details</a><br />

  <h1>New Territory</h1>

   <?php echo display_errors($errors); ?>

  <form action="new.php?id=<?php echo htmlspecialchars($territory['state_id']); ?>" method="post">
    Name:<br />
    <input type="text" name="name" value="<?php echo htmlspecialchars($territory['name']); ?>" /><br />
    Position:<br />
    <input type="text" name="position" value="<?php echo htmlspecialchars($territory['position']); ?>" /><br />
    <input type="submit" name="submit" value="Create"  />
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
