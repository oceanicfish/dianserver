<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

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
}
