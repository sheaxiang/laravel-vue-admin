<?php

namespace SheaXiang\LaravelVueAdmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Boot the provider.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'vueAdmin');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../database/seeds/' => database_path('seeds')
        ], 'shea_admin_seeds');
    }

    /**
     * Register the provider.
     */
    public function register()
    {
        $api = app('Dingo\Api\Routing\Router');

        $api->version('v1', function ($api) {
            $api->group(['namespace' => 'SheaXiang\LaravelVueAdmin\Controllers\Api\Admin', 'prefix' => 'admin'], function ($api) {
                $api->post('/login', 'AuthController@login');
                $api->post('/image/upload', 'ImageController@upload');
                $api->post('/no_auth_image', 'ImageController@store');
                $api->get('/file/{path?}', 'FileController@index');
                $api->get('/get_index', 'IndexController@index');

                $api->get('/get_theme_files', function () {
                    $handler = opendir(resource_path('views/theme'));

                    $files = [];
                    while (($filename = readdir($handler)) !== false)
                    {
                        // 务必使用!==，防止目录下出现类似文件名“0”等情况
                        if ($filename !== "." && $filename !== "..")
                        {
                            $files[] = $filename ;
                        }
                    }
                    closedir($handler);
                    return succeed($files);
                });

                $api->group(['middleware' => 'auth:admin'], function ($api) {
                    $api->group(['prefix' => 'auth'], function ($api) {
                        $api->post('logout', 'AuthController@logout');
                        $api->post('refresh', 'AuthController@refresh');
                        $api->get('user', 'AuthController@user');
                    });

                    $api->resource('article', 'ArticleController');
                    $api->resource('image', 'ImageController');
                    $api->resource('ad', 'AdController');
                    $api->get('/ad_class/list', 'AdClassController@default_list');
                    $api->resource('ad_class', 'AdClassController');
                    $api->get('/menu/list', 'MenuController@default_list');
                    $api->resource('menu', 'MenuController');

                    $api->post('/admin_user/{admin_user}/update', 'AuthController@update')->name('admin_user.update');//更新管理员
                    $api->post('/role/all', 'RoleController@all')->name('role.all');//角色列表（不分页）
                    $api->post('/permission/all/{guard_name}', 'PermissionController@all')->name('permission.all');//权限列表（不分页）
                    $api->resource('permission', 'PermissionController');//权限
                    $api->resource('role', 'RoleController');//角色
                    $api->resource('admin_user', 'AdminUserController');//管理员
                    $api->get('/column/list', 'ColumnController@default_list');
                    $api->resource('column', 'ColumnController');//栏目
                });
            });

        });

        Route::get('/admin', function () {
            return view('vueAdmin::admin');
        });
    }
}
