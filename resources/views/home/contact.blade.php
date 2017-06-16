@extends('components.master')

@section('content')

<div class="tm-slider-box tm-light-bg">
    <section class="tm-slider uk-grid tm-none-padding" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
        <!-- start full width -->
        <div class="uk-width-1-1">
            <div class="uk-panel top-pageslider CuteChurch">

                <div class="slider-module">
                    <div class="uk-slidenav-position" data-uk-slideshow="{height: &#039;300&#039;, animation: &#039;fade&#039;, duration: &#039;&#039;, autoplay: true, autoplayInterval: &#039;5000&#039;, videoautoplay: false, videomute: false, kenburns: false}">
                        <ul class="uk-slideshow uk-overlay-active">
                            <li class="uk-cover uk-height-viewport  tm-wrap"><img src="./images/bg_page.jpg" alt="bg_page" width="1920" height="360" class="aligncenter size-full" />
                            </li>
                            <li class="uk-cover uk-height-viewport  tm-wrap"><img src="./images/bg_page-01.jpg" alt="bg_page-01" width="1920" height="300" class="aligncenter size-full" />
                            </li>
                            <li class="uk-cover uk-height-viewport  tm-wrap"><img src="./images/bg_page-02.jpg" alt="bg_page-02" width="1920" height="300" class="aligncenter size-full" />
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <!-- end full width -->
    </section>
</div>

<div class="uk-container uk-container-center">
    <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>
        <div class="tm-main uk-width-medium-3-4 tm-middle">
            <main class="tm-content">
                <section>
                    <div data-uk-slider class="">
                        <div class="uk-slider-container post-gallery">
                            <ul class="uk-slider uk-grid-width-medium-1-1">
                            </ul>
                            <a href="" class="tm-slidenav tm-post-gallery-previous" data-uk-slider-item="previous" draggable="false"><i class="uk-icon-angle-left"></i></a>
                            <a href="" class="tm-slidenav tm-post-gallery-next" data-uk-slider-item="next" draggable="false"><i class="uk-icon-angle-right"></i></a>
                        </div>
                    </div>
                    <div id="primary" class="site-content post-content">
                        <div class="main-heading">
                            <h1 class="tm-page-title">CONTACT US</h1>
                        </div>
                        <div id="content" role="main">
                            <div role="form" class="wpcf7" id="wpcf7-f295-p21-o1" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form method="post" class="wpcf7-form contact-us" novalidate="novalidate">
                                    <div style="display: none;">
                                      <input type="hidden" name="_token" value="@php echo csrf_token() @endphp">
                                        <input type="hidden" name="_wpcf7" value="295" />
                                        <input type="hidden" name="_wpcf7_version" value="4.3" />
                                        <input type="hidden" name="_wpcf7_locale" value="" />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f295-p21-o1" />
                                        <input type="hidden" name="_wpnonce" value="d6d035031a" />
                                    </div>
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-grid-width-small-1-1 uk-width-medium-1-3 uk-grid-width-large-1-3">
                                            <span class="wpcf7-form-control-wrap text-990"><input type="text" name="nom" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" placeholder="Nom" /></span>
                                        </div>
                                        <div class="uk-grid-width-small-1-1 uk-width-medium-1-3 uk-grid-width-large-1-3">
                                            <span class="wpcf7-form-control-wrap email-774"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" placeholder="Phone" /></span>
                                        </div>
                                        <div class="uk-grid-width-small-1-1 uk-width-medium-1-3 uk-grid-width-large-1-3">
                                            <span class="wpcf7-form-control-wrap email-774"><input type="email" name="email-774" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
                                        </div>
                                        <div class="uk-grid-width-small-1-1 uk-width-medium-1-1 uk-grid-width-large-1-1">
                                            <span class="wpcf7-form-control-wrap text-271"><input type="text" name="sujet" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" placeholder="Sujet" /></span>
                                        </div>
                                        <div class="uk-grid-width-small-1-1 uk-width-medium-1-1 uk-grid-width-large-1-1">
                                            <span class="wpcf7-form-control-wrap textarea-431"><textarea name="contenu" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-required="true" aria-invalid="false" placeholder="Contenu"></textarea></span>
                                        </div>
                                        <p>
                                            <input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit tm-comment-button" />
                                        </p>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                            <div class="clr"></div>

                        </div>
                        <!-- #content -->
                    </div>
                    <!-- #primary -->
                </section>
            </main>
        </div>
        <aside class="tm-sidebar-b uk-width-medium-1-4 tm-middle">
            <div class="uk-panel widget_text">
                <h3 class="uk-panel-title">Contact Us</h3><i class="uk-icon-home">&nbsp;</i>1800 Grand Ave, San Diego, CA 92109
                <br />
                <i class="uk-icon-info-circle">&nbsp;</i>Sunday at 10:00 am, Wednesday at 6:00 pm
                <br />
                <i class="uk-icon-phone-square">&nbsp;</i>(619) 555-9740
                <br />
                <i class="uk-icon-envelope">&nbsp;</i>cute@church.com
                <br />
            </div>
            <div class="uk-panel widget_text">
                <h3 class="uk-panel-title">Social icons</h3>
                <ul class="social-icons">
                    <li><a href="http://www.facebook.com" target="_blank"><i class="uk-icon-facebook-f"></i></a>
                    </li>
                    <li><a href="http://twitter.com/" target="_blank"><i class="uk-icon-twitter"></i></a>
                    </li>
                    <li><a href="http://plus.google.com/" target="_blank"><i class="uk-icon-google-plus"></i></a>
                    </li>
                    <li><a href="http://www.linkedin.com" target="_blank"><i class="uk-icon-linkedin"></i></a>
                    </li>
                    <li><a href="http://www.youtube.com/" target="_blank"><i class="uk-icon-youtube"></i></a>
                    </li>
                    <li><a href="http://vk.com/" target="_blank"><i class="uk-icon-vk"></i></a>
                    </li>
                    <li><a href="http://instagram.com/" target="_blank"><i class="uk-icon-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</div>

<div class="tm-bottom-e-box tm-light-bg">
    <section class="tm-bottom-e uk-grid tm-none-padding" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>

        <div class="uk-width-1-1">
            <div class="uk-panel widget_text">
                <div class="map-wrap">
	            	<script>
	                    window.map = false;
	                    window.marker = './images/map-marker.png';

	                    function create_marker(marker_data){
	                        var infowindow = new google.maps.InfoWindow({
	                            content: '<div class="map-marker-content">'+
	                                    '<h3>'+marker_data.header+'</h3>'+
	                                    '<p class="address">'+marker_data.address+'</p>'+
	                                    '<p class="address_2">'+marker_data.address_2+'</p>'+
	                                '</div>'
	                        });
	                        var marker = new google.maps.Marker({
	                            position: new google.maps.LatLng(marker_data.lat,marker_data.lng),
	                            map: window.map,
	                            title: marker_data.header,
	                            icon:window.marker
	                        });
	                        google.maps.event.addListener(marker, 'click', function() {
	                            infowindow.open(window.map,marker);
	                        });
	                    }

	                    function initialize(){
	                        var myLatlng = new google.maps.LatLng(50.3915097,-4.1306689);

	                        var mapOptions = {
	                            zoom:16,
	                            center: myLatlng,
	                            mapTypeId: google.maps.MapTypeId.ROADMAP,
	                            scrollwheel: false,

	                            streetViewControl:false,
	                            overviewMapControl:false,
	                            mapTypeControl:false

	                        };

	                        window.map = new google.maps.Map(document.getElementById('map'), mapOptions);																																																														 						create_marker({
	                            header:'Cute Curch',
	                            address:'Mannamead Road, Plymouth PL3 5QJ',

	                            lat:50.3915097,
	                            lng:-4.1306689
	                        });

	                    }

	                    google.maps.event.addDomListener(window, 'load', initialize);
            		</script>
	                <div id="map"></div>
	            </div>
            </div>
        </div>
    </section>
</div>
@endsection
