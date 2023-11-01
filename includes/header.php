<header class="head-sec">
  <div class="container-fluid">
    <div class="row d-flex align-items-center justify-content-center pt-2 pb-2">
      <div class="col-md-2  col-sm-10">
        <div class="logo text-lg-center">
          <a href="#"><img src="./assets/images/logo.png" alt=""></a>
        </div>
      </div>
      <div class="col-md-10 col-sm-10">
        <div class="row align-items-center">
          <div class="col-xxl-7 col-lg-7 col-md-11 my-xl-0 my-3">
            <ul class="primary-navs">
              <div class="close-icon">
                <i class="fa-solid fa-xmark menu-toggle"></i>
              </div>
              <li class="nav-bars"> <a href="./"><i class="fa-solid fa-house"></i></a></li>
              <li class="nav-bars"><a href="#"><i class="fa-solid fa-message"></i></a></li>
              <li class="nav-bars"> <a href="#">About Us</a> </li>
              <div class="dropdown">
                <button onclick="window.location.href='./poets.php'" class="btn dropdown-toggle p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="drop-down-text"> Poets Corner</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item drop-inner" href="#">Action</a></li>
                  <li><a class="dropdown-item drop-inner" href="#">Another action</a></li>
                  <li><a class="dropdown-item drop-inner" href="#">Something else here</a></li>
                </ul>
              </div>
              <div class="dropdown">
                <button onclick="window.location.href='./liabrary.php'" class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="drop-down-text"> My Liabrary</span>
                </button>
                <ul class="dropdown-menu" >
                  <li><a class="dropdown-item drop-inner" href="#">Action</a></li>
                  <li><a class="dropdown-item drop-inner" href="#">Another action</a></li>
                  <li><a class="dropdown-item drop-inner" href="#">Something else here</a></li>
                </ul>
              </div>
            </ul>
            <div class="row"  id="searchInput">
              <div class="col-lg-8 col-md-10 col-sm-10 mx-auto">
                <input type="search" placeholder="Search Here..." class="w-100 py-4 rounded-pill top-search">
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-12 my-xl-0 my-3">
            <div class="btn-side d-flex justify-content-around align-items-center">
              <button id="search-btn" class="bg-transparent border-1 p-3 rounded-pill"><i class="fa-solid fa-magnifying-glass" id="search-icon"></i></button>
              <a  class="btn pe-5 ps-5 py-2 mx-sm-3  login-btn " data-id="personal-diary_front.jpg">Login</a>
              <a  class="btn pe-5 ps-5 py-2 mx-sm-3  register-btn" data-id="personal-diary_front.jpg">Register</a>
              <div class="menu-icon">
                <i class="fa-solid fa-bars menu-toggle"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</header>