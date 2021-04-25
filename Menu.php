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
                    <?php
                        Menu( "Appetizers", "Menu");
                    ?>
                </ul>
                <ul>
                    <p class="menu-category">Soups and Salads</p> 
                    <?php
                        Menu( "SnS", "Menu");
                    ?>
                </ul>
                <ul>
                    <p class="menu-category">Main Entrees</p> 
                    <?php
                        Menu( "Entrees", "Menu");
                    ?>
                </ul>
                <ul>
                    <p class="menu-category">Desserts</p> 
                    <?php
                        Menu( "Desserts", "Menu");
                    ?>
                </ul>
                <ul>
                    <p class="menu-category">Drinks</p> 
                    <?php
                        Menu( "Drinks", "Menu");
                    ?>
                </ul>
                <p class="section-header">* Each meal comes with a choice of two sides - mashed potatoes, french fries, macaroni & cheese, soup, or side salad</p>
                <div class="kids-menu">
                    <p class="section-header top-header">Kid's Meals</p>
                    <ul class="menu">
                        <?php
                          Menu( "Kids Menu", "Menu");
                        ?>
                    </ul>
                    <p class="section-header">* Each meal comes with a choice of two sides - mashed potatoes, french fries, macaroni & cheese, soup, or side salad</p>
                </div>
            </div>
        </section>

<?php
    PageSideBar();

    PageNav();

    PageFooter();

  HTMLEnd();
?>
