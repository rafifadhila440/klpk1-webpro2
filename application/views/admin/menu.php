			<!-- Heading -->

			<!-- Nav Item - Pages Collapse Menu -->
			<!-- <li class="nav-item active">
				<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
					<i class="fas fa-fw fa-folder"></i>
					<span>Pages</span>
				</a>
				<div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Login Screens:</h6>
						<a class="collapse-item" href="login.html">Login</a>
						<a class="collapse-item" href="register.html">Register</a>
						<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
						<div class="collapse-divider"></div>
						<h6 class="collapse-header">Other Pages:</h6>
						<a class="collapse-item" href="404.html">404 Page</a>
						<a class="collapse-item active" href="blank.html">Blank Page</a>
					</div>
				</div>
			</li> -->

			<li class="nav-item">
				<a class="nav-link" href="<?=base_url('admin/daftar_pesanan');?>">
					<i class="fas fa-fw fa-door-closed"></i>
					<span>Daftar Pesanan</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?=base_url('admin/data_paket');?>">
					<i class="fas fa-fw fa-door-closed"></i>
					<span>CRUD Paket</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?=base_url('user');?>">
					<i class="fas fa-fw fa-door-closed"></i>
					<span>CRUD USER</span>
				</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-fw fa-door-closed"></i>
					<span>Logout</span>
				</a>
			</li>
