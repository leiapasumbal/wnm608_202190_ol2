<?php include '../parts/header.php'; ?>

<style>
    .cart-container {
        display: flex;
        justify-content: space-between;
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }
    .cart-items {
        flex: 3;
        margin-right: 20px;
    }
    .cart-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .cart-item img {
        width: 100px;
        margin-right: 10px;
        border-radius: 5px;
    }
    .item-details {
        flex-grow: 1;
    }
    .item-price {
        font-weight: bold;
    }
    .delete-link {
        color: #F00;
        text-decoration: none;
        margin-left: 10px;
    }
    .order-summary {
        flex: 1;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 5px;
    }
    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    .total {
        font-weight: bold;
    }
    .checkout-btn {
        background-color: #000;
        color: white;
        padding: 10px 30px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-size: 1em;
        width: 100%;
        text-align: center;
    }
</style>

<section>
    <div class="cart-container">
        <div class="cart-items">
            <h2>Your cart</h2>
            <?php
            include_once "../functions.php"; // Include the file with database functions

            // Fetch cart items from the database based on session data
            $cartItems = getCartItems();

            // Loop through each cart item and display it
            foreach ($cartItems as $item) {
                ?>
                <div class="cart-item">
                    <img src="../img/<?= $item->thumbnail ?>" alt="<?= $item->name ?>" />
                    <div class="item-details">
                        <span><?= $item->name ?></span><br>
                        <span class="item-price">$<?= $item->price ?></span>
                        <a href="cart_actions.php?action=delete-cart-item&id=<?= $item->id ?>" class="delete-link">Delete</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="order-summary">
            <!-- Summary section remains the same -->
        </div>
    </div>
</section>

<?php include '../parts/footer.php'; ?>
