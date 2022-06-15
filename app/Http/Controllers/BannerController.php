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
        $banner = Banner::find($id);

        //如果有收到圖片
        if($request->hasfile('img_banner')){
            //存檔案
            $path = Storage::disk('local')->put('public/banner', $request->img_banner);
            $path = '/'.str_replace("public","storage",$path);

            $target = str_replace("/storage","public",$banner->img_path);
            torage::disk('local')->delete($target);

            $banner->img_path = $path;
        }


        $banner->img_opacity = $request->img_opacity;
        $banner->weight = $request->img_weight;
        $banner->save();
        // Banner::find($id)->update([
        //     'img_path' => $path,
        //     'img_opacity' => $request->img_opacity,
        //     'weight' => $request->img_weight,
        // ]);

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
        $banner = Banner::find($id);
        $target = str_replace("/storage","public",$banner->img_path);
        Storage::disk('local')->delete($target);
        $banner->delete();
        return redirect('/banner');
    }
}
