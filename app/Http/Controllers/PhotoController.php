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
        $photos = Photo::all();
        /* 以下两种方法都可以解决乱码问题 */
//        dd($photos);
        return json_encode($photos, JSON_UNESCAPED_UNICODE);
    }

    public function upload(Request $request)
    {

        $caption = $request->input('caption');
        $tags = $request->input('tags');
        $position = $request->input('position');
        $size = (int)$request->input('size');
        $watermark = Image::make(Input::file('watermark'))->resize($size, $size);

        $url_prefix = 'http://server.diandianplay.cn/photo/';
        $saved_path = 'uploads/';

        $photos = Input::file('photos');

        $i = 0;

        foreach($photos as $photo) {

            $image = Image::make($photo);

//            $image->rotate(180);
//            $image->insert('uploads/qrcode.jpg', 'bottom-right', 10, 10);
            $image->insert($watermark, $position, 20, 20);
            $file_name = strval(time()) . strval($i) . '.jpg';
            $image->save($saved_path . $file_name);

            Photo::create([
                'path' => $url_prefix . $file_name,
                'caption' => $caption,
                'tags' => $tags
            ]);

            $i++;
        }

        return back();

    }


}
