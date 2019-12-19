<!DOCTYPE html>
<html>
  <head>
    <title>Shihab's CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{asset('adminPanelAssets')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('adminPanelAssets')}}/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">Shihab's CMS</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        		{{ csrf_field() }}

				                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				                	<input class="form-control" name="email" type="text" placeholder="E-mail address">

	                                @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif				                	
				                </div>
				                
				                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				                	<input class="form-control" name="password" type="password" placeholder="Password">	  
	                                @if ($errors->has('password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif				                	              	
				                </div>


				                <div class="form-group">
				                	 <input class="btn btn-primary btn-block" type="submit" name="btn" value="Login">
				                </div>
			                </form>         
			            </div>
			        </div>

			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('adminPanelAssets')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('adminPanelAssets')}}/js/custom.js"></script>
  </body>
</html>