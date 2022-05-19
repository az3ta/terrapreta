<?php

return function ($site) {

  $logo = $site->files()->filterBy('template', 'imageLogo')->first();

  return [
      'logo' => $logo,
  ];

};


