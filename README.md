# cakemanager-adminTheme
Theme for the CakeManager

This is a pre-alpha version of the admin theme for the CakeManager Plugin for Cake 3.x. This theme isn't stable yet.

## Installation

Once you got your CakeManager up and running open /config/bootstrap.php and add the following line at the end of the file:

Plugin::load('CakeManagerTheme');


Clone or download the CakeManagerTheme and put its content on /plugins/CakeManagerTheme/

Then, in /src/Controller/AppController.php, add

    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);

        $this->theme = 'CakeManagerTheme';
    }

    public $helpers = [
      'Form' => [
        'templates' => 'CakeManagerTheme.TwitterBootstrap'
      ]
    ];
