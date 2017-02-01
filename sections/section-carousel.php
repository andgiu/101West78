<section class="carousel full" data-interval="6000">

    <div class="carousel-holder">

        <?php for($i=0; $i<count($arrayImages); $i++) { ?>
        <div class="carousel-item">

            <?php $preloadID++; ?>
            <div id="preload-<?=$preloadID; ?>" data-preload="true" data-id="<?=$preloadID;?>" data-img="src/images/<?=$arrayImages[$i];?>" class="background parallax"></div>

        </div>
        <?php } ?>

        <?php if(!$smartphone && ($arrowScroll != false)) { ?>
        <?php $scrollAmenities = isset($scrollAmenities) ? $scrollAmenities : false; ?>
        <img class="scroll-to <?=$scrollAmenities?'amenities':'';?>" data-scroll="<?=$arrowScroll;?>" id="scroll-arrow" src="src/assets/icon-scroll.png">
        <?php $arrowScroll = false; } ?>

        <?php if(count($arrayImages) == 1) { ?>
        <img src="src/assets/icon-fs.png" class="hidden-xs fullscreen" data-id="#fs-img" data-img="src/images/<?=$arrayImages[0];?>">
        <?php } ?>

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
