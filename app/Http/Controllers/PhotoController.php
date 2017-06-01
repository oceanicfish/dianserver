<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

use App\Http\Requests;

class PhotoController extends Controller
{
    /**
     * PhotoController constructor.
     */
    public function __construct()
    {
//        $this->middleware("auth");
//        echo "TOKEN: <br>";
//        echo csrf_token();
//        echo "<br>";
    }

    /**
     * get all buyers of a specified show
     *
     *
     */
    public function all()
    {
        $photos = Photo::orderby('id', 'DESC')->get();
        /* 以下两种方法都可以解决乱码问题 */
//        dd($photos);
        return json_encode($photos, JSON_UNESCAPED_UNICODE);
    }

    public function upload(Request $request)
    {

        $tags = $request->input('tags');
        $position = $request->input('position');
        $size = (int)$request->input('size');
        $watermark = Image::make(Input::file('watermark'))->resize($size, $size);

        $url_prefix = 'http://server.diandianplay.cn/photo/';
        $thumbnail_prefix = 'http://server.diandianplay.cn/thumbnail/';
        $saved_path = 'uploads/';
        $thumbnail_path = 'thumbnails/';

        $photos = Input::file('photos');

        $i = 0;

        foreach($photos as $photo) {

            $image = Image::make($photo);
            $thumbnail = $image->resize(720, 480);

            $image->insert($watermark, $position, 20, 20);
            $file_name = strval(time()) . strval($i) . '.jpg';
            $image->save($saved_path . $file_name);
            $thumbnail->save($thumbnail_path . $file_name);

            Photo::create([
                'path' => $url_prefix . $file_name,
                'caption' => $thumbnail_prefix . $file_name,
                'tags' => $tags
            ]);

            $i++;
        }

        return back();

    }


}
