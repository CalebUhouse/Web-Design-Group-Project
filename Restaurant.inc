<?php
  // inserts the header container
  function HTMLHeader()
  {
?>

      <header class="section-header">
        <h1>Redrock Tavern</h1>
      </header>

<?php 
  }
  // inserts from the beginning of the HTML to the beginning of the main container
  function HTMLStart( $Title )
  {
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $Title ?></title>
    <link href="Restaurant.css" type="text/css" rel="Stylesheet" />
    <script src="Restaurant.js" defer></script>
  </head>
  <body>
    <main>

<?php
  }
  // inserts the flags for the end of the main, body, and html containers
  function HTMLEnd()
  {
?>
      </main>
    </body>
  </html>

<?php
  }
?><?php
    function PageSideBar()
    {
?>
       <aside class="section-header">
        <h2>
            Promotional deals!
        </h2>
        <p>
            2 Drinks for the price of 2 Drinks!
        </p>
    </aside>
<?php 
    }
    function PageFooter()
    {
?>
      <footer>
         <p class="section-header">
                ~ Hours of Operation ~
            </p>
            <p class="section-header">
                Monday: 11am - 8:30pm
            </p>
            <p class="section-header">
                Tuesday: 11am - 8:30pm
            </p>
            <p class="section-header">
                Wednesday: 11am - 8:30pm
            </p>
            <p class="section-header">
                Thursday: 11am - 8:30pm
            </p>
            <p class="section-header">
                Friday: 11am - 9pm
            </p>
            <p class="section-header">
                Saturday: 11am - 9pm
            </p>
            <p class="section-header">
                Sunday: Closed
            </p>
      </footer>
<?php
    }
?>
<?php
    }
?>
