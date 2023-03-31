<?php
$routes = [
  '/' => [
    'controller' => 'SPController',
    'action' => 'index'
  ],
  'danh-sach' => [
    'controller' => 'SPController',
    'action' => 'getListSP'
  ],
  'home' => [
    'controller' => 'SPController',
    'action' => 'getHome'
  ],
  'add' => [
    'controller' => 'SPController',
    'action' => 'add'
  ],
  'edit' => [
    'controller' => 'SPController',
    'action' => 'editSP'
  ],
  'delete' => [
    'controller' => 'SPController',
    'action' => 'delete'
  ],
  'login' => [
    'controller' => 'AccountController',
    'action' => 'login'
  ],
  'register' => [
    'controller' => 'AccountController',
    'action' => 'register'
  ],
  'logout' => [
    'controller' => 'AccountController',
    'action' => 'logout'
  ],
  'edit-avatar' => [
    'controller' => 'AccountController',
    'action' => 'editAvatar'
  ] ,
  'cT' => [
    'controller' => 'SPController',
    'action' => 'cT'
  ] 
];