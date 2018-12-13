<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>Home Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('asset/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
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
		@media screen and (max-width: 600px) {
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
          <a class="navbar-brand" href="{{ url('/') }}">
            Dashboard
          </a>
        </p>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
							<a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									<i class="fa fa-user color">
										{{ Auth::user()->name }} <span class="caret"></span>
									</i>
							</a>

							<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="{{ route('logout') }}"
										 onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
									</a>
									</li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
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
                <a href="{{ route('home') }}">{{ __('home') }}</a>
              </li>
              <li>
                <a href="{{ route('werehouseindex') }}">{{ __('Werehouse') }}</a>
              </li>
              <li>
                <a href="{{ route('itemsindex') }}">{{ __('Items') }}</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-10">
          @yield('content')
      </div>
    </div>
  </div>

<script src="{{ asset('asset/js/jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</body>
</html>
