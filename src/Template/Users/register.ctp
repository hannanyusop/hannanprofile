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

  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>




  <div id="login-page" class="row">
   <?= $this->Flash->render()?>
    <div class="col s12 z-depth-4 card-panel">
      <?= $this->Form->create()?> 
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">Join to our community now !</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <?= 
              $this->Form->input('username',[
              'id' => 'password',
              'required' => true,
              'autofocus' => true
            ]);
            ?>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <?= $this->Form ->input('email',[
                    'type' => 'email',
                    'id' => 'email',
                    'require' => true
            ])?>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
           <?= $this->Form->input('password',[
                    'type' => 'password',
                    'id' => 'password',
                    'require' => true
                ]);
           ?>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <?= $this->Form->input('password', [
                      'type' => 'password',
                      'id'  => 'passowrd-again',
                      'require' => true
              ]);
            ?>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <?= $this->Form->button(__('Register Now'),['class'=>'btn waves-effect waves-light col s12']); ?>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? 
            <?= $this->Html->link(__('Login'), ['action' => 'login']) ?>
            </p>
          </div>
        </div>
     <?= $this->Form->end() ?>
    </div>
  </div>

  <?=$this->Html->script('jquery-1.11.2.min.js') ?>
  <?=$this->Html->script('materialize.js') ?>
  <?=$this->Html->script('plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>
  <?=$this->Html->script('prism.js') ?>
  <?=$this->Html->script('plugins.js') ?>

  <?= $this->fetch('script') ?>