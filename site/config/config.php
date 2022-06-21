<?php

return [
    'debug' => false,
    'panel' => [
      'install' => false,
      'slug' => 'admin-area',
      'css' => 'assets/css/custom-panel.css'
    ],
    'auth' => [
        'methods' => ['code', 'password']
    ],
    'languages' => true,
    'languages.detect' => true,
    'diesdasdigital.meta-knight' => [
      'siteTitleAsHomePageTitle' => true,
      'separator' => ' — ',
    ],
    'floriankarsten.plausible' => [
      'sharedLink' => 'https://plausible.io/share/terrapreta.xyz?auth=XBMABOytx1bUIkOZgm2Oq',
    ],
];
