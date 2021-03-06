<div class="top-bar">
        <!-- main menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

              <div class="col-2">
                <h1 class="navbar-brand">Pinter.in</h1>
              </div>
              <div class="col-6">
                <ul class="nav justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link" href="{{'/'}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{'/listbuku'}}">Buy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{'/request'}}">Requesting List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{'/sell'}}">Selling List</a>
                  </li>
                </ul>
              </div>
              <div class="col-4">
                <span class="navbar-text" style="padding-right: 10px;">
                  <i>User: <a href="{{'/profile'}}">{{session('name')}}</a></i>
                </span>
                <a class="btn btn-outline-success" href="{{'/logout'}}">Logout</a>
              </div>
        </nav>
    <!-- end container -->
</div>
<!-- end topbar -->