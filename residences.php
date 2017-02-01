<?php
require_once 'inc/Functions.php';
$lang = "en-us";
$SITETitle = '101 West 78 ‒ Residences | Upper West Side Condominiums in NYC';
$SITEDescription = '101 West 78th’s Upper West Side condominiums in NYC uniquely marry 21st-century style to an elegant prewar aesthetic featuring high ceilings and huge windows.';
$SITEKeywords = '';  
$SITEUrl = full_url( $_SERVER );
$SITEShareImage = $SITEUrl.'src/assets/share.jpg';
$preloadID = 0;
$br = $smartphone ? ' ' : '<br>';

?>

<!doctype html>
<html lang="<?=$lang;?>" class="noload <?php echo $mobile ? 'mobile' : ''; ?> <?php echo $smartphone ? 'smartphone' : ''; ?> <?php echo $desktop ? 'desktop' : ''; ?>">
    
    <head>
 
        <?php include 'head.php'; ?>
        
    </head>

    <body>

        <div id="preloader">

            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 479.8 315.6" style="enable-background:new 0 0 479.8 315.6;" xml:space="preserve">
            <path class="st0" d="M461.8,213.8c-5-4.1-10.5-7.5-16.4-10.3c-6-2.8-11.8-5.2-17.2-7.3l-2.3-0.9l2.3-1c8-3.4,14.8-7.2,20.2-11.3
                c5.4-4.1,9.8-8.3,13.1-12.4c3.2-4.1,5.6-8.2,7-12.2c1.4-4,2.1-7.7,2.1-11c0-7.3-1.4-14-4.2-20c-2.8-6-6.9-11.2-12.3-15.5
                c-5.4-4.3-12-7.7-19.7-10.1c-7.8-2.3-16.7-3.5-26.5-3.5c-2.7,0-5.4,0.2-8,0.5L443.5,20l-1.5-0.8H305l-2.8-19h-1l-20.1,85.9l1.4,0.4
                c0.8-3.2,2-7,3.6-11.1c1.8-4.6,4.3-9,7.3-13.1c3.1-4.1,6.8-7.6,11.2-10.4c4.4-2.9,9.7-4.3,15.6-4.3h105.5L300.3,274.3l1.8,1
                l47.4-85.7c3.2,3.6,7.3,7,12,10c5.2,3.3,11.5,6.7,18.6,9.8l2.2,1l-2.3,0.9c-5.3,2-10.8,4.7-16.5,8s-11,7.3-15.7,11.8
                s-8.7,9.6-11.7,15.1s-4.5,11.7-4.5,18.3c0,7,1.6,13.7,4.8,19.8c3.2,6.1,7.8,11.5,13.6,16.1c5.9,4.6,13,8.2,21.2,10.8
                s17.4,3.9,27.3,3.9c9.7,0,19.5-1.5,29.1-4.5c9.6-3,18.3-7.4,25.8-13c7.6-5.6,13.8-12.5,18.5-20.6c4.7-8,7-17.2,7-27.1
                c0-8.4-1.6-15.5-4.8-21.2C470.8,222.9,466.7,217.9,461.8,213.8z M371.8,165.8c-1.8-2.6-3.3-5.6-4.4-8.7l31.3-56.6
                c2.9-0.5,6-0.8,9.3-0.8c7.2,0,13.6,1.2,18.9,3.6c5.3,2.4,9.8,5.6,13.3,9.6s6.2,8.6,7.9,13.8s2.5,10.7,2.5,16.3
                c0,5.4-0.5,10.7-1.3,16c-0.9,5.3-2.4,10.2-4.5,14.7c-2.1,4.5-4.8,8.6-8.1,12.1c-3.3,3.5-7.4,6.3-12.2,8.2l-0.3,0.1l-0.3-0.1
                c-6.5-1.7-12.6-3.4-17.9-5.3c-5.4-1.8-10.2-4-14.5-6.3C382.9,177.8,376.3,172.2,371.8,165.8z M447.5,283.4
                c-2.5,6-6.1,11.3-10.6,15.7c-4.5,4.4-9.9,7.9-15.9,10.4s-12.6,3.7-19.4,3.7c-8.7,0-16.1-1.5-22.1-4.3c-6-2.9-10.9-6.7-14.6-11.3
                s-6.3-9.8-7.9-15.5c-1.6-5.6-2.4-11.4-2.4-17.2c0-5.8,0.7-11.6,2.2-17c1.5-5.4,3.5-10.6,6-15.3s5.6-9,9.2-12.6
                c3.6-3.7,7.5-6.7,11.8-8.9l0.4-0.2l0.4,0.1c4.8,1.3,9.7,2.9,14.5,4.8c4.8,1.8,9.6,3.7,14.3,5.6c5.1,2.1,10,4.5,14.6,7.1
                c4.6,2.6,8.7,5.7,12.1,9.1c3.4,3.4,6.2,7.3,8.3,11.5c2.1,4.3,3.1,9.2,3.1,14.7C451.3,270.7,450,277.3,447.5,283.4z"/>
            <path class="st0" d="M16.3,171.3c-0.4-0.1-0.8-0.1-1.1-0.2c-0.4-0.1-0.6-0.2-0.8-0.3c-0.5-0.2-0.9-0.5-1.1-0.9
                c-0.3-0.4-0.4-0.9-0.4-1.7v-20.7c0-1.6,0-3.1,0.1-4.5c0.1-1.4,0.2-2.7,0.4-3.9H13c-0.4,0.2-0.8,0.5-1.2,0.6
                c-0.4,0.2-0.8,0.4-1.3,0.5c-0.5,0.2-1,0.3-1.5,0.5c-0.6,0.1-1.2,0.3-1.9,0.5c-0.5,0.1-0.9,0.2-1.4,0.3c-0.4,0.1-0.9,0.2-1.4,0.3
                c-0.5,0.1-1,0.2-1.5,0.2c-0.5,0.1-1.2,0.2-1.9,0.3v0.4l6.9-0.4v26.2c0,0.6-0.2,1.1-0.5,1.5c-0.3,0.4-0.7,0.7-1.3,0.8
                c-0.3,0.1-0.7,0.2-1,0.2c-0.4,0.1-0.7,0.1-1.1,0.2c-0.4,0.1-0.7,0.1-1,0.1c-0.3,0-0.6,0.1-0.9,0.1v0.4h16.4v-0.4
                c-0.2,0-0.5,0-0.9-0.1C17.1,171.5,16.7,171.4,16.3,171.3z"/>
            <path class="st0" d="M55.6,143.8c-1.1-1.5-2.5-2.6-4.2-3.5c-1.7-0.9-3.6-1.3-5.7-1.3c-1.2,0-2.4,0.2-3.5,0.5
                c-1.2,0.4-2.3,0.9-3.3,1.6c-1,0.7-2,1.6-2.8,2.6c-0.9,1-1.6,2.2-2.2,3.5c-0.6,1.3-1.1,2.7-1.5,4.3c-0.3,1.6-0.5,3.3-0.5,5.1
                c0,2.2,0.3,4.2,0.9,6.1c0.6,1.9,1.4,3.7,2.6,5.1c1.1,1.5,2.5,2.6,4.2,3.5c1.7,0.9,3.6,1.3,5.7,1.3c1.8,0,3.6-0.4,5.3-1.2
                c1.7-0.8,3.2-2,4.4-3.5c1.3-1.5,2.3-3.4,3.1-5.5c0.8-2.2,1.1-4.6,1.1-7.3c0-2.2-0.3-4.2-0.9-6.2C57.6,147,56.7,145.3,55.6,143.8z
                 M52.7,162.4c-0.4,2-0.9,3.7-1.6,5.2c-0.7,1.5-1.5,2.6-2.5,3.4s-2.1,1.2-3.3,1.2c-1.5,0-2.7-0.4-3.7-1.3c-1-0.9-1.8-2-2.4-3.5
                c-0.6-1.5-1.1-3.2-1.3-5.2c-0.3-2-0.4-4.1-0.4-6.2c0-2.4,0.2-4.6,0.5-6.6c0.4-2,0.9-3.7,1.6-5.2c0.7-1.4,1.5-2.6,2.5-3.4
                s2.1-1.2,3.4-1.2c1,0,1.9,0.2,2.6,0.6c0.8,0.4,1.4,1,2,1.7c0.6,0.7,1.1,1.6,1.5,2.6c0.4,1,0.7,2.1,1,3.3c0.2,1.2,0.4,2.5,0.5,3.8
                c0.1,1.3,0.2,2.7,0.2,4.1C53.3,158.2,53.1,160.4,52.7,162.4z"/>
            <path class="st0" d="M89.3,171.3c-0.4-0.1-0.8-0.1-1.1-0.2c-0.4-0.1-0.6-0.2-0.8-0.3c-0.5-0.2-0.9-0.5-1.1-0.9
                c-0.3-0.4-0.4-0.9-0.4-1.7v-20.7c0-1.6,0-3.1,0.1-4.5c0-1.4,0.2-2.7,0.4-3.9H86c-0.4,0.2-0.8,0.5-1.2,0.6c-0.4,0.2-0.8,0.4-1.3,0.5
                c-0.5,0.2-1,0.3-1.5,0.5c-0.6,0.1-1.2,0.3-1.9,0.5c-0.5,0.1-0.9,0.2-1.4,0.3c-0.4,0.1-0.9,0.2-1.4,0.3c-0.5,0.1-1,0.2-1.5,0.2
                c-0.5,0.1-1.2,0.2-1.9,0.3v0.4l6.9-0.4v26.2c0,0.6-0.2,1.1-0.5,1.5c-0.3,0.4-0.7,0.7-1.3,0.8c-0.3,0.1-0.7,0.2-1,0.2
                c-0.4,0.1-0.7,0.1-1.1,0.2c-0.4,0.1-0.7,0.1-1,0.1c-0.3,0-0.6,0.1-0.9,0.1v0.4h16.4v-0.4c-0.2,0-0.5,0-0.9-0.1
                C90,171.5,89.6,171.4,89.3,171.3z"/>
            <path class="st0" d="M162.5,136.1h0.3c0.6,0,1.3,0.1,2,0.2c0.7,0.1,1.4,0.3,2,0.5c0.6,0.2,1.1,0.5,1.6,0.9c0.4,0.3,0.6,0.7,0.6,1.2
                c0,0.2,0,0.5-0.1,0.7c0,0.3-0.1,0.6-0.2,1c-0.1,0.4-0.2,0.8-0.3,1.3c-0.1,0.5-0.3,1.1-0.5,1.8c-0.3,1.1-0.7,2.4-1.2,3.9
                s-1,3.1-1.6,4.9c-0.6,1.8-1.3,3.7-2,5.7c-0.7,2-1.4,4-2.2,6.1c-0.6-2-1.3-3.9-1.9-5.8c-0.6-1.9-1.2-3.7-1.8-5.4
                c-0.6-1.7-1.1-3.3-1.6-4.8s-0.9-2.8-1.3-4c-0.4-1.2-0.7-2.2-1-3c-0.3-0.8-0.5-1.4-0.6-1.8c-0.1-0.2-0.1-0.4-0.1-0.7
                s-0.1-0.5-0.1-0.7c0-0.3,0.2-0.6,0.6-0.8c0.4-0.2,0.8-0.4,1.4-0.6s1.1-0.3,1.7-0.4c0.6-0.1,1.2-0.1,1.6-0.2v-0.4h-16v0.4
                c0.3,0,0.6,0.1,0.9,0.1c0.3,0.1,0.7,0.1,1.1,0.2c0.4,0.1,0.7,0.2,1,0.3c0.3,0.1,0.6,0.2,0.8,0.4c0.4,0.2,0.7,0.6,1,1.2
                c0.3,0.5,0.6,1.1,0.8,1.8c0.2,0.6,0.5,1.3,0.6,1.9c0.2,0.6,0.3,1.2,0.4,1.6l-7.6,20.8l-7.9-24.9c0-0.2-0.1-0.4-0.1-0.7
                c0-0.3-0.1-0.5-0.1-0.7c0-0.3,0.2-0.6,0.6-0.8c0.4-0.2,0.9-0.4,1.5-0.6c0.6-0.2,1.2-0.3,1.8-0.4c0.6-0.1,1.2-0.1,1.6-0.2v-0.4H122
                v0.4c0.5,0,1,0.1,1.6,0.3c0.6,0.1,1.1,0.4,1.6,0.7c0.6,0.3,1,0.7,1.3,1.2c0.3,0.4,0.5,0.9,0.7,1.5c0.2,0.8,0.6,1.9,1,3.1
                c0.4,1.3,0.9,2.8,1.4,4.4c0.5,1.7,1.1,3.5,1.7,5.4c0.6,2,1.3,4,2,6.2c0.7,2.2,1.4,4.4,2.1,6.7c0.7,2.3,1.4,4.6,2.1,6.9h1.2l10-27.4
                c0.5,1.7,1.1,3.5,1.8,5.6c0.7,2,1.4,4.2,2.1,6.5c0.7,2.3,1.5,4.8,2.3,7.3c0.8,2.6,1.6,5.2,2.5,8h1.2c0.6-1.8,1.3-3.7,2-5.7
                c0.7-2,1.4-3.9,2.1-5.9s1.4-3.9,2-5.8c0.7-1.9,1.3-3.7,1.9-5.4c0.6-1.7,1.2-3.3,1.7-4.8s1-2.7,1.4-3.8c0.3-0.9,0.7-1.6,1.1-2.3
                c0.4-0.7,1-1.2,1.7-1.6c0.5-0.3,1-0.5,1.6-0.7c0.6-0.2,1.1-0.3,1.6-0.3v-0.4h-13.2V136.1z"/>
            <path class="st0" d="M215.6,162.8c-0.2,0.4-0.4,0.9-0.7,1.5c-0.3,0.5-0.6,1.1-0.9,1.6c-0.3,0.6-0.6,1.1-1,1.6c-0.3,0.5-0.7,1-1,1.5
                c-0.3,0.4-0.6,0.8-0.9,1.1s-0.8,0.6-1.4,0.8c-0.6,0.2-1.4,0.3-2.2,0.3c-0.8,0.1-1.7,0.1-2.6,0.1c-0.9,0-1.9,0-2.8,0
                c-1.3,0-2.4,0-3.3-0.1c-0.9-0.1-1.5-0.3-1.9-0.6c-0.5-0.3-0.8-0.8-0.9-1.5c-0.2-0.6-0.2-1.5-0.2-2.6v-13h5.3c0.7,0,1.3,0,1.8,0.2
                c0.5,0.1,0.9,0.2,1.2,0.4c0.3,0.2,0.6,0.4,0.8,0.6c0.2,0.2,0.4,0.4,0.6,0.6c0.2,0.2,0.3,0.5,0.6,0.9c0.2,0.4,0.4,0.9,0.6,1.5
                c0.2,0.6,0.4,1.1,0.5,1.7c0.1,0.6,0.2,1,0.3,1.4h0.5V146h-0.5c0,0.3-0.1,0.8-0.2,1.3c-0.1,0.5-0.3,1-0.5,1.6c-0.2,0.5-0.4,1-0.6,1.4
                c-0.2,0.4-0.4,0.8-0.6,1c-0.2,0.2-0.3,0.3-0.5,0.5c-0.2,0.2-0.5,0.4-0.8,0.6s-0.7,0.3-1.2,0.4c-0.5,0.1-1.1,0.2-1.9,0.2h-5.3v-16.6
                h6c0.4,0,0.9,0,1.4,0s1,0,1.5,0s0.9,0,1.4,0.1c0.4,0,0.8,0.1,1.1,0.1c0.6,0.1,1.2,0.4,1.8,1c0.6,0.6,1.2,1.2,1.8,2
                c0.6,0.8,1.1,1.6,1.5,2.4c0.4,0.8,0.7,1.5,0.9,2.1h0.5v-8.2h-29.2v0.4c0.2,0,0.6,0.1,0.9,0.1c0.4,0,0.8,0.1,1.2,0.2
                c0.4,0.1,0.8,0.1,1.2,0.2c0.4,0.1,0.7,0.2,1,0.3c0.7,0.3,1.1,0.7,1.3,1.2c0.2,0.5,0.3,1,0.3,1.6v28.7c0,0.6-0.1,1.1-0.3,1.6
                c-0.2,0.4-0.7,0.8-1.3,1c-0.2,0.1-0.5,0.2-0.9,0.2c-0.4,0.1-0.8,0.1-1.2,0.2c-0.4,0.1-0.8,0.1-1.2,0.1c-0.4,0-0.7,0.1-0.9,0.1v0.4
                h31.4l0.7-10.2H216C215.9,162,215.8,162.4,215.6,162.8z"/>
            <path class="st0" d="M253.4,155.4c-0.7-0.7-1.4-1.4-2.3-2c-0.9-0.6-1.9-1.1-3.1-1.6c-0.6-0.3-1.2-0.5-1.8-0.8
                c-0.6-0.2-1.2-0.4-1.7-0.7c-0.6-0.2-1.2-0.5-1.8-0.7c-0.6-0.3-1.2-0.6-1.9-0.9c-0.7-0.4-1.4-0.8-2-1.3c-0.6-0.4-1.1-0.9-1.5-1.5
                c-0.4-0.5-0.7-1.1-1-1.8c-0.2-0.7-0.3-1.4-0.3-2.2c0-1,0.2-1.9,0.6-2.7c0.4-0.8,0.9-1.4,1.4-2c0.6-0.5,1.3-0.9,2-1.2
                s1.5-0.4,2.2-0.4c1.6,0,3,0.3,4.3,1c1.2,0.7,2.3,1.5,3.2,2.6c0.9,1.1,1.6,2.3,2.3,3.7c0.6,1.4,1.1,2.8,1.6,4.2h0.5l-0.3-12h-0.4
                l-1.8,2.6c-0.5-0.4-1-0.7-1.7-1c-0.6-0.3-1.3-0.6-2.1-0.9c-0.8-0.3-1.6-0.5-2.5-0.6c-0.9-0.2-1.8-0.2-2.7-0.2
                c-1.5,0-2.9,0.2-4.2,0.7c-1.3,0.5-2.4,1.2-3.4,2c-1,0.9-1.7,1.9-2.2,3.1c-0.5,1.2-0.8,2.5-0.8,3.9c0,2.4,0.5,4.3,1.6,5.8
                c1.1,1.5,2.6,2.7,4.7,3.6c0.7,0.3,1.4,0.6,2,0.9c0.6,0.3,1.2,0.5,1.8,0.7c0.6,0.2,1.2,0.5,1.8,0.7c0.6,0.2,1.3,0.5,2,0.8
                c0.8,0.3,1.5,0.7,2.2,1.2c0.6,0.5,1.2,1,1.7,1.6c0.5,0.6,0.8,1.2,1.1,1.9s0.4,1.5,0.4,2.3c0,1-0.1,2-0.4,2.9
                c-0.3,0.9-0.7,1.7-1.3,2.4c-0.6,0.7-1.4,1.3-2.3,1.7c-0.9,0.4-2,0.6-3.4,0.6c-1.6,0-3.1-0.3-4.4-0.9c-1.3-0.6-2.4-1.5-3.3-2.5
                c-1-1.1-1.8-2.3-2.6-3.8c-0.8-1.5-1.4-3-2.1-4.6H231l0.4,12.4h0.5l1.9-2.7c0.4,0.3,0.9,0.6,1.6,1c0.7,0.3,1.4,0.7,2.3,0.9
                c0.9,0.3,1.8,0.5,2.9,0.7c1,0.2,2.2,0.3,3.3,0.3c1.7,0,3.3-0.3,4.8-0.8s2.7-1.3,3.8-2.3c1.1-1,1.9-2.1,2.5-3.5
                c0.6-1.4,0.9-2.8,0.9-4.4c0-1.4-0.2-2.6-0.5-3.6C254.5,157,254,156.1,253.4,155.4z"/>
            <path class="st0" d="M301.1,144.9h0.5v-9.3h-33.2v9.3h0.5c0.1-0.4,0.2-0.9,0.5-1.4c0.2-0.5,0.5-1.1,0.8-1.7c0.3-0.6,0.7-1.2,1.1-1.8
                c0.4-0.6,0.8-1.1,1.2-1.6s0.8-0.9,1.2-1.2s0.8-0.5,1.2-0.6c0.3,0,0.7-0.1,1-0.1c0.4,0,0.8,0,1.2-0.1c0.4,0,0.8,0,1.1,0
                c0.4,0,0.7,0,1,0h3v31.9c0,0.6-0.1,1.1-0.3,1.6c-0.2,0.5-0.7,0.8-1.3,1.1c-0.2,0.1-0.4,0.1-0.8,0.2c-0.4,0.1-0.8,0.1-1.2,0.2
                c-0.4,0.1-0.9,0.1-1.3,0.2c-0.4,0-0.8,0.1-1,0.1v0.4h17.6v-0.4c-0.2,0-0.6,0-1-0.1c-0.4-0.1-0.8-0.1-1.3-0.2
                c-0.5-0.1-0.9-0.2-1.3-0.2c-0.4-0.1-0.7-0.2-0.8-0.2c-0.6-0.3-1-0.6-1.3-1.1c-0.2-0.5-0.4-1-0.4-1.6v-31.8h3c0.7,0,1.5,0,2.2,0
                s1.4,0.1,2.1,0.2c0.4,0,0.8,0.2,1.2,0.6c0.4,0.3,0.8,0.7,1.2,1.2s0.8,1,1.2,1.6c0.4,0.6,0.7,1.2,1.1,1.8c0.3,0.6,0.6,1.2,0.8,1.7
                C300.9,144.1,301,144.5,301.1,144.9z"/>
            </svg>

            <div id="line"></div>

        </div>
        
        <div id="wrapper">
            
            <!-- NAV -->
            <?php $logoGray = true; ?>
            <?php include 'nav.php'; ?>
            
            
            
            <div class="margin container-fluid"></div>
			 <!-- RESIDENCE -->
			<?php $isInternal = true; ?>
            <?php include 'sections/section-quote-residences.php';?>
            
			<?php include 'sections/section-paragraph-residences-internal.php';?>
            <?php $arrayImages = array('elegant.jpg','design-01.jpg'); ?>
            <?php include 'sections/section-carousel.php';?>
            
            
            <!-- KITCHENS -->
            <?php include 'sections/section-paragraph-kitchens.php';?>
            <?php $arrayImages = array('residences-01.jpg'); ?>
            <?php include 'sections/section-carousel.php';?>
            
            <!-- BATHROOMS -->
            <?php include 'sections/section-paragraph-bathrooms.php';?>
            <?php $arrayImages = array('bathroom-02.jpg'); ?>
            <?php include 'sections/section-carousel.php';?>
			
			<?php include 'sections/section-paragraph-bathrooms2.php';?>
			<?php $arrayImages = array('bathroom-03.jpg'); ?>
            <?php include 'sections/section-carousel.php';?>
			
			<?php include 'sections/section-paragraph-bathrooms3.php';?>
			<?php $arrayImages = array('bathroom-04.jpg'); ?>
            <?php include 'sections/section-carousel.php';?>
			
			<?php include 'sections/section-paragraph-bathrooms4.php';?>
			<?php $arrayImages = array('bathroom-05.jpg'); ?>
            <?php include 'sections/section-carousel.php';?>
			
		
            <div class="margin-bottom container-fluid"></div>
			

            <!-- FOOTER -->
            <?php include 'footer.php'; ?>
            
			
            <?php  if(!$smartphone){ ?>
            <!-- FLOOR PLAN CONTENT -->
            <?php include 'sections/floor-plan-content.php'; ?>
            <?php } ?>
            
            <?php include 'legal.php'; ?>
            <?php include 'privacy.php'; ?>
            <?php include 'fs-img.php'; ?>
            
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://code.createjs.com/preloadjs-0.6.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/Draggable.min.js"></script>
        <script src="js/ThrowPropsPlugin.js"></script>
        <script src="js/DrawSVGPlugin.js"></script>
        <script src="js/iscroll.js"></script>
        
        <script src="js/main.js"></script>
        
        <!--
        <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-78607802-1','auto');ga('send','pageview');
        </script>
        -->

        
    </body>


</html>

