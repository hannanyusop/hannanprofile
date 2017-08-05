
<head>
  <!-- CORE CSS-->
  <?= $this->Html->css('materialize.css') ?>
  <?= $this->Html->css('style.css') ?>
  <?= $this->Html->css('style-horizontal.css') ?>
  <?= $this->Html->css('page-center.css') ?>
  <?= $this->Html->css('prism.css') ?>
  <?= $this->Html->css('plugins/perfect-scrollbar/perfect-scrollbar.css') ?>
  <?= $this->fetch('css') ?>
</head>

  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">Join to our community now !</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password">
            <label for="password-again">Password again</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="index.html" class="btn waves-effect waves-light col s12">Register Now</a>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? 
            <?= $this->Html->link(__('Login'), ['action' => 'login']) ?>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?=$this->Html->script('jquery-1.11.2.min.js') ?>
  <?=$this->Html->script('materialize.js') ?>
  <?=$this->Html->script('plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>
  <?=$this->Html->script('prism.js') ?>
  <?=$this->Html->script('plugins.js') ?>

  <?= $this->fetch('script') ?>