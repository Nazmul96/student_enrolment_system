<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Enrolment</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- sweet Alert and toastr-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" rel="stylesheet" type="text/css">
  <!--end-->

  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('public/node_modules/rickshaw/rickshaw.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('public/bower_components/chartist/dist/chartist.min.css')}}"/>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/images/favicon.html')}}"/>
</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    
      <!-- chat section tabends -->
    
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{url('admin_dashboard')}}"><img src="public/images/salt_logo.svg" alt="Logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">4</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{url('view_profile')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                 
                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>
                  
                </div>
              </a>
              <a class="dropdown-item" href="{{url('setting')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  
                </div>
                <div class="sender">
                  <p class="Sende-name">Setting</p>
                  
                </div>
              </a> 
              <a class="dropdown-item" href="{{url('logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                  
                </div>
              </a>           
                         
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">Nazmul Hossain</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('allstudent')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Student</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('addstudent')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add Student</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Student Information</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('tution_fee')}}">Tution Fee</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/rtl-layout.html">Result</a>
                  </li>
                 
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Course</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('cse')}}">CSE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('it')}}">IT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('eee')}}">EEE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('textile')}}">Textile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('bba')}}">BBA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('mba')}}">MBA</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
            
            
            <!--forms start-->
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                <i class="mdi mdi-repeat menu-icon"></i>
                <span class="menu-title">Teacher</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="advancedSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('add_teacher')}}">Add Teacher</a>
                    <a class="nav-link" href="{{url('all_teacher')}}">All Teacher</a>
                  </li>
                  
                </ul>
              </div>
            </li>
           
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            @yield('content')
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('public/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('public/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('public/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('public/node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('public/node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('public/node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('public/node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('public/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('public/node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('public/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('public/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('public/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('public/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <script src="{{asset('public/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('public/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('public/js/data-table.js')}}"></script>
  <!-- inject:js -->
  <script src="{{asset('public/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/js/misc.js')}}"></script>
  <script src="{{asset('public/js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('public/js/dashboard_1.js')}}"></script>
  <!-- End custom js for this page-->

  <!-- sweet Alert and toastr-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  
  <script>
    @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
      case 'info':
            toastr.info("{{Session::get('message')}}");
            break;
      case 'success':
            toastr.success("{{Session::get('message')}}");
            break; 
      case 'warning':
            toastr.warning("{{Session::get('message')}}");
            break; 
      case 'error':
            toastr.error("{{Session::get('message')}}");
            break;                 
    }
    @endif
  </script>
  <script>
    $(document).on("click","#delete",function(e){
      e.preventDefault();
      var link=$(this).attr("href");
      swal({
          title: "Are you want to delete?",
          text: "Once deleted, This will be permanently Delete!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
                  window.location.href=link;
            }
           else {
            swal("safe data!");
          }
        });
    })
  </script>

</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
