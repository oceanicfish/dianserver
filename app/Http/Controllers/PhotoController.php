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
        echo "TOKEN: <br>";
        echo csrf_token();
        echo "<br>";
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


        $photos = Input::file('photos');

        $i = 0;

        foreach($photos as $photo) {

            $image = Image::make($photo);

            $image->rotate(180);
            $image->insert('uploads/qrcode.jpg', 'bottom-right', 10, 10);
            $file_name = 'uploads/'. strval(time()) . strval($i) . '.jpg';
            $image->save($file_name);
            $i++;
        }

        echo "done";

    }


}
