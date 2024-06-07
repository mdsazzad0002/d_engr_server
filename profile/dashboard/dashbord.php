<!-- ============================================
Quick Card info 
============================================== -->
<p class="bg-danger text-light shadow-sm h3 rounded p-3 text-center">
	We are updateing don't try buy any items
</p>

<!-- Page Heading -->
<div class="row">
	<!-- box start total bannar -->
	<div class=" col-md-6 col-xl-4">
		<div class="card card-raised border-start border-success border-4 ">
			<div class="card-header h3">
				<?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `project_info`")); ?>
				<i class="bi bi-stack float-right text-success"></i>
			</div>
			<div class="card-body text-dark">
				Total Project
			</div>
		</div>
	</div>
	<!-- next box -->


	<!-- box start total bannar -->
	<div class=" col-md-6 col-xl-4">
		<div class="card card-raised border-start border-success border-4 ">
			<div class="card-header h3">
				<?php
				$emable_feture = '';
				$time = mysqli_fetch_assoc($con->query("SELECT `expire` FROM `suscription` WHERE `email` ='$user_type' OR `oauth_uid` = '$user_type'"))['expire'];
				if ($time == 0) {
					echo "Not any Suscription";
				} else {
					$now = time(); //+ (86400 * 2); one day 86400
					if ($time > $now) {
						echo "Suscription Expired";
					} else {
						echo $time;
						$emable_feture = '1';
					}
					// echo date('d-m-Y H:i:s', $time);

				}
				// echo time();


				?>
				<i class="bi bi-calendar-week-fill float-right text-success"></i>

			</div>
			<div class="card-body text-dark">
				Suscription End
			</div>

		</div>
	</div>
	<!-- next box -->



	<!-- box start total bannar -->
	<div class="col-md-6 col-xl-4">
		<div class="card card-raised border-start border-success border-4 ">
			<div class="card-header h3">
				<?php

				$plan = mysqli_fetch_assoc($con->query("SELECT `plan` FROM `suscription` WHERE `email` ='$user_type' or `oauth_uid` = '$user_type'"))['plan'];


				$data = '';
				$directory_go = '';
				if ($plan == NULL or empty($plan) or $plan == 'Free' or $plan == 'free') {
					echo "Free";
					$directory_go = 'free';
				} else {
					echo "Pro";
					$directory_go = 'pro';
				}

				// when tiger download button 
				if (isset($_GET['download'])) {
					$data =  '?download=' . $_GET['download'];
					echo "<script>window.location.href='../" . $directory_go . "/" . $data . "';</script>";
				};
				?>
				<i class="bi bi-people float-right text-success"></i>

			</div>
			<div class="card-body text-dark">
				Suscription Type
			</div>

		</div>
	</div>

</div>
<!-- ===================================================
End Quick Card with info
==============================================-->




<!-- ===================================================
		Suscribe and plan
		===============================================-->

<?php if ($emable_feture != 1) { ?>


	<div class="row py-3">
		<!-- divide  -->
		<div class="col-12">
			<div class="section-title">
				<h2>Suscribe & Plan</h2>
			</div>
		</div>
		<!-- end divide -->

		<div class="col-xl-5 px-0 rounded py-4 d-none d-xl-block feture_short">
			<div class="feture">
				<p>Use in personal & commercial projects
				</p>
				<i class=" bi bi-question-octagon-fill" data-tooltip="Allows you to use the template(s) to create personal or commerical websites for yourself"></i>

			</div>
			<div class="feture">
				<p>Customize the template files
				</p>
				<i class=" bi bi-question-octagon-fill" data-tooltip="You can modify and customize the template files to fit your needs"></i>

			</div>
			<div class="feture">
				<p>Create websites for clients
				</p>
				<i class=" bi bi-question-octagon-fill" data-tooltip="Allows you to use the template(s) to create websites for your clients and charge them as much as you want for your work"></i>

			</div>
			<div class="feture">
				<p>Remove footer credit link
				</p>
				<i class=" bi bi-question-octagon-fill" data-tooltip="Allows you to remove the footer credit link and any other reference to BootstrapMade"></i>

			</div>
			<div class="feture">
				<p>Working PHP/AJAX contact form
				</p>
				<i class=" bi bi-question-octagon-fill" data-tooltip="A working PHP/Ajax contact form script that allows you to receive messages submitted from the contact form to your Email inbox"></i>

			</div>
			<div class="feture">
				<p>CMS for contact form
				</p>
				<i class=" bi bi-question-octagon-fill" data-tooltip="Include Content Management System for Contacts Form"></i>

			</div>
			<div class="feture">
				<p>Replied by Email
				</p>
				<i class=" bi bi-question-octagon-fill" data-tooltip="Email Replied"></i>
			</div>
			<div class="feture">
				<p>Resell & Redistribute
				</p>
				<i class=" bi bi-question-octagon-fill" data-tooltip="You cannot resell, redistribute, license, or sub-license any of the files or code found on dengrweb.com without direct permission from dengrweb.com"></i>

			</div>


		</div>

		<div class="col-xl-3 px-0 py-4 rounded col-md-6">
			<div class="fetures_card">
				<h2 class="title">Free</h2>
				<div class="price">
					<p><span>$</span>0</p>
					<span>Free</span>
				</div>
				<ul>
					<li>
						<i class="bi bi-check"></i>
						<p class="d-xl-none">Use in personal & commercial projects</p>
					</li>
					<li>
						<i class="bi bi-check"></i>
						<p class="d-xl-none">Customize the template files</p>
					</li>
					<li>
						<i class="bi bi-x"></i>
						<p class="d-xl-none">Create websites for clients</p>
					</li>
					<li>
						<i class="bi bi-x"></i>
						<p class="d-xl-none">Remove footer credit link</p>
					</li>
					<li>
						<i class="bi bi-x"></i>
						<p class="d-xl-none">Working PHP/AJAX contact form</p>
					</li>
					<li>
						<i class="bi bi-x"></i>
						<p class="d-xl-none">CMS for contact form</p>
					</li>
					<li>
						<i class="bi bi-x"></i>
						<p class="d-xl-none">Replied by Email</p>
					</li>
					<li>
						<i class="bi bi-x"></i>
						<p class="d-xl-none">Resell & Redistribute</p>
					</li>
				</ul>
				<div class="plan">
					<a href="../free">Free Download</a>
				</div>
			</div>
		</div>


		<div class="col-xl-4 px-0 py-4 col-md-6">
			<div class="fetures_card">
				<h2 class="title">Pro</h2>
				<div class="price">
					<p><span>$</span>10 or 1000TK</p>
					<span>Extra Pro 3 Month</span>
				</div>
				<ul>
					<li>
						<i class="bi bi-check"></i>
						<p class="d-xl-none">Use in personal & commercial projects</p>
					</li>
					<li>
						<i class="bi bi-check"></i>
						<p class="d-xl-none">Customize the template files</p>
					</li>
					<li>
						<i class="bi bi-check"></i>
						<p class="d-xl-none">Create websites for clients</p>
					</li>
					<li>
						<i class="bi bi-check"></i>
						<p class="d-xl-none">Remove footer credit link</p>
					</li>
					<li>
						<i class="bi bi-check"></i>
						<p class="d-xl-none">Working PHP/AJAX contact form</p>
					</li>
					<li>
						<i class="bi bi-check"></i>
						<p class="d-xl-none">CMS for contact form</p>
					</li>
					<li>
						<i class="bi bi-check"></i>
						<p class="d-xl-none">Replied by Email</p>
					</li>
					<li>
						<i class="bi bi-x"></i>
						<p class="d-xl-none">Resell & Redistribute</p>
					</li>
				</ul>
				<div class="plan">
					<a class="buy" type="button" data-toggle="modal" data-target="#exampleModalCenter">Buy Now</a>
				</div>
			</div>
		</div>

		<!-- next box<i class="bi bi-question-octagon-fill"></i> -->



	</div>
	<!-- ==============================================
End Suscribe and plan
==================================================-->


	<!-- =====================
Suscription and buy
=====================-->
	<!-- Modal -->
	<form action="" id="suscription_plan_payment">


		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><i class="bi bi-wallet2"></i> Suscription & Plan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="">
							<h3 class="text-center mb-3">Buy A Suscription</h3>

							<div class="row">
								<div class="col-xl-6">
									<div class="plan_info">
										<label class="active" for="1">
											<input type="radio" data-cost="100" checked value="1" name="plan" id="1">
											<div class="">
												<p><span>$1 or 100</span>Pro Single</p>
												<span>1 Days</span>
											</div>
										</label>
										<label for="2">
											<input type="radio" data-cost="500" value="30" name="plan" id="2">
											<div class="">
												<p><span>$5 or 500</span>Pro </p>
												<span>1 Month</span>
											</div>
										</label>
										<label for="3">
											<input type="radio" data-cost="1000" value="90" name="plan" id="3">
											<div class="">
												<p><span>$10 or 1000</span>Pro </p>
												<span>3 Month</span>
											</div>
										</label>
										<label for="4">
											<input type="radio" data-cost="2000" value="366" name="plan" id="4">
											<div class="">
												<p><span>$10 or 2000</span>Pro </p>
												<span>1 Year</span>
											</div>
										</label>
									</div>
								</div>
								<div class="col-xl-6">
									<!--payment information  -->
									<div id="payment_info">
										<input hidden type="text" name="email" value="<?= $user_type; ?>" id="name">
										<p class="payment_number">
											<img src="<?= APP_URL;?>assets/img/bkash.png" alt="By Bkash">
											<img src="<?= APP_URL;?>assets/img/nogod.jpg" alt="By Nogod">
											01305348489
										</p>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text" for="number" id="">Phone Number</label>
											</div>
											<input type="text" id="number" required class="form-control" placeholder="Phone Number">
										</div>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text" for="tranjection" id="">Tranjection Id</label>
											</div>
											<input type="text" name="id" required id="tranjection" class="form-control" placeholder="Tranjection Id">
										</div>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text" for="Method" id="">Method</label>
											</div>
											<select name="method" required id="Method" class="form-control">
												<option value="bkash">bKash</option>
												<option value="nogod">Nogod</option>
											</select>

										</div>

										<p>We update your account within minutes after your payment.</p>
									</div>


								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Confirm Payment</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- =====================
Suscription and buy
=====================-->

	<script>
		let form = document.querySelector('#suscription_plan_payment');

		// find input radio spend money
		function data_cost() {
			var ele = document.querySelectorAll("input[type='radio']");
			for (i = 0; i < ele.length; i++) {
				if (ele[i].checked)
					return ele[i].getAttribute('data-cost');
			}
		}

		// console.log(data_cost())

		function data_sweetalert(i_icon, i_title) {
			swal({
				'icon': i_icon,
				'title': i_title,
			})
		}

		form.addEventListener('submit', (e) => {
			e.preventDefault();

			let xhttp = new XMLHttpRequest();
			let formdata = new FormData(form);
			formdata.append('data', '420');
			formdata.append('payment', data_cost());
			xhttp.onload = function() {
				// console.log(this.responseText);
				let data = this.responseText;
				data = JSON.parse(data);
				data_sweetalert(data['i_icon'], data['i_text']);
			}
			xhttp.open("post", 'status_plan.php');
			xhttp.send(formdata)
		})
	</script>
<?php } ?>