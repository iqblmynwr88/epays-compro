<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup.index',[
            'title' => 'E-PAYS | Sign up'
        ]);
    }

    public function auth(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'no_tlp' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Email harus berisi email yang aktif!',
            'no_tlp.required' => 'No Tlp harus diisi!',
            'password.required' => 'Password harus diisi!',
        ]);

        try {
            $pesan = "Sukses";
            return redirect()->back()->with('message',$pesan);
        } catch (\Throwable $th) {
            $pesan = $th->getMessage();
            return redirect()->back()->with('message',$pesan);
        }
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
