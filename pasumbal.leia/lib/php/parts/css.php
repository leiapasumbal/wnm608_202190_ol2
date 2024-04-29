<?php
echo <<<CSS
<style>
    /* Reset some basic elements */
    body, h1, h2, h3, p {
        margin: 0;
        padding: 0;
    }
    
    .main-content {
        padding-top: 70px; /* Adjust this value to match the height of your navbar */
    }

    /* Basic body styling */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background: #f5f5f5;
        color: #333;
        padding: 20px;
        padding-top: 70px;
    }
    
    .cart-title h2 {
        color: #333; /* Change the color to something visible on your background */
        font-size: 1.5em; /* Adjust the size as needed */
        /* Add any additional styles you need */
    }
    
    .cart-header h2 {
        color: #333; /* This should be a color that stands out from the background */
        font-size: 2rem; /* Adjust the size as needed */
        padding: 10px; /* Add some space around the text */
        background-color: #fff; /* Background color for the text area */
        margin-bottom: 20px; /* Space between the cart header and cart items */
    }

    /* Container for centering the content */
    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
    }

    /* Style for the cart title */
    .title {
        font-size: 2em;
        margin-bottom: 20px;
        text-align: center;
    }

    /* Grid system */
    .grid {
        display: flex;
        gap: 20px; /* Adjust the space between grid items */
    }

    /* Column widths */
    .col-xs-12 {
        flex-basis: 100%;
    }

    .col-md-7 {
        flex-basis: 58.33333%; /* 7/12 */
    }

    .col-md-5 {
        flex-basis: 41.66667%; /* 5/12 */
    }

    /* Cards */
    .card {
        background: #fff;
        border: 1px solid #ddd;
        padding: 20px;
    }

    .soft {
        box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
    }

    .flat {
        border: none;
    }

    /* The checkout button */
    .checkout-btn {
        background-color: #000;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        display: block;
        width: 100%;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 1em;
        letter-spacing: 1px;
        margin-top: 20px;
        text-decoration: none; /* If it's a link */
    }

    /* Responsive adjustments */
    @media (max-width: 800px) {
        .grid {
            flex-direction: column;
        }

        .col-md-7, .col-md-5 {
            flex-basis: auto;
        }
    }

    /* Your previous styles */
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
    
    .navbar {
        background-color: #333; /* Adjust the color to match your design */
        color: #333;
        padding: 1em 0;
        text-align: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000; /* Ensure the navbar is above other content */
        box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    }

    .navbar ul {
        padding: 0;
        margin: 0;
        list-style-type: none;
        overflow: hidden;
    }

    .navbar li {
        float: left; /* Or use display: inline; */
    }

    .navbar a {
        display: block;
        color: #333;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

/* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

/* Responsive column layout */
    .col {
        float: left;
        width: 100%;
    }

    @media (min-width: 600px) {
        .col.s1 {width: 8.33%;}
        .col.s2 {width: 16.66%;}
        .col.s3 {width: 25%;}
    /* Add as many sizes as you need */
    }

    .container {
        padding: 0 16px;
    }

/* Style the header */
    .header {
        background-color: #f1f1f1;
        padding: 30px;
        text-align: center;
    }
    
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
    
    /* Footer Styles */
    .footer {
        background-color: #f3f3f3; /* Adjust the color to match your design */
        padding: 2em 0;
        font-size: 0.8em;
        text-align: center;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        box-shadow: 0 -1px 2px rgba(0,0,0,0.2);
    }

    .footer ul {
        list-style-type: none;
        padding: 0;
    }

    .footer li {
        display: inline;
        margin-right: 20px;
    }

    .footer a {
        color: #333; /* Adjust the color to match your design */
        text-decoration: none;
    }

    .footer a:hover {
        text-decoration: underline;
    }

    .footer .container {
        width: 100%;
        margin: auto;
        padding: 0 20px;
        box-sizing: border-box;
    }
    
    .navbar, .cart-title {
        margin: 0;
        padding: 0;
    }
    
    * {
        box-sizing: border-box;
    }
    
    .navbar {
        z-index: 0; /* Higher than the cart title */
    }

    .cart-title {
        z-index: 0; /* Lower than the navbar */
    }
    
    .navbar {
        height: 90px; /* Or whatever height is appropriate for your navbar */
    }

    .cart-title {
        position: relative;
        top: 50px; /* Slightly more than the height of the navbar */
    }


</style>
CSS;
?>