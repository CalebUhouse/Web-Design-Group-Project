<?php

  require "Restaurant.inc";

  HTMLStart( "Map Page" );

  HTMLHeader();

?>

        <section>
            <p class="section-header top-header">Where to Find Us</p>

            <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
            var setting = {"height":538,"width":803,"zoom":16,"queryString":"Chicken Dinner Road, Caldwell, ID, USA","place_id":"EiZDaGlja2VuIERpbm5lciBSb2FkLCBDYWxkd2VsbCwgSUQsIFVTQSIuKiwKFAoSCXMQYlrbyq9UEToRp8Bov4tmEhQKEgnLFxp4u7KvVBGcTXVDi0Lcbg","satellite":false,"centerCoord":[43.576596470648624,-116.77323904990216],"cid":"0x668bbf68c0a7113a","lang":"en","cityUrl":"/us/id/nampa-6126","cityAnchorText":"Map of Nampa, Idaho, United States","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"402939"};
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=402939';
            s.async = true;
            s.onload = function (e) {
            window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
            })();</script><a href="https://1map.com/map-embed">1 Map</a></div>

        </section>

<?php
    PageSideBar();

    PageNav();

    PageFooter();

  HTMLEnd();
?>
