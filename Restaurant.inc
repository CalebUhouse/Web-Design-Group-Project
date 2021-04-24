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
<?php
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
    function PageNav()
    {
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

    function Menu( $Category )
{
    // set the connection information
    //      dbase is the server name on the penguin network
    //      set the $UserName and $Password to your credentials.
    //      set the $Database to your penguin user name.
    $Server = "localhost";
    $UserName = "lhu";
    $Password = "LHU-Comp";
    $Database = "lhu";

    // connect to the database
    //      create a new instance of a mysqli object. this
    //      object contains the connection to the mysql server
    $Connection = new mysqli( $Server, $UserName, $Password, $Database ); 

    // check for a successful connection
    //      connect_error will evaluate to true if there is an error
    if ( $Connection->connect_error )
    {
        // stop the script and echo an error message
        echo "<h2>Database Error</h2>\n";
        die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
    }

    // make a select statement to get data from the database
    $SQL = "select description, price from menu_items where category='".$Category."';";    
    
    // execute the query
    //      use the query method of the $Connection object
    $Results = $Connection->query( $SQL );

    // check for results
    //      $Results will evaluate to true if there data is returned
    //      from the database, false if no data is returned
    if ( $Results )
    {

        // loop through the results
        //      the fecth_row method returns an array of the column
        //      data - one item in the array for each column in the
        //      select statement.
        //
        //      the statement in the while will evaluate to false when
        //      there are no more rows
        while( $Row = $Results->fetch_row() )
        {

            // add item
            echo "<td class=\"menu-item\">".$Row[0]."</td><td class=\"menu-price\">$".$Row[1]."</td>\n";



            // <td class="menu-item">NY Style Mini Pizza</td><td class="menu-price">$4.00</td>            

        }

    }
    else
    {
        // no results returned
        echo "<p>No results returned from the query</p>\n";
    }   
    
    // close the connection
    $Connection->close();

}

?>
