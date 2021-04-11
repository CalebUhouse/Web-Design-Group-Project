<?php

  require "Restaurant.inc";

  HTMLStart( "Order Takeout Page" );

  HTMLHeader();

?>

        <section>
            <p class="section-header top-header">Redrock Tavern Menu</p>
            <p  class="menu-category" ondblclick="GetMenu('Takeout-Appetizers.html', 'appetizers');">Appetizers</p> 
            <ul id="appetizers" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('Takeout-SnS.html', 'soups-and-salads');">Soups and Salads</p> 
            <ul id="soups-and-salads" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('Takeout-Entrees.html', 'entrees');">Main Entrees</p>
            <ul id="entrees" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('Takeout-Kids-Menu.html', 'kids');">Kids Entrees</p>
            <ul id="kids" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('Takeout-Desserts.html', 'desserts');">Desserts</p>
            <ul id="desserts" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('Takeout-Drinks.html', 'drinks');">Drinks</p>
            <ul id="drinks" class="grid-container">

            </ul>

        </section>

        <aside class="section-header">
            <h2>
                Cart
            </h2>
            <ul id="rightlist" class="cart" ondragover="AllowDrop( event );" ondrop="Drop( event, 'rightlist' );">
                
                <div class="pricebox">
                    <li>Order Total:</li><li id="order-total">$0.00</li>
                </div>

            </ul>
        </aside>

<?php
    PageNav();

  PageFooter();

    HTMLEnd();
?>
