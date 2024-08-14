<!-- Navbar Start -->

<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <div class="mdc-drawer__header d-flex justify-content-center">
      <a href="{{Route('home')}}" class="brand-logo">
        <img src="{{asset('img/log.png')}}" width="100" alt="logo">
      </a>
    </div>
    <div class="mdc-drawer__content">
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{Route('admin')}}">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                        Logements
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{Route('option')}}">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                        Option Logement
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{Route('user')}}">
                        <i class="fa fa-users m-2 "></i>Utilisateurs
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{Route('annonce')}}">
                        <i class="fa fa-copy m-2 "></i>Annonces
                    </a>
                </div>
            </nav>
        </div>
    </div>
  </aside>
  <!-- partial -->
  <div class="main-wrapper mdc-drawer-app-content">
    <!-- partial:partials/_navbar.html -->
    <header class="mdc-top-app-bar">
      <div class="mdc-top-app-bar__row">
        <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
          <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
          <span class="mdc-top-app-bar__title">Bienvenue Admin!</span>

        </div>
        <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
          <div class="menu-button-container menu-profile d-none d-md-block">
            <button class="mdc-button mdc-menu-button">
              <span class="d-flex align-items-center">
                <span class="figure">

                  <img src="{{asset('adminUse/images/faces/face3.jpg')}}" alt="user" class="user">
                </span>
                <span class="user-name">Mhj Rktv</span>
              </span>
            </button>
            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
              <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail item-thumbnail-icon-only">
                    <i class="mdi mdi-account-edit-outline text-primary"></i>
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Edit profile</h6>
                  </div>
                </li>
                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail item-thumbnail-icon-only">
                    <i class="mdi mdi-settings-outline text-primary"></i>
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Logout</h6>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="divider d-none d-md-block"></div>

          <div class="menu-button-container">
            <button class="mdc-button mdc-menu-button">
              <i class="mdi mdi-bell"></i>
            </button>
            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
              <h6 class="title"> <i class="mdi mdi-bell-outline mr-2 tx-16"></i> Notifications</h6>
              <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail item-thumbnail-icon">
                    <i class="mdi mdi-email-outline"></i>
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">You received a new message</h6>
                    <small class="text-muted"> 6 min ago </small>
                  </div>
                </li>
                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail item-thumbnail-icon">
                    <i class="mdi mdi-account-outline"></i>
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">New user registered</h6>
                    <small class="text-muted"> 15 min ago </small>
                  </div>
                </li>
                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail item-thumbnail-icon">
                    <i class="mdi mdi-alert-circle-outline"></i>
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">System Alert</h6>
                    <small class="text-muted"> 2 days ago </small>
                  </div>
                </li>
                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail item-thumbnail-icon">
                    <i class="mdi mdi-update"></i>
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">You have a new update</h6>
                    <small class="text-muted"> 3 days ago </small>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="menu-button-container">
            <button class="mdc-button mdc-menu-button">
              <i class="mdi mdi-email"></i>
              <span class="count-indicator">
                <span class="count">3</span>
              </span>
            </button>
            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
              <h6 class="title"><i class="mdi mdi-email-outline mr-2 tx-16"></i> Messages</h6>
              <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail">
                    <img src="{{asset('adminUse/images/faces/face4.jpg')}}" alt="user">
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Mark send you a message</h6>
                    <small class="text-muted"> 1 Minutes ago </small>
                  </div>
                </li>
                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail">
                    <img src="{{asset('adminUse/images/faces/face2.jpg')}}" alt="user">
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Cregh send you a message</h6>
                    <small class="text-muted"> 15 Minutes ago </small>
                  </div>
                </li>
                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail">
                    <img src="{{asset('adminUse/images/faces/face3.jpg')}}" alt="user">
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Profile picture updated</h6>
                    <small class="text-muted"> 18 Minutes ago </small>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="menu-button-container d-none d-md-block">
            <button class="mdc-button mdc-menu-button">
              <i class="mdi mdi-arrow-down-bold-box"></i>
            </button>
            <div class="mdc-menu mdc-menu-surface" tabindex="-1">
              <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">

                <li class="mdc-list-item" role="menuitem">
                  <div class="item-thumbnail item-thumbnail-icon-only">
                    <i class="mdi mdi-logout-variant text-primary"></i>
                  </div>
                  <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Logout</h6>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
<!-- Navbar End -->
