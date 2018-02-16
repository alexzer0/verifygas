<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.min.css') }}">
    <link href="{{ asset('css/site.min.css') }}" rel="stylesheet">

    <!-- Plugins -->
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('global/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/flag-icon-css/flag-icon.css') }}">
    <link href="{{ asset('css/contacts.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/web-icons/web-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/brand-icons/brand-icons.min.css') }}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

    <!--[if lt IE 9]>
    <script src="../../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{ asset('global/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
      Breakpoints();
    </script>

</head>
<body class="animsition site-navbar-small app-contacts page-aside-left">
    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse navbar-inverse" role="navigation">
        @include('partials.navbar') 
    </nav>
    <div class="site-menubar site-menubar-light site-menubar-light">
        <div class="site-menubar-body">
        <div><div>
            @include('partials.menubar')
        </div></div>
        </div>
    </div>
   
       @yield('content')



    <!-- Site Action -->
    <div class="site-action" data-plugin="actionBtn">
      <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
        <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
        <i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
      </button>
      <div class="site-action-buttons">
        <button type="button" data-action="trash" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
          <i class="icon wb-trash" aria-hidden="true"></i>
        </button>
        <button type="button" data-action="folder" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
          <i class="icon wb-folder" aria-hidden="true"></i>
        </button>
      </div>
    </div>
    <!-- End Site Action -->

    <!-- Add User Form -->
    <div class="modal fade" id="addUserForm" aria-hidden="true" aria-labelledby="addUserForm"
      role="dialog" tabindex="-1">
      <div class="modal-dialog modal-simple">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
            <h4 class="modal-title">Create New Contact</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="birthday" placeholder="Birthday"
                />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
            <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Add User Form -->

    <!-- Add Label Form -->
    <div class="modal fade" id="addLabelForm" aria-hidden="true" aria-labelledby="addLabelForm"
      role="dialog" tabindex="-1">
      <div class="modal-dialog modal-simple">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
            <h4 class="modal-title">Add New Label</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" name="lablename" placeholder="Label Name"
                />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
            <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Add Label Form -->
     
    <footer class="site-footer"> 
        @include('partials.footer')
</footer>
    <!-- Scripts -->

    <!-- Core  -->
    <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
    <script src="{{ asset('global/vendor/jquery/jquery.js') }}"></script>


    <script src="{{ asset('global/vendor/popper-js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap/bootstrap.js') }}"></script>

    <script src="{{ asset('global/vendor/animsition/animsition.js') }}"></script>
    <script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
    <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
    
    <!-- Plugins -->
    <script src="{{ asset('global/vendor/switchery/switchery.js') }}"></script>
    <script src="{{ asset('global/vendor/intro-js/intro.js') }}"></script>
    <script src="{{ asset('global/vendor/screenfull/screenfull.js') }}"></script>
    <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
        <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
        <script src="{{ asset('global/vendor/aspaginator/jquery-asPaginator.min.js') }}"></script>
        <script src="{{ asset('global/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
        <script src="{{ asset('global/vendor/bootbox/bootbox.js') }}"></script>
    
    <!-- Scripts -->
    <script src="{{ asset('global/js/Component.js') }}"></script>
    <script src="{{ asset('global/js/Plugin.js') }}"></script>
    <script src="{{ asset('global/js/Base.js') }}"></script>
    <script src="{{ asset('global/js/Config.js') }}"></script>
    
    <script src="{{ asset('assets/js/Section/Menubar.js') }}"></script>
    <script src="{{ asset('assets/js/Section/Sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/Section/PageAside.js') }}"></script>
    <script src="{{ asset('assets/js/Plugin/menu.js') }}"></script>

       <!-- Config -->
       <script src="{{ asset('global/js/config/colors.js') }}"></script>
    <script src="{{ asset('assets/js/config/tour.js') }}"></script>
    <script>Config.set('assets', 'assets');</script>
    
     <!-- Page -->
     <script src="{{ asset('assets/js/Site.js') }}"></script>
    <script src="{{ asset('global/js/Plugin/asscrollable.js') }}"></script>
    <script src="{{ asset('global/js/Plugin/slidepanel.js') }}"></script>
    <script src="{{ asset('global/js/Plugin/switchery.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/sticky-header.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/action-btn.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/asselectable.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/editlist.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/aspaginator.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/animate-list.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/jquery-placeholder.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/material.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/selectable.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/bootbox.js') }}"></script>
        <script src="{{ asset('assets/js/BaseApp.js') }}"></script>
        <script src="{{ asset('assets/js/App/Contacts.js') }}"></script>
        <script src="{{ asset('assets/examples/js/apps/contacts.js') }}"></script>
</body>
</html>
