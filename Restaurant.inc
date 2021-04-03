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
?>
