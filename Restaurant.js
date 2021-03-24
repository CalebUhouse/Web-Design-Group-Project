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
    document.getElementById( 'appetizers' ).innerHTML = "<p></p>";
    document.getElementById( 'soups-and-salads' ).innerHTML = "<p></p>";
    document.getElementById( 'entrees' ).innerHTML = "<p></p>";
    document.getElementById( 'desserts' ).innerHTML = "<p></p>";
    document.getElementById( 'drinks' ).innerHTML = "<p></p>";
}
