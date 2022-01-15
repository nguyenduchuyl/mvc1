<?php

const CONTROLLERS = array(
  
    [
      'method'  => 'GET',
      'url'     => '/users',
      'name'    => 'users',
      'use'     => 'frontend/UserController',
      'action'  => 'index'
    ],

    [
      'method'  => 'GET',
      'url'     => '/users/{user_id}/edit',
      'name'    => 'users.edit',
      'use'     => 'frontend/UserController',
      'action'  => 'edit'
    ],
    [
        'method'  => 'GET',
        'url'     => '/index',
        'name'    => 'index',
        'use'     => 'frontend/HomeController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/show-login',
        'name'    => 'auth.show-login',
        'use'     => 'frontend/LoginController',
        'action'  => 'showLogin'
    ],
    [
        'method'  => 'POST',
        'url'     => '/login',
        'name'    => 'auth.login',
        'use'     => 'frontend/LoginController',
        'action'  => 'login'
    ],


    [
        'method'  => 'GET',
        'url'     => '/edit-profile',
        'name'    => 'edit-profile',
        'use'     => 'frontend/LoginController',
        'action'  => 'editProfile'
    ],

    [
        'method'  => 'GET',
        'url'     => '/logout',
        'name'    => 'logout',
        'use'     => 'frontend/LoginController',
        'action'  => 'logout'
    ],

    [
        'method'  => 'GET',
        'url'     => '/logout',
        'name'    => 'logout.post',
        'use'     => 'frontend/LoginController',
        'action'  => 'logout'
    ],

    [
        'method'  => 'POST',
        'url'     => '/register',
        'name'    => 'auth.register',
        'use'     => 'frontend/LoginController',
        'action'  => 'register'
    ],


    [
        'method'  => 'GET',
        'url'     => '/checkout',
        'name'    => 'check',
        'use'     => 'frontend/HomeController',
        'action'  => 'check'
    ],
    [
        'method'  => 'GET',
        'url'     => '/shop',
        'name'    => 'shop',
        'use'     => 'frontend/HomeController',
        'action'  => 'shop'
    ],
    [
        'method'  => 'GET',
        'url'     => '/detail',
        'name'    => 'detail',
        'use'     => 'frontend/HomeController',
        'action'  => 'detail'
    ],
    [
        'method'  => 'GET',
        'url'     => '/cart',
        'name'    => 'cart',
        'use'     => 'frontend/HomeController',
        'action'  => 'cart'
    ]
,

    [
        'method'  => 'POST',
        'url'     => '/check-username',
        'name'    => 'auth.check-duplicate-username',
        'use'     => 'frontend/LoginController',
        'action'  => 'checkUsername'
    ]

    ##admin
    ,
    [
        'method'  => 'GET',
        'url'     => '/admin',
        'name'    => 'admin',
        'use'     => 'admin/HomeController',
        'action'  => 'index'
    ]
,
    [
        'method'  => 'GET',
        'url'     => '/bill',
        'name'    => 'bill',
        'use'     => 'admin/HomeController',
        'action'  => 'bill'
    ]
,
    [
        'method'  => 'GET',
        'url'     => '/product',
        'name'    => 'product',
        'use'     => 'admin/HomeController',
        'action'  => 'product'
    ]
,
    [
        'method'  => 'GET',
        'url'     => '/account',
        'name'    => 'account',
        'use'     => 'admin/HomeController',
        'action'  => 'account'
    ]
,
    [
        'method'  => 'GET',
        'url'     => '/admin/login',
        'name'    => 'login.admin',
        'use'     => 'admin/LoginController',
        'action'  => 'index'
    ],

    [
        'method'  => 'POST',
        'url'     => '/admin/index',
        'name'    => 'login_admin.post',
        'use'     => 'admin/LoginController',
        'action'  => 'login_admin'
    ],
); 
