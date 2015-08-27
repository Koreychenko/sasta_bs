<?php

// Plugin definition
$plugin = array(
  'title' => t('Doctor Dull layout'),
  'category' => t('Medcity'),
  'icon' => 'doctor_full.png',
  'theme' => 'panels_doctor_full',
  'css' => 'doctor_full.css',
  'regions' => array(
    'left' => t('Left Column'),
    'right' => t('Right Column'),
    'doc_image' => t('Doctor Image'),
    'doc_info' => t('Doctor Info'),
    'prices' => t('Prices'),
  ),
);
