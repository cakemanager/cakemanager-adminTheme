<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$this->assign('title', $title);
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600" rel="stylesheet" type="text/css">
        <?= $this->Html->css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') ?>
        <?= $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css') ?>
        <?= $this->Html->css('CakeManagerTheme.AdminLTE.css') ?>
        <?= $this->Html->css('custom.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>


    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <!--AdminLTE-->
                CakeManager
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <ul class="nav navbar-nav">
                    <li>
                        <!-- Sidebar toggle button-->
                        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right" style="margin: 12px 20px 0 0;">
                    <?=
                    (isset($authUser) ?
                            "Welcome " . $authUser['email'] . " | "
                            . $this->Html->link('Logout', [
                                'plugin'     => 'CakeManager',
                                'controller' => 'Users',
                                'action'     => 'logout',
                                'prefix'     => false,
                            ]) : $this->Html->link('Login', [
                                'plugin'     => 'CakeManager',
                                'controller' => 'Users',
                                'action'     => 'login',
                                'prefix'     => false,
                            ]) . "" )
                    ?>
                </ul>

                
                <?//= $this->Element('Dashboard/navbar-right') ?>

            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    
                    <!-- Sidebar user panel -->

                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <?php $currentController = strtolower($this->request->params['controller']); ?>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <?= $this->Menu->menu('main', 'CakeManager.MainMenu') ?>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                <span>Icon & Badge</span>
                                <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?= $this->Menu->menu('header', 'CakeManager.HeaderMenu') ?>
                    </ul>

                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?= $this->fetch('title') ?></h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> Home</li>
                        <li class="active">
                            <?= Cake\Utility\Inflector::humanize( $this->request->params['controller'] ) ?>
                        </li>
                    </ol>

                </section>

                <!-- Main content -->
                <section class="content">

                    <?= $this->Flash->render() ?>
                    <?= $this->Flash->render('auth') ?>

                    <!-- (main box) -->
                    
                    <?= $this->Flash->render(); ?>
                    <?= $this->fetch('content'); ?>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

    </body>

    <?= $this->Html->script('jquery-1.11.2.min') ?>
    <?= $this->Html->script('AdminLTE/app.js') ?>
    <?= $this->fetch('scriptBottom'); ?>
</html>
