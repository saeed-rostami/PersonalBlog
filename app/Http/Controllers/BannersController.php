<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Banner[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
//        $banners = Banner::all();
        $title = Banner::query()->where('title' , '!=' , '')->first();
//        dd($title);
        return view('Banner',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Banner[]|\Illuminate\Database\Eloquent\Collection
     */
    public function showBanner()
    {
        $banners = Banner::all();
        return $banners;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $banners = new Banner;
//        $banners->id = $request->input('id');
//        $banners->title = $request->input('title');
//        $banners->info = $request->input('info');
//        $banners->socials = $request->input('socials');
//        $banners->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       DB::table('banners')->where('id' , '=' , 1)->update([
           'title' => $request->input('title'),
           'info' => $request->input('info'),
       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
