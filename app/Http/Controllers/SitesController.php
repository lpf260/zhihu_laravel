<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    //
    public function index()
    {

        $people = ['Lpf','Zxy','Lxj','uzi'];

        $a = compact('people');
        //compact会将上面的数组变成"people" => $people这样的数组
        //当用这种方式传递数据时，作为第二个参数的数据必须是键值对数组。
        return view('welcome',compact('people'));
    }

    public function home()
    {
        return view('sites.home');
    }

    public function contact()
    {
        return view('sites.contact');
    }
}
