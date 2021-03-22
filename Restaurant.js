function GetMenu( MenuFileName, OutputID )
{
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
