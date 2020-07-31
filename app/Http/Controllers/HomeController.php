<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = [
            'nil' => $request->session()->get('user.nil'),
            'email' => $request->session()->get('user.email'),
            'name' => $request->session()->get('user.name'),
            'last_name' => $request->session()->get('user.last_name'),
            'last_name2' => $request->session()->get('user.last_name2'),
            'zip' => $request->session()->get('user.zip'),
        ];
        $form = [
            'team' => $request->session()->get('form.team'),
            'player' => $request->session()->get('form.player'),
            'reason' => $request->session()->get('form.reason'),
        ];

        return view('welcome', [
            'is_logged' => empty($user['email']) ? false : true,
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thanks()
    {
        //
    }
}
