<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="i/style.css">
    

    <style>
        .overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

    </style>

</head>
<body id="page-top">

    <!-- Page Wrapper -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                @if (session('success'))
                <div class="alert alert-success" role="alert" id="alert">
                    {{ session('success') }}
                </div>
                @endif
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Collections</a>
                    </div>

                    <!-- Content Row -->


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->

                            <!-- Color System -->


                            </div>

                        </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <div class="container">
                            @foreach ($about as $item )
                                
                            <form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />   
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Content</h1>
                                </div>                           
                                <div class="form-group">
                                <label for="email">CONTENT IMAGE:</label>
                                <textarea type="text" class="form-control" id="email" value="asdasdasdjjfj" name="content_image">{{ $item['content_image'] }}</textarea>
                              </div>
                              <div class="form-group">
                                <label for="email">CONTENT LIST LEFT:</label>
                                <textarea type="text" class="form-control" id="email" placeholder="Enter email" name="content_list_left">asdasdasd</textarea>
                              </div>
                              <div class="form-group">
                                <label for="email">CONTENT LIST RIGHT:</label>
                                <textarea type="text" class="form-control" id="email" placeholder="Enter email" name="content_list_right">asdasdadad</textarea>
                              </div>
                              <div class="form-group">
                                <label for="pwd">TITLE:</label>
                                <input type="text" class="form-control" id="pwd" value="asdasdasdjjfj" name="title">
                              </div>

                             

                              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Font</h1>
                            </div>
            
            
                            <div class="form-group">
                                <label for="sel1">Title:</label>
                                <select name="select1" class="form-control" id="sel1">
                                <option>asdasdas</option>
                                  <option>'Courier New', Courier, monospace"</option>
                                  <option>'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif</option>
                                  <option>'Segoe UI', Tahoma, Geneva, Verdana, sans-serif</option>
                                  <option>'Times New Roman', Times, serif</option>
                                </select>
                              </div>
    
                              <div class="form-group">
                                <label for="sel1">Content Image:</label>
                                <select class="form-control" id="sel1">
                                    <option>'Courier New', Courier, monospace"</option>
                                    <option>'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif</option>
                                    <option>'Segoe UI', Tahoma, Geneva, Verdana, sans-serif</option>
                                    <option>'Times New Roman', Times, serif</option>
                                </select>
                              </div>
    
                              <div class="form-group">
                                <label for="sel1">Content List Left:</label>
                                <select class="form-control" id="sel1">
                                    <option>'Courier New', Courier, monospace"</option>
                                    <option>'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif</option>
                                    <option>'Segoe UI', Tahoma, Geneva, Verdana, sans-serif</option>
                                    <option>'Times New Roman', Times, serif</option>
                                </select>
                              </div>
    
                              <div class="form-group">
                                <label for="sel1">Content List Right:</label>
                                <select class="form-control" id="sel1">
                                    <option>'Courier New', Courier, monospace"</option>
                                    <option>'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif</option>
                                    <option>'Segoe UI', Tahoma, Geneva, Verdana, sans-serif</option>
                                    <option>'Times New Roman', Times, serif</option>
                                </select>
                              </div>

                              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Color</h1>
                            </div>
                            
                            <div class="form-group">
                                <label for="sel1">Background color header:</label>
                                <select class="form-control" id="sel1">
                                    <option>
                                        <p style="color:lightcoral">rosybrown</p>
                                    </option>
                                    <option>
                                        <i class="fas fa-circle" style="color:aqua"></i>aqua
                                    </option>                                   
                                    <option>
                                        <i class="fas fa-circle" style="color:darkslategray"></i>darkslategray
                                    </option>                                
                                </select>

                                
                              </div>

                              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Images</h1>
                            </div>
                            <div class="form-group">
                                <input type="file" name="filesTest" required="true">
                              </div>


                              <button type="submit" class="btn btn-primary">SAVE</button>
                            </form>
                            @endforeach

                          </div>
                    </div>
                </div>
            </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <a href="#">Font</a>
          <a href="#">Text</a>
          <a href="#">Color</a>
        </div>
      </div>


      <script>
        function openNav() {
          document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
          document.getElementById("myNav").style.width = "0%";
        }
        </script>

        

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        $("div.alert").delay(1000).slideUp();
    </script>

</body>

</html>
