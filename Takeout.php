<?php

  require "Restaurant.inc";

  HTMLStart( "Order Takeout Page" );

  HTMLHeader();

?>

        <section>
            <p class="section-header top-header">Redrock Tavern Menu</p>
            <p  class="menu-category" ondblclick="GetMenu('Appetizers', 'appetizers');">Appetizers</p> 
            <ul id="appetizers" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('SnS', 'soups-and-salads');">Soups and Salads</p> 
            <ul id="soups-and-salads" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('Entrees', 'entrees');">Main Entrees</p>
            <ul id="entrees" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('Kids Menu', 'kids');">Kids Entrees</p>
            <ul id="kids" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('Desserts', 'desserts');">Desserts</p>
            <ul id="desserts" class="grid-container">

            </ul>
            <p class="menu-category" ondblclick="GetMenu('Drinks', 'drinks');">Drinks</p>
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
