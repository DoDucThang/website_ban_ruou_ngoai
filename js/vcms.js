/**
 * Global VCMS Javascript framework.
 * This file need to use together with jquery.
 * @since 7.4.0
 * @author BabyWolf (Tony Nguyen) <tuananh@vietsol.net>
 */

/**
 * Checking if JQuery is loaded and declare some global functions using Jquery.
 */
window.onload = function() {
    if (!window.jQuery) {
        console.log("Jquery is not included. Please include it before using this script to have full VCMS' Javasript functions.");
    }
    else {
        /**
         * Jquery global action
         */
        $('.back a').click(function(e) {
            window.history.back();
            e.preventDefault();
        });
    }
}
/**
 * VCMS Object.
 * @type {Object}
 */
var $vs = {
    hideMessage: function() {
        $('.ajax-message').hide('slow');
    },
    showSuccess: function($message, $title) {
        if(!$vsSystem.isEmpty($title)) {
            $('#ajax-success-title').text($title);
        }
        $('#ajax-success-msg').html($message);
        $('#ajax-success').show('slow');
    },
    showInfo: function($message, $title) {
        if(!$vsSystem.isEmpty($title)) {
            $('#ajax-info-title').text($title);
        }

        $('#ajax-info-msg').html($message);
        $('#ajax-info').show('slow');
    },
    /**
     * Show error box.
     * @param  {String} $message
     * @param  {String} $title
     */
    showError: function($message, $title) {
        if(!$vsSystem.isEmpty($title)) {
            $('#ajax-error-title').text($title);
        }
        $('#ajax-error-msg').html($message);
        $('#ajax-error').show('slow');
    },
    popUp: function($selector) {
        if(typeof sessionStorage.poppedUp == 'undefined') sessionStorage.poppedUp = 0;
        // No need to display if it already displayed
        if(sessionStorage.poppedUp == 1) return;

        $($selector).modal();

        sessionStorage.poppedUp = 1;
    },
    /**
     * Ajax calling with get method.
     * @return {boolean}
     */
    get: function($url, $options) {
        $.get($url, $options.data)
        .done(function($response) {
            if(false == $response.status) {
                if($vsSystem.isFunction($options.fail)) {
                    $options.fail($response);
                }
            }
            else {
                if($vsSystem.isFunction($options.success)) {
                    $options.success($response);
                }
                return true;
            }
        })
        .fail(function( $jqXHR, $textStatus ) {
            var $response = { jqXHR: $jqXHR, message: $textStatus };
            $options.fail($response);
        });

        return false;
    },
    /**
     * Ajax calling with post method.
     * @return {boolean}
     */
    post: function($url, $options) {
        $options.method = 'POST';

        $.post($url, $options.data)
        .done(function($response) {
            if(false == $response.status) {
                if($vsSystem.isFunction($options.fail)) {
                    $options.fail($response);
                }
            }
            else {
                if($vsSystem.isFunction($options.success)) {
                    $options.success($response);
                }
                return true;
            }
        })
        .fail(function( $jqXHR, $textStatus ) {
            var $response = { jqXHR: $jqXHR, message: $textStatus };
            $options.fail($response);
        });

        return false;
    },
    baseURL: function() {
        return window.location.protocol + "//" + window.location.host + "/";
    },
    /**
     * Set menus to active state automatically which have class .vs-menu
     */
    autoActivateMenu: function() {
        if(typeof $activatePath !== 'undefined') {
            $vs.activateMenu('.vs-menu', $activatePath);
            return;
        }
        $vs.activateMenu('.vs-menu');
    },
    /**
     * Set menu to activate state (add css class .active)
     * @param  {selector} $container - The jQuery selector that hold the menu.
     */
    activateMenu: function($container, $path) {
        if(!$vs.isDefined($path) && $path !== false) $path = window.location.href;

        var $item = $($container+" a").filter(function(){
            return this.href == $path;
        }).parent();

        $item.addClass('active');
        $item.parentsUntil($container,$item.prop('tagName')).addClass('active')
    },
    /**
     * Check if a variable is defined
     * @param  {mixed} $variable
     * @return {boolean}
     */
    isDefined: function($variable) {
        return typeof $variable !== 'undefined';
    },
    /**
     * Rendering Google map on website.
     * @param  {json} $data {
     *                      {string} apiKey     (optional)  : Google Map API key.
     *                      {string} container  (required)  : Jquery selector.
     *                      {float}  latitude   (required)  : Map latitude.
     *                      {float}  longitude  (required)  : Map longitude.
     *                      {string} title      (optional)  : Title of info window.
     *                      {string} address    (optional)  : Address of info window.
     *                      {string} geoType    (optional)  : geoType of info window, 'location' or 'address'
     *                      }
     */
    GoogleMap: function($data) {
        // Basic checking
        if (!$vs.isDefined($data) || !$vs.isDefined($data.container) || !$vs.isDefined($data.latitude) || !$vs.isDefined($data.longitude)) {
            console.log('Not enough data to load Google Map. ' + 'The following json data are mandatory to pass to function: '
                + '\n{'
                + '\n\t(string)\tcontainer\t:Name of HTML element to render Google Map.'
                + '\n\t(float)\t\tlatitude\t:The latitude coordinate.'
                + '\n\t(float)\t\tlongitude\t:The logintude coordinate.'
                + '\n}');
        }
        // Loading Google Map script
        // Default Viet Solution's API Key
        if (!$vs.isDefined($data.apiKey)) $data.apiKey = 'AIzaSyBJUaQ1TMD51WpfWrl3-lM3O3hfYIQyigM';
        var $googleMapScriptURL = 'https://maps.googleapis.com/maps/api/js?sensor=false&key=' + $data.apiKey;

        if ($vs.isDefined($data.libraries)) {
            $googleMapScriptURL += '&libraries=' + $data.libraries;
        }

        $.getScript($googleMapScriptURL).done(function(script, textStatus) {
            var $geoCoder = new google.maps.Geocoder();
            var $latlng = new google.maps.LatLng($data.latitude, $data.longitude);
            var $myOptions = {
                zoom: 16,
                center: $latlng,
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                },
                navigationControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            $($data.container).each(function() {
                var $map = new google.maps.Map($(this).get(0), $myOptions);
                if ($geoCoder && $vs.isDefined($data.geoCodeType)) {
                    var $geoCodeOptions = {};
                    if ($data.geoCodeType == 'location') $geoCodeOptions.location = $latlng;
                    else $geoCodeOptions.address = $data.address;
                    $geoCoder.geocode($geoCodeOptions, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                                $map.setCenter(results[0].geometry.location);
                                var $infowindow = new google.maps.InfoWindow({
                                    content: '<p id="map-title">' + $data.title + '</p><b>' + $data.address + '</b>',
                                    size: new google.maps.Size(150, 50)
                                });
                                var $marker = new google.maps.Marker({
                                    position: results[0].geometry.location,
                                    map: $map,
                                    title: $data.title
                                });
                                $infowindow.open($map, $marker);
                            } else {
                                console.log('No results found!');
                            }
                        } else {
                            console.log('Geocode was not successful for the following reason: ' + status);
                        }
                    });
                }
            });
        }).fail(function(jqxhr, settings, exception) {
            console.log('Loading Google Map script fail!');
        });
    },
    /**
     * Render admin panel.
     */
    AdminPanel: function() {
        // Checking if variable is defined
        if (typeof $baseURL == 'undefined' || typeof $path == 'undefined' || typeof $langCode == 'undefined') {
            console.log("$baseURL, $path or $langCode variable is not defined, please specify it to load Admin Panel");
            return false;
        }
        // Loading admin panel
        var $adminPanelURL = $baseURL + 'publicbar?path=' + $path + '&code=' + $langCode;
        $.get($adminPanelURL).done(function(data) {
            if (data.status == true) $('body').append(data.html);
            else console.log(data.message);
        }).fail(function(jqXHR, textStatus) {
            console.log(textStatus);
        });
    }
}
/**
 * VS global function call.
 */
$vs.autoActivateMenu();