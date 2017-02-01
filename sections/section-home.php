<section id="home" class="full">

    <?php $preloadID++; ?>
    <div id="preload-<?=$preloadID; ?>" data-preload="true" data-id="<?=$preloadID;?>" data-img="src/images/home-detail.jpg" class="background bottom"></div>
   
    <div class="gradient"></div>
    
    <div class="text-content">
    
        <h1 class="text-uppercase">
            <span>The Renaissance</span>
            <span>of a Classic</span>
            <span>19th Century</span>
            <span>Landmark</span>
        </h1>
        
    </div>
    
    <?php if(!$smartphone) { ?>
    <img class="scroll-to" data-scroll="#scroll-home" id="scroll-arrow" src="src/assets/icon-scroll.png">
    <?php } ?>
    
</section>