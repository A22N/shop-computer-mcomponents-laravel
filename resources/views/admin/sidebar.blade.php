  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/admin" class="brand-link">
          <img src="/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="/template/admin/dist/img/Elon_Musk.png" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{Auth::user()->name}}</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-bars"></i>
                          <p>
                              Danh mục
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/admin/menus/add" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Thêm danh mục</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/admin/menus/list" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Danh sách danh mục</p>
                              </a>
                          </li>
                      </ul>
                  </li>


                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-store"></i>
                          <p>
                              Sản Phẩm
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: none;">
                          <li class="nav-item">
                              <a href="/admin/products/add" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Thêm Sản Phẩm Mới</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/admin/products/list" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Danh Sách Sản Phẩm</p>
                              </a>
                          </li>
                      </ul>
                  </li>


                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon far fa-images"></i>

                          <p>
                              Slider
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: none;">
                          <li class="nav-item">
                              <a href="/admin/sliders/add" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Thêm Slider</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/admin/sliders/list" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Danh Sách Slider</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-cart-plus"></i>

                          <p>
                              Đơn Hàng
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: none;">
                          <li class="nav-item">
                              <a href="/admin/customers" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Danh Sách Đơn Hàng</p>
                              </a>
                          </li>
                      </ul>
                  </li>



                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>

                          <p>
                              Nhân viên
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: none;">
                          <li class="nav-item">
                              <a href="/admin/staffs/add" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Thêm Nhân viên</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/admin/staffs/list" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Danh Sách Nhân viên</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-bars"></i>

                          <p>
                              Phân Quyền
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: none;">
                          <li class="nav-item">
                              <a href="/admin/sliders/add" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Thêm </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/admin/sliders/list" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Danh Sách </p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>

                          <p>
                              Hỗ trợ
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: none;">
                          <li class="nav-item">
                              <a href="/admin/help" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Bảng</p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>


          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>