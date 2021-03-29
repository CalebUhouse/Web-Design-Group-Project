// Retreives the HTML file for the desired menu section
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

    xmlhttp.open( "GET", MenuFileName , true );

    xmlhttp.send();
}

function StartDrag( CurrentEvent )
{
    CurrentEvent.dataTransfer.setData( "text/html", CurrentEvent.target.id );
}

function AllowDrop( CurrentEvent )
{
    CurrentEvent.preventDefault();
}

function Drop( CurrentEvent, DestinationID )
{
    var DataID = CurrentEvent.dataTransfer.getData( "text/html" );

    document.getElementById( DestinationID ).appendChild( document.getElementById( DataID ).cloneNode( true ));
        
    CurrentEvent.preventDefault();
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
