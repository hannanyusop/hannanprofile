<head>  <!-- CORE CSS-->
    <!-- CORE CSS-->
  <?= $this->Html->css('materialize.css') ?>
  <?= $this->Html->css('style.css') ?>
  <?= $this->Html->css('style-horizontal.css') ?>
  <?= $this->Html->css('page-center.css') ?>
  <?= $this->Html->css('prism.css') ?>
  <?= $this->Html->css('plugins/perfect-scrollbar/perfect-scrollbar.css') ?>
  <?= $this->Html->css('plugins/chartist-js/chartist.min.css') ?>
  <?= $this->fetch('css') ?>
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">                    
                    
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1">
                      <?= $this->Html->Image('/images/materialize-logo.png',[
                                'alt' => 'logo'
                        ]);?>
                      <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light"></i></a>
                        <?=
                          $this->Html->link($this->Html->tag('i', '', [
                            'class' => 'mdi-navigation-apps'
                          ]),[
                            'controller' => 'users',
                            'action' => 'logout'],[
                              'escape' => false
                            ],[
                                'class' => 'waves-effect waves-block waves-light'
                          ])
                        ?>
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
                     <?=
                     $this->Html->link($this->Html->tag('i', '',
                          ['class' => 'mdi-action-dashboard']).'Dashboard',
                          ['controller' => 'Users','action' => 'edit',$user[0]['user']['id']],
                          ['escape' => false],
                          ['class' => 'cyan-text']
                      );
                    ?>
                    </li>
                    <li>
                    <?=
                     $this->Html->link($this->Html->tag('i', '',
                          ['class' => 'mdi-action-dashboard']).'Users',
                          ['controller' => 'Users','action' => 'listUsers'],
                          ['escape' => false],
                          ['class' => 'cyan-text']
                      );
                    ?> 
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
                    <li>
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
                    <li class="active">
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
                    <li><a href="login.php"  class="cyan-text">Login</a></li>
                    <li><a href="register.php" class="cyan-text">Register</a></li>
                    <li><a href="user-forgot-password.html" class="cyan-text">Forgot Password</a></li>                    
                    <li><a href="lock.php" class="cyan-text">Lock Screen</a></li>
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
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav leftside-navigation">
            <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <?= $this->Html->Image('/images/avatar.jpg',[
                                'class' => 'circle responsive-img valign profile-image'
                              ]);
                        ?>
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                            </li>
                            <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                            </li>
                            <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                            </li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">Administrator</p>
                    </div>
                </div>
            </li>
            <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
            <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
            </li>
            <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> CSS</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="css-typography.html">Typography</a>
                                </li>                                        
                                <li><a href="css-icons.html">Icons</a>
                                </li>
                                <li><a href="css-shadow.html">Shadow</a>
                                </li>
                                <li><a href="css-media.html">Media</a>
                                </li>
                                <li><a href="css-sass.html">Sass</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active"><i class="mdi-image-palette"></i> UI Elements</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li><a href="ui-badges.html">Badges</a>
                                </li>
                                <li><a href="ui-cards.html">Cards</a>
                                </li>
                                <li><a href="ui-collections.html">Collections</a>
                                </li>
                                <li><a href="ui-accordions.html">Accordian</a>
                                </li>
                                <li><a href="ui-tabs.html">Tabs</a>
                                </li>
                                <li><a href="ui-navbar.html">Navbar</a>
                                </li>
                                <li><a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li><a href="ui-preloader.html">Preloader</a>
                                </li>
                                <li><a href="ui-modals.html">Modals</a>
                                </li>
                                <li><a href="ui-media.html">Media</a>
                                </li>
                                <li ><a href="ui-toasts.html">Toasts</a>
                                </li>
                                <li><a href="ui-tooltip.html">Tooltip</a>
                                </li>
                                <li><a href="ui-waves.html">Waves</a>
                                </li>
                                <li class="active"><a href="ui-waves.html">Waves</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Widgets <span class="new badge"></span></a>
                    </li>
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="table-basic.html">Basic Tables</a>
                                </li>
                                <li><a href="table-data.html">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Forms</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="form-elements.html">Form Elements</a>
                                </li>
                                <li><a href="form-layouts.html">Form Layouts</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-pages"></i> Pages</a>
                        <div class="collapsible-body">
                            <ul>                                        
                                <li><a href="page-contact.html">Contact Page</a>
                                </li>
                                <li><a href="page-todo.html">ToDos</a>
                                </li>
                                <li><a href="page-blog-1.html">Blog Type 1</a>
                                </li>
                                <li><a href="page-blog-2.html">Blog Type 2</a>
                                </li>
                                <li><a href="page-404.html">404</a>
                                </li>
                                <li><a href="page-500.html">500</a>
                                </li>
                                <li><a href="page-blank.html">Blank</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-shopping-cart"></i> eCommers</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="eCommerce-products-page.html">Products Page</a>
                                </li>                                        
                                <li><a href="eCommerce-pricing.html">Pricing Table</a>
                                </li>
                                <li><a href="eCommerce-invoice.html">Invoice</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-image"></i> Medias</a>
                        <div class="collapsible-body">
                            <ul>                                        
                                <li><a href="media-gallary-page.html">Gallery Page</a>
                                </li>
                                <li><a href="media-hover-effects.html">Image Hover Effects</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active"><i class="mdi-action-account-circle"></i> User</a>
                        <div class="collapsible-body">
                            <ul>     
                                <li class="active"><a href="user-profile-page.html">User Profile</a>
                                </li>                                   
                                <li><a href="user-login.html">Login</a>
                                </li>                                        
                                <li><a href="user-register.html">Register</a>
                                </li>
                                <li><a href="user-forgot-password.html">Forgot Password</a>
                                </li>
                                <li><a href="user-lock-screen.html">Lock Screen</a>
                                </li>                                        
                                <li><a href="user-session-timeout.html">Session Timeout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Charts</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="charts-chartjs.html">Chart JS</a>
                                </li>
                                <li><a href="charts-chartist.html">Chartist</a>
                                </li>
                                <li><a href="charts-morris.html">Morris Charts</a>
                                </li>
                                <li><a href="charts-xcharts.html">xCharts</a>
                                </li>
                                <li><a href="charts-flotcharts.html">Flot Charts</a>
                                </li>
                                <li><a href="charts-sparklines.html">Sparkline Charts</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
            <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
            </li>
            <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
            </li>
            <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
            </li>
            <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
            </li>                    
            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
            <li class="li-hover">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="sample-chart-wrapper">                            
                            <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">        

        <!--start container-->
        <div class="container">

          <div id="profile-page" class="section">
            <!-- profile-page-header -->
            <div id="profile-page-header" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <?=
                    $this->Html->image('cover/'.$user[0]['cover_photo'],[
                      'class' => 'activator',
                      'alt' => 'user background'
                    ]);
                  ?>                    
                </div>
                <figure class="card-profile-image">
                 <?=
                    $this->Html->image('profile/'.$user[0]['profile_photo'],[
                      'class' => 'circle z-depth-2 responsive-img activator',
                      'alt' => 'profile image'
                    ]);
                  ?>
                </figure>
                <div class="card-content">
                  <div class="row">                    
                    <div class="col s3 offset-s2">                        
                        <h4 class="card-title grey-text text-darken-4"><?= $user[0]['user']['name']; ?></h4>
                        <p class="medium-small grey-text"><?= $user[0]['position']; ?></p>                        
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4"><?= $user[0]['experience']; ?></h4>
                        <p class="medium-small grey-text">Work Experience</p>                        
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4"><?= $user[0]['total_project']; ?></h4>
                        <p class="medium-small grey-text">Completed Projects</p>                        
                    </div>                    
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>
                        <p class="medium-small grey-text">Busness Profit</p>                        
                    </div>                    
                    <div class="col s1 right-align">
                      <a class="btn-floating activator waves-effect waves-light darken-2 right">
                          <i class="mdi-action-perm-identity"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-reveal">
                    <p>
                      <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span>
                      <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span>
                    </p>

                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    
                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
                    <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
                    <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
                </div>
            </div>
            <!--/ profile-page-header -->

            <!-- profile-page-content -->
            <div id="profile-page-content" class="row">
              <!-- profile-page-sidebar-->
              <div id="profile-page-sidebar" class="col s12 m4">
                <!-- Profile About  -->
                <div class="card light-blue">
                  <div class="card-content white-text">
                    <span class="card-title">About Me!</span>
                    <p><?= $user[0]['about_us']; ?></p>
                  </div>                  
                </div>
                <!-- Profile About  -->

                <!-- Profile About Details  -->
                <ul id="profile-page-about-details" class="collection z-depth-1">
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Project</div>
                      <div class="col s7 grey-text text-darken-4 right-align">ABC Name</div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> Skills</div>
                      <div class="col s7 grey-text text-darken-4 right-align">HTML, CSS</div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Lives in</div>
                      <div class="col s7 grey-text text-darken-4 right-align">NY, USA</div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
                      <div class="col s7 grey-text text-darken-4 right-align">18th June, 1991</div>
                    </div>
                  </li>
                </ul>
                <!--/ Profile About Details  -->

                <!-- Profile About  -->
                <div class="card amber darken-2">
                  <div class="card-content white-text center-align">
                    <p class="card-title"><i class="mdi-social-group-add"></i> 3685</p>
                    <p>Followers</p>
                  </div>                  
                </div>
                <!-- Profile About  -->

                <!-- Profile feed  -->
                <ul id="profile-page-about-feed" class="collection z-depth-1">
                  <li class="collection-item avatar">
                    <?=
                      $this->Html->image('profile/'.$user[0]['profile_photo'],[
                        'class' => 'circle',
                        'alt' => 'profile image'
                      ]);
                    ?>
                    <span class="title">Project Title</span>
                    <p>Task assigned to new changes.
                      <br> <span class="ultra-small">Second Line</span>
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                  </li>
                  <li class="collection-item avatar">
                    <i class="mdi-file-folder circle"></i>
                    <span class="title">New Project</span>
                    <p>First Line of Project Work 
                      <br> <span class="ultra-small">Second Line</span>
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-social-domain"></i></a>
                  </li>
                  <li class="collection-item avatar">
                    <i class="mdi-action-assessment circle green"></i>
                    <span class="title">New Payment</span>
                    <p>Last UK Project Payment
                      <br> <span class="ultra-small">$ 3,684.00</span>
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-editor-attach-money"></i></a>
                  </li>
                  <li class="collection-item avatar">
                    <i class="mdi-av-play-arrow circle red"></i>
                    <span class="title">Latest News</span>
                    <p>company management news
                      <br> <span class="ultra-small">Second Line</span>
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-action-track-changes"></i></a>
                  </li>
                </ul>
                <!-- Profile feed  -->

                <!-- task-card -->
                <ul id="task-card" class="collection with-header">
                  <li class="collection-header cyan">
                      <h4 class="task-card-title">My Task</h4>
                      <p class="task-card-date">March 26, 2015</p>
                  </li>
                  <li class="collection-item dismissable">
                      <input type="checkbox" id="task1" />
                      <label for="task1">Create Mobile App UI. <a href="#" class="secondary-content"><span class="ultra-small">Today</span></a>
                      </label>
                      <span class="task-cat teal">Mobile App</span>
                  </li>
                  <li class="collection-item dismissable">
                      <input type="checkbox" id="task2" />
                      <label for="task2">Check the new API standerds. <a href="#" class="secondary-content"><span class="ultra-small">Monday</span></a>
                      </label>
                      <span class="task-cat purple">Web API</span>
                  </li>
                  <li class="collection-item dismissable">
                      <input type="checkbox" id="task3" checked="checked" />
                      <label for="task3">Check the new Mockup of ABC. <a href="#" class="secondary-content"><span class="ultra-small">Wednesday</span></a>
                      </label>
                      <span class="task-cat pink">Mockup</span>
                  </li>
                  <li class="collection-item dismissable">
                      <input type="checkbox" id="task4" checked="checked" disabled="disabled" />
                      <label for="task4">I did it !</label>
                      <span class="task-cat cyan">Mobile App</span>
                  </li>
                </ul>
                <!-- task-card -->

                <!-- Profile Total sell -->
                <div class="card center-align">
                  <div class="card-content purple white-text">
                      <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Your Profit</p>
                      <h4 class="card-stats-number">$8990.63</h4>
                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                      </p>
                  </div>
                  <div class="card-action purple darken-2">
                      <div id="sales-compositebar"></div>
                  </div>
                </div>

                <!-- flight-card -->
                <div id="flight-card" class="card">
                    <div class="card-header amber darken-2">
                        <div class="card-title">
                            <h4 class="flight-card-title">Your Next Flight</h4>
                            <p class="flight-card-date">June 18, Thu 04:50</p>
                        </div>
                    </div>
                    <div class="card-content-bg white-text">
                        <div class="card-content">
                            <div class="row flight-state-wrapper">
                                <div class="col s5 m5 l5 center-align">
                                    <div class="flight-state">
                                        <h4 class="margin">LDN</h4>
                                        <p class="ultra-small">London</p>
                                    </div>
                                </div>
                                <div class="col s2 m2 l2 center-align">
                                    <i class="mdi-device-airplanemode-on flight-icon"></i>
                                </div>
                                <div class="col s5 m5 l5 center-align">
                                    <div class="flight-state">
                                        <h4 class="margin">SFO</h4>
                                        <p class="ultra-small">San Francisco</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6 m6 l6 center-align">
                                    <div class="flight-info">
                                        <p class="small"><span class="grey-text text-lighten-4">Depart:</span> 04.50</p>
                                        <p class="small"><span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                                        <p class="small"><span class="grey-text text-lighten-4">Terminal:</span> B</p>
                                    </div>
                                </div>
                                <div class="col s6 m6 l6 center-align flight-state-two">
                                    <div class="flight-info">
                                        <p class="small"><span class="grey-text text-lighten-4">Arrive:</span> 08.50</p>
                                        <p class="small"><span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                                        <p class="small"><span class="grey-text text-lighten-4">Terminal:</span> C</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- flight-card -->

                <!-- Map Card -->
                <div class="map-card">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142"></div>
                        </div>
                        <div class="card-content">                    
                            <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                <i class="mdi-maps-pin-drop"></i>
                            </a>
                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Company Name LLC</a>
                            </h4>
                            <p class="blog-post-content">Some more information about this company.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Company Name LLC <i class="mdi-navigation-close right"></i></span>                   
                            <p>Here is some more information about this company. As a creative studio we believe no client is too big nor too small to work with us to obtain good advantage.By combining the creativity of artists with the precision of engineers we develop custom solutions that achieve results.Some more information about this company.</p>
                            <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Manager Name</p>
                            <p><i class="mdi-communication-business cyan-text text-darken-2"></i> 125, ABC Street, New Yourk, USA</p>
                            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                            <p><i class="mdi-communication-email cyan-text text-darken-2"></i> support@geekslabs.com</p>                    
                        </div>
                    </div>
                </div>
                <!-- Map Card -->

              </div>
              <!-- profile-page-sidebar-->

              <!-- profile-page-wall -->
              <div id="profile-page-wall" class="col s12 m8">
                <!-- profile-page-wall-share -->
                <div id="profile-page-wall-share" class="row">
                  <div class="col s12">
                    <ul class="tabs tab-profile z-depth-1 light-blue">
                      <li class="tab col s3"><a class="white-text waves-effect waves-light active" href="#UpdateStatus"><i class="mdi-editor-border-color"></i> Update Status</a>
                      </li>
                      <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#AddPhotos"><i class="mdi-image-camera-alt"></i> Add Photos</a>
                      </li>
                      <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#CreateAlbum"><i class="mdi-image-photo-album"></i> Create Album</a>
                      </li>                      
                    </ul>
                    <!-- UpdateStatus-->
                    <div id="UpdateStatus" class="tab-content col s12  grey lighten-4">
                      <div class="row">
                        <div class="col s2">
                          <?=
                            $this->Html->image('profile/'.$user[0]['profile_photo'],[
                              'class' => 'circle responsive-img valign profile-image-post',
                              'alt' => 'profile image'
                            ]);
                          ?>
                        </div>
                        <div class="input-field col s10">
                          <textarea id="textarea" row="2" class="materialize-textarea"></textarea>
                          <label for="textarea" class="">What's on your mind?</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12 m6 share-icons">
                          <a href="#"><i class="mdi-image-camera-alt"></i></a>
                          <a href="#"><i class="mdi-action-account-circle"></i></a>
                          <a href="#"><i class="mdi-hardware-keyboard-alt"></i></a>
                          <a href="#"><i class="mdi-communication-location-on"></i></a>
                        </div>
                        <div class="col s12 m6 right-align">
                           <!-- Dropdown Trigger -->
                            <a class='dropdown-button btn' href='#' data-activates='profliePost'><i class="mdi-action-language"></i> Public</a>

                            <!-- Dropdown Structure -->
                            <ul id='profliePost' class='dropdown-content'>
                              <li><a href="#!"><i class="mdi-action-language"></i> Public</a></li>
                              <li><a href="#!"><i class="mdi-action-face-unlock"></i> Friends</a></li>                              
                              <li><a href="#!"><i class="mdi-action-lock-outline"></i> Only Me</a></li>
                            </ul>

                            <a class="waves-effect waves-light btn"><i class="mdi-maps-rate-review left"></i>Post</a>
                        </div>
                      </div>
                    </div>
                    <!-- AddPhotos -->
                    <div id="AddPhotos" class="tab-content col s12  grey lighten-4">
                      <div class="row">
                        <div class="col s2">
                          <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                    'class' => 'circle responsive-img valign profile-image-post'
                              ]);
                          ?>
                        </div>
                        <div class="input-field col s10">
                          <textarea id="textarea" row="2" class="materialize-textarea"></textarea>
                          <label for="textarea" class="">Share your favorites photos!</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12 m6 share-icons">
                          <a href="#"><i class="mdi-image-camera-alt"></i></a>
                          <a href="#"><i class="mdi-action-account-circle"></i></a>
                          <a href="#"><i class="mdi-hardware-keyboard-alt"></i></a>
                          <a href="#"><i class="mdi-communication-location-on"></i></a>
                        </div>
                        <div class="col s12 m6 right-align">
                           <!-- Dropdown Trigger -->
                            <a class='dropdown-button btn' href='#' data-activates='profliePost2'><i class="mdi-action-language"></i> Public</a>

                            <!-- Dropdown Structure -->
                            <ul id='profliePost2' class='dropdown-content'>
                              <li><a href="#!"><i class="mdi-action-language"></i> Public</a></li>
                              <li><a href="#!"><i class="mdi-action-face-unlock"></i> Friends</a></li>                              
                              <li><a href="#!"><i class="mdi-action-lock-outline"></i> Only Me</a></li>
                            </ul>

                            <a class="waves-effect waves-light btn"><i class="mdi-maps-rate-review left"></i>Post</a>
                        </div>
                      </div>
                    </div>
                    <!-- CreateAlbum -->
                    <div id="CreateAlbum" class="tab-content col s12  grey lighten-4">
                      <div class="row">
                        <div class="col s2">
                          <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                              'class' => 'circle responsive-img valign profile-image-post'

                            ]);
                          ?>
                        </div>
                        <div class="input-field col s10">
                          <textarea id="textarea" row="2" class="materialize-textarea"></textarea>
                          <label for="textarea" class="">Create awesome album.</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12 m6 share-icons">
                          <a href="#"><i class="mdi-image-camera-alt"></i></a>
                          <a href="#"><i class="mdi-action-account-circle"></i></a>
                          <a href="#"><i class="mdi-hardware-keyboard-alt"></i></a>
                          <a href="#"><i class="mdi-communication-location-on"></i></a>
                        </div>
                        <div class="col s12 m6 right-align">
                           <!-- Dropdown Trigger -->
                            <a class='dropdown-button btn' href='#' data-activates='profliePost3'><i class="mdi-action-language"></i> Public</a>

                            <!-- Dropdown Structure -->
                            <ul id='profliePost3' class='dropdown-content'>
                              <li><a href="#!"><i class="mdi-action-language"></i> Public</a></li>
                              <li><a href="#!"><i class="mdi-action-face-unlock"></i> Friends</a></li>                              
                              <li><a href="#!"><i class="mdi-action-lock-outline"></i> Only Me</a></li>
                            </ul>

                            <a class="waves-effect waves-light btn"><i class="mdi-maps-rate-review left"></i>Post</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ profile-page-wall-share -->

                <!-- profile-page-wall-posts -->
                <div id="profile-page-wall-posts"class="row">
                  <div class="col s12">
                      <!-- medium -->
                      <div id="profile-page-wall-post" class="card">
                        <div class="card-profile-title">
                          <div class="row">
                            <div class="col s1">
                              <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                    'class' => 'circle responsive-img valign profile-image-post'
                                ]);
                              ?>                      
                            </div>
                            <div class="col s10">
                              <p class="grey-text text-darken-4 margin">John Doe</p>
                              <span class="grey-text text-darken-1 ultra-small">Shared publicly  -  26 Jun 2015</span>
                            </div>
                            <div class="col s1 right-align">
                              <i class="mdi-navigation-expand-more"></i>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col s12">
                              <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>.  I require little more information to use effectively.</p>
                            </div>
                          </div>
                        </div>
                        <div class="card-image profile-medium">                          
                          <?= $this->Html->Image('/images/gallary/2.jpg',[
                              'class' => 'responsive-img profile-post-image profile-medium',
                              'alt' => 'sample',
                              ]);
                          ?>                       
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action row">
                          <div class="col s4 card-action-share">
                            <a href="#">Like</a>                          
                            <a href="#">Share</a>
                          </div>
                          
                          <div class="input-field col s8 margin">
                            <input id="profile-comments" type="text" class="validate margin">
                            <label for="profile-comments" class="">Comments</label>
                          </div>                        
                        </div>                        
                      </div>

                      <!-- medium video -->
                      <div id="profile-page-wall-post" class="card">
                        <div class="card-profile-title">
                          <div class="row">
                            <div class="col s1">
                             <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                    'class' => 'circle responsive-img valign profile-image-post'
                              ]);
                          ?>                      
                            </div>
                            <div class="col s10">
                              <p class="grey-text text-darken-4 margin">John Doe</p>
                              <span class="grey-text text-darken-1 ultra-small">Shared publicly  -  26 Jun 2015</span>
                            </div>
                            <div class="col s1 right-align">
                              <i class="mdi-navigation-expand-more"></i>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col s12">
                              <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>.  I require little more information to use effectively.</p>
                            </div>
                          </div>
                        </div>
                        <div class="card-image profile-medium">
                          <div class="video-container no-controls">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/10r9ozshGVE" frameborder="0" allowfullscreen></iframe>
                          </div>                          
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action row">
                          <div class="col s4 card-action-share">
                            <a href="#">Like</a>                          
                            <a href="#">Share</a>
                          </div>
                          
                          <div class="input-field col s8 margin">
                            <input id="profile-comments" type="text" class="validate margin">
                            <label for="profile-comments" class="">Comments</label>
                          </div>                        
                        </div>                        
                      </div>                      

                      <!-- small -->
                      <div id="profile-page-wall-post" class="card">
                        <div class="card-profile-title">
                          <div class="row">
                            <div class="col s1">
                              <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                      'class' => 'circle responsive-img valign profile-post-uer-image',
                                      'alt' => 'avatar'
                                  ]);
                              ?>                       
                            </div>
                            <div class="col s10">
                              <p class="grey-text text-darken-4 margin">John Doe</p>
                              <span class="grey-text text-darken-1 ultra-small">Shared publicly  -  26 Jun 2015</span>
                            </div>
                            <div class="col s1 right-align">
                              <i class="mdi-navigation-expand-more"></i>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col s12">
                              <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>.  I require little more information to use effectively.</p>
                            </div>
                          </div>
                        </div>
                        <div class="card-image profile-small"> 
                          <?= $this->Html->Image('/images/gallary/1.jpg',[
                                  'class' => 'responsive-img profile-post-image',
                                  'alt' => 'sample'
                          ]);
                          ?>                      
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action row">
                          <div class="col s4 card-action-share">
                            <a href="#">Like</a>                          
                            <a href="#">Share</a>
                          </div>
                          
                          <div class="input-field col s8 margin">
                            <input id="profile-comments" type="text" class="validate">
                            <label for="profile-comments" class="">Comments</label>
                          </div>                        
                        </div>                        
                      </div>

                      <!-- small -->
                      <div id="profile-page-wall-post" class="card">
                        <div class="card-profile-title">
                          <div class="row">
                            <div class="col s1">
                              <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                  'class' => 'circle responsive-img valign profile-post-uer-image'
                                ]);
                              ?>                      
                            </div>
                            <div class="col s10">
                              <p class="grey-text text-darken-4 margin">John Doe</p>
                              <span class="grey-text text-darken-1 ultra-small">Shared publicly  -  26 Jun 2015</span>
                            </div>
                            <div class="col s1 right-align">
                              <i class="mdi-navigation-expand-more"></i>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col s12">
                              <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>.  I require little more information to use effectively.</p>
                            </div>
                          </div>
                        </div>
                        <div class="card-image profile-large">
                          <?= $this->Html->Image('/images/gallary/3.jpg',[
                                  'class' => 'responsive-img profile-post-image'
                          ]);
                          ?>                      
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action row">
                          <div class="col s4 card-action-share">
                            <a href="#">Like</a>                          
                            <a href="#">Share</a>
                          </div>
                          
                          <div class="input-field col s8 margin">
                            <input id="profile-comments" type="text" class="validate">
                            <label for="profile-comments" class="">Comments</label>
                          </div>                        
                        </div>                        
                      </div>
                  </div>                  
                </div>
                <!--/ profile-page-wall-posts -->

              </div>
              <!--/ profile-page-wall -->

            </div>
          </div>
        </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search</label>
                    </div>
                </form>
            </div>
            </li>
            <li class="li-hover">
                <ul class="chat-collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                    <div class="collapsible-body recent-activity">
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">just now</a>
                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Yesterday</a>
                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Last Week</a>
                                <p>Jessy Jay open a new store at S.G Road.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                    <div class="collapsible-body sales-repoart">
                        <div class="sales-repoart-list  chat-out-list row">
                            <div class="col s8">Target Salse</div>
                            <div class="col s4"><span id="sales-line-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Payment Due</div>
                            <div class="col s4"><span id="sales-bar-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Delivery</div>
                            <div class="col s4"><span id="sales-line-2"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Progress</div>
                            <div class="col s4"><span id="sales-bar-2"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                    <div class="collapsible-body favorite-associates">
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4">
                          <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                    'class' => 'circle responsive-img online-user valign profile-image'
                              ]);
                          ?>
                            </div>
                            <div class="col s8">
                                <p>Eileen Sideways</p>
                                <p class="place">Los Angeles, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4">
                          <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                    'class' => 'circle responsive-img online-user valign profile-image'
                              ]);
                          ?>
                            </div>
                            <div class="col s8">
                                <p>Zaham Sindil</p>
                                <p class="place">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4">
                          <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                    'class' => 'circle responsive-img online-user valign profile-image'
                              ]);
                          ?>
                            </div>
                            <div class="col s8">
                                <p>Renov Leongal</p>
                                <p class="place">Cebu City, Philippines</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                        
                            <div class="col s4">
                            <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                    'class' => 'circle responsive-img online-user valign profile-image'
                              ]);
                          ?>
                            </div>
                            <div class="col s8">
                                <p>Weno Carasbong</p>
                                <p>Tokyo, Japan</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                         <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                    'class' => 'circle responsive-img valign profile-image-post'
                              ]);
                          ?>
                            <div class="col s4">
                             <?= $this->Html->Image('profile/'.$user[0]['profile_photo'],[
                                    'class' => 'circle responsive-img offline-user valign profile-image'
                              ]);
                          ?>
                            </div>
                            <div class="col s8">
                                <p>Nusja Nawancali</p>
                                <p class="place">Bangkok, Thailand</p>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </li>
        </ul>
      </aside>
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->


  <?=$this->Html->script('jquery-1.11.2.min.js') ?>
  <?=$this->Html->script('materialize.js') ?>
  <?=$this->Html->script('plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>
  <?=$this->Html->script('prism.js') ?>
  <?=$this->Html->script('plugins/chartist-js/chartist.min.js') ?>
  <?=$this->Html->script('plugins/sparkline/jquery.sparkline.min.js') ?>
  <?=$this->Html->script('plugins/sparkline/sparkline-script.js') ?>
  <?=$this->Html->script('plugins.js') ?>


  <?= $this->fetch('script') ?>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>
    

    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 1500);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 15000);
    });

    $(function() {
      // Google Maps  
      $('#map-canvas').addClass('loading');    
      var latlng = new google.maps.LatLng(40.6700, -73.9400); // Set your Lat. Log. New York
      var settings = {
          zoom: 10,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: false,
          scrollwheel: false,
          draggable: true,
          styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}],
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: false,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},            
      };
      var map = new google.maps.Map(document.getElementById("map-canvas"), settings);

      google.maps.event.addDomListener(window, "resize", function() {
          var center = map.getCenter();
          google.maps.event.trigger(map, "resize");
          map.setCenter(center);
          $('#map-canvas').removeClass('loading');
      });

      var contentString =
          '<div id="info-window">'+
          '<p>18 McLuice Road, Vellyon Hills,<br /> New York, NY 10010<br /><a href="https://plus.google.com/102896039836143247306/about?gl=za&hl=en" target="_blank">Get directions</a></p>'+
          '</div>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var companyImage = new google.maps.MarkerImage('http://demo.geekslabs.com/ashoka/images/map-marker.png',
          new google.maps.Size(36,62),// Width and height of the marker
          new google.maps.Point(0,0),
          new google.maps.Point(18,52)// Position of the marker 
      );

      var companyPos = new google.maps.LatLng(40.6700, -73.9400);

      var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          icon: companyImage,
          title:"Shapeshift Interactive",
          zIndex: 3});

      google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
          pageView('/#address');
      });
    });
    
    </script>
    
</body>

</html>