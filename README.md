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
    "intervention/image": "^2.4",
    "sheaxiang/laravel-function-helper": "^1.2",
    "spatie/laravel-permission": "^2.25",
    "tymon/jwt-auth": "1.0.0-rc.3"
    ```

- `composer update`

- 发布dingo/api包配置文件

    `php artisan vendor:publish --provider="Dingo\Api\Provider\LaravelServiceProvider"`
    
- 配置数据库

- 发布后台数据库文件

    `php artisan vendor:publish --tag=shea_admin_seeds`

- 运行数据库表结构迁移

    `php artisan migrate`

- 运行数据库数据填充,注意!这一步将删除原有数据,请谨慎操作

    `php artisan db:seed --class=SheaAdminDatabaseSeeder`

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
            'model' => SheaXiang\LaravelVueAdmin\Models\AdminUser::class,
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

- 运行命令并访问/admin

    `php artisan serve`

## use







