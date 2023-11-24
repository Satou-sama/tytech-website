<?php
$title = "Dashboard";
require("header.php");

if (!isset($_SESSION['id'])) {
	header("Location: index.php");
}
?>

<link rel="stylesheet" href="css/dashboard.css">


<header>
    <h2>Overzicht</h2>
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

<?php
$categories = query("SELECT * FROM categories");
echo "<main>";
    echo "<div class='products'>";
    foreach ($categories as $category)
    {
        $items = query("SELECT * FROM products WHERE category_ID = {$category['category_ID']}");
        echo "<h3 class='grid-big'>{$category['name']}</h3>";
        foreach ($items as $item)
        {
            echo "<div>";
            echo "<ul>";
            echo "<li>{$item['product_name']}</li>";
            echo "<li><img class='image' src={$item['product_image']}></li>";
            echo "<li>{$item['product_description']}</li>";
            echo "<li>€{$item['product_price']}</li>";
            echo "</ul>";
            echo "</div>";
        }
        if($_SESSION['admin'] == 1)
        {
            ?>  <form action ='backend/create.php' type='POST' > 
                <input type='hidden' name='category' value= '<?= $category['category_ID'] ?>'  >
                <input class='product-button' type='submit' value='Add Product'>
                </form> 
                <?php
        }
    }
    if($_SESSION['admin'] == 1)
    {
        ?>
            <form action ='backend/create.php' type='POST' > 
                <input type='hidden' name='category' value="-1">
                <input class='grid-big' type='submit' value='Add Category'>
            </form>
        <?php
    }
echo "</div>";
?>





<div class='order'>
    <?php
        $user = selectOne('SELECT * FROM login WHERE user_ID = :user_id', [
            ":user_id" => $_SESSION['id']
        ]);
        echo "<h4><a href='backend/fundsController.php'>Saldo: €{$user['funds']}</a></h4>"
    ?>
    <div>
        <?php
            $orders = query("SELECT * FROM orders WHERE order_ID = {}");
            echo "<table>";
            foreach ($orders as $order)
            {
                echo "<td>";
                
                echo "</td>";
            }
            echo "</table>";
        ?>
    </div>
</main>

<?php
require 'footer.php';
?>