<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if ($request->code) {
            $response = Http::post('https://seguro.marca.com/ueregistro/v1/oauth/servidor/solicitud-access-token', [
                'grant_type' => 'authorization_code',
                'code' => $request->code,
                'client_id' => env('OAUTH_CLIENT_ID'),
                'client_secret' => env('OAUTH_CLIENT_SECRET'),
                'redirect_uri' => env('APP_URL') . '/login'
            ]);

            $token = $response->json();

            $data = Http::get('https://seguro.marca.com/ueregistro/v1/oauth/servidor/datos-usuario', [
                'oauth_token' => $token['access_token']
            ]);

            $user = $data->json();

            $request->session()->put('user.nil', $user['NIL']);
            $request->session()->put('user.email', $user['E_MAIL']);
            $request->session()->put('user.name', $user['NOMBRE']);
            $request->session()->put('user.last_name', $user['APELLIDO1']);
            $request->session()->put('user.last_name2', $user['APELLIDO2']);
            $request->session()->put('user.zip', $user['COD_PROVINCIA']);

            return redirect('/');
        }
    }
}
