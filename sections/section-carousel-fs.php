<?php $arrowScroll = isset($arrowScroll) ? $arrowScroll : false; ?>

<section class="carousel full" data-interval="6000">

    <div class="carousel-holder">
        
        <?php for($i=0; $i<count($arrayImages); $i++) { ?>
        <div class="carousel-item">

            <?php $preloadID++; ?>
            <div id="preload-<?=$preloadID; ?>" data-preload="true" data-id="<?=$preloadID;?>" data-img="src/images/<?=$arrayImages[$i];?>" class="background parallax"></div>
        
        </div>
        <?php } ?>
        
        <img src="src/assets/icon-fs.png" class="hidden-xs fullscreen" data-id="#fs-img" data-img="src/images/home2.jpg">
        
        <?php if(!$smartphone && ($arrowScroll != false)) { ?>
        <img class="scroll-to" data-scroll="<?=$arrowScroll;?>" id="scroll-arrow" src="src/assets/icon-scroll.png">
        <?php $arrowScroll = false; } ?>
        
    </div>

    <?php if(count($arrayImages) > 1) { ?>
    <div class="carousel-ui">
    
        <div class="counter-holder">
        
            <?php for($i=0; $i<count($arrayImages); $i++) { ?>
            <span class="<?=$i == 0 ? 'active' : '';?>"></span>
            <?php } ?>
            
        </div>
    
        <div class="carousel-arrow left"></div>
        <div class="carousel-arrow right"></div>
        
        
    </div>
    <?php } ?>
    
    
    
</section>