<?php
return array(
    'outputFolder' => 'tests/fixture/assets/output',
    'paths' => array(
        'tests/fixture/assets/',
        'tests/fixture/vendor/',
     ),
    'modules' => array(
        'admin_core' => array(
            'css' => array(
                'tests/fixture/assets/css/a.css',
                'tests/fixture/assets/css/b.sass',
                'tests/fixture/vendor/css/reset.css',
            ),
            'js' => array(
                'tests/fixture/vendor/js/jquery.js',
                'tests/fixture/assets/js/a.js',
                'tests/fixture/assets/js/b.coffee',
            ),
        ),
    ),
);