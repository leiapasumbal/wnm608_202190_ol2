<?php include '../parts/header.php'; ?>

<section>
    <div class="container">
        <h2>Products</h2>
        <p>Welcome to our shop! Browse our products below:</p>

        <div class="product-grid">
            <?php
            $mysqli = new mysqli("localhost", "username", "password", "boxing_gear");
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            $result = $mysqli->query("SELECT * FROM products");
            
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-item'>";
                echo "<a href='product_detail.php?id=" . $row['id'] . "'>";
                echo "<img src='" . $row['thumbnail'] . "' alt='" . $row['name'] . "' class='product-image'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "</a>";
                echo "</div>";
            }

            $mysqli->close();
            ?>
        </div>
    </div>
</section>

<?php include '../parts/footer.php'; ?>