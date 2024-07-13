
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>    
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-circle-outline menu-icon"></i>
        <span class="menu-title">Products</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">          
          <li class="nav-item"> <a class="nav-link" href="">view product</a></li>
          <li class="nav-item"> <a class="nav-link" href="">Add Product</a></li>         
        </ul>
      </div>
    </li>    
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
        aria-controls="form-elements">
        <i class="mdi mdi-view-headline menu-icon"></i>
        <span class="menu-title">Categories</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="">Add Categories</a></li>          
        </ul>
      </div> 
      <div class="collapse" id="form-elements"> 
        <ul class="nav flex-column sub-menu">  
          <li class="nav-item"><a class="nav-link" href="">View Categories</a></li> 
        </ul>
      </div>

    </li>    
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="mdi mdi-chart-pie menu-icon"></i>
        <span class="menu-title">Brands</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="">View Brands</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Color</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="">View All Colours</a></li>
          </li>
        </ul> 

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="mdi mdi-animation menu-icon"></i>
        <span class="menu-title">Slider</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="">View All Slider</a></li>
          </li>
        </ul> 

    <li class="nav-item"> 
      <form action="" method="POST" class="d-flex:none" id="logout"> 
        @csrf 
      </form>
      <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout').submit();">
        <i class="mdi mdi-logout-variant menu-icon"></i>
        <span class="menu-title">Log Out</span>
      </a>
    </li>
  </ul>
</nav>