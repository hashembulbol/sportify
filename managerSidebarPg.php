<?php require_once("getall.php"); ?>

<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="managerHomePG.php?id=<?php echo $_GET['id']; ?>">Home</a>
  <a href="editPg.php?id=<?php echo $_GET['id']; ?>">Edit Playground Page</a>
  <a href="addOtherFacility.php?id=<?php echo $_GET['id']; ?>">Add/delete Other Facility</a>
  <a href="editPics.php?id=<?php echo $_GET['id']; ?>">Add/Update/Remove Gallery Pictures </a>
  <a href="blacklist.php?id=<?php echo $_GET['id']; ?>">Blacklist</a>
  <a href="info.php?id=<?php echo $_GET['id']; ?>">Information Guide</a>
  <a href="deleteRequest.php?id=<?php echo $_GET['id']; ?>">Delete the whole page</a>
  <a href="logout.php?id=<?php echo $_GET['id']; ?>">Sign Out</a>  
</div>
