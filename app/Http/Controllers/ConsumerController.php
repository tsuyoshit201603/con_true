<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consumer.index');
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

    public function loginView()
    {
        return view('consumer.login');
    }
    
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        Auth::attempt(['email' => $email, 'password' => $password]);
        return view('consumer.index');
    }

    public function login2View()
    {
        return view('consumer.auth_2');
    }

    public function login2(Request $request)
    {
        $age = $request->age;
        $job = $request->job;
        $phone_num = $request->phone_num;
        $text = $request->text;
        $param = [
            'age' => $age,
            'job' => $job,
            'phone_num' => $phone_num,
            'text' => $text,
        ];
        Auth::attempt($param);
        return view('consumer.index');
    }
}
