<!DOCTYPE html>
<style>
/* <?php include 'CSS/style.css'; ?> */
<?php require("backend/db.php");?>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</style>

<body>
<header>
    <h2>Tytech</h2>
    <form action="backend/controller.php" method="POST">
    	<input type="hidden" name="formType" value="logout">
    	<input class="logout"  type="submit" value="logout">
    </form>
    <?php
    if($_SESSION['admin'] == 1)
    {
        echo "<form action='backend/fundsController.php' method='POST'>";
    	echo "<input class='logout'  type='submit' value='users'>";
        echo "</form>";
    }
    ?>
</header>


<main>