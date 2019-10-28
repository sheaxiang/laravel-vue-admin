# laravel-vue-admin

## Installation

新一代vue后台快速集成方案,基于laravel-mix,vue,前后端分离,需对其有所了解

## install

`composer require sheaxiang/laravel-vue-admin`

需注意依赖

- spatie/laravel-permission
- tymon/jwt-auth
- sheaxiang/laravel-function-helper
- intervention/image
- dingo/api

## use

需对配置有所修改.后期将优化

auth.php

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

`npm i laravel-vue-admin`

webpack.mix.js
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

resources/admin/main.js
```
import shea from 'laravel-vue-admin'

shea.app.run();

```

