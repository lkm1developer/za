<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title><?php echo app('translator')->getFromJson('Administration'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/css/AdminLTE.min.css')); ?>">
  <!-- AdminLTE Skins. -->
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/css/skins/skin-blue.min.css')); ?>">

  <?php echo $__env->yieldContent('css'); ?>

 
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo e(route('admin')); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><span class="fa fa-fw fa-dashboard"></span></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo app('translator')->getFromJson('Dashboard'); ?></b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Notifications Menu -->
         
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>

                 

              </a>
              <ul class="dropdown-menu">
               
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="<?php echo e(route('notifications.index', [auth()->id()])); ?>"><?php echo app('translator')->getFromJson('View'); ?></a></li>
              </ul>
            </li>
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo e(Gravatar::get(auth()->user()->email)); ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo e(auth()->user()->name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo e(Gravatar::get(auth()->user()->email)); ?>" class="img-circle" alt="User Image">
                <p><?php echo e(auth()->user()->name); ?></p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a id="logout" href="#" class="btn btn-default btn-flat"><?php echo app('translator')->getFromJson('Sign out'); ?></a>
                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hide">
                    <?php echo e(csrf_field()); ?>

                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li <?php echo e(currentRouteBootstrap('admin')); ?>>
          <a href="<?php echo e(route('admin')); ?>"><i class="fa fa-fw fa-dashboard"></i> <span><?php echo app('translator')->getFromJson('Dashboard'); ?></span></a>
        </li>
        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>

          <?php echo $__env->make('back.partials.treeview', [
            'icon' => 'user',
            'type' => 'user',
            'items' => [
              [
                'route' => route('users.index'),
                'command' => 'list',
                'color' => 'blue',
              ],
              [
                'route' => route('users.index', ['new' => 'on']),
                'command' => 'new',
                'color' => 'yellow',
              ],
            ],
          ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <?php echo $__env->make('back.partials.treeview', [
            'icon' => 'envelope',
            'type' => 'contact',
            'items' => [
              [
                'route' => route('contacts.index'),
                'command' => 'list',
                'color' => 'blue',
              ],
              [
                'route' => route('contacts.index', ['new' => 'on']),
                'command' => 'new',
                'color' => 'yellow',
              ],
            ],
          ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <?php echo $__env->make('back.partials.treeview', [
            'icon' => 'comment',
            'type' => 'comment',
            'items' => [
              [
                'route' => route('comments.index'),
                'command' => 'list',
                'color' => 'blue',
              ],
              [
                'route' => route('comments.index', ['new' => 'on']),
                'command' => 'new',
                'color' => 'yellow',
              ],
            ],
          ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <li><a href="<?php echo e(route('categories.index')); ?>"><i class="fa fa-list"></i> <span><?php echo app('translator')->getFromJson('Categories'); ?></span></a></li>

        <?php endif; ?>

        <?php echo $__env->make('back.partials.treeview', [
          'icon' => 'file-text',
          'type' => 'post',
          'items' => [
            [
              'route' => route('posts.index'),
              'command' => 'list',
              'color' => 'blue',
            ],
            [
              'route' => route('posts.index', ['new' => 'on']),
              'command' => 'new',
              'color' => 'yellow',
            ],
            [
              'route' => route('posts.create'),
              'command' => 'create',
              'color' => 'green',
            ],
          ],
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <li><a href="<?php echo e(route('medias.index')); ?>"><i class="fa fa-image"></i> <span><?php echo app('translator')->getFromJson('Medias'); ?></span></a></li>

        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
          <li><a href="<?php echo e(route('settings.edit')); ?>"><i class="fa fa-cog"></i> <span><?php echo app('translator')->getFromJson('Settings'); ?></span></a></li>
        <?php endif; ?>

       

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       
      </h1>
      <ol class="breadcrumb">
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php echo $__env->yieldContent('main'); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#"><?php echo app('translator')->getFromJson('My nice Company'); ?></a>.</strong> <?php echo app('translator')->getFromJson('All rights reserved'); ?>.
  </footer>

</div>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3.2.0 -->
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.js"></script>

<?php echo $__env->yieldContent('js'); ?>

<!-- AdminLTE App -->
<script src="<?php echo e(asset('adminlte/js/app.min.js')); ?>"></script>

<!-- Commom -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

<script>
    $(function() {
        $('#logout').click(function(e) {
            e.preventDefault();
            $('#logout-form').submit()
        })
    })
</script>
</body>
</html>