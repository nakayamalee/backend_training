<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();

        return view('banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = Storage::disk('local')->put('public/banner', $request->img_banner);

        $path = '/'.str_replace("public","storage",$path);
        Banner::create([
            'img_path' => $path,
            'img_opacity' => $request->img_opacity,
            'weight' => $request->img_weight,
        ]);

        return redirect('/banner');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);

        return view('banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->img_banner == null || $request->img_banner == ''){
            $path = $request->origin_img;
        }else{
            $target = str_replace("/storage","public",$request->origin_img);
            Storage::disk('local')->delete($target);
            $path = Storage::disk('local')->put('public/banner', $request->img_banner);
            $path = '/'.str_replace("public","storage",$path);
        }

        Banner::find($id)->update([
            'img_path' => $path,
            'img_opacity' => $request->img_opacity,
            'weight' => $request->img_weight,
        ]);
        return redirect('/banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $deleted = Banner::find($id)->delete();
        return redirect('/banner');
    }
}
