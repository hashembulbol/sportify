<?php 
require_once("getall.php");

?>


<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="managerHomeGYM.php?id=<?php echo $_GET['id']; ?>">Home</a>
  <a href="lastsubs.php?id=<?php echo $_GET['id']; ?>">Last Subscribtions</a>
  <a href="editGym.php?id=<?php echo $_GET['id']; ?>">Edit GYM Page</a>
  <a href="addOtherFacilitygym.php?id=<?php echo $_GET['id']; ?>">Add/delete Other Facility</a>
  <a href="editpicsgym.php?id=<?php echo $_GET['id']; ?>">Add/Update/Remove Gallery Pictures </a>
  <a href="blacklistgym.php?id=<?php echo $_GET['id']; ?>">Blacklist</a>
  <a href="infogym.php?id=<?php echo $_GET['id']; ?>">Information Guide</a>
  <a href="deleteRequestgym.php?id=<?php echo $_GET['id']; ?>">Delete the whole page</a>
  <a href="logout.php">Sign Out</a>
</div>
