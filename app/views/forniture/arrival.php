<!-- header -->
<?php $this-> view("forniture/header" , $data); ?>

            </div><!--/.header-area-->
            <!--new-arrivals start -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>new arrivals</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
						<?php if(is_array($data["product"])):?>
							<?php foreach ($data["product"] as $row):?>
								<div class="col-md-3 col-sm-4">
									<div class="single-new-arrival">
										<div class="single-new-arrival-bg">
											<img src="<?=ROOT . $row->image?> ?>" alt="collection4">
											<div class="single-new-arrival-bg-overlay"></div>
											<div class="sale bg-1">
											<p>sale</p>
											</div>
											
										</div>
										<h4><a href="#"><?=$row->title?></a></h4>
										<p class="arrival-product-price"><?=$row->price?></p>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>

					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->
<!-- footer -->
<?php $this-> view("forniture/footer" , $data); ?>
