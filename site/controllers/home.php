<?php

return function ($site) {

   $slider = $site->images()->filterBy('template', 'imageHomeSlider');
     $imageHome = $site->images()->filterBy('template', 'imageHome')->shuffle()->first();


    return [
       'slider' => $slider,
       'imageHome' => $imageHome,
    ];

};
