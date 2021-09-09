<?php
function slider($imgname,$header,$paragraph){
	$output="
       <div class=\"item\">
     			<img src=\"$imgname\" alt=\"image\">
     			<div class=\"content\">
     				<h3>$header</h3>
     				<p>$paragraph </p>
     				<a href=\"#\"><button class=\"btn\">Discover</button></a>
     			</div>
     		</div>
	";
	echo $output;
}
class component{

	function arrival($img,$title,$pcost,$ccost){
		$element="
          <div class=\"box\">
				<div class=\"image\">
					<img src=\"$img\" alt=\"image\">
				</div>
				<div class=\"info\">
					<h3>$title</h3>
					<div class=\"subinfo\">
						<strong class=\"price\"><span>Ksh$pcost</span>Ksh$ccost</strong>
						<div class=\"stars\">
							<i class=\"fas fa-star\"></i>
							<i class=\"fas fa-star\"></i>
							<i class=\"fas fa-star\"></i>
							<i class=\"fas fa-star-half\"></i>
						</div>
					</div>
				</div>
				<div class=\"overlay\">
					<a href=\"#\" style=\"--i:1;\" class=\"fas fa-heart\"></a>
					<a href=\"#\" style=\"--i:2;\" class=\"fas fa-shopping-cart\"></a>
					<a href=\"#\" style=\"--i:3;\" class=\"fas fa-search\"></a>
				</div>
			</div>
		";
		echo $element;
}
function gallery($phone,$img,$title,$cost){

	$element="
      <div class=\"box $phone\">
    			<div class=\"image\">
    				<img src=\"$img\" alt=\"image\">
    			</div>
    			<div class=\"info\">
    				<h3>$title</h3>
    				<div class=\"subinfo\">
    					<strong class=\"price\">Ksh $cost</strong>
    					<div class=\"star\">
    						<i class=\"fas fa-star\"></i>
        			        <i class=\"fas fa-star\"></i>
        			        <i class=\"fas fa-star\"></i>
        			        <i class=\"fas fa-star\"></i>
        			        <i class=\"fas fa-star-half\"></i>
    					</div>
    				</div>
    			</div>
    		</div>
	";
	echo $element;
}
function deal($img,$title){
	$element="
      <div class=\"box\">
    			<img src=\"$img\">
    			<div class=\"content\">
    				<h3>$title</h3>
    				<p>Upto 25% offer on the first purchase</p>
    				<a href=\"#\"><button class=\"btn\">Explore</button></a>
    			</div>
    		</div>
	";
	echo $element;
}

}