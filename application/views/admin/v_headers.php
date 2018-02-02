<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php echo $judul; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url(); ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/DataTables/media/css/jquery.dataTables.min.css">
	<link rel="shortcut icon" href="favicon.ico"/>
	<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js"></script>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">

<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner">
		<div class="page-logo">
			<a class="navbar-brand" href="<?php echo site_url().'admin/dashboard'; ?>" style="margin-left: -20px; margin-top: -5px;"> NJr - Shop 
			</a>
			<div class="menu-toggler sidebar-toggler hide"> </div>
		</div>
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" style="color: white;">
					<span class="icon-user"> </span>
					<?php echo $this->session->userdata('username'); ?> 
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="inbox.html">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="page_todo.html">
							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="extra_lock.html">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="<?php echo site_url().'login/keluar_admin'; ?>">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="clearfix">
</div>

<div class="page-container">
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<div class="sidebar-toggler">
					</div>
				</li>
				<li class="sidebar-search-wrapper">
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
				</li>
				<li class="start active open">
					<a href="<?php echo site_url().'admin/dashboard'; ?>">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/admin'; ?>">
					<i class="icon-basket"></i>
					<span class="title">Data Admin</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/user'; ?>">
					<i class="icon-user"></i>
					<span class="title">Data User</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/produk'; ?>">
					<i class="icon-docs"></i>
					<span class="title">Data Produk</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/kategori_produk'; ?>">
					<i class="icon-folder"></i>
					<span class="title">Data Kategori Produk</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/testimoni'; ?>">
					<i class="icon-puzzle"></i>
					<span class="title">Data Testimoni</span>
					</a>
				</li>
				<li class="heading">
					<h3 class="uppercase">Laporan</h3>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">Data Laporan</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo site_url().'admin/laporan_pembelian'; ?>">
							<i class="icon-key"></i>
							<span class="badge badge-roundless badge-danger">new</span>Laporan Pembelian
							</a>
						</li>
						<li>
							<a href="<?php echo site_url().'admin/orders'; ?>">
							<i class="icon-key"></i>
							Laporan Orders<br>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url().'admin/order_product'; ?>">
							<i class="icon-key"></i>
							Laporan Order Produk<br>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url().'admin/order_detail'; ?>">
							<i class="icon-key"></i>
							Laporan Order Detail</a>
						</li>
					</ul>
				</li>
				<li class="heading">
					<h3 class="uppercase">Informasi</h3>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/customers'; ?>">
					<i class="icon-user"></i>
					<span class="title">Data Customers</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/aboutus'; ?>">
					<i class="icon-calendar"></i>
					<span class="title">Data About Us</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/contactus'; ?>">
					<i class="icon-key"></i>
					<span class="title">Data Contact Us</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/howtobuy'; ?>">
					<i class="icon-lock"></i>
					<span class="title">Data How To Buy</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/howtopay'; ?>">
					<i class="icon-magnifier"></i>
					<span class="title">Data How To Pay</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/no_rek'; ?>">
					<i class="icon-close"></i>
					<span class="title">Data No. Rek</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url().'admin/ongkir'; ?>">
					<i class="icon-rocket"></i>
					<span class="title">Data Ongkir</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">Data Wilayah</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo site_url().'admin/wilayah_desa'; ?>">
							<i class="icon-puzzle"></i>
							<span class="title">Wilayah Desa</span>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url().'admin/wilayah_kabupaten'; ?>">
							<i class="icon-puzzle"></i>
							<span class="title">Wilayah Kabupaten</span>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url().'admin/wilayah_kecamatan'; ?>">
							<i class="icon-puzzle"></i>
							<span class="title">Wilayah Kecamatan</span>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url().'admin/wilayah_provinsi'; ?>">
							<i class="icon-puzzle"></i>
							<span class="title">Wilayah Provinsi</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>