<?php $isInternal = isset($isInternal) ? $isInternal : false; ?>
<section id="building" class="paragraph white <?=$isFirst ? 'first' : '';?>">
            
    <div class="row">
    
        <div class="col-sm-12">
       
			<p class="title text-anim">The Building</p>
            <p class="description text-anim">101 West 78th Street is a distinctive, late 19th Century residence designed by Belgian born Emile Gruwe. Completed in 1886, it is an Upper West Side condominium located directly across the street from its architectural contemporary, The American Museum of Natural History and just one block from the bucolic expanse of Central Park.</p>
			
			<?php if(!$isInternal) { ?>
			<button class="text-anim anim-link link submit"><span><em><a class="anim-link" href="./building" title="Building">About the building</a></em></span></button>
            <?php } ?>
			
        </div>
    
    </div>
    

</section>