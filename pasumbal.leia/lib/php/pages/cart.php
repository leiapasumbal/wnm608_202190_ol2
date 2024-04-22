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
            <!-- Dynamically list cart items here. Example structure for a cart item: -->
            <div class="cart-item">
                <img src="path_to_item_image.jpg" alt="Item Name" />
                <div class="item-details">
                    <span>Item Name</span><br>
                    <span class="item-price">$Item Price</span>
                    <a href="#" class="delete-link">Delete</a>
                </div>
            </div>
            <!-- Repeat for each item in the cart -->
        </div>

        <div class="order-summary">
            <h3>Summary</h3>
            <div class="summary-item"><span>Sub Total</span><span>$SubTotal</span></div>
            <div class="summary-item"><span>Taxes</span><span>$Taxes</span></div>
            <div class="summary-item total"><span>Total</span><span>$Total</span></div>
            <button class="checkout-btn" onclick="location.href='checkout.php'">Checkout</button>
        </div>
    </div>
</section>

<?php include '../parts/footer.php'; ?>
