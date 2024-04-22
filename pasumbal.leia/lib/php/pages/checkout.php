<?php include '../parts/header.php'; ?>

<section>
    <div class="container">
        <h2>Shop</h2>
        <p>Welcome to our shop! Browse our products below:</p>
        <div class="products">
            <?php
                // Define an array of products
                $products = [
                    ['name' => 'Gloves', 'img' => 'placeholder_gloves.png'],
                    ['name' => 'Wraps', 'img' => 'placeholder_wraps.png'],
                    ['name' => 'Shirts', 'img' => 'placeholder_shirts.png'],
                    ['name' => 'Hoodies', 'img' => 'placeholder_hoodies.png'],
                    ['name' => 'Tumblers', 'img' => 'placeholder_tumblers.png'],
                ];

                // Loop through each product and display it
                foreach ($products as $product) {
                    echo "<div class='product'>";
                    echo "<img src='path/to/images/{$product['img']}' alt='{$product['name']}' />";
                    echo "<h3>{$product['name']}</h3>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</section>

<?php include '../parts/footer.php'; ?>