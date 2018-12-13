<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<meta charset="utf-8">
	<title>Home Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo e(asset('asset/css/bootstrap.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('asset/css/style.css')); ?>" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="../asset/font-awesome/css/font-awesome.css"> -->
	<style type="text/css">
		body {
			font-family: "Times New Roman", serif;
		}
		table, td, th {
		    border: 1px solid #ddd;
		    text-align: left;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		table tr {
			padding: .35em;
		}
		table th {
			padding: .600em;
		}
		table td {
			padding: .400em;
		}
		table th {
			font-size: .85em;
			letter-spacing: .1em;
			text-transform: uppercase;
		}
		table td {
			font-size: .90em;
		}
		@media  screen and (max-width: 600px) {
			table {
				border: 0;
			}
			table caption {
				font-size: 1.3em;
			}
			table thead {
				display: none;
			}
			table tr {
				border-bottom: 2px solid #a5a5a5;
				display: block;
				margin-bottom: .725em;
			}
			table td {
				border-bottom: 1px solid #a5a5a5;
				display: block;
				font-size: .8em;
				text-align: right;
			}
			table td:before {
				content: attr(data-label);
				float: left;
				font-weight: bold;
				text-transform: uppercase;
			}
			table td:last-child {
				border-bottom: 0;
			}
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top warna">
		<div class="container-fluid">
			<div class="navbar-header">

				<p class="nav navbar-textn">
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            Dashboard
          </a>
        </p>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
							<a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									<i class="fa fa-user color">
										<?php echo e(Auth::user()->name); ?> <span class="caret"></span>
									</i>
							</a>

							<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
										 onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
											<?php echo e(__('Logout')); ?>

									</a>
									</li>
									<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
											<?php echo csrf_field(); ?>
									</form>
							</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="sidebar-nav">
          <div class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
              <li>
                <a href="<?php echo e(route('home')); ?>"><?php echo e(__('home')); ?></a>
              </li>
              <li>
                <a href="<?php echo e(route('werehouseindex')); ?>"><?php echo e(__('Werehouse')); ?></a>
              </li>
              <li>
                <a href="<?php echo e(route('itemsindex')); ?>"><?php echo e(__('Items')); ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-10">
          <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
  </div>

<script src="<?php echo e(asset('asset/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/bootstrap.min.js')); ?>"></script>
</body>
</html>
