<!DOCTYPE html>
<html>
  <head>
    <title>Shihab's CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{asset('adminPanelAssets')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('adminPanelAssets')}}/css/styles.css" rel="stylesheet">


    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">


    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('adminPanelAssets')}}/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="{{asset('adminPanelAssets')}}/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{asset('adminPanelAssets')}}/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="{{asset('adminPanelAssets')}}/css/forms.css" rel="stylesheet">

    <!--Ckeditor -->
    <script src="{{asset('')}}ckeditor/ckeditor.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


    <script type="text/javascript">
      function checkDeletion(){
        var chk = confirm('Are you sure to delete this?');
        if (chk) {
          return true;
        }
        else{
          return false;
        }
      }
    </script>
    
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="{{url('/dashboard')}}">Admin panel</a></h1>
	              </div>
	           </div>
	           <div class="col-md-2">

	           </div>
	           <div class="col-md-5">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <!-- <li><a href="#">Profile</a></li> -->
	                          <li><a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"
                            >Logout</a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                          </form>

                            </li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-3">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="{{url('/dashboard')}}"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="{{url('dashboard/category/add')}}"><i class="glyphicon glyphicon-pencil"></i> Add category</a></li>
                    <li><a href="{{url('dashboard/category/manage')}}"><i class="glyphicon glyphicon-list"></i> All categories</a></li>
                    <li><a href="{{url('dashboard/article/add')}}"><i class="glyphicon glyphicon-pencil"></i> Add article</a></li>
                    <li><a href="{{url('dashboard/article/manage')}}"><i class="glyphicon glyphicon-list"></i> All articles</a></li>


                </ul>
             </div>
		  </div>
		  <div class="col-md-9">
      @yield('content')
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Developed by: <a href='http://shihab.fromreadingtable.com' target='_blank' title='Click here to visit Shihab&#39;s personal site'>Shihab Uddin Ahmed</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('adminPanelAssets')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('adminPanelAssets')}}/js/custom.js"></script>




    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


    <script src="{{asset('adminPanelAssets')}}/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="{{asset('adminPanelAssets')}}/vendors/select/bootstrap-select.min.js"></script>

    <script src="{{asset('adminPanelAssets')}}/vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="{{asset('adminPanelAssets')}}/vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="{{asset('adminPanelAssets')}}/vendors/moment/moment.min.js"></script>

    <script src="{{asset('adminPanelAssets')}}/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="{{asset('adminPanelAssets')}}/vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="{{asset('adminPanelAssets')}}/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>


    <script src="{{asset('adminPanelAssets')}}/js/forms.js"></script>




    <link href="{{asset('adminPanelAssets')}}/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <script src="{{asset('adminPanelAssets')}}/vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="{{asset('adminPanelAssets')}}/vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="{{asset('adminPanelAssets')}}/js/tables.js"></script>


      <!-- Ckeditor -->
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor');

            </script>

  </body>
</html>