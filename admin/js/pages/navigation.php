<body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="#"><img src="../../images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="#"><img src="../../images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item  d-none d-lg-flex">
              <a class="nav-link active" href="#">
                Cài Đặt
              </a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-flex  mr-2">
              <a class="nav-link" href="#">
                Hỗ Trợ
              </a>
            </li>
            <li class="nav-item dropdown d-flex">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="typcn typcn-message-typing"></i>
                <span class="count bg-success">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown  d-flex">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="typcn typcn-bell mr-0"></i>
                <span class="count bg-danger">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="typcn typcn-info-large mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="typcn typcn-cog mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="typcn typcn-user-outline mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                <i class="typcn typcn-user-outline mr-0"></i>
                <span class="nav-profile-name">Quản Trị Viên</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                <i class="typcn typcn-cog text-primary"></i>
                Settings
                </a>
                <a class="dropdown-item">
                <i class="typcn typcn-power text-primary"></i>
                Đăng xuất
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-delete-outline"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles primary"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default border"></div>
            </div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <div class="d-flex sidebar-profile">
              <div class="sidebar-profile-image">
                <img src="<? echo $site_icon;?>" alt="image">
                <span class="sidebar-status-indicator"></span>
              </div>
              <div class="sidebar-profile-name">
                <p class="sidebar-name">
                  <? echo $site_email;?>
                </p>
                <p class="sidebar-designation">
                  Quản trị viên
                </p>
              </div>
            </div>
            <div class="nav-search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
                <div class="input-group-append">
                  <span class="input-group-text" id="search">
                    <i class="typcn typcn-zoom"></i>
                  </span>
                </div>
              </div>
            </div>
            <p class="sidebar-menu-title">Menu Chức Năng</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/home.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Trang chủ <span class="badge badge-primary ml-3">Chính</span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-briefcase menu-icon"></i>
              <span class="menu-title">Sản Phẩm</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <!--<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>-->
                <!--<li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>-->
                <!--<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>-->
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/post/addProduct.php">Đăng Sản Phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/post/listProduct.php">Danh Sách Sản Phẩm</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-briefcase menu-icon"></i>
              <span class="menu-title">Cài Đặt Chung</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <!--<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>-->
                <!--<li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>-->
                <!--<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>-->
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/settings/setting.php">Cài Đặt Giao Diện</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/settings/listbanner.php">Danh Sách Banner Qc</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/settings/listbannerm.php">Danh Sách Banner Chính</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-briefcase menu-icon"></i>
              <span class="menu-title">Cài Đặt Giảm Gía</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <!--<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>-->
                <!--<li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>-->
                <!--<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>-->
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/giamgia/giamgia.php">Thêm Giảm Gía</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/giamgia/dsgiamgia.php">Danh Sách Giảm Giá</a></li>
              </ul>
            </div>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">-->
          <!--    <i class="typcn typcn-film menu-icon"></i>-->
          <!--    <span class="menu-title">Form elements</span>-->
          <!--    <i class="menu-arrow"></i>-->
          <!--  </a>-->
          <!--  <div class="collapse" id="form-elements">-->
          <!--    <ul class="nav flex-column sub-menu">-->
          <!--      <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</li>-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-briefcase menu-icon"></i>
              <span class="menu-title">Cài Đặt Danh Mục</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/danhmuc/danhmuc.php">Thêm Danh Mục</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/danhmuc/dsdanhmuc.php">Danh Sách Danh Mục</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-briefcase menu-icon"></i>
              <span class="menu-title">Thống Kê</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item"> <a class="nav-link" href="/admin/pages/thongke/thongke.php">Thống Kê Danh Mục</a></li>
              </ul>
            </div>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">-->
          <!--    <i class="typcn typcn-chart-pie-outline menu-icon"></i>-->
          <!--    <span class="menu-title">Charts</span>-->
          <!--    <i class="menu-arrow"></i>-->
          <!--  </a>-->
          <!--  <div class="collapse" id="charts">-->
          <!--    <ul class="nav flex-column sub-menu">-->
          <!--      <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">-->
          <!--    <i class="typcn typcn-th-small-outline menu-icon"></i>-->
          <!--    <span class="menu-title">Tables</span>-->
          <!--    <i class="menu-arrow"></i>-->
          <!--  </a>-->
          <!--  <div class="collapse" id="tables">-->
          <!--    <ul class="nav flex-column sub-menu">-->
          <!--      <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">-->
          <!--    <i class="typcn typcn-compass menu-icon"></i>-->
          <!--    <span class="menu-title">Icons</span>-->
          <!--    <i class="menu-arrow"></i>-->
          <!--  </a>-->
          <!--  <div class="collapse" id="icons">-->
          <!--    <ul class="nav flex-column sub-menu">-->
          <!--      <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">-->
          <!--    <i class="typcn typcn-user-add-outline menu-icon"></i>-->
          <!--    <span class="menu-title">User Pages</span>-->
          <!--    <i class="menu-arrow"></i>-->
          <!--  </a>-->
          <!--  <div class="collapse" id="auth">-->
          <!--    <ul class="nav flex-column sub-menu">-->
          <!--      <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>-->
          <!--      <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">-->
          <!--    <i class="typcn typcn-globe-outline menu-icon"></i>-->
          <!--    <span class="menu-title">Error pages</span>-->
          <!--    <i class="menu-arrow"></i>-->
          <!--  </a>-->
          <!--  <div class="collapse" id="error">-->
          <!--    <ul class="nav flex-column sub-menu">-->
          <!--      <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>-->
          <!--      <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="pages/documentation/documentation.html">-->
          <!--    <i class="typcn typcn-document-text menu-icon"></i>-->
          <!--    <span class="menu-title">Documentation</span>-->
          <!--  </a>-->
          <!--</li>-->
        </ul>
        <ul class="sidebar-legend">
          <li>
            <p class="sidebar-menu-title">Category</p>
          </li>
          <li class="nav-item"><a href="#" class="nav-link">#Sales</a></li>
          <li class="nav-item"><a href="#" class="nav-link">#Marketing</a></li>
          <li class="nav-item"><a href="#" class="nav-link">#Growth</a></li>
        </ul>
      </nav>