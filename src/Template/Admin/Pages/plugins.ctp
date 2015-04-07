<?php

use Cake\Core\Plugin;
use Cake\Filesystem\File;

$this->set('title', 'Plugins');
?>

<h3>Plugins</h3>

<h4>List of all loaded plugin</h4>

<table class="table table-striped">
    <thead>
        <tr>
            <td>Name</td>
            <td>Description</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (Plugin::loaded() as $plugin) {

            if ( $plugin != 'CakeManagerTheme' ) {

            ?>
            <tr>
                <td><?= $plugin ?></td>
                <td>
                    <?php
                    $file = new File(Plugin::path($plugin) . "composer.json", false);
                    $composer = json_decode($file->read());
                    echo $composer->description;
                    ?>
                </td>
            </tr>
            <?php

            }
        }
        ?>
    </tbody>

</table>

<h4>How to load and unload</h4>

<p>Via the shell you are able to load and unload plugins.
    <br><br>
    Use <code>bin/cake plugin load PLUGINNAME</code> to load a plugin. 
    <br><br>
    To load <code>bootstrap.php</code> or <code>routes.php</code> 
    use <code>bin/cake plugin load -b -r PLUGINNAME</code>

</p>

