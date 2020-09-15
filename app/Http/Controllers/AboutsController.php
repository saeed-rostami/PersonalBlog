<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return About[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $abouts = About::query()->select(['about_skill_title' , 'about_skill_info' , 'about_skill_socials'])->get();
        $title = About::query()->where('id' , 1)->first();
//        dd($abouts);

        return view("About" , compact('title' , 'abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return About[]|\Illuminate\Database\Eloquent\Collection
     */
    public function showAbout()
    {
        $about = About::all();
        return $about;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('abouts')->where('id' , '1')->update([
            'title' => $request->input('title'),
            'info' => $request->input('info'),
        ]);
        return redirect()->route('About');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
