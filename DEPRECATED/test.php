<?php
echo "
<!DOCTYPE html>
<html lang=\"en\"  prefix=\"og: http://ogp.me/ns#\"><!-- InstanceBegin template=\"/Templates/guest.dwt\" codeOutsideHTMLIsLocked=\"false\" -->
<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;
            j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P579BWL');
    </script>
    <!-- End Google Tag Manager -->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <!-- InstanceBeginEditable name=\"doctitle\" -->
    <title>Detailed Search | Certified Tourist Information Centers (TICs) in Japan</title>
    <!-- InstanceEndEditable -->
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,minimum-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"format-detection\" 	content=\"telephone=no\">
    <meta name=\"robots\" 			content=\"index,follow\">

    <meta property=\"og:site_name\" 	content=\"Certified Tourist Information Centers (TICs) in Japan\">
    <meta property=\"og:locale\" 		content=\"en_US\"/>
    <meta name=\"twitter:card\" 		content=\"summary\">
    <meta property=\"og:type\" 		content=\"article\">

    <!-- InstanceBeginEditable name=\"meta\" -->
    <meta property=\"og:image\" 		content=\"https://tic.jnto.go.jp/img/top/main01.avif\">
    <meta property=\"og:description\" content=\"\">
    <meta property=\"og:title\" 		content=\"Detailed Search\">
    <meta property=\"og:url\" 		content=\"https://tic.jnto.go.jp/eng/list.php\">
    <link rel=\"alternate\" hreflang=\"ja\" 		href=\"https://tic.jnto.go.jp/jpn/list.php\">
    <link rel=\"alternate\" hreflang=\"en\" 		href=\"https://tic.jnto.go.jp/eng/list.php\">
    <link rel=\"alternate\" hreflang=\"ko\" 		href=\"https://tic.jnto.go.jp/kor/list.php\">
    <link rel=\"alternate\" hreflang=\"zh-Hans\" 	href=\"https://tic.jnto.go.jp/chs/list.php\">
    <link rel=\"alternate\" hreflang=\"zh-Hant\" 	href=\"https://tic.jnto.go.jp/chc/list.php\">
    <!-- InstanceEndEditable -->

    <!-- fvavicon / apple-touch-icon -->
    <link rel=\"icon\" type=\"image/vnd.microsoft.icon\" href=\"../img/tmpl/index.ico\">
    <!--CSS-->
    <link href=\"../css/gst_cmn.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">

    <!-- InstanceBeginEditable name=\"edit_css\" -->
    <!-- edit_css-->
    <!-- InstanceEndEditable -->

    <!--JS-->
    <script src=\"https://tic.jnto.go.jp/js/jquery.3.6.0.min.js\"></script>
    <script src=\"https://tic.jnto.go.jp/js/gst_cmn.js\"></script>
    <!-- InstanceBeginEditable name=\"head\" -->
    <link href=\"https://tic.jnto.go.jp//css/_gst_list.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    <script type=\"text/javascript\" src=\"//maps.google.co.jp/maps/api/js?language=en&key=AIzaSyA5nwaHU8Ix7eExd9TPD9WV0z449F82Btc\"></script>
    <script src=\"https://tic.jnto.go.jp/js/jquery.sumoselect.js\"></script>
    <link href=\"https://tic.jnto.go.jp/css/jquery.sumoselect.css\" rel=\"stylesheet\" />
    <script src=\"https://tic.jnto.go.jp/js//jquery.hotkeys.js\"></script>
    <script>

        //--------------------------------------------------------------------
        // ロード後実行部
        //--------------------------------------------------------------------

        $(function(){

            // ショートカット　次ページ
            $(document).on(\"keydown\",null,\"right\",function(){
                if( $(\".skip_box a[title='next page']:first\").prop(\"href\") )
                    location.href= $(\".skip_box a[title='next page']:first\").prop(\"href\")
            });

            // ショートカット　前ページ
            $(document).on(\"keydown\",null,\"left\",function(){
                if( $(\".skip_box a[title='previous page']:first\").prop(\"href\") )
                    location.href= $(\".skip_box a[title='previous page']:first\").prop(\"href\")
            });

            // マルチプルselect設定
            $(\"#category,#service\").SumoSelect({search: true, placeholder: '',csvDispCount: 0});

            // サービスマルチプルの子要素選択時
            $('div.sumo_service ul.options li').on(\"click\",function(e){
                service_check_child($(this));
            });

            // 初期表示時のサービスチェック可否設定
            $('div.sumo_service ul.options li.selected').map(function(i,e){
                service_check_child($(this));
            });

            // マップ初期非表示
            if( Cookies.get('tic_guest_list_map_visible')==\"false\" ){
                $(\".gmap_wrap\").hide();
                $(\"#div_map_open\").show();
            }

            // マップ非表示クリック時
            $(\"#btn_map_close\").on(\"click\",function(){
                Cookies.set('tic_guest_list_map_visible', 'false', { expires: 365 });
                $(\".gmap_wrap\").hide();
                $(\"#div_map_open\").show();
                return false;
            });

            // マップ再表示クリック時
            $(\"#btn_map_open\").on(\"click\",function(){
                Cookies.remove('tic_guest_list_map_visible');
                $(\".gmap_wrap\").show();
                $(\"#div_map_open\").hide();
                return false;
            });

            // 案内所の配列生成
            var aryLoc 	= new Array();
            var aryLat	= new Array();
            var aryLng	= new Array();

            aryLoc.push({
                'index':'1' ,
                'name':	'',
                'cat':	3,
                'lat': 	'42.787515',
                'lng':	'141.676502' });
            aryLat.push(42.787515);
            aryLng.push(141.676502);
            aryLoc.push({
                'index':'2' ,
                'name':	'',
                'cat':	2,
                'lat': 	'44.02015',
                'lng':	'144.254105' });
            aryLat.push(44.02015);
            aryLng.push(144.254105);
            aryLoc.push({
                'index':'3' ,
                'name':	'',
                'cat':	2,
                'lat': 	'43.671078',
                'lng':	'142.453896' });
            aryLat.push(43.671078);
            aryLng.push(142.453896);
            aryLoc.push({
                'index':'4' ,
                'name':	'',
                'cat':	2,
                'lat': 	'43.762655',
                'lng':	'142.359491' });
            aryLat.push(43.762655);
            aryLng.push(142.359491);
            aryLoc.push({
                'index':'5' ,
                'name':	'',
                'cat':	2,
                'lat': 	'43.591372',
                'lng':	'142.4628218' });
            aryLat.push(43.591372);
            aryLng.push(142.4628218);
            aryLoc.push({
                'index':'6' ,
                'name':	'',
                'cat':	2,
                'lat': 	'43.347275',
                'lng':	'142.388061' });
            aryLat.push(43.347275);
            aryLng.push(142.388061);
            aryLoc.push({
                'index':'7' ,
                'name':	'',
                'cat':	2,
                'lat': 	'41.77593',
                'lng':	'140.815384' });
            aryLat.push(41.77593);
            aryLng.push(140.815384);
            aryLoc.push({
                'index':'8' ,
                'name':	'',
                'cat':	2,
                'lat': 	'41.77401',
                'lng':	'140.726774' });
            aryLat.push(41.77401);
            aryLng.push(140.726774);
            aryLoc.push({
                'index':'9' ,
                'name':	'',
                'cat':	2,
                'lat': 	'43.068584',
                'lng':	'141.349226' });
            aryLat.push(43.068584);
            aryLng.push(141.349226);
            aryLoc.push({
                'index':'10' ,
                'name':	'',
                'cat':	2,
                'lat': 	'41.904814',
                'lng':	'140.648365' });
            aryLat.push(41.904814);
            aryLng.push(140.648365);
            aryLoc.push({
                'index':'11' ,
                'name':	'',
                'cat':	2,
                'lat': 	'42.96609',
                'lng':	'141.167211' });
            aryLat.push(42.96609);
            aryLng.push(141.167211);
            aryLoc.push({
                'index':'12' ,
                'name':	'',
                'cat':	2,
                'lat': 	'42.9817324',
                'lng':	'144.3834444' });
            aryLat.push(42.9817324);
            aryLng.push(144.3834444);
            aryLoc.push({
                'index':'13' ,
                'name':	'',
                'cat':	2,
                'lat': 	'42.982964',
                'lng':	'144.381034' });
            aryLat.push(42.982964);
            aryLng.push(144.381034);
            aryLoc.push({
                'index':'14' ,
                'name':	'',
                'cat':	2,
                'lat': 	'42.990242',
                'lng':	'144.382378' });
            aryLat.push(42.990242);
            aryLng.push(144.382378);
            aryLoc.push({
                'index':'15' ,
                'name':	'',
                'cat':	2,
                'lat': 	'42.901718',
                'lng':	'140.745781' });
            aryLat.push(42.901718);
            aryLng.push(140.745781);
            aryLoc.push({
                'index':'16' ,
                'name':	'',
                'cat':	2,
                'lat': 	'44.022079',
                'lng':	'144.2737815' });
            aryLat.push(44.022079);
            aryLng.push(144.2737815);
            aryLoc.push({
                'index':'17' ,
                'name':	'',
                'cat':	2,
                'lat': 	'42.452047',
                'lng':	'141.180984' });
            aryLat.push(42.452047);
            aryLng.push(141.180984);
            aryLoc.push({
                'index':'18' ,
                'name':	'',
                'cat':	2,
                'lat': 	'42.492473',
                'lng':	'141.143067' });
            aryLat.push(42.492473);
            aryLng.push(141.143067);
            aryLoc.push({
                'index':'19' ,
                'name':	'',
                'cat':	2,
                'lat': 	'41.980706',
                'lng':	'140.670397' });
            aryLat.push(41.980706);
            aryLng.push(140.670397);
            aryLoc.push({
                'index':'20' ,
                'name':	'',
                'cat':	2,
                'lat': 	'43.200292',
                'lng':	'141.002961' });
            aryLat.push(43.200292);
            aryLng.push(141.002961);

            var map = new google.maps.Map(document.getElementById(\"gmap\"), {
                zoom: 9,
                center: new google.maps.LatLng(35.6809, 139.7669),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoomControlOptions: {position: google.maps.ControlPosition.TOP_RIGHT},
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false,
                fullscreenControl: false,
                scaleControl: true,
                maxZoom: 19,
                minZoom: 4
            });

            // 案内所マーカーの設置
            for( i=0; i<aryLoc.length; i++ ){
                makeMarker(map, aryLoc[i] );
            }

            // マーカーが一つも無い場合
            if( aryLat.length==0 ){
                $(\"#map\").hide();
                // マーカーが一つしかない場合→ズームを設定
            } else if( aryLat.length==1 ){
                map.setCenter(  new google.maps.LatLng(aryLat[0],aryLng[0]) );
                map.setZoom(12);
            } else {
                // 表示領域の計算
                var minPoint = new google.maps.LatLng(Math.min.apply(Math, aryLat), Math.min.apply(Math, aryLng)); // 最小緯度経度
                var maxPoint = new google.maps.LatLng(Math.max.apply(Math, aryLat), Math.max.apply(Math, aryLng)); // 最大緯度経度

                // ズーム設定
                map.fitBounds(new google.maps.LatLngBounds(minPoint, maxPoint));
            }

        });

        //--------------------------------------------------------------------
        // 関数定義部
        //--------------------------------------------------------------------	

        var info;

        // マーカー作成関数
        function makeMarker(map, loc) {

            var marker = new google.maps.Marker({
                position:	new google.maps.LatLng(loc.lat, loc.lng),
                title:		loc.name,
                map: 		map,
                icon: 		\"https://tic.jnto.go.jp/img/gmap_marker/mapmarker_c\" + loc.cat + \"_\" + (\"00\" + loc.index).slice( -2 ) +\".png\",
                //shadow:		\"https://tic.jnto.go.jp/img/mkr_sdw.png\",
                zIndex:		20-parseInt(loc.index)
            });

            google.maps.event.addListener(marker, \"click\", function(e){
                var offset_top = $(\"#tic_\" + loc.index).offset().top;
                $('html,body').animate({ scrollTop: offset_top }, 'slow');
                return false;
            });
        }

    </script>
    <!-- InstanceEndEditable -->
</head>

<body id=\"body_eng\" class=\"dsearch \">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-P579BWL\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->	<header>
    <div class=\"inner\">
        <div class=\"logo\">
            <a href=\"index.php\"><span class=\"m_logo\"><img src=\"../img/tmpl/logo.png\" alt=\"\"></span>
                <h1>Certified Tourist Information Centers <span>(TICs) in Japan</span>
                </h1></a>
        </div>
        <div class=\"menubox\">
            <div class=\"hidden_box\">
                <input type=\"checkbox\" id=\"label1\" />
                <label onclick=\"\" for=\"label1\"><span></span></label>
                <div class=\"hidden_show\">
                    <ul>
                        <li><a href=\"../jpn/index.php\">日本語</a></li>
                        <li><a href=\"../eng/index.php\">English</a></li>
                        <li><a href=\"../kor/index.php\">한국어</a></li>
                        <li><a href=\"../chs/index.php\">簡体中文</a></li>
                        <li><a href=\"../chc/index.php\">繁體中文</a></li>
                    </ul>
                </div>
            </div>

            <div class=\"hidden_box2\">
                <input type=\"checkbox\" id=\"label2\" />
                <label onclick=\"\" for=\"label2\"><span></span></label>
                <div class=\"hidden_show2\">
                    <ul>
                        <li><a href=\"index.php\">HOME</a></li>
                        <li><a href=\"list.php\">Detailed Search</a></li>
                        <li><a href=\"map.php\">Search from map</a></li>
                        <li><a href=\"about_tic.php\">About JNTO TICs</a></li>
                        <li><a href=\"pickup_list.php\">Featured centers</a></li>
                        <li><a href=\"livecamera.php\">Live cameras
                                at popular destinations</a></li>
                        <li><a href=\"https://www.japan.travel/en/privacy-policy/\" target=\"_blank\" class=\"blank\">Privacy Policy</a></li>
                        <li><a href=\"cookie_policy.php\" >Cookie Policy</a></li>
                        <li><a href=\"https://www.japan.travel/en/terms-of-use/\" target=\"_blank\" class=\"blank\">Terms of Use</a></li>
                        <li><a href=\"https://www.jnto.go.jp/\" target=\"_blank\" class=\"blank\">Global TOP</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


<ol class=\"breadcrumb\">
    <li><a href=\"index.php\">HOME</a></li><!-- InstanceBeginEditable name=\"breadcrumb\" --><li>Detailed Search</li><!-- InstanceEndEditable -->
</ol>


<main>
    <!-- InstanceBeginEditable name=\"main\" -->
    <div class=\"inner\">
        <section class=\"box1\">
            <h2>Detailed Search


            </h2>
            <div class=\"btntype btn_nol serch pc\"><a href=\"map.php\"><span>Search from map</span></a></div>
            <form method=\"get\" action=\"\">
                <div class=\"ds_box\">
                    <select name=\"pref\" id=\"pref\" class=\"s_icon\">
                        <option label=\"  \" value=\"\" selected=\"selected\">  </option>
                        <option label=\"Hokkaido\" value=\"1\">Hokkaido</option>
                        <option label=\"Aomori\" value=\"2\">Aomori</option>
                        <option label=\"Iwate\" value=\"3\">Iwate</option>
                        <option label=\"Miyagi\" value=\"4\">Miyagi</option>
                        <option label=\"Akita\" value=\"5\">Akita</option>
                        <option label=\"Yamagata\" value=\"6\">Yamagata</option>
                        <option label=\"Fukushima\" value=\"7\">Fukushima</option>
                        <option label=\"Ibaraki\" value=\"8\">Ibaraki</option>
                        <option label=\"Tochigi\" value=\"9\">Tochigi</option>
                        <option label=\"Gunma\" value=\"10\">Gunma</option>
                        <option label=\"Saitama\" value=\"11\">Saitama</option>
                        <option label=\"Chiba\" value=\"12\">Chiba</option>
                        <option label=\"Tokyo\" value=\"13\">Tokyo</option>
                        <option label=\"Kanagawa\" value=\"14\">Kanagawa</option>
                        <option label=\"Niigata\" value=\"15\">Niigata</option>
                        <option label=\"Toyama\" value=\"16\">Toyama</option>
                        <option label=\"Ishikawa\" value=\"17\">Ishikawa</option>
                        <option label=\"Fukui\" value=\"18\">Fukui</option>
                        <option label=\"Yamanashi\" value=\"19\">Yamanashi</option>
                        <option label=\"Nagano\" value=\"20\">Nagano</option>
                        <option label=\"Gifu\" value=\"21\">Gifu</option>
                        <option label=\"Shizuoka\" value=\"22\">Shizuoka</option>
                        <option label=\"Aichi\" value=\"23\">Aichi</option>
                        <option label=\"Mie\" value=\"24\">Mie</option>
                        <option label=\"Shiga\" value=\"25\">Shiga</option>
                        <option label=\"Kyoto\" value=\"26\">Kyoto</option>
                        <option label=\"Osaka\" value=\"27\">Osaka</option>
                        <option label=\"Hyogo\" value=\"28\">Hyogo</option>
                        <option label=\"Nara\" value=\"29\">Nara</option>
                        <option label=\"Wakayama\" value=\"30\">Wakayama</option>
                        <option label=\"Tottori\" value=\"31\">Tottori</option>
                        <option label=\"Shimane\" value=\"32\">Shimane</option>
                        <option label=\"Okayama\" value=\"33\">Okayama</option>
                        <option label=\"Hiroshima\" value=\"34\">Hiroshima</option>
                        <option label=\"Yamaguchi\" value=\"35\">Yamaguchi</option>
                        <option label=\"Tokushima\" value=\"36\">Tokushima</option>
                        <option label=\"Kagawa\" value=\"37\">Kagawa</option>
                        <option label=\"Ehime\" value=\"38\">Ehime</option>
                        <option label=\"Kochi\" value=\"39\">Kochi</option>
                        <option label=\"Fukuoka\" value=\"40\">Fukuoka</option>
                        <option label=\"Saga\" value=\"41\">Saga</option>
                        <option label=\"Nagasaki\" value=\"42\">Nagasaki</option>
                        <option label=\"Kumamoto\" value=\"43\">Kumamoto</option>
                        <option label=\"Oita\" value=\"44\">Oita</option>
                        <option label=\"Miyazaki\" value=\"45\">Miyazaki</option>
                        <option label=\"Kagoshima\" value=\"46\">Kagoshima</option>
                        <option label=\"Okinawa\" value=\"47\">Okinawa</option>
                    </select>


                    <div class=\"ds_box_inr\">
                        <ul>
                            <li>
                                <h5>Category<span><a href=\"https://www.japan.travel/en/plan/tic-certification/\" target=\"_blank\" rel=\"noopener noreferrer\">What is TIC Category</a></span></h5>
                                <select name=\"category[]\" id=\"category\" multiple=\"multiple\">
                                    <option label=\"Category 3\" value=\"3\">Category 3</option>
                                    <option label=\"Category 2\" value=\"2\">Category 2</option>
                                    <option label=\"Category 1\" value=\"1\">Category 1</option>
                                    <option label=\"Partner\" value=\"10\">Partner</option>
                                </select>

                            </li>
                            <li>
                                <h5>Services</h5>
                                <select name=\"service[]\" id=\"service\" multiple=\"multiple\">
                                    <option label=\"Wi-Fi\" value=\"10\">Wi-Fi</option>
                                    <option label=\"Baggage storage\" value=\"20\">Baggage storage</option>
                                    <option label=\"- Fees apply\" value=\"22\">- Fees apply</option>
                                    <option label=\"- Free of charge\" value=\"24\">- Free of charge</option>
                                    <option label=\"Culture workshop / Tours\" value=\"30\">Culture workshop / Tours</option>
                                    <option label=\"- Kimono\" value=\"31\">- Kimono</option>
                                    <option label=\"- Calligraphy\" value=\"32\">- Calligraphy</option>
                                    <option label=\"- Origami\" value=\"33\">- Origami</option>
                                    <option label=\"- Tea ceremony\" value=\"34\">- Tea ceremony</option>
                                    <option label=\"- Guided tours\" value=\"35\">- Guided tours</option>
                                    <option label=\"Rental bicycle / Bicycle sharing\" value=\"40\">Rental bicycle / Bicycle sharing</option>
                                    <option label=\"- Fees apply\" value=\"42\">- Fees apply</option>
                                    <option label=\"- Free of charge\" value=\"44\">- Free of charge</option>
                                    <option label=\"Souvenir \" value=\"50\">Souvenir </option>
                                    <option label=\"Currency exchange\" value=\"60\">Currency exchange</option>
                                    <option label=\"SIM card sales\" value=\"70\">SIM card sales</option>
                                    <option label=\"Mobile Wi-Fi rental\" value=\"80\">Mobile Wi-Fi rental</option>
                                    <option label=\"PC / Tablet available\" value=\"90\">PC / Tablet available</option>
                                    <option label=\"Prayer room\" value=\"100\">Prayer room</option>
                                    <option label=\"Accessible\" value=\"110\">Accessible</option>
                                    <option label=\"- Accessible ramps\" value=\"111\">- Accessible ramps</option>
                                    <option label=\"- Sign language\" value=\"112\">- Sign language</option>
                                    <option label=\"- Wheelchair hire\" value=\"113\">- Wheelchair hire</option>
                                    <option label=\"- Tactile paving\" value=\"114\">- Tactile paving</option>
                                    <option label=\"- Toilet\" value=\"115\">- Toilet</option>
                                    <option label=\"Charging station\" value=\"120\">Charging station</option>
                                    <option label=\"Baby care room\" value=\"130\">Baby care room</option>
                                    <option label=\"Toilet\" value=\"140\">Toilet</option>
                                </select>

                            </li>
                            <li>
                                <h5>Keyword</h5>
                                <input type=\"text\" name=\"keyword\" value=\"\"  id=\"keyword\" />
                            </li>
                        </ul>
                        <input id=\"btnSearch_tic\" type=\"submit\" name=\"btnSearch_tic\" value=\"SEARCH\" class=\"search\">
                        <!--<input type=\"submit\" value=\"SEARCH\" class=\"search\">-->
                    </div>
                </div>
            </form>
        </section><!--//box1-->

        <section class=\"box2\">

            <h3>1496<span>results</span></h3>

            <div class=\"gmap_wrap\">
                <div id=\"gmap\" class=\"gmap\"></div>

                <a href=\"#\" id=\"btn_map_close\"><span><span></span></span></a>
            </div><!--//gmap_wrap-->
        </section><!--//box2-->

        <div id=\"div_map_open\" class=\"btntype btn_nol btn_center\" style=\"display:none;\"><a href=\"#\" id=\"btn_map_open\"><span>Show Map</span></a></div>


        <div class=\"skip_box\"><span class=\"cur\"><b>1</b></span><a href=\"/eng/list.php?page=2\" title=\"page 2\">2</a><a href=\"/eng/list.php?page=3\" title=\"page 3\">3</a><a href=\"/eng/list.php?page=4\" title=\"page 4\">4</a><a href=\"/eng/list.php?page=5\" title=\"page 5\">5</a><a href=\"/eng/list.php?page=6\" title=\"page 6\">6</a><a href=\"/eng/list.php?page=7\" title=\"page 7\">7</a><a href=\"/eng/list.php?page=2\" title=\"next page\">Next &gt;</a><a href=\"/eng/list.php?page=75\" title=\"last page\">&nbsp;...Last &gt;&gt;</a></div>

        <section class=\"box3\">
            <div class=\"a_sev_ico\"><span><a href=\"#\">About the Service Icons</a></span>
            </div><!--//a_sev_ico-->


            <div class=\"ds_rst\">

                <div id=\"tic_1\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=3101\" target=\"_blank\">
                        <span class=\"cote3 pc\">Category 3</span>
                        <h2><span>1</span>
                            Hokkaido Tourist Information Center (New Chitose Airport)
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/5894_public_img1.avif\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote3 sp\">Category 3</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                2F New Chitose Airport International Terminal Building, Bibi, Chitose-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic60 lazyload\" title=\"Currency exchange\">Currency exchange</li>
                                <li class=\"s_ic70 lazyload\" title=\"SIM card sales\">SIM card sales</li>
                                <li class=\"s_ic80 lazyload\" title=\"Mobile Wi-Fi rental\">Mobile Wi-Fi rental</li>
                                <li class=\"s_ic100 lazyload\" title=\"Prayer room\">Prayer room</li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                                <li class=\"s_ic120 lazyload\" title=\"Charging station\">Charging station</li>
                                <li class=\"s_ic130 lazyload\" title=\"Baby care room\">Baby care room</li>
                                <li class=\"s_ic140 lazyload\" title=\"Toilet\">Toilet</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_2\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1015\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>2</span>
                            Abashiri Tourist Information
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/7166_public_img1.avif\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                2-2 Shinmachi, Abashiri-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_3\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=3223\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>3</span>
                            Asahikawa Airport Tourist information center
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/6955_public_img1.avif\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                16-98 Higashi2sen, Higashikagura-cho Kamikawagun, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic10 lazyload\" title=\"Wi-Fi\">Wi-Fi</li>
                                <li class=\"s_ic50 lazyload\" title=\"Souvenir \">Souvenir </li>
                                <li class=\"s_ic60 lazyload\" title=\"Currency exchange\">Currency exchange</li>
                                <li class=\"s_ic70 lazyload\" title=\"SIM card sales\">SIM card sales</li>
                                <li class=\"s_ic80 lazyload\" title=\"Mobile Wi-Fi rental\">Mobile Wi-Fi rental</li>
                                <li class=\"s_ic90 lazyload\" title=\"PC / Tablet available\">PC / Tablet available</li>
                                <li class=\"s_ic100 lazyload\" title=\"Prayer room\">Prayer room</li>
                                <li class=\"s_ic120 lazyload\" title=\"Charging station\">Charging station</li>
                                <li class=\"s_ic130 lazyload\" title=\"Baby care room\">Baby care room</li>
                                <li class=\"s_ic140 lazyload\" title=\"Toilet\">Toilet</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_4\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1013\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>4</span>
                            Asahikawa Tourism &amp; Local Products Information Center
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/13063_public_img1.avif\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                JR Asahikawa Station East Concourse, 8-3-1 Miyashita-Dori, Asahikawa-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic40 lazyload\" title=\"Rental bicycle / Bicycle sharing\">Rental bicycle / Bicycle sharing</li>
                                <li class=\"s_ic50 lazyload\" title=\"Souvenir \">Souvenir </li>
                                <li class=\"s_ic100 lazyload\" title=\"Prayer room\">Prayer room</li>
                                <li class=\"s_ic130 lazyload\" title=\"Baby care room\">Baby care room</li>
                                <li class=\"s_ic140 lazyload\" title=\"Toilet\">Toilet</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_5\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1711\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>5</span>
                            Biei Tourism Association
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/9973_public_img1.avif\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                Shikino Johokan (Tourist Information Centre), 1-2-14 Honcho Biei-cho, Kamikawa-gun, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic50 lazyload\" title=\"Souvenir \">Souvenir </li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                                <li class=\"s_ic140 lazyload\" title=\"Toilet\">Toilet</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_6\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1004\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>6</span>
                            CONCIERGE FURANO Furano Tourist Information Centre
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/5901_public_img1.avif\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                2-27 Moto-machi, Furano-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_7\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1444\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>7</span>
                            Hakodate Airport Information (Domestic Terminal Arrival Lobby \\\\\\&quot;LOCAL INFORMATION GATTSURI DONAN\\\\\\&quot;)
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/9711_public_img1.avif\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                Hakodate Airport, 511 Takamatsu-cho, Hakodate-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic50 lazyload\" title=\"Souvenir \">Souvenir </li>
                                <li class=\"s_ic60 lazyload\" title=\"Currency exchange\">Currency exchange</li>
                                <li class=\"s_ic70 lazyload\" title=\"SIM card sales\">SIM card sales</li>
                                <li class=\"s_ic90 lazyload\" title=\"PC / Tablet available\">PC / Tablet available</li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                                <li class=\"s_ic120 lazyload\" title=\"Charging station\">Charging station</li>
                                <li class=\"s_ic130 lazyload\" title=\"Baby care room\">Baby care room</li>
                                <li class=\"s_ic140 lazyload\" title=\"Toilet\">Toilet</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_8\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1010\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>8</span>
                            Hakodate Tourist Information Center
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/12611_public_img1.jpeg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                12-13 Wakamatsu-cho, Hakodate-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic90 lazyload\" title=\"PC / Tablet available\">PC / Tablet available</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_9\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1011\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>9</span>
                            Hokkaido-Sapporo Tourist Information Center
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/13071_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                West Concourse North Exit, JR Sapporo Station, N6 W4, Kita-ku Sapporo-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic70 lazyload\" title=\"SIM card sales\">SIM card sales</li>
                                <li class=\"s_ic80 lazyload\" title=\"Mobile Wi-Fi rental\">Mobile Wi-Fi rental</li>
                                <li class=\"s_ic90 lazyload\" title=\"PC / Tablet available\">PC / Tablet available</li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_10\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1870\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>10</span>
                            Hokuto City Tourist Information Center (JR Shin-Hakodate-Hokuto station)
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/11324_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                1-1-1 Ichinowatari, Hokuto-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic30 lazyload\" title=\"Culture workshop / Tours\">Culture workshop / Tours</li>
                                <li class=\"s_ic40 lazyload\" title=\"Rental bicycle / Bicycle sharing\">Rental bicycle / Bicycle sharing</li>
                                <li class=\"s_ic90 lazyload\" title=\"PC / Tablet available\">PC / Tablet available</li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_11\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=3353\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>11</span>
                            Jozankei Tourist Information Center
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/4434_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                3-225-1 Jozankei Onsen East, Minami-ku, Sapporo-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic50 lazyload\" title=\"Souvenir \">Souvenir </li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_12\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=3045\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>12</span>
                            Kushiro Fisherman’s Wharf MOO
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/4078_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                Kushiro Fisherman’s Wherf MOO, 2-4 Nishiki-Cho, Kushiro-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic40 lazyload\" title=\"Rental bicycle / Bicycle sharing\">Rental bicycle / Bicycle sharing</li>
                                <li class=\"s_ic50 lazyload\" title=\"Souvenir \">Souvenir </li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                                <li class=\"s_ic120 lazyload\" title=\"Charging station\">Charging station</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_13\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1447\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>13</span>
                            Kushiro Tourism &amp; Convention Association
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/4090_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                3-3 Saiwai-Cho, Kushiro-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic40 lazyload\" title=\"Rental bicycle / Bicycle sharing\">Rental bicycle / Bicycle sharing</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_14\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1448\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>14</span>
                            Kushiro Tourist Information Center at JR Kushiro station
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/4098_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                14 Kitaodori, Kushiro-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_15\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=3769\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>15</span>
                            Kutchan Tourist Information Center
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/11955_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                JR KutchanStation, North 3, West 4,, Kutchan-cho,Abuta-gun, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic40 lazyload\" title=\"Rental bicycle / Bicycle sharing\">Rental bicycle / Bicycle sharing</li>
                                <li class=\"s_ic140 lazyload\" title=\"Toilet\">Toilet</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_16\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1014\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>16</span>
                            Michi-no-Eki (Roadside Station) Ryuhyokaidou Abashiri Tourist Information Center
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/7160_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                Minami 3jo Higashi 4-5, Abashiri-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic10 lazyload\" title=\"Wi-Fi\">Wi-Fi</li>
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic40 lazyload\" title=\"Rental bicycle / Bicycle sharing\">Rental bicycle / Bicycle sharing</li>
                                <li class=\"s_ic90 lazyload\" title=\"PC / Tablet available\">PC / Tablet available</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_17\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=3224\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>17</span>
                            Noboribetsu Tourist Informaition Center
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/12321_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                (JR Noboribetsu Sta.), 1-4-1 Noboribetsu Minato-machi, Noboribetsu-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic90 lazyload\" title=\"PC / Tablet available\">PC / Tablet available</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_18\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1002\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>18</span>
                            Noboribetsu Tourist Information
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/9552_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                60 Noboribetsu Onsen-cho, Noboribetsu-shi, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic50 lazyload\" title=\"Souvenir \">Souvenir </li>
                                <li class=\"s_ic90 lazyload\" title=\"PC / Tablet available\">PC / Tablet available</li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                                <li class=\"s_ic130 lazyload\" title=\"Baby care room\">Baby care room</li>
                                <li class=\"s_ic140 lazyload\" title=\"Toilet\">Toilet</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_19\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1001\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>19</span>
                            Onuma International Communication Plaza
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/4350_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                85-15, Onuma, Nanaecho, Kameda-gun, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic20 lazyload\" title=\"Baggage storage\">Baggage storage</li>
                                <li class=\"s_ic50 lazyload\" title=\"Souvenir \">Souvenir </li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                                <li class=\"s_ic140 lazyload\" title=\"Toilet\">Toilet</li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div id=\"tic_20\"  class=\"ds_rst_box\">
                    <a href=\"detail.php?id=1017\" target=\"_blank\">
                        <span class=\"cote2 pc\">Category 2</span>
                        <h2><span>20</span>
                            Otaru International Information Center
                        </h2>
                        <div class=\"rst_img\">
                            <img data-src=\"//tic.jnto.go.jp/apply/content/img/.thumb_480x320_t/12928_public_img1.jpg\" alt=\"\" class=\"tic_pic lazyload\"  />
                            <span class=\"cote2 sp\">Category 2</span>
                        </div>
                        <div class=\"rst_txt\">
                            <p>
                                5-3 Minatomachi, Otaru-City, Hokkaido
                            </p>
                            <ul class=\"universal\">
                                <li class=\"s_ic50 lazyload\" title=\"Souvenir \">Souvenir </li>
                                <li class=\"s_ic60 lazyload\" title=\"Currency exchange\">Currency exchange</li>
                                <li class=\"s_ic110 lazyload\" title=\"Accessible\">Accessible</li>
                                <li class=\"s_ic120 lazyload\" title=\"Charging station\">Charging station</li>
                                <li class=\"s_ic130 lazyload\" title=\"Baby care room\">Baby care room</li>
                                <li class=\"s_ic140 lazyload\" title=\"Toilet\">Toilet</li>
                            </ul>
                        </div>
                    </a>
                </div>


            </div><!--//ds_rst-->
        </section><!--//box3-->

        <div class=\"skip_box\"><span class=\"cur\"><b>1</b></span><a href=\"/eng/list.php?page=2\" title=\"page 2\">2</a><a href=\"/eng/list.php?page=3\" title=\"page 3\">3</a><a href=\"/eng/list.php?page=4\" title=\"page 4\">4</a><a href=\"/eng/list.php?page=5\" title=\"page 5\">5</a><a href=\"/eng/list.php?page=6\" title=\"page 6\">6</a><a href=\"/eng/list.php?page=7\" title=\"page 7\">7</a><a href=\"/eng/list.php?page=2\" title=\"next page\">Next &gt;</a><a href=\"/eng/list.php?page=75\" title=\"last page\">&nbsp;...Last &gt;&gt;</a></div>

    </div><!--//inner-->




    <div id=\"modalArea2\" class=\"modalArea\">
        <div id=\"modalBg2\" class=\"modalBg\"></div>
        <div class=\"modalWrapper\">
            <div class=\"modalContents\">
                <h3>About the Service Icons</h3>
                <ul class=\"universal\">
                    <li class=\"s_ic10 lazyload\">Wi-Fi</li>
                    <li class=\"s_ic20 lazyload\">Baggage storage</li>
                    <li class=\"s_ic30 lazyload\">Culture workshop / Tours</li>
                    <li class=\"s_ic40 lazyload\">Rental bicycle / Bicycle sharing</li>
                    <li class=\"s_ic50 lazyload\">Souvenir </li>
                    <li class=\"s_ic60 lazyload\">Currency exchange</li>
                    <li class=\"s_ic70 lazyload\">SIM card sales</li>
                    <li class=\"s_ic80 lazyload\">Mobile Wi-Fi rental</li>
                    <li class=\"s_ic90 lazyload\">PC / Tablet available</li>
                    <li class=\"s_ic100 lazyload\">Prayer room</li>
                    <li class=\"s_ic110 lazyload\">Accessible</li>
                    <li class=\"s_ic120 lazyload\">Charging station</li>
                    <li class=\"s_ic130 lazyload\">Baby care room</li>
                    <li class=\"s_ic140 lazyload\">Toilet</li>
                </ul>
            </div>
            <div id=\"closeModal2\" class=\"closeModal\"></div>
        </div>
    </div>


    <!-- InstanceEndEditable -->
    <!--page_top-->
    <!--<div id=\"page-top\"><a href=\"#\" title=\"PageTop\"></a></div>-->
</main>


<footer>
    <div class=\"inner\">
        <div class=\"f_logo\"><a href=\"https://www.jnto.go.jp/\" target=\"_blank\"><img class=\"lazyload\" data-src=\"../img/tmpl/logo_j.png\" alt=\"\"> </a></div>
        <ul class=\"sns\">
            <li><a href=\"https://www.facebook.com/visitjapaninternational\" target=\"_blank\" rel=\"noopener noreferrer\"><img class=\"lazyload\" data-src=\"../img/tmpl/fb.png\" alt=\"\"></a></li>
            <li><a href=\"https://www.instagram.com/visitjapanjp/\" target=\"_blank\" rel=\"noopener noreferrer\"><img class=\"lazyload\" data-src=\"../img/tmpl/insta.png\" alt=\"\"></a></li>
            <li><a href=\"https://www.youtube.com/user/visitjapan/featured
\" target=\"_blank\" rel=\"noopener noreferrer\"><img class=\"lazyload\" data-src=\"../img/tmpl/yt.png\" alt=\"\"></a></li>
        </ul>
        <ul class=\"policy\">
            <li><a href=\"https://www.japan.travel/en/privacy-policy/\" target=\"_blank\">Privacy Policy</a></li>
            <li><a href=\"cookie_policy.php\">Cookie Policy</a></li>
            <li><a href=\"https://www.japan.travel/en/terms-of-use/\" target=\"_blank\">Terms of Use</a></li>
        </ul>


    </div>
    <div class=\"inner2\">
        <div class=\"f_lang\">
            <input type=\"checkbox\" id=\"label3\">
            <label for=\"label3\">Select Language</label>
            <div class=\"hidden_show\">
                <ul>
                    <li><a href=\"../jpn/index.php\">日本語</a></li>
                    <li><a href=\"../eng/index.php\">English</a></li>
                    <li><a href=\"../kor/index.php\">한국어</a></li>
                    <li><a href=\"../chs/index.php\">簡体中文</a></li>
                    <li><a href=\"../chc/index.php\">繁體中文</a></li>
                </ul>
            </div>
        </div>
        <div class=\"copyright\">Copyright &copy; Japan National Tourism Organization. <br class=\"sp\">All Rights Reserved.</div>
    </div>
</footer>



<!-- InstanceParam name=\"class\" type=\"text\" value=\"dsearch\" -->

</body>
<!-- InstanceEnd --></html>";


