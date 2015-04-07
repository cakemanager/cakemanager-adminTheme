<?php
$this->set('title', 'Dashboard');
?>

<h3>Dashboard</h3>

<div class="row">
    <div class="col-lg-12">
        <?= $this->cell('CakeManager.Dashboard::welcome') ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <?= $this->cell('CakeManager.Dashboard::gettingStarted') ?>
        <?= $this->cell('CakeManager.Dashboard::plugins'); ?>
        <?= $this->cell('CakeManager.Dashboard::gettingHelp'); ?>
    </div>
    <div class="col-lg-6">
        <?= $this->cell('CakeManager.Dashboard::latestPosts'); ?>
    </div>
</div>

<div class="articles">



</div>