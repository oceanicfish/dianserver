<?php

namespace App\Http\Controllers;

use App\Showdate;
use Illuminate\Http\Request;

use App\Http\Requests;

class ShowController extends Controller
{
    //
    public function __construct()
    {
    }

    /**
     * get all show date of a specified show
     *
     *
     */
    public function all()
    {
        $show = Showdate::orderby('id', 'DESC')->get();
        /* 以下两种方法都可以解决乱码问题 */
//        dd($photos);
        return json_encode($show, JSON_UNESCAPED_UNICODE);
    }

    /**
     * get the show of a specified show
     *
     *
     */
    public function showByTags($tags)
    {
        $show = Showdate::orderby('id', 'DESC')->where('tags', $tags)->get();
        /* 以下两种方法都可以解决乱码问题 */
//        dd($photos);
        return json_encode($show, JSON_UNESCAPED_UNICODE);
    }

    /**
     * publish the photos of a show
     *
     *
     */
    public function publish($tags)
    {
        $show = Showdate::all()->where('tags', $tags)->get();
        $show->published = "published";
        /* 以下两种方法都可以解决乱码问题 */
//        dd($photos);
        return json_encode($show, JSON_UNESCAPED_UNICODE);
    }
}
