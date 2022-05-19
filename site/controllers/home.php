<?php

return function ($site) {

   $slider = $site->images()->filterBy('template', 'imageHomeSlider');

    return [
       'slider' => $slider,
    ];

};
