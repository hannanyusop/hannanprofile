<?php $cakeDescription = 'Online Profile'; ?>
<!DOCTYPE html>
<html>
<header id="header" class="page-topbar">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('materialize.css') ?>
    <?= $this->Html->css('prism.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('style-horizontal.css') ?>

    <?= $this->Html->script('materialize.js') ?>
    <?= $this->Html->script('plugins.js') ?>
    <?= $this->Html->script('prism.js') ?>
    <?= $this->Html->script('jquery-1.11.2.min.js') ?>
    <?= $this->Html->script('plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>
    <?= $this->Html->script('plugins/chartist-js/chartist.min.js') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">                    
                    
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                        </li>                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- HORIZONTL NAV START-->
            <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">                  
                  <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <a href="index.html" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="app-email.html" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>Mailbox</span>
                        </a>
                    </li>                    
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="CSSdropdown">
                            <i class="mdi-action-invert-colors"></i>
                            <span>CSS<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="UIElementsdropdown">
                            <i class="mdi-image-palette"></i>
                            <span>UI Elements<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="app-widget.html" class="cyan-text">
                            <i class="mdi-device-now-widgets"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Tablesdropdown">
                            <i class="mdi-editor-border-all"></i>
                            <span>Tables<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Formsdropdown">
                            <i class="mdi-editor-insert-comment"></i>
                            <span>Forms<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Pagesdropdown">
                            <i class="mdi-social-pages"></i>
                            <span>Pages<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="eCommersdropdown">
                            <i class="mdi-action-shopping-cart"></i>
                            <span>eCommers<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>                    
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Usersdropdown">
                            <i class="mdi-action-account-circle"></i>
                            <span>Users<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Chartsdropdown">
                            <i class="mdi-editor-insert-chart"></i>
                            <span>Charts<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    
                  </ul>
                </div>
              </nav>

                <!-- CSSdropdown -->
                <ul id="CSSdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="css-typography.html" class="cyan-text">Typography</a></li>
                  <li><a href="css-icons.html" class="cyan-text">Icons</a></li>                  
                  <li><a href="css-shadow.html" class="cyan-text">Shadow</a></li>
                  <li><a href="css-media.html" class="cyan-text">Media</a></li>                  
                  <li><a href="css-sass.html" class="cyan-text">Sass</a></li>
                </ul>

                <!-- UIElementsdropdown-->
                <ul id="UIElementsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="ui-buttons.html" class="cyan-text">Buttons</a></li>
                  <li><a href="ui-badges.html" class="cyan-text">Badges</a></li>                  
                  <li><a href="ui-cards.html" class="cyan-text">Cards</a></li>
                  <li><a href="ui-collections.html" class="cyan-text">Collections</a></li>                  
                  <li><a href="ui-accordions.html" class="cyan-text">Accordian</a></li>
                  <li><a href="ui-navbar.html" class="cyan-text">Navbar</a></li>
                  <li><a href="ui-pagination.html" class="cyan-text">Pagination</a></li>
                  <li><a href="ui-preloader.html" class="cyan-text">Preloader</a></li>
                  <li><a href="ui-modals.html" class="cyan-text">Modals</a></li>
                  <li><a href="ui-media.html" class="cyan-text">Media</a></li>
                  <li><a href="ui-toasts.html" class="cyan-text">Toasts</a></li>
                  <li><a href="ui-tooltip.html" class="cyan-text">Tooltip</a></li>
                </ul>

                <!-- Tablesdropdown -->
                <ul id="Tablesdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="table-basic.html" class="cyan-text">Basic Tables</a></li>
                  <li><a href="table-data.html" class="cyan-text">Data Tables</a></li>
                </ul>

                <!-- Formsdropdown -->
                <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="form-elements.html" class="cyan-text">Form Elements</a></li>
                  <li><a href="form-layouts.html" class="cyan-text">Form Layouts</a></li>
                </ul>

                <!-- Pagesdropdown -->
                <ul id="Pagesdropdown" class="dropdown-content dropdown-horizontal-list">
                    
                    <li><a href="page-invoice.html" class="cyan-text">Invoice</a></li>
                    <li><a href="page-404.html" class="cyan-text">404</a></li>
                    <li><a href="page-500.html" class="cyan-text">500</a></li>
                    <li><a href="page-blank.html" class="cyan-text">Blank</a></li>
                </ul>

                <!-- eCommers -->
                <ul id="eCommersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="eCommerce-products-page.html"  class="cyan-text">eCommerce Products </a></li>
                    <li><a href="eCommerce-pricing.html"  class="cyan-text">Pricing Page</a></li>
                    <li><a href="eCommerce-invoice.html"  class="cyan-text">Invoice</a></li>
                </ul>

                <!-- Mediasdropdown -->
                <ul id="Mediasdropdown" class="dropdown-content dropdown-horizontal-list">                    
                    <li><a href="media-gallary-page.html"  class="cyan-text">Gallary Page</a></li>
                    <li><a href="media-hover-effects.html"  class="cyan-text">Image Hover Effects</a></li>
                </ul>

                <!-- Usersdropdown -->
                <ul id="Usersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="user-profile-page.html"  class="cyan-text">User Profile</a></li>
                    <li><a href="user-login.html"  class="cyan-text">Login</a></li>
                    <li><a href="user-register.html" class="cyan-text">Register</a></li>
                    <li><a href="user-forgot-password.html" class="cyan-text">Forgot Password</a></li>                    
                    <li><a href="user-lock-screen.html" class="cyan-text">Lock Screen</a></li>
                    <li><a href="user-sesssion-timeout.html" class="cyan-text">Session Timeout</a></li>
                </ul>

                <!-- Chartsdropdown -->
                <ul id="Chartsdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="charts-chartjs.html" class="cyan-text">Chart JS</a></li>
                    <li><a href="charts-chartist.html" class="cyan-text">Chartist</a></li>
                    <li><a href="charts-morris.html" class="cyan-text">Morris Charts</a></li>
                    <li><a href="charts-xcharts.html" class="cyan-text">xCharts</a></li>
                    <li><a href="charts-flotcharts.html" class="cyan-text">Flot Charts</a></li>
                    <li><a href="charts-sparklines.html" class="cyan-text">Sparkline Charts</a></li>
                </ul>
            <!-- HORIZONTL NAV END-->
        </div>
        <!-- end header nav-->
</header>
<body>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Non-comercials use only <a class="grey-text text-lighten-4" href="#" target="_blank"></a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">Hannan Yusop</a></span>
        </div>
    </div>
  </footer>
  </body>
</html>
