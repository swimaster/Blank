<div class="row justify-content-center">
	<div class="col-lg-8 col-md-10">
		<div class="card <?php if ($invalid) echo "border-danger"; ?>">
			<div class="card-header">
				<h4>Register</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="">
					<div class="form-group col-lg-12">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-envelope"></i></span>
							</div>
							<input type="email" name="email" class="form-control" placeholder="Email" required <?php if ($invalid) echo "value=\"{$_POST['email']}\""; ?>/>
						</div>
					</div>

					<div class="form-group col-lg-12">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="Password" required <?php if ($invalid) echo "value=\"{$_POST['password']}\""; ?> />
							<input type="password" name="password2" class="form-control" placeholder="Confirm password" required <?php if ($invalid) echo "value=\"{$_POST['password2']}\""; ?> />
						</div>
					</div>

					<hr>

					<div class="form-group col-lg-12">
						<button type="submit" class="btn btn-primary">Register</button>
						<a href="javascript:history.back();" class="btn btn-default pull-right">Return</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>