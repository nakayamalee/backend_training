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
        // 若不改圖片
        if($request->img_banner == null || $request->img_banner == ''){
            //用舊的圖片
            $path = $request->origin_img;
        }else{
            //更新舊的圖片路徑
            $target = str_replace("/storage","public",$request->origin_img);
            //刪除舊圖片
            Storage::disk('local')->delete($target);

            //儲存新圖片
            $path = Storage::disk('local')->put('public/banner', $request->img_banner);
            //更新新圖路徑
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
        $banner = Banner::find($id);
        $target = str_replace("/storage","public",$banner->img_path);
        Storage::disk('local')->delete($target);
        $banner->delete();
        return redirect('/banner');
    }
}
