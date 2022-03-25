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
        'method'  => 'POST',
        'url'     => '/update-profile',
        'name'    => 'update-profile',
        'use'     => 'frontend/LoginController',
        'action'  => 'updateProfile'
    ],

    [
        'method'  => 'GET',
        'url'     => '/logout',
        'name'    => 'logout',
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
    ,
    ##admin
        // routers for admin
    [
    'method'  => 'GET',
    'url'     => '/admin/users',
    'name'    => 'admin.users',
    'use'     => 'admin/UsersController',
    'action'  => 'index'
    ]
    ,
    [
        'method'  => 'GET',
        'url'     => '/admin/post',
        'name'    => 'admin.posts',
        'use'     => 'admin/PostsController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/admin/category',
        'name'    => 'admin.category',
        'use'     => 'admin/CategoryController',
        'action'  => 'index'
    ]
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
    [
        'method'  => 'POST',
        'url'     => '/admin/category/show-form-edit',
        'name'    => 'admin.category.show-form-edit',
        'use'     => 'admin/CategoryController',
        'action'  => 'showFormEdit'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/category/edit-user',
        'name'    => 'admin.category.edit-user',
        'use'     => 'admin/CategoryController',
        'action'  => 'editCategory'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/users/show-form-edit',
        'name'    => 'admin.users.show-form-edit',
        'use'     => 'admin/UsersController',
        'action'  => 'showFormEdit'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/users/delete',
        'name'    => 'admin.users.delete',
        'use'     => 'admin/UsersController',
        'action'  => 'delete'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/users/edit-user',
        'name'    => 'admin.user.edit-user',
        'use'     => 'admin/UsersController',
        'action'  => 'editUser'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/users/create-user',
        'name'    => 'admin.user.create-user',
        'use'     => 'admin/UsersController',
        'action'  => 'createUser'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/category/delete-user',
        'name'    => 'admin.category.delete-user',
        'use'     => 'admin/CategoryController',
        'action'  => 'deleteCategory'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/category/create-category',
        'name'    => 'admin.category.create-category',
        'use'     => 'admin/CategoryController',
        'action'  => 'createCategory'
    ],
    [
    'method'  => 'GET',
    'url'     => '/admin/category/manager_category',
    'name'    => 'admin.category_nestable',
    'use'     => 'admin/CategoryController',
    'action'  => 'showCategoryNesTable'
    ],
    [
    'method'  => 'POST',
    'url'     => '/admin/posts/delete-user',
    'name'    => 'admin.posts.delete',
    'use'     => 'admin/PostsController',
    'action'  => 'deletePost'
    ],
    [
    'method'  => 'POST',
    'url'     => '/admin/posts/show-form-edit',
    'name'    => 'admin.post.show-form-edit',
    'use'     => 'admin/PostsController',
    'action'  => 'showFormPost'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/posts/create-post',
        'name'    => 'admin.post.create-post',
        'use'     => 'admin/PostsController',
        'action'  => 'createPost'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/posts/edit-post',
        'name'    => 'admin.post.edit-post',
        'use'     => 'admin/PostsController',
        'action'  => 'updatePost'
    ],

); 
