# laravel-admin

## Installation

新一代vue后台快速集成方案,基于laravel-mix,vue,前后端分离,需对其有所了解

## install

- `composer require sheaxiang/laravel-admin`

- `npm i`

- `npm i laravel-vue-admin`

- 在composer.json添加
    ```
    "dingo/api": "^2.3",
    "kalnoy/nestedset": "^4.3",
    "intervention/image": "^2.4",
    "sheaxiang/laravel-function-helper": "^1.2",
    "spatie/laravel-permission": "^2.25",
    "tymon/jwt-auth": "1.0.0-rc.3"
    ```

- `composer update`

- `php artisan jwt:secret`

- 发布dingo/api包配置文件

    `php artisan vendor:publish --provider="Dingo\Api\Provider\LaravelServiceProvider"`
    
- 在.env文件中添加
    ```
    #Dingo Api
    API_STANDARDS_TREE=prs
    API_SUBTYPE=shea
    API_PREFIX=api
    API_VERSION=v1
    API_DEBUG=true
    ```
    
- 配置数据库

- 发布文件

    `php artisan vendor:publish --tag=shea_laravel_admin`

- 运行数据库表结构迁移

    `php artisan migrate`
    
- `composer dump-autoload`

- 运行数据库数据填充,注意!这一步将删除原有数据,请谨慎操作

    `php artisan db:seed --class=SheaAdminDatabaseSeeder`
    
- .env
    

- auth.php

    ```
    'guards' => [
        //...other
        'admin' => [
            'driver' => 'jwt',
            'provider' => 'admin',
        ],
    ],
    'providers' => [
        //...other
        'admin' => [
            'driver' => 'eloquent',
            'model' => SheaXiang\LaravelAdmin\Models\AdminUser::class,
        ],
    ],
    ```

- webpack.mix.js
    ```
    mix.js('resources/admin/main.js', 'public/js')
        .webpackConfig({
        resolve: {
            extensions: ['*','.js', '.vue', '.json'],
            alias: {
                'vue$': 'vue/dist/vue.esm.js',
                '@': path.join(__dirname, 'resources', 'admin')
            }
        },
        output: {//其他js文件输出到public/js/
            chunkFilename: 'js/[name].[chunkhash].js',
        }
    });
    ```

- resources/admin/main.js
    ```
    import shea from 'laravel-vue-admin'
    
    shea.app.run();
    
    ```
  
- `npm run dev`

- 运行命令并访问/admin

    `php artisan serve`

## use

前端暴露接口

- app

```
run 运行实例
vue vue实例
```

- router

```$xslt
addRouters 添加路由,比如:addRouters({files:require('@/views/files/index'),});
```

- utils

```$xslt
request 请求方法,基于axios,比如:

request({
    url: '/url',
    params: query
})

request({
    url: '/url',
    method: 'post',
    data: from
})
```

- components

```$xslt
Pagination 分页组件
BackToTop 返回顶部
DragSelect 拖拽
ErrorLog 错误日志
Tinymce 编辑器
```







