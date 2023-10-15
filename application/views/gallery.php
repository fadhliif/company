<div class="container px-4 px-lg-5">
	<div class="row gx-4 gx-lg-5">

		<?php
		foreach ($gallery as $gal) :?>
		<div class="card mb-4 mt-4 ml-4" style="width: 20rem;">
 			<img class="card-img-top" src="assets/gallery/<?php echo $gal['nm_img'];?>" alt="Card image cap">
  	
		</div>

		<?php
            endforeach;?>
	</div>
	
</div>