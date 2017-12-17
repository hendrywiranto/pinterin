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
                    <a class="nav-link" href="{{'listbuku'}}">Buy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{'/request'}}">Request</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{'/sell'}}">Sell</a>
                  </li>
                </ul>
              </div>
              <div class="col-4">
                <span class="navbar-text" style="padding-right: 10px;">
                  <i> User: {{session('name')}} </i>
                </span>
                <a class="btn btn-outline-success" href="{{'logout'}}">Logout</a>
              </div>
              <!-- <li class="nav-item"> -->
                <!-- <a class="nav-link" href="{{'logout'}}">Logout</a> -->
              <!-- </li> -->
        </nav>
    <!-- end container -->
</div>
<!-- end topbar -->