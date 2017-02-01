<nav class="<?=$desktop ? 'desktop' : ''; ?>">
                
    <div id="ham">

        <span></span>
        <span></span>
        <span></span>

    </div>

    <div id="logo">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510.2 510.2" class="<?=isset($logoGray) && !$smartphone ? 'gray' : '';?>">
          <path class="st0" d="M489.3 326.1c-3.3-5.8-7.4-10.8-12.3-14.9-5-4.1-10.5-7.5-16.4-10.3-6-2.8-11.8-5.2-17.2-7.3l-2.3-.9 2.3-1c8-3.4 14.8-7.2 20.2-11.3 5.4-4.1 9.8-8.3 13.1-12.4 3.2-4.1 5.6-8.2 7-12.2 1.4-4 2.1-7.7 2.1-11 0-7.3-1.4-14-4.2-20-2.8-6-6.9-11.2-12.3-15.5-5.4-4.3-12-7.7-19.7-10.1-7.8-2.3-16.7-3.5-26.5-3.5-2.7 0-5.4.2-8 .5l43.6-78.8-1.5-.8h-137l-2.8-19h-1l-20.1 85.9 1.4.4c.8-3.2 2-7 3.6-11.1 1.8-4.6 4.3-9 7.3-13.1 3.1-4.1 6.8-7.6 11.2-10.4 4.4-2.9 9.7-4.3 15.6-4.3h105.5L315.6 371.8l1.8 1 47.4-85.7c3.2 3.6 7.3 7 12 10 5.2 3.3 11.5 6.7 18.6 9.8l2.2 1-2.3.9c-5.3 2-10.8 4.7-16.5 8-5.7 3.3-11 7.3-15.7 11.8-4.7 4.5-8.7 9.6-11.7 15.1s-4.5 11.7-4.5 18.3c0 7 1.6 13.7 4.8 19.8 3.2 6.1 7.8 11.5 13.6 16.1 5.9 4.6 13 8.2 21.2 10.8 8.2 2.6 17.4 3.9 27.3 3.9 9.7 0 19.5-1.5 29.1-4.5 9.6-3 18.3-7.4 25.8-13 7.6-5.6 13.8-12.5 18.5-20.6 4.7-8 7-17.2 7-27.1 0-8.4-1.7-15.5-4.9-21.3zm-102.2-62.8c-1.8-2.6-3.3-5.6-4.4-8.7L414 198c2.9-.5 6-.8 9.3-.8 7.2 0 13.6 1.2 18.9 3.6 5.3 2.4 9.8 5.6 13.3 9.6s6.2 8.6 7.9 13.8c1.7 5.2 2.5 10.7 2.5 16.3 0 5.4-.5 10.7-1.3 16-.9 5.3-2.4 10.2-4.5 14.7s-4.8 8.6-8.1 12.1-7.4 6.3-12.2 8.2l-.3.1-.3-.1c-6.5-1.7-12.6-3.4-17.9-5.3-5.4-1.8-10.2-4-14.5-6.3-8.7-4.6-15.3-10.2-19.7-16.6zm75.6 117.5c-2.5 6-6.1 11.3-10.6 15.7-4.5 4.4-9.9 7.9-15.9 10.4s-12.6 3.7-19.4 3.7c-8.7 0-16.1-1.5-22.1-4.3-6-2.9-10.9-6.7-14.6-11.3-3.7-4.6-6.3-9.8-7.9-15.5-1.6-5.6-2.4-11.4-2.4-17.2 0-5.8.7-11.6 2.2-17 1.5-5.4 3.5-10.6 6-15.3 2.5-4.7 5.6-9 9.2-12.6 3.6-3.7 7.5-6.7 11.8-8.9l.4-.2.4.1c4.8 1.3 9.7 2.9 14.5 4.8 4.8 1.8 9.6 3.7 14.3 5.6 5.1 2.1 10 4.5 14.6 7.1 4.6 2.6 8.7 5.7 12.1 9.1 3.4 3.4 6.2 7.3 8.3 11.5 2.1 4.3 3.1 9.2 3.1 14.7-.2 7-1.5 13.6-4 19.6zM31.6 268.8c-.4-.1-.8-.1-1.1-.2-.4-.1-.6-.2-.8-.3-.5-.2-.9-.5-1.1-.9-.3-.4-.4-.9-.4-1.7V245c0-1.6 0-3.1.1-4.5s.2-2.7.4-3.9h-.4c-.4.2-.8.5-1.2.6-.4.2-.8.4-1.3.5-.5.2-1 .3-1.5.5-.6.1-1.2.3-1.9.5-.5.1-.9.2-1.4.3-.4.1-.9.2-1.4.3-.5.1-1 .2-1.5.2-.5.1-1.2.2-1.9.3v.4l6.9-.4V266c0 .6-.2 1.1-.5 1.5-.3.4-.7.7-1.3.8-.3.1-.7.2-1 .2-.4.1-.7.1-1.1.2-.4.1-.7.1-1 .1-.3 0-.6.1-.9.1v.4h16.4v-.3c-.2 0-.5 0-.9-.1-.5 0-.9 0-1.2-.1zM70.8 241.3c-1.1-1.5-2.5-2.6-4.2-3.5-1.7-.9-3.6-1.3-5.7-1.3-1.2 0-2.4.2-3.5.5-1.2.4-2.3.9-3.3 1.6-1 .7-2 1.6-2.8 2.6-.9 1-1.6 2.2-2.2 3.5-.6 1.3-1.1 2.7-1.5 4.3-.3 1.6-.5 3.3-.5 5.1 0 2.2.3 4.2.9 6.1.6 1.9 1.4 3.7 2.6 5.1 1.1 1.5 2.5 2.6 4.2 3.5 1.7.9 3.6 1.3 5.7 1.3 1.8 0 3.6-.4 5.3-1.2 1.7-.8 3.2-2 4.4-3.5 1.3-1.5 2.3-3.4 3.1-5.5.8-2.2 1.1-4.6 1.1-7.3 0-2.2-.3-4.2-.9-6.2-.7-1.9-1.6-3.7-2.7-5.1zm-2.9 18.6c-.4 2-.9 3.7-1.6 5.2-.7 1.5-1.5 2.6-2.5 3.4-1 .8-2.1 1.2-3.3 1.2-1.5 0-2.7-.4-3.7-1.3s-1.8-2-2.4-3.5c-.6-1.5-1.1-3.2-1.3-5.2-.3-2-.4-4.1-.4-6.2 0-2.4.2-4.6.5-6.6.4-2 .9-3.7 1.6-5.2.7-1.4 1.5-2.6 2.5-3.4 1-.8 2.1-1.2 3.4-1.2 1 0 1.9.2 2.6.6.8.4 1.4 1 2 1.7.6.7 1.1 1.6 1.5 2.6.4 1 .7 2.1 1 3.3.2 1.2.4 2.5.5 3.8.1 1.3.2 2.7.2 4.1 0 2.4-.2 4.6-.6 6.7zM104.5 268.8c-.4-.1-.8-.1-1.1-.2-.4-.1-.6-.2-.8-.3-.5-.2-.9-.5-1.1-.9-.3-.4-.4-.9-.4-1.7V245c0-1.6 0-3.1.1-4.5 0-1.4.2-2.7.4-3.9h-.6c-.4.2-.8.5-1.2.6-.4.2-.8.4-1.3.5-.5.2-1 .3-1.5.5-.6.1-1.2.3-1.9.5-.5.1-.9.2-1.4.3-.4.1-.9.2-1.4.3-.5.1-1 .2-1.5.2-.5.1-1.2.2-1.9.3v.4l6.9-.4V266c0 .6-.2 1.1-.5 1.5-.3.4-.7.7-1.3.8-.3.1-.7.2-1 .2-.4.1-.7.1-1.1.2-.4.1-.7.1-1 .1-.3 0-.6.1-.9.1v.4h16.4v-.3c-.2 0-.5 0-.9-.1-.3 0-.6 0-1-.1zM178 233.5c.6 0 1.3.1 2 .2s1.4.3 2 .5c.6.2 1.1.5 1.6.9.4.3.6.7.6 1.2 0 .2 0 .5-.1.7 0 .3-.1.6-.2 1s-.2.8-.3 1.3c-.1.5-.3 1.1-.5 1.8-.3 1.1-.7 2.4-1.2 3.9s-1 3.1-1.6 4.9-1.3 3.7-2 5.7-1.4 4-2.2 6.1c-.6-2-1.3-3.9-1.9-5.8-.6-1.9-1.2-3.7-1.8-5.4-.6-1.7-1.1-3.3-1.6-4.8s-.9-2.8-1.3-4c-.4-1.2-.7-2.2-1-3-.3-.8-.5-1.4-.6-1.8-.1-.2-.1-.4-.1-.7 0-.3-.1-.5-.1-.7 0-.3.2-.6.6-.8.4-.2.8-.4 1.4-.6.6-.2 1.1-.3 1.7-.4.6-.1 1.2-.1 1.6-.2v-.4h-16v.4c.3 0 .6.1.9.1.3.1.7.1 1.1.2.4.1.7.2 1 .3.3.1.6.2.8.4.4.2.7.6 1 1.2.3.5.6 1.1.8 1.8.2.6.5 1.3.6 1.9.2.6.3 1.2.4 1.6l-7.6 20.8-7.9-24.9c0-.2-.1-.4-.1-.7 0-.3-.1-.5-.1-.7 0-.3.2-.6.6-.8.4-.2.9-.4 1.5-.6.6-.2 1.2-.3 1.8-.4.6-.1 1.2-.1 1.6-.2v-.4h-16.2v.4c.5 0 1 .1 1.6.3.6.1 1.1.4 1.6.7.6.3 1 .7 1.3 1.2.3.4.5.9.7 1.5.2.8.6 1.9 1 3.1.4 1.3.9 2.8 1.4 4.4.5 1.7 1.1 3.5 1.7 5.4.6 2 1.3 4 2 6.2s1.4 4.4 2.1 6.7l2.1 6.9h1.2l10-27.4c.5 1.7 1.1 3.5 1.8 5.6.7 2 1.4 4.2 2.1 6.5.7 2.3 1.5 4.8 2.3 7.3.8 2.6 1.6 5.2 2.5 8h1.2c.6-1.8 1.3-3.7 2-5.7s1.4-3.9 2.1-5.9c.7-2 1.4-3.9 2-5.8.7-1.9 1.3-3.7 1.9-5.4.6-1.7 1.2-3.3 1.7-4.8s1-2.7 1.4-3.8c.3-.9.7-1.6 1.1-2.3.4-.7 1-1.2 1.7-1.6.5-.3 1-.5 1.6-.7.6-.2 1.1-.3 1.6-.3v-.4H178v.3zM230.8 260.3c-.2.4-.4.9-.7 1.5-.3.5-.6 1.1-.9 1.6-.3.6-.6 1.1-1 1.6-.3.5-.7 1-1 1.5-.3.4-.6.8-.9 1.1-.3.3-.8.6-1.4.8-.6.2-1.4.3-2.2.3-.8.1-1.7.1-2.6.1h-2.8c-1.3 0-2.4 0-3.3-.1-.8-.1-1.5-.3-1.9-.6-.5-.3-.8-.8-.9-1.5-.2-.6-.2-1.5-.2-2.6v-13h5.3c.7 0 1.3 0 1.8.2.5.1.9.2 1.2.4.3.2.6.4.8.6l.6.6c.2.2.3.5.6.9.2.4.4.9.6 1.5.2.6.4 1.1.5 1.7.1.6.2 1 .3 1.4h.5v-14.8h-.5c0 .3-.1.8-.2 1.3s-.3 1-.5 1.6c-.2.5-.4 1-.6 1.4-.2.4-.4.8-.6 1l-.5.5c-.2.2-.5.4-.8.6-.3.2-.7.3-1.2.4-.5.1-1.1.2-1.9.2h-5.3v-16.6h8.9c.5 0 .9 0 1.4.1.4 0 .8.1 1.1.1.6.1 1.2.4 1.8 1 .6.6 1.2 1.2 1.8 2 .6.8 1.1 1.6 1.5 2.4.4.8.7 1.5.9 2.1h.5v-8.2h-29.2v.4c.2 0 .6.1.9.1.4 0 .8.1 1.2.2.4.1.8.1 1.2.2.4.1.7.2 1 .3.7.3 1.1.7 1.3 1.2.2.5.3 1 .3 1.6v28.7c0 .6-.1 1.1-.3 1.6-.2.4-.7.8-1.3 1-.2.1-.5.2-.9.2-.4.1-.8.1-1.2.2-.4.1-.8.1-1.2.1-.4 0-.7.1-.9.1v.4H231l.7-10.2h-.5c-.1 0-.2.3-.4.8zM268.6 252.9c-.7-.7-1.4-1.4-2.3-2-.9-.6-1.9-1.1-3.1-1.6-.6-.3-1.2-.5-1.8-.8-.6-.2-1.2-.4-1.7-.7-.6-.2-1.2-.5-1.8-.7-.6-.3-1.2-.6-1.9-.9-.7-.4-1.4-.8-2-1.3-.6-.4-1.1-.9-1.5-1.5-.4-.5-.7-1.1-1-1.8-.2-.7-.3-1.4-.3-2.2 0-1 .2-1.9.6-2.7.4-.8.9-1.4 1.4-2 .6-.5 1.3-.9 2-1.2.7-.3 1.5-.4 2.2-.4 1.6 0 3 .3 4.3 1 1.2.7 2.3 1.5 3.2 2.6.9 1.1 1.6 2.3 2.3 3.7.6 1.4 1.1 2.8 1.6 4.2h.5l-.3-12h-.4l-1.8 2.6c-.5-.4-1-.7-1.7-1-.6-.3-1.3-.6-2.1-.9-.8-.3-1.6-.5-2.5-.6-.9-.2-1.8-.2-2.7-.2-1.5 0-2.9.2-4.2.7-1.3.5-2.4 1.2-3.4 2-1 .9-1.7 1.9-2.2 3.1-.5 1.2-.8 2.5-.8 3.9 0 2.4.5 4.3 1.6 5.8s2.6 2.7 4.7 3.6c.7.3 1.4.6 2 .9.6.3 1.2.5 1.8.7.6.2 1.2.5 1.8.7.6.2 1.3.5 2 .8.8.3 1.5.7 2.2 1.2.6.5 1.2 1 1.7 1.6.5.6.8 1.2 1.1 1.9.3.7.4 1.5.4 2.3 0 1-.1 2-.4 2.9-.3.9-.7 1.7-1.3 2.4-.6.7-1.4 1.3-2.3 1.7-.9.4-2 .6-3.4.6-1.6 0-3.1-.3-4.4-.9-1.3-.6-2.4-1.5-3.3-2.5-1-1.1-1.8-2.3-2.6-3.8s-1.4-3-2.1-4.6h-.5l.4 12.4h.5l1.9-2.7c.4.3.9.6 1.6 1 .7.3 1.4.7 2.3.9.9.3 1.8.5 2.9.7 1 .2 2.2.3 3.3.3 1.7 0 3.3-.3 4.8-.8s2.7-1.3 3.8-2.3c1.1-1 1.9-2.1 2.5-3.5.6-1.4.9-2.8.9-4.4 0-1.4-.2-2.6-.5-3.6-.9-1-1.4-1.9-2-2.6z"/>
          <path class="st0" d="M316.4 242.4h.5v-9.3h-33.2v9.3h.5c.1-.4.2-.9.5-1.4.2-.5.5-1.1.8-1.7.3-.6.7-1.2 1.1-1.8.4-.6.8-1.1 1.2-1.6.4-.5.8-.9 1.2-1.2.4-.3.8-.5 1.2-.6.3 0 .7-.1 1-.1.4 0 .8 0 1.2-.1h5.1v31.9c0 .6-.1 1.1-.3 1.6-.2.5-.7.8-1.3 1.1-.2.1-.4.1-.8.2s-.8.1-1.2.2c-.4.1-.9.1-1.3.2-.4 0-.8.1-1 .1v.4H309v-.6c-.2 0-.6 0-1-.1s-.8-.1-1.3-.2-.9-.2-1.3-.2c-.4-.1-.7-.2-.8-.2-.6-.3-1-.6-1.3-1.1-.2-.5-.4-1-.4-1.6v-31.8h5.2c.7 0 1.4.1 2.1.2.4 0 .8.2 1.2.6.4.3.8.7 1.2 1.2.4.5.8 1 1.2 1.6.4.6.7 1.2 1.1 1.8.3.6.6 1.2.8 1.7.4.6.6 1.1.7 1.5z"/>
        </svg>

    </div>

    <ul>
        
        <?php $cat = isset($_GET['cat']) ? $_GET['cat'] : 'home'; ?>

		<li data-anchor="#home" class="<?=$cat=='home'?'active':'';?>"><a class="anim-link" href="./" title="Home">Home</a></li>
        <li data-anchor="#building" class="<?=$cat=='building'?'active':'';?>"><a class="anim-link" href="./building" title="Building">Building</a></li>
		<li data-anchor="#residences" class="<?=$cat=='residences'?'active':'';?>"><a class="anim-link" href="./residences" title="Residences">Residences</a></li>
        <li data-anchor="#amenities" class="<?=$cat=='amenities'?'active':'';?>"><a class="anim-link" href="./amenities" title="Amenities">Amenities</a></li>
		<li data-anchor="#neighborhood" class="<?=$cat=='neighborhood'?'active':'';?>"><a class="anim-link" href="./upper-west-side" title="Upper West Side">Upper West Side</a></li>
		<li data-anchor="#availability" class="<?=$cat=='availability'?'active':'';?>"><a class="anim-link" href="./availability" title="Availability">Availability</a></li>
		<li data-anchor="#team" class="<?=$cat=='team'?'active':'';?>"><a class="anim-link" href="./team" title="Team">Team</a></li>
		<li data-anchor="#contacts" class="<?=$cat=='contact'?'active':'';?>"><a class="anim-link" href="./contact" title="Contact">Contact</a></li>
		
		<!--
		<li data-anchor="#press" class="<?=$cat=='press'?'active':'';?>"><a class="anim-link" href="./media" title="Media">Media</a></li>
		-->
		
		<li data-anchor="#press" class="<?=$cat=='aa'?'active':'';?>">	
	
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			
			  Media
			
		  </button>
			
		  <ol class="dropdown-menu" aria-labelledby="dropdownMenu1">
			<li><a href="./blog">Blog</a></li>
			<li><a href="./press">PRess</a></li>
		  </ol>
		
		</li>
		
		
	
        
        <div id="line"></div>
        
        <svg class="hidden-md hidden-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510.2 510.2">
          <path class="st1" d="M489.3 326.1c-3.3-5.8-7.4-10.8-12.3-14.9-5-4.1-10.5-7.5-16.4-10.3-6-2.8-11.8-5.2-17.2-7.3l-2.3-.9 2.3-1c8-3.4 14.8-7.2 20.2-11.3 5.4-4.1 9.8-8.3 13.1-12.4 3.2-4.1 5.6-8.2 7-12.2 1.4-4 2.1-7.7 2.1-11 0-7.3-1.4-14-4.2-20-2.8-6-6.9-11.2-12.3-15.5-5.4-4.3-12-7.7-19.7-10.1-7.8-2.3-16.7-3.5-26.5-3.5-2.7 0-5.4.2-8 .5l43.6-78.8-1.5-.8h-137l-2.8-19h-1l-20.1 85.9 1.4.4c.8-3.2 2-7 3.6-11.1 1.8-4.6 4.3-9 7.3-13.1 3.1-4.1 6.8-7.6 11.2-10.4 4.4-2.9 9.7-4.3 15.6-4.3h105.5L315.6 371.8l1.8 1 47.4-85.7c3.2 3.6 7.3 7 12 10 5.2 3.3 11.5 6.7 18.6 9.8l2.2 1-2.3.9c-5.3 2-10.8 4.7-16.5 8-5.7 3.3-11 7.3-15.7 11.8-4.7 4.5-8.7 9.6-11.7 15.1s-4.5 11.7-4.5 18.3c0 7 1.6 13.7 4.8 19.8 3.2 6.1 7.8 11.5 13.6 16.1 5.9 4.6 13 8.2 21.2 10.8 8.2 2.6 17.4 3.9 27.3 3.9 9.7 0 19.5-1.5 29.1-4.5 9.6-3 18.3-7.4 25.8-13 7.6-5.6 13.8-12.5 18.5-20.6 4.7-8 7-17.2 7-27.1 0-8.4-1.7-15.5-4.9-21.3zm-102.2-62.8c-1.8-2.6-3.3-5.6-4.4-8.7L414 198c2.9-.5 6-.8 9.3-.8 7.2 0 13.6 1.2 18.9 3.6 5.3 2.4 9.8 5.6 13.3 9.6s6.2 8.6 7.9 13.8c1.7 5.2 2.5 10.7 2.5 16.3 0 5.4-.5 10.7-1.3 16-.9 5.3-2.4 10.2-4.5 14.7s-4.8 8.6-8.1 12.1-7.4 6.3-12.2 8.2l-.3.1-.3-.1c-6.5-1.7-12.6-3.4-17.9-5.3-5.4-1.8-10.2-4-14.5-6.3-8.7-4.6-15.3-10.2-19.7-16.6zm75.6 117.5c-2.5 6-6.1 11.3-10.6 15.7-4.5 4.4-9.9 7.9-15.9 10.4s-12.6 3.7-19.4 3.7c-8.7 0-16.1-1.5-22.1-4.3-6-2.9-10.9-6.7-14.6-11.3-3.7-4.6-6.3-9.8-7.9-15.5-1.6-5.6-2.4-11.4-2.4-17.2 0-5.8.7-11.6 2.2-17 1.5-5.4 3.5-10.6 6-15.3 2.5-4.7 5.6-9 9.2-12.6 3.6-3.7 7.5-6.7 11.8-8.9l.4-.2.4.1c4.8 1.3 9.7 2.9 14.5 4.8 4.8 1.8 9.6 3.7 14.3 5.6 5.1 2.1 10 4.5 14.6 7.1 4.6 2.6 8.7 5.7 12.1 9.1 3.4 3.4 6.2 7.3 8.3 11.5 2.1 4.3 3.1 9.2 3.1 14.7-.2 7-1.5 13.6-4 19.6zM31.6 268.8c-.4-.1-.8-.1-1.1-.2-.4-.1-.6-.2-.8-.3-.5-.2-.9-.5-1.1-.9-.3-.4-.4-.9-.4-1.7V245c0-1.6 0-3.1.1-4.5s.2-2.7.4-3.9h-.4c-.4.2-.8.5-1.2.6-.4.2-.8.4-1.3.5-.5.2-1 .3-1.5.5-.6.1-1.2.3-1.9.5-.5.1-.9.2-1.4.3-.4.1-.9.2-1.4.3-.5.1-1 .2-1.5.2-.5.1-1.2.2-1.9.3v.4l6.9-.4V266c0 .6-.2 1.1-.5 1.5-.3.4-.7.7-1.3.8-.3.1-.7.2-1 .2-.4.1-.7.1-1.1.2-.4.1-.7.1-1 .1-.3 0-.6.1-.9.1v.4h16.4v-.3c-.2 0-.5 0-.9-.1-.5 0-.9 0-1.2-.1zM70.8 241.3c-1.1-1.5-2.5-2.6-4.2-3.5-1.7-.9-3.6-1.3-5.7-1.3-1.2 0-2.4.2-3.5.5-1.2.4-2.3.9-3.3 1.6-1 .7-2 1.6-2.8 2.6-.9 1-1.6 2.2-2.2 3.5-.6 1.3-1.1 2.7-1.5 4.3-.3 1.6-.5 3.3-.5 5.1 0 2.2.3 4.2.9 6.1.6 1.9 1.4 3.7 2.6 5.1 1.1 1.5 2.5 2.6 4.2 3.5 1.7.9 3.6 1.3 5.7 1.3 1.8 0 3.6-.4 5.3-1.2 1.7-.8 3.2-2 4.4-3.5 1.3-1.5 2.3-3.4 3.1-5.5.8-2.2 1.1-4.6 1.1-7.3 0-2.2-.3-4.2-.9-6.2-.7-1.9-1.6-3.7-2.7-5.1zm-2.9 18.6c-.4 2-.9 3.7-1.6 5.2-.7 1.5-1.5 2.6-2.5 3.4-1 .8-2.1 1.2-3.3 1.2-1.5 0-2.7-.4-3.7-1.3s-1.8-2-2.4-3.5c-.6-1.5-1.1-3.2-1.3-5.2-.3-2-.4-4.1-.4-6.2 0-2.4.2-4.6.5-6.6.4-2 .9-3.7 1.6-5.2.7-1.4 1.5-2.6 2.5-3.4 1-.8 2.1-1.2 3.4-1.2 1 0 1.9.2 2.6.6.8.4 1.4 1 2 1.7.6.7 1.1 1.6 1.5 2.6.4 1 .7 2.1 1 3.3.2 1.2.4 2.5.5 3.8.1 1.3.2 2.7.2 4.1 0 2.4-.2 4.6-.6 6.7zM104.5 268.8c-.4-.1-.8-.1-1.1-.2-.4-.1-.6-.2-.8-.3-.5-.2-.9-.5-1.1-.9-.3-.4-.4-.9-.4-1.7V245c0-1.6 0-3.1.1-4.5 0-1.4.2-2.7.4-3.9h-.6c-.4.2-.8.5-1.2.6-.4.2-.8.4-1.3.5-.5.2-1 .3-1.5.5-.6.1-1.2.3-1.9.5-.5.1-.9.2-1.4.3-.4.1-.9.2-1.4.3-.5.1-1 .2-1.5.2-.5.1-1.2.2-1.9.3v.4l6.9-.4V266c0 .6-.2 1.1-.5 1.5-.3.4-.7.7-1.3.8-.3.1-.7.2-1 .2-.4.1-.7.1-1.1.2-.4.1-.7.1-1 .1-.3 0-.6.1-.9.1v.4h16.4v-.3c-.2 0-.5 0-.9-.1-.3 0-.6 0-1-.1zM178 233.5c.6 0 1.3.1 2 .2s1.4.3 2 .5c.6.2 1.1.5 1.6.9.4.3.6.7.6 1.2 0 .2 0 .5-.1.7 0 .3-.1.6-.2 1s-.2.8-.3 1.3c-.1.5-.3 1.1-.5 1.8-.3 1.1-.7 2.4-1.2 3.9s-1 3.1-1.6 4.9-1.3 3.7-2 5.7-1.4 4-2.2 6.1c-.6-2-1.3-3.9-1.9-5.8-.6-1.9-1.2-3.7-1.8-5.4-.6-1.7-1.1-3.3-1.6-4.8s-.9-2.8-1.3-4c-.4-1.2-.7-2.2-1-3-.3-.8-.5-1.4-.6-1.8-.1-.2-.1-.4-.1-.7 0-.3-.1-.5-.1-.7 0-.3.2-.6.6-.8.4-.2.8-.4 1.4-.6.6-.2 1.1-.3 1.7-.4.6-.1 1.2-.1 1.6-.2v-.4h-16v.4c.3 0 .6.1.9.1.3.1.7.1 1.1.2.4.1.7.2 1 .3.3.1.6.2.8.4.4.2.7.6 1 1.2.3.5.6 1.1.8 1.8.2.6.5 1.3.6 1.9.2.6.3 1.2.4 1.6l-7.6 20.8-7.9-24.9c0-.2-.1-.4-.1-.7 0-.3-.1-.5-.1-.7 0-.3.2-.6.6-.8.4-.2.9-.4 1.5-.6.6-.2 1.2-.3 1.8-.4.6-.1 1.2-.1 1.6-.2v-.4h-16.2v.4c.5 0 1 .1 1.6.3.6.1 1.1.4 1.6.7.6.3 1 .7 1.3 1.2.3.4.5.9.7 1.5.2.8.6 1.9 1 3.1.4 1.3.9 2.8 1.4 4.4.5 1.7 1.1 3.5 1.7 5.4.6 2 1.3 4 2 6.2s1.4 4.4 2.1 6.7l2.1 6.9h1.2l10-27.4c.5 1.7 1.1 3.5 1.8 5.6.7 2 1.4 4.2 2.1 6.5.7 2.3 1.5 4.8 2.3 7.3.8 2.6 1.6 5.2 2.5 8h1.2c.6-1.8 1.3-3.7 2-5.7s1.4-3.9 2.1-5.9c.7-2 1.4-3.9 2-5.8.7-1.9 1.3-3.7 1.9-5.4.6-1.7 1.2-3.3 1.7-4.8s1-2.7 1.4-3.8c.3-.9.7-1.6 1.1-2.3.4-.7 1-1.2 1.7-1.6.5-.3 1-.5 1.6-.7.6-.2 1.1-.3 1.6-.3v-.4H178v.3zM230.8 260.3c-.2.4-.4.9-.7 1.5-.3.5-.6 1.1-.9 1.6-.3.6-.6 1.1-1 1.6-.3.5-.7 1-1 1.5-.3.4-.6.8-.9 1.1-.3.3-.8.6-1.4.8-.6.2-1.4.3-2.2.3-.8.1-1.7.1-2.6.1h-2.8c-1.3 0-2.4 0-3.3-.1-.8-.1-1.5-.3-1.9-.6-.5-.3-.8-.8-.9-1.5-.2-.6-.2-1.5-.2-2.6v-13h5.3c.7 0 1.3 0 1.8.2.5.1.9.2 1.2.4.3.2.6.4.8.6l.6.6c.2.2.3.5.6.9.2.4.4.9.6 1.5.2.6.4 1.1.5 1.7.1.6.2 1 .3 1.4h.5v-14.8h-.5c0 .3-.1.8-.2 1.3s-.3 1-.5 1.6c-.2.5-.4 1-.6 1.4-.2.4-.4.8-.6 1l-.5.5c-.2.2-.5.4-.8.6-.3.2-.7.3-1.2.4-.5.1-1.1.2-1.9.2h-5.3v-16.6h8.9c.5 0 .9 0 1.4.1.4 0 .8.1 1.1.1.6.1 1.2.4 1.8 1 .6.6 1.2 1.2 1.8 2 .6.8 1.1 1.6 1.5 2.4.4.8.7 1.5.9 2.1h.5v-8.2h-29.2v.4c.2 0 .6.1.9.1.4 0 .8.1 1.2.2.4.1.8.1 1.2.2.4.1.7.2 1 .3.7.3 1.1.7 1.3 1.2.2.5.3 1 .3 1.6v28.7c0 .6-.1 1.1-.3 1.6-.2.4-.7.8-1.3 1-.2.1-.5.2-.9.2-.4.1-.8.1-1.2.2-.4.1-.8.1-1.2.1-.4 0-.7.1-.9.1v.4H231l.7-10.2h-.5c-.1 0-.2.3-.4.8zM268.6 252.9c-.7-.7-1.4-1.4-2.3-2-.9-.6-1.9-1.1-3.1-1.6-.6-.3-1.2-.5-1.8-.8-.6-.2-1.2-.4-1.7-.7-.6-.2-1.2-.5-1.8-.7-.6-.3-1.2-.6-1.9-.9-.7-.4-1.4-.8-2-1.3-.6-.4-1.1-.9-1.5-1.5-.4-.5-.7-1.1-1-1.8-.2-.7-.3-1.4-.3-2.2 0-1 .2-1.9.6-2.7.4-.8.9-1.4 1.4-2 .6-.5 1.3-.9 2-1.2.7-.3 1.5-.4 2.2-.4 1.6 0 3 .3 4.3 1 1.2.7 2.3 1.5 3.2 2.6.9 1.1 1.6 2.3 2.3 3.7.6 1.4 1.1 2.8 1.6 4.2h.5l-.3-12h-.4l-1.8 2.6c-.5-.4-1-.7-1.7-1-.6-.3-1.3-.6-2.1-.9-.8-.3-1.6-.5-2.5-.6-.9-.2-1.8-.2-2.7-.2-1.5 0-2.9.2-4.2.7-1.3.5-2.4 1.2-3.4 2-1 .9-1.7 1.9-2.2 3.1-.5 1.2-.8 2.5-.8 3.9 0 2.4.5 4.3 1.6 5.8s2.6 2.7 4.7 3.6c.7.3 1.4.6 2 .9.6.3 1.2.5 1.8.7.6.2 1.2.5 1.8.7.6.2 1.3.5 2 .8.8.3 1.5.7 2.2 1.2.6.5 1.2 1 1.7 1.6.5.6.8 1.2 1.1 1.9.3.7.4 1.5.4 2.3 0 1-.1 2-.4 2.9-.3.9-.7 1.7-1.3 2.4-.6.7-1.4 1.3-2.3 1.7-.9.4-2 .6-3.4.6-1.6 0-3.1-.3-4.4-.9-1.3-.6-2.4-1.5-3.3-2.5-1-1.1-1.8-2.3-2.6-3.8s-1.4-3-2.1-4.6h-.5l.4 12.4h.5l1.9-2.7c.4.3.9.6 1.6 1 .7.3 1.4.7 2.3.9.9.3 1.8.5 2.9.7 1 .2 2.2.3 3.3.3 1.7 0 3.3-.3 4.8-.8s2.7-1.3 3.8-2.3c1.1-1 1.9-2.1 2.5-3.5.6-1.4.9-2.8.9-4.4 0-1.4-.2-2.6-.5-3.6-.9-1-1.4-1.9-2-2.6z"/>
          <path class="st1" d="M316.4 242.4h.5v-9.3h-33.2v9.3h.5c.1-.4.2-.9.5-1.4.2-.5.5-1.1.8-1.7.3-.6.7-1.2 1.1-1.8.4-.6.8-1.1 1.2-1.6.4-.5.8-.9 1.2-1.2.4-.3.8-.5 1.2-.6.3 0 .7-.1 1-.1.4 0 .8 0 1.2-.1h5.1v31.9c0 .6-.1 1.1-.3 1.6-.2.5-.7.8-1.3 1.1-.2.1-.4.1-.8.2s-.8.1-1.2.2c-.4.1-.9.1-1.3.2-.4 0-.8.1-1 .1v.4H309v-.6c-.2 0-.6 0-1-.1s-.8-.1-1.3-.2-.9-.2-1.3-.2c-.4-.1-.7-.2-.8-.2-.6-.3-1-.6-1.3-1.1-.2-.5-.4-1-.4-1.6v-31.8h5.2c.7 0 1.4.1 2.1.2.4 0 .8.2 1.2.6.4.3.8.7 1.2 1.2.4.5.8 1 1.2 1.6.4.6.7 1.2 1.1 1.8.3.6.6 1.2.8 1.7.4.6.6 1.1.7 1.5z"/>
        </svg>

    </ul>

</nav>