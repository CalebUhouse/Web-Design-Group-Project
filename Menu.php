<?php

  require "Restaurant.inc";

  HTMLStart( "Menu Page" );

  HTMLHeader();

?>

        <section>
            <p class="section-header top-header">Redrock Tavern Menu</p>
            <div class="menu">
                <ul>
                    <p class="menu-category">Appetizers</p> 
                    <li>Bread Roll Basket - Comes with 4 buttered bread rolls</li>
                    <li>Family Bread Roll Basket - Comes with 6 buttered bread rolls</li>
                    <li>Garlic Breadsticks</li>
                    <li>Chicken Wings - one dozen wings: plain, mild, hot, BBQ w/ bleu cheese or ranch</li>
                </ul>
                <ul>
                    <p class="menu-category">Soups and Salads</p> 
                    <li>Grilled Chicken Caesar Salad - Romaine mix topped w/ caesar dressing, croutons, onions, and mozzarella cheese</li>
                    <li>House Salad</li>
                    <li>Greek Salad - mixed spring greens topped w/ kalamata olives, cucumber, pickled red onions, and feta, w/ greek dressing</li>
                    <li>French Onion Soup</li>
                    <li>New England Clam Chowder Soup</li>
                </ul>
                <ul>
                    <p class="menu-category">Main Entrees</p> 
                    <li>Signature Chicken Dinner</li>
                    <li>Crispy Chicken</li>
                    <li>Grilled Chicken</li>
                    <li>Ranch Tavern Double</li>
                    <li>Baked Mac & Cheese - served with creamy cheddar cheese, crispy bacon bits, and bread crumbs</li>
                </ul>
                <ul>
                    <p class="menu-category">Desserts</p> 
                    <li>Ice Cream Bowl - bowl served with 3 scoops of ice cream of your choice: vanilla, chocolate, strawberry</li>
                    <li>Carrot Cake - topped w/ cream cheese icing</li>
                    <li>Chocolate Cake w/ Peanut Butter Icing</li>
                    <li>Brownie Sundae - brownie served w/ vanilla ice cream and topped w/ chocalate syrup and whipped cream</li>
                    <li>Cheesecake</li>
                </ul>
                <ul>
                    <p class="menu-category">Drinks</p> 
                    <li>Water</li>
                    <li>Lemonade</li>
                    <li>Raspberry Lemonade</li>
                    <li>Coke</li>
                    <li>Dr. Pepper</li>
                    <li>Root Beer</li>
                    <li>Ginger Ale</li>
                    <li>Coffee</li>
                    <li>Sweet Tea</li>
                    <li>Unsweetened Tea</li>
                </ul>
                <p class="section-header">* Each meal comes with a choice of two sides - mashed potatoes, french fries, macaroni & cheese, soup, or side salad</p>
                <div class="kids-menu">
                    <p class="section-header top-header">Kid's Meals</p>
                    <ul class="menu">
                        <li>Chicken Tenders</li>
                        <li>Hamburger</li>
                        <li>Hot Dog</li>
                        <li>Grilled Cheese Sandwich</li>
                        <li>Pizza - pepperoni, cheese, or sausage</li>
                    </ul>
                    <p class="section-header">* Each meal comes with a choice of two sides - mashed potatoes, french fries, macaroni & cheese, soup, or side salad</p>
                </div>
            </div>
        </section>

<?php
  PageSideBar();
?>
        <nav>
            <div class="navigation-bar">
                <a title="Home" href="Index.php">Home</a>
            </div>
            <div class="navigation-bar">
                <a title="About" href="About.php">About</a>
            </div>
            <div class="navigation-bar">
                <a title="Menu" href="Menu.php">Menu</a>
            </div>
            <div class="navigation-bar">
                <a title="Map Page" href="Map.php">Find Us</a>
            </div>
            <div class="navigation-bar">
                <a title="Contact Page" href="Contact Us.php">Contact Us</a>
            </div>
            <div class="navigation-bar">
                <a title="Contact Page" href="Takeout.php">Order Takeout</a>
            </div>
        </nav>

<?php
  PageFooter();
?>

<?php
  HTMLEnd();
?>
