<?php include '../parts/header.php'; ?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }
    .product-detail-container {
        display: flex;
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        align-items: flex-start;
    }
    .product-image {
        flex-basis: 50%;
        padding: 10px;
    }
    .product-image img {
        width: 100%;
        border-radius: 5px;
    }
    .product-info {
        flex-basis: 50%;
        padding: 10px;
    }
    .product-title {
        font-size: 2em;
        margin-bottom: 10px;
    }
    .product-price {
        font-size: 1.5em;
        color: #555;
        margin-bottom: 20px;
    }
    .product-description {
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .add-to-cart-btn {
        background-color: #000;
        color: white;
        padding: 10px 30px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-size: 1em;
    }
    .quantity-selector {
        margin-bottom: 20px;
    }
</style>

<section>
    <div class="product-detail-container">
        <?php
        $mysqli = new mysqli("localhost", "id22071658_leiapasumbal", "TaylorSwift13!", "leiadb");
        $product_id = $_GET['id'];

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $result = $mysqli->query("SELECT * FROM products WHERE id = $product_id");

        if ($row = $result->fetch_assoc()) {
            echo "<div class='product-image'><img src='../images/" . $row['thumbnail'] . "' alt='" . $row['name'] . "' /></div>";
            echo "<div class='product-info'>";
            echo "<h1 class='product-title'>" . htmlspecialchars($row['name']) . "</h1>";
            echo "<p class='product-price'>$" . number_format($row['price'], 2) . "</p>";
            
            echo "<div class='quantity-selector'>Amount: <select>";
            for($i = 1; $i <= 10; $i++){
                echo "<option value='" . $i . "'>" . $i . "</option>";
            }
            echo "</select></div>";

            echo "<div class='product-description'>" . nl2br(htmlspecialchars($row['description'])) . "</div>";
            echo "<button class='add-to-cart-btn' onclick='window.location=\"cart.php?id=" . $row['id'] . "\"'>Add To Cart</button>";
            echo "</div>";
        } else {
            echo "<p>Product not found.</p>";
        }
        $mysqli->close();
        ?>
    </div>
</section>

<?php include '../parts/footer.php'; ?>