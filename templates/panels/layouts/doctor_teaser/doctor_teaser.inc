<?php

// Plugin definition
$plugin = array(
  'title' => t('Doctor teaser'),
  'category' => t('Medcity'),
  'icon' => 'doctor_teaser.png',
  'theme' => 'panels_doctor_teaser',
  'css' => 'doctor_teaser.css',
  'regions' => array(
    'top' => t('Top title'),
    'left' => t('Left Column'),
    'right' => t('Right Column'),
  ),
);
