<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php

	if(!isset($_SESSION['user_id'])){
		header("location:".APPURL."");
	}

    $bookings = $conn->query("SELECT * FROM bookings WHERE user_id='$_SESSION[user_id]'");
	$bookings->execute();

	$allbookings = $bookings->fetchAll(PDO::FETCH_OBJ);
?>
<section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo APPURL; ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Your Bookings</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo APPURL; ?>/index.php">Home</a></span> <span>Your Bookings</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
						<?php if(count($allbookings) > 0) : ?>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>First_name</th>
						        <th>Last_name</th>
						        <th>Date</th>
						        <th>Time</th>
						        <th>Phone</th>
						        <th>Message</th>
								<th>Status</th>
								<th>Write Review</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php foreach($allbookings as $bookings): ?>
									<tr class="text-center">
										<td class="product-remove"><?php echo $bookings->first_name;?></td>
										
										<td class="image-prod"><?php echo $bookings->last_name; ?></td>
										
										<td class="product-name">
											<h3><?php echo $bookings->date; ?></h3>
										</td>
										
										<td class="price"><?php echo $bookings->time; ?></td>
										
										<td>
										<?php echo $bookings->phone;?>
										</td>
										
										<td class="total"><?php echo $bookings->message;?></td>
										<td class="total"><?php echo $bookings->status;?></td>
										
										<?php if($bookings->status == "Done")	:?> 
                                        <td class="total"><a class="btn btn-primary" href="<?php echo APPURL; ?>/reviews/write-reviews.php">Write Review</a></td>		
                                        <?php endif; ?>

									</tr>
							    <?php endforeach; ?>
						    </tbody>
						  </table>

						  <?php else: ?>
							<p>your do not have any bookings for now.</p>
						  <?php endif;?>
					  </div>
    			</div>
    		</div>

    		
			</div>
		</section>

<?php require "../includes/footer.php"; ?>
