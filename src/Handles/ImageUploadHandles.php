<?php
namespace SheaXiang\LaravelVueAdmin\Handles;

use Intervention\Image\Image;

class ImageUploadHandles {
	//定义一个允许的后缀名属性
	protected $allow_ext = ['jpg', 'jpeg', 'png', 'gif'];

	public function save($file, $type, $max_width = null, $max_height = null) {
		//进行后缀名的验证,如果没有那么就默认为png
		$extension = strtolower($file->getClientOriginalExtension()) ?: 'png';
        if(! in_array($extension, $this->allow_ext)) {
			return false;
		}

        //定义存储路径，文件夹切割能让查找效率更高
        $folder_name =  "uploads/images/$type/".date("Ym/d", time());
        $upload_path = public_path() . '/' . $folder_name;

        //定义文件名
        $file_name = time() . "_" . str_random(10).".". $extension;

        //将图片移动到目标储存位置
        $file->move($upload_path, $file_name);

        //如果限制了图片宽度，就进行裁剪
        if ($max_width && $max_height && $extension != 'gif') {
			// 此类封装的函数， 用于裁剪图片
			$this->reduceSize($upload_path . "/" . $file_name, $max_width, $max_height);
		}

        //返回图片已经存储的路径
        return ['root_url' => config('app.url'), 'url' => "/$folder_name/$file_name" ,'name' => $file_name];
    }


	public function reduceSize($file_name, $max_width, $max_height) {
		//先实例化，参数是图片物理路径
		$image = Image::make($file_name);

		//将图片的大小进行调整
		$image->resize($max_width, $max_height, function($constraint) {

			//设定宽度 $max_width, 高度等比例双方缩放
			$constraint->aspectRatio();

			//防止裁图时图片尺寸变大
			$constraint->upsize();
		});

		//对图片进行保存
		$image->save();
	}

}
