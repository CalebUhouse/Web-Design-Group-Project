// Retreives the HTML file for the desired menu section while clearing other sections
function GetMenu( MenuFileName, OutputID )
{
    TakeoutFocus();
    var xmlhttp;

    if ( window.XMLHttpRequest )
    {
        xmlhttp = new XMLHttpRequest;
    }
    else
    {
        xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
    }

    xmlhttp.onreadystatechange = function ()
    {
        if (( xmlhttp.readyState == 4 ) &&
            ( xmlhttp.status == 200 ))
        {
            document.getElementById( OutputID ).innerHTML = xmlhttp.responseText;
        }
    }


    xmlhttp.open( "POST", "Takeout-Menu.php", true );

    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    var Argument = "Category=" + Category;    

    xmlhttp.send( Argument );
}

// allows item to be dragged from takeout menu into cart
function StartDrag( CurrentEvent )
{
    CurrentEvent.dataTransfer.setData( "text/html", CurrentEvent.target.id );
}

// allows item to be dragged from takeout menu into cart
function AllowDrop( CurrentEvent )
{
    CurrentEvent.preventDefault();
}

function Drop( CurrentEvent, DestinationID )
{
    var DataID = CurrentEvent.dataTransfer.getData( "text/html" );

    document.getElementById( DestinationID ).appendChild( document.getElementById( DataID ).cloneNode( true ));
        
    CurrentEvent.preventDefault();

    CalculatePrice();
}

// Clears the other takeout boxes before executing the GetMenu function so that only one section displays at a time
function TakeoutFocus() 
{
    document.getElementById( 'appetizers' ).innerHTML = "<li></li>";
    document.getElementById( 'soups-and-salads' ).innerHTML = "<li></li>";
    document.getElementById( 'entrees' ).innerHTML = "<li></li>";
    document.getElementById( 'kids' ).innerHTML = "<li></li>";
    document.getElementById( 'desserts' ).innerHTML = "<li></li>";
    document.getElementById( 'drinks' ).innerHTML = "<li></li>";
}

// adds all of the prices in the cart section and outputs a total for the customer
function CalculatePrice()
{
    var PriceList = document.querySelectorAll( "ul[id=\"rightlist\"] li" );

    var Total = 0.0;

    // total the price values
    for( var i=0; i<PriceList.length; i++ )
    {
    Total   +=  Number(PriceList[i].getAttribute( "data-price" ) );
    }

    // Sets value to USD
    var FormattedTotal = Total.toLocaleString( 'en-US', {style: "currency", currency: "USD"} );

    // Puts total in Order Total box
    document.getElementById( 'order-total' ).innerHTML = FormattedTotal

}
