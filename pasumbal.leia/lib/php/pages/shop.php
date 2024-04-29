<?php include_once __DIR__ . '/../functions.php'; // Include the file with database functions ?>
<?php include_once __DIR__ . '/../parts/header.php'; ?>


<section>
    <div class="container">
        <h2>Shop</h2>
        <p>Welcome to our shop! Browse our products below:</p>
        <div class="products">
            <?php
            // Fetch products from the database
            $products = makeQuery(makeConn(), "SELECT * FROM `products`");

            // Loop through each product and display it
            foreach ($products as $product) {
                echo "<div class='product'>";
                echo "<img src='../img/{$product->thumbnail}' alt='{$product->name}' />";
                echo "<h3>{$product->name}</h3>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../parts/footer.php'; ?>