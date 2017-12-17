<div class="top-bar">
    <div class="container fill">
        <!-- main menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light text-right">
          <div class="col-6">
              <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="{{'/admin'}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{'/admin/add'}}">Tambah Buku</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{'/admin/listbuku'}}">List Buku</a>
                </li>
              </ul>
          </div>
          <div class="col-4">
            <span class="navbar-text" style="padding-right: 10px;">
              <i> Admin: {{session('name')}} </i>
            </span>
            <a class="btn btn-outline-success" href="{{'/admin/logout'}}">Logout</a>
          </div>
        </nav>
    </div>
    <!-- end container -->
</div>
<!-- end topbar -->