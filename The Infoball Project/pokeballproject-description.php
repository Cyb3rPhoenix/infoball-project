<div class="page-header">
			<h1>
				<?php  echo $row["Pokeball_Name"];?>
			</h1>
			<p><?php  echo $row["Pokeball_Quote"];?></p>
		</div>
		<div class="row" style="margin-top: 10px; margin-bottom: 110px">
			<div class="col-sm-4" style="height: 100%">
				<img src="<?php  echo $row["Pokeball_Pic"];?>" class="img-responsive">
			</div>
			<div class="col-sm-8" style="height: 100%">
				<?php  echo $row["Pokeball_Desc"];?>
			</div>
		</div>