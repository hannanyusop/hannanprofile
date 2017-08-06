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
      <?= $this->Flash->render('auth'); ?>
      <?= $this->Form->create();
      ?>
        <div class="row">
          <div class="input-field col s12 center">
            <?=
              $this->Html->image('/images/avatar.jpg',[
                'class' => 'circle responsive-img valign profile-image-login',
                'alt' => 'logo'
              ]);
            ?>
            <p class="center login-form-text">ONLINE PROFILE REVIEW BY SIR HANNAN</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
             <?= $this->Form->input('username',[
                'type' => 'text',
                'id' => 'username',
                'required' => true,
                'autofocus' => true
             ]);
             ?>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <?= 
              $this->Form->input('password',[
              'id' => 'password',
              'type' => 'password',
              'required' => true,
              'autofocus' => true
            ]);
            ?>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
             <?= $this->Form->button(__('Login'),['class'=>'btn waves-effect waves-light col s12']); ?>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><?= $this->Html->link(__('Register Now !'), ['action' => 'register']) ?></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small">
              <?= $this->Html->link(__('Forgot password ?'), ['action' => 'forgot']) ?>
              </p>
          </div>          
        </div>
        <?= $this->Form->end() ?>
    </div>

  <?=$this->Html->script('jquery-1.11.2.min.js') ?>
  <?=$this->Html->script('materialize.js') ?>
  <?=$this->Html->script('plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>
  <?=$this->Html->script('prism.js') ?>
  <?=$this->Html->script('plugins.js') ?>

  <?= $this->fetch('script') ?>
