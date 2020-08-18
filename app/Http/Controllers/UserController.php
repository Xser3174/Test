<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = [
            [
                'name' => 'User A',
                'phone' => '09855623232',
                'email' => 'a@gmail.com',
                'address' => 'yangon',
                'score' => [
                    'July' => 100,
                    'August' => 100,
                ]
            ],
            [
                'name' => 'User B',
                'phone' => '2828858282',
                'email' => 'b@gmail.com',
                'address' => 'mandalay',
                'score' => [
                    'July' => 50,
                    'August' => 20,
                ]
            ],
            [
                'name' => 'User C',
                'phone' => '827272727',
                'email' => 'c@gmail.com',
                'address' => 'Bagan',
                'score' => [
                    'July' => 60,
                    'August' => 45,
                ]
            ],
            [
                'name' => 'User D',
                'phone' => '4586957537',
                'email' => 'd@gmail.com',
                'address' => 'Bago',
                'score' => [
                    'July' => 70,
                    'August' => 10,
                ]
            ]
        ];
        
        
        return view('User',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
