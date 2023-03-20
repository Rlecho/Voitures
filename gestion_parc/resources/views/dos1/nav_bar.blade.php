

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">

    <section style="background-color: #ffffff;">
    <div class="navbar-menu-wrapper d-flex align-items-stretch">

    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: #ffffff;">
    <img class="img_logo" src=" {{ asset ('font/images/logo.png') }}" alt="logo" style="margin-right: 90px;" />
    </div>


    <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
    <span class="mdi mdi-menu"></span>
    </button>
    <div class="search-field d-none d-xl-block">
    <form class="d-flex align-items-center h-100" action="#">
    <div class="input-group">
    <div class="input-group-prepend bg-transparent">
    <i class="input-group-text border-0 mdi mdi-magnify"></i>
    </div>
    <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
    </div>
    </form>
    </div>
    <ul class="navbar-nav navbar-nav-right">

    <li class="nav-item nav-language dropdown d-none d-md-block">
    <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
    <div class="nav-language-icon">
    <i class="flag-icon flag-icon-us" title="us" id="us"></i>
    </div>
    <div class="nav-language-text">
    <p class="mb-1 text-black">Français</p>
    </div>
    </a>
    <div class="dropdown-menu navbar-dropdown " aria-labelledby="languageDropdown">
    <a class="dropdown-item" href="#">
    <div class="nav-language-icon mr-2">
    <i class="flag-icon flag-icon-ae" title="ae" id="ae"></i>
    </div>
    <div class="nav-language-text">
    <p class="mb-1 text-black">Français</p>
    </div>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">
    <div class="nav-language-icon mr-2">
    <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>
    </div>
    <div class="nav-language-text">
    <p class="mb-1 text-black">English</p>
    </div>
    </a>
    </div>
    </li>
    <li class="nav-item nav-profile dropdown">
    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
    <div class="nav-profile-img">
    <img src="{{ asset ('font/images/person1.jpg') }}" alt="image">
    </div>
    <div class="nav-profile-text">
    <p class="mb-1 text-black">Serge</p>
    </div>
    </a>
    <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
    <div class="p-3 text-center" style="background-color:#fc8a29">
    <img class="img-avatar img-avatar48 img-avatar-thumb " src=" {{ asset ('font/images/person1.jpg') }}" alt="">
    </div>
    <div class="p-2">
    <h5 class="dropdown-header text-uppercase pl-2 text-dark">Options d'utilisateur</h5>
   
    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
    <span>Profile</span>
    <span class="p-0">
    <span class="badge badge-success">1</span>
    <i class="mdi mdi-account-outline ml-1"></i>
    </span>
    </a>
    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
    <span>Parametres</span>
    <i class="mdi mdi-settings"></i>
    </a>
    <div role="separator" class="dropdown-divider"></div>
    <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
    <span>Blocqué le compte</span>
    <i class="mdi mdi-lock ml-1"></i>
    </a>
    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
    <span>Deconnexion</span>
    <i class="mdi mdi-logout ml-1"></i>
    </a>
    </div>
    </div>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
    <i class="mdi mdi-bell-outline"></i>
    <span class="count-symbol bg-danger"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
    <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item preview-item">
    <div class="preview-thumbnail">
    <div class="preview-icon bg-success">
    <i class="mdi mdi-calendar"></i>
    </div>
    </div>
    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
    <h6 class="preview-subject font-weight-normal mb-1">Action recente</h6>
    <p class="text-gray ellipsis mb-0"> Rappellez vous que tu as des actions recentes </p>
    </div>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item preview-item">
    <div class="preview-thumbnail">
    <div class="preview-icon bg-warning">
    <i class="mdi mdi-settings"></i>
    </div>
    </div>
    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
    <h6 class="preview-subject font-weight-normal mb-1">Parametres</h6>
    <p class="text-gray ellipsis mb-0"> Modifiez le dashboard </p>
    </div>
    </a>
    <div class="dropdown-divider"></div>
 
    <div class="dropdown-divider"></div>
    <h6 class="p-3 mb-0 text-center">Voir toutes les notifications</h6>
    </div>
    </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
    <span class="mdi mdi-menu"></span>
    </button>
    </div>

    </nav>
    </section>

