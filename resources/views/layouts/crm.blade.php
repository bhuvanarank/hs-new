<!DOCTYPE html>
<html lang="en">

<style>
  .menu-items{
    list-style: none;
    text-decoration: none;
  }

  .menu-items .list-cl .active{
    background-color: red;
    border-radius: 5px;
    padding: 0px 10px;
  }
  .menuactive{
    background-color: #ddd;
    border-radius: 5px;
    padding: 0px 10px;
  }
  .menu-items .list-cl:hover{
    background-color: #f3f3f3;
    border-radius: 5px;
    padding: 0px 10px;
  }

.select2-container--default .select2-selection--multiple {
    border: 1px solid #eaecef !important;
    border-radius: 2px !important;
    cursor: text;
    height: 37px;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid #eaecef 1px !important;
    outline: 0;
    height: 37px;
}
.select2-container .select2-search--inline .select2-search__field {
  margin-top: 0px !important;
}
.select2 .select2-container .select2-container--default {

width: 100% !important;

}

.select2-container .select2-selection--single {
    height: 36px !important;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #eaecef !important;
     border-radius: 0px !important; 
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 18px !important;
    padding: 0px !important;
}
.select2-results__option {
    padding: 0px 6px !important;
  }

</style>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotelsstory</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap.min.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/img/gpl_favicon.svg')}}" />
    <link rel='stylesheet' href="{{ asset('assets/lib/dhtmlxScheduler/dhtmlxscheduler_flat.css')}}">
    <link rel='stylesheet' href="{{ asset('assets/css/calstyles.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.css')}}">
  </head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="{{ asset('assets/js/bootstrap-datetimepicker.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.mousewheel.min.js')}}"></script>
<body>

  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{url('index')}}"><img src="{{ asset('assets/img/hs-logo.png')}}" alt="logo22"/></a>
                <a class="navbar-brand brand-logo-mini" href="{{url('index')}}"><img src="{{ asset('assets/img/hs-logo.png')}}" alt="logo11"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-sm-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm"><a href="{{url('#')}}">Settings  </a></button>
                </li>
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"></span>
                    <span class="online-status"></span>
                    <img src="{{ asset('assets/img/avatar.png')}}" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item" href="{{url('editprofile')}}">
                        <i class="mdi mdi-account-outline menu-icon text-primary"></i>
                        Edit Profile
                      </a>
                      <a class="dropdown-item" href="{{url('changepassword')}}">
                        <i class="mdi mdi-lock-outline menu-icon text-primary"></i>
                        Change Password
                      </a>
                      <a class="dropdown-item" href="{{url('logout')}}">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container" style="padding-right: 0;padding-left: 0;">
            <ul class="nav page-navigation">
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">{{ 'Dashboard' }} </span></a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">{{ 'Widgets' }} </span></a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">{{ 'Accounts' }} </span></a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">{{ 'Accounts' }} </span></a>
              </li>
            </ul>
        </div>
      </nav>
    </div>
    <!-- partial -->
    <!-- partial:partials/_profile-sidebar.html -->
    <div class="profile-sidebar" id="profile-sidebar">
      <i class="profile-settings-close mdi mdi-close"></i>
      <div class="profile-sidebar-header">
        <div class="text-center">
          <div>
            <div class="profile-sidebar-thumb">
              <img src="{{ asset('assets/img/face18.jpg')}}" alt="profile">
            </div>
            <div class="profile-sidebar-info">
              <h4 class="name">Johnson</h3> 
              <h5 class="mb-0 designation">Sales Head</h5> 
            </div>
          </div>
          <div class="profile-social-icons">
            <a href="#"><i class="mdi mdi-facebook-box"></i></a>
            <a href="#"><i class="mdi mdi-twitter-box"></i></a>
            <a href="#"><i class="mdi mdi-instagram"></i></a>
            <a href="#"><i class="mdi mdi-google-plus-box"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-sidebar-body">
        <ul class="list-profile-items">
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                  <i class="mdi mdi-account-outline text-primary"></i>
                  <div>
                    <h5 class="item-title">My Profile</h5>
                    <p class="item-detail">Account settings and more</p>
                  </div>
                </div>
            </a>
          </li>
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                  <i class="mdi mdi-email-outline text-info"></i>
                  <div>
                    <h5 class="item-title">My Messages</h5>
                    <p class="item-detail">Inbox and tasks</p>
                  </div>
                </div>
            </a>           
          </li>
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                <i class="mdi mdi-vector-polyline text-danger"></i>
                <div>
                  <h5 class="item-title">My Activities</h5>
                  <p class="item-detail">Logs and notifications</p>
                </div>
              </div>
            </a>
          </li>
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                <i class="mdi mdi-timer-sand text-success"></i>
                <div>
                  <h5 class="item-title">My Tasks</h5>
                  <p class="item-detail">latest tasks and projects</p>
                </div>
              </div>
            </a>
          </li>
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                <i class="mdi mdi-cash-100 text-warning"></i>
                <div>
                  <h5 class="item-title">Billing</h5>
                  <p class="item-detail">billing & statements <span class="badge badge-danger ml-2">2 Pending</span></p>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>

      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ url('logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>
    <!-- partial -->
    <!-- partial:../../partials/_profile-sidebar.html -->
    <div class="profile-sidebar" id="profile-sidebar">
      <i class="profile-settings-close mdi mdi-close"></i>
      <div class="profile-sidebar-header">
        <div class="text-center">
          <div>
            <div class="profile-sidebar-thumb">
              <img src="{{ asset('assets/img/face18.jpg')}}" alt="profile">
            </div>
            <div class="profile-sidebar-info">
              <h4 class="name"></h3> 
              <h5 class="mb-0 designation">Sales Head</h5> 
            </div>
          </div>
          <div class="profile-social-icons">
            <a href="#"><i class="mdi mdi-facebook-box"></i></a>
            <a href="#"><i class="mdi mdi-twitter-box"></i></a>
            <a href="#"><i class="mdi mdi-instagram"></i></a>
            <a href="#"><i class="mdi mdi-google-plus-box"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-sidebar-body">
        <ul class="list-profile-items">
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                  <i class="mdi mdi-account-outline text-primary"></i>
                  <div>
                    <h5 class="item-title">My Profile</h5>
                    <p class="item-detail">Account settings and more</p>
                  </div>
                </div>
            </a>
          </li>
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                  <i class="mdi mdi-email-outline text-info"></i>
                  <div>
                    <h5 class="item-title">My Messages</h5>
                    <p class="item-detail">Inbox and tasks</p>
                  </div>
                </div>
            </a>           
          </li>
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                <i class="mdi mdi-vector-polyline text-danger"></i>
                <div>
                  <h5 class="item-title">My Activities</h5>
                  <p class="item-detail">Logs and notifications</p>
                </div>
              </div>
            </a>
          </li>
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                <i class="mdi mdi-timer-sand text-success"></i>
                <div>
                  <h5 class="item-title">My Tasks</h5>
                  <p class="item-detail">latest tasks and projects</p>
                </div>
              </div>
            </a>
          </li>
          <li class="profile-item">
            <a href="#" class="profile-sidebar-link">
              <div class="d-flex align-items-center">
                <i class="mdi mdi-cash-100 text-warning"></i>
                <div>
                  <h5 class="item-title">Billing</h5>
                  <p class="item-detail">billing & statements <span class="badge badge-danger ml-2">2 Pending</span></p>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- partial -->

  <div class="container-fluid page-body-wrapper">
    <div class="main-panel animated fadeIn">
      <div class="content-wrapper">
        <div class="row">
 
          <div class="loader"></div>

          @yield('content')
          <input type="hidden" data-toggle="tooltip" data-placement="top" title="title" >
        </div>
      </div>
    </div>
  </div>



        <footer class="footer">
          <div class="footer-wrap text-center">
              <div class="w-100 clearfix">
                <span class="d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022 <a href="https://hotelsstory.com/" target="_blank">Hotelsstory</a>. All rights reserved.</span>                
              </div>
          </div>
        </footer>
</body>
</html>

<script>

$(window).load(function() {
  $(".loader").fadeOut("slow");

})
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$(document).ready(function() {
  // Search all columns
  $('#txt_searchall').keyup(function(){
    // Search Text
    var search = $(this).val();

    // Hide all table tbody rows
    $('table tbody tr').hide();

    // Count total search result
    var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;

    if(len > 0){
      // Searching text in columns and show match row
      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
        $(this).closest('tr').show();
      $('.notfound').hide();
      });
    }else{
      $('.notfound').show();
    }

  });
  $.expr[":"].contains = $.expr.createPseudo(function(arg) {
   return function( elem ) {
     return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
   };
  });
});

 </script>

    <script src="{{ asset('assets/js/vendor.bundle.base.js')}}"></script>
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('assets/js/template.js')}}"></script>
    <script src="{{ asset('assets/js/settings.js')}}"></script>
    <script src="{{ asset('assets/js/todolist.js')}}"></script>
    <script src="{{ asset('assets/js/profile-settings.js')}}"></script>
    <script src="{{ asset('assets/js/tablesorter.js')}}"></script>
    <script src="{{ asset('assets/js/jq.tablesort.js')}}"></script>
    <!-- endinject -->
    <script src="{{ asset('assets/js/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/js/progressbar.min.js')}}"></script>
    <script src="{{ asset('assets/js/chartjs-plugin-datalabels.js')}}"></script>
    <script src="{{ asset('assets/js/raphael-2.1.4')}}.min.js"></script>
    <script src="{{ asset('assets/js/justgage.js')}}"></script>
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/todolist.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('assets/js/select2/select2.min.js')}}"></script>
    <script src="{{ asset('assets/js/select2.js')}}"></script>
    <!-- <script src="{{ asset('assets/js/jquery.min.js')}}"></script> -->
    <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
    
    <script src="{{ asset('assets/js/moment.min.js')}}"></script>
 
    <script src="{{ asset('assets/tinymce/tinymce.min.js') }}"></script>

<script>
tinymce.init({
  selector: '.tinymce',
  plugins: "paste",
  mode : 'specific_textareas',
  editor_selector : 'myTextEditor',
  theme : 'modern',
  height: 280,
  toolbar: "bold italic hr underline | link unlink | bullist numlist | fullscreen",
  menubar:false, 
  theme_modern_toolbar_location : "bottom",
  paste_word_valid_elements: "b,strong,i,em,h1,h2",
  forced_root_block : "",
  statusbar: false,
  setup : function(ed)
  {
  ed.on('init', function() 
  {
  this.getDoc().body.style.fontSize = '13px';
  });
  },
});

tinymce.init({
  selector: '.mytinymce',
  plugins: "paste",
  mode : 'specific_textareas',
  editor_selector : 'myTextEditor',
  theme : 'modern',
  height: 130,
  toolbar: "bold italic hr underline | link unlink | bullist numlist | fullscreen",
  menubar:false, 
  theme_modern_toolbar_location : "bottom",
  paste_word_valid_elements: "b,strong,i,em,h1,h2",
  forced_root_block : "",
  statusbar: false,
  setup : function(ed)
  {
  ed.on('init', function() 
  {
  this.getDoc().body.style.fontSize = '13px';
  });
  },
});

</script>
  <!-- End custom js for this page-->
  
