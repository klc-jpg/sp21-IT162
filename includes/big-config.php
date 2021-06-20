<?php
/*
 portal-config.php

 Used to store all of our IT162 configuration information
*/

//echo basename($_SERVER['PHP_SELF']);
//die;





//prevents data from being sent early

ob_start();

date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
 
//die;


switch(THIS_PAGE) {

    case "index.php":
        $title = "Web Dev Overview";
        $logo = 'fa-tablet';
        $pageID = 'How Can We Help?';
    break;

    case "flexbox.php":
        $title = "Flexbox";
        $logo = 'fa-cube';
        $pageID = 'Flexbox';
    break;

    case "galleries.php":
        $title = "Galleries";
        $logo = 'fa-camera-retro';
        $pageID = 'Galleries';
    break;

    case "shoppingcart1.php":
        $title = "Carts";
        $logo = 'fa-shopping-cart';
        $pageID = 'Shopping Carts';
    break;

    case "mobile-responsive.php":
        $title = "Responsive Vs. Mobile";
        $logo = 'fa-html5';
        $pageID = 'Responsive Design Vs. Mobile';
    break;

    case "webcam.php":
        $title = "Live Webcams";
        $logo = 'fa-video-camera';
        $pageID = 'Orca Cam';
    break;

    case "calendar2.php":
        $title = "Camp Canlis";
        $logo = 'fa-calendar';
        $pageID = 'Event Calendar/Camp Canlis';
    break;

    case "map.php":
        $title = "Google Maps Directions";
        $logo = 'fa-map-marker';
        $pageID = 'Directions';
    break;
    
    case "youtube.php":
        $title = "Web Accessibility";
        $logo = 'fa-youtube-play';
        $pageID = 'Website Accessibility';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $pageID = 'Welcome';

    }


    $nav1['index.php'] = "Big";
    $nav1['flexbox.php'] = "Flexbox";
    $nav1['galleries.php'] = "Galleries";
    $nav1['shoppingcart1.php'] = "Shopping Carts";
    $nav1['mobile-responsive.php'] = "Responsive vs. Mobile";
    $nav1['webcam.php'] = "Webcam";
   

    //create function to generate links with current page highlighted

    /*<li><a href="../index.php"><span><i class="fa fa-fw fa-arrow-circle-o-left" aria-hidden="true"></i> Home </span></a></li>
    <li><a class="selected" href="index.php">Big</a></li>
    <li><a href="flexbox.php">Flexbox</a></li>
    <li><a href="galleries.php">Galleries</a></li>
    <li><a href="shoppingcarts.php">Shopping Carts</a></li>
    <li><a href="mobile-responsive.php">Responsive vs. Mobile</a></li>
    <div class="dropdown">
    <li><a href="#"><span class="dropbtn">Google<i class="fa fa-fw fa-chevron-down"></i></span></a>
        <ul class="dropdown-content">
          <li><a href="calendar2.php">Calendar</a></li>
          <li><a href="map.php"> Map</a></li>
          <li><a href="youtube.php">YouTube</a></li>
      </ul>
    </li>*/


    function bigLinks1($nav1) {

            $myReturn = '';
            foreach($nav1 as $url => $text){

                if($url == THIS_PAGE) {
                    $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";

                }else{
                    $myReturn .= "<li><a href=\"$url\">$text</a></li>";
                } 

            }

            return $myReturn;
        }



    $nav2['calendar2.php'] = "Calendar";
    $nav2['map.php'] = "Map";
    $nav2['youtube.php'] = "YouTube";

    function bigLinks2($nav2) {

        $myReturn = '';
        foreach($nav2 as $url => $text){

            if($url == THIS_PAGE) {
                $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";

            }else{
                $myReturn .= "<li><a href=\"$url\">$text</a></li>";
            } 

        }

        return $myReturn;
    }
?>