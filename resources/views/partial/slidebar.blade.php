<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
      <div class="sidebar-brand-icon">
        <img src="{{asset('/gambar/icon-logo.png')}}" width="40px">
      </div>
      <div class="sidebar-brand-text mx-3">Library System</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="fas fa-fw fa-home"></i>
        <span>Home</span></a>
    </li>    
    
    @auth
    <li class="nav-item">
      <a class="nav-link" href="/buku/create">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tabel Buku</span></a>
    </li> 
    @endauth

    @guest 
      <li class="nav-item">
      <a class="nav-link" href="/kategori">
        <i class="fas fa-fw fa-search"></i>
        <span>Search by Categories</span></a>
    </li> 
    
    @endguest
    
    @auth
    <hr class="sidebar-divider">
    <li class="nav-item">
      <a class="nav-link" href="/kategori">
        <i class="fas fa-fw fa-server"></i>
        <span>Tabel Categori</span></a>
    </li>
    @endauth
    <!-- Divider -->
    
    @auth
    <hr class="sidebar-divider">
    <li class="nav-item">
      <a class="nav-link" href="/genre">
        <i class="fas fa-fw fa-server"></i>
        <span>Tabel Genre</span></a>
    </li>
    @endauth

  @guest 
    
  <li class="nav-item">
      <a class="nav-link" href="/genre">
        <i class="fas fa-fw fa-search"></i>
        <span>Search by Genre</span></a>
    </li> 
    
  @endguest
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>