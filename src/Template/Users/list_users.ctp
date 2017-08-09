
<head>
  <?= $this->Html->css('materialize.css') ?>
  <?= $this->Html->css('style.css') ?>
  <?= $this->Html->css('style-horizontal.css') ?>
  <?= $this->Html->css('page-center.css') ?>
  <?= $this->Html->css('prism.css') ?>
  <?= $this->Html->css('plugins/perfect-scrollbar/perfect-scrollbar.css') ?>
  <?= $this->Html->css('plugins/chartist-js/chartist.min.css') ?>
  <?= $this->fetch('css') ?>
  <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
              <div class="header-search-wrapper grey hide-on-large-only">
                  <i class="mdi-action-search active"></i>
                  <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
              </div>
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12">
                  <h5 class="breadcrumbs-title"><?= __('List Users') ?></h5>
                  <ol class="breadcrumb">
                      <li><?= $this->Html->link(__('Profile'),['action' => 'profile']); ?></li>
                      <li><a href="#">Tables</a></li>
                      <li>
                        <?=
                            $this->Html->link('export', [
                            'controller' => 'users', 
                            'action' => 'test'
                          ])
                        ?>
                      </li>
                      <li>
                        <?=
                          $this->Html->link('Export HTML',[
                            'controller' => 'Users',
                            'action' => 'test'
                          ]);
                        ?>
                    </li>
                      <li class="active">Basic Tables</li>
                  </ol>
                </div>
              </div>
            </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Tables are a nice way to organize a lot of data. We provide a few utility classes to help you style your table as easily as possible. In addition, to improve mobile experience, all tables on mobile-screen widths are centered automatically.</p>
            <div class="divider"></div> 
            <!--DataTables example Row grouping-->
            <div id="row-grouping" class="section">
              <h4 class="header">SELECT USERS</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>
                    <?= $this->Form->create(null,['url' => ['action' => 'export']]);?>
                    <?= $this->Form->input('id',['type' =>'number']); ?>
                     <?= $this->Form->button(__('Export CSV files'),['class'=>'btn waves-effect waves-light col s12']); ?>
                    <?= $this->Form->end(); ?>                 
                  </p>
                </div>
                <div class="col s12 m8 l9">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0"" width="100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->name) ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


           
          </div>
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->


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
  <?=$this->Html->script('plugins.js') ?>
  <?=$this->Html->script('plugins/data-tables/js/jquery.dataTables.min.js') ?>
  <?=$this->Html->script('plugins/data-tables/data-tables-script.js') ?>

  <?= $this->fetch('script') ?>