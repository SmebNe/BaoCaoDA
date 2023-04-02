<?php
$routes = [
  '/' => [
    'controller' => 'SPController',
    'action' => 'index'
  ],
  'admin' => [
    'controller' => 'SPController',
    'action' => 'getListSP'
  ],
  'danh-sach-user' => [
    'controller' => 'AccountController',
    'action' => 'getListUser'
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
  'edit-anh' => [
    'controller' => 'SPController',
    'action' => 'editAnh'
  ] ,
  'cT' => [
    'controller' => 'SPController',
    'action' => 'cT'
  ] ,
  'detail' => [
    'controller' => 'SPController',
    'action' => 'detail'
  ] 
  ,
  'timkiem' => [
    'controller' => 'SPController',
    'action' => 'timkiem'
  ] 
];