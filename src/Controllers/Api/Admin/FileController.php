<?php

namespace SheaXiang\LaravelVueAdmin\Controllers\Api\Admin;

use Illuminate\Http\Request;

class FileController extends BaseController
{
    public function index(Request $request)
    {
        $public_path = 'uploads'.DIRECTORY_SEPARATOR.$request->path;

        $dir_path = public_path($public_path);
        if (!is_dir($dir_path)) {
            return failed('不是一个目录');
        }

        $handler = opendir($dir_path);
        $files = [];
        $index = 0;
        while (($filename = readdir($handler)) !== false)
        {
            // 务必使用!==，防止目录下出现类似文件名“0”等情况
            if ($filename !== "." && $filename !== "..")
            {
                $file_path = $dir_path . DIRECTORY_SEPARATOR.$filename;
                $info = [
                    'key' => $index,
                    'is_image' => @getimagesize($file_path) ? 1 : 2,
                    'file_path' => asset($public_path.DIRECTORY_SEPARATOR.$filename),
                    'filename' => $filename,
                    'is_dir' => is_dir($file_path) ? 1 : 2,
                    'time' =>  date("Y-m-d H:i:s",filemtime($file_path)),//获取文件最近修改日期
                    'size' => round((filesize($file_path)/1024),2) > 1024 ? round((filesize($file_path)/(1024 * 1024)),2).'mb' : round((filesize($file_path)/1024),2).'kb',
                ];
                is_dir($file_path) ? array_unshift($files, $info) : array_push($files, $info);
                clearstatcache();
                $index ++;
            }
        }
        closedir($handler);
        return succeed($files);
    }
}
