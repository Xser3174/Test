<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo "Index";
        $categories=DB::table('categories')->get();
        return $categories;
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
        // echo "Store";
        $category=DB::table('categories')->insert([
            'name'=>$request->name
        ]);
        return $category;
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
        // echo "Show";
        $category=DB::table('categories')->where('id',$id)->get();
        return $category;
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
        //
        // echo "update";
        $category=DB::table('categories')
                    ->where('id',$id)
                    ->update(['name'=>$request->name]);
        return $category;
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
        // echo "destroy";
        #Delete data
        // $category=DB::table('categories')->where('id',$id)->delete();


        #Recycle -->id => delete =>date insert at 'deleted_at'
        $category=DB::table('categories')
                    ->where('id',$id)
                    ->update(['deleted_at'=>Carbon::now()]);

        return $category;
    }
}
