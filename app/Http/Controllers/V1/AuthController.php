<?php

namespace App\Http\Controllers\V1;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $client = new Client([
            'base_uri'=>'http://api.coffee.yueban.homestead.dev'
        ]);
        $response = $client->request('POST', '/oauth/token', [
            'form_params'=>[
                'grant_type' => 'password',
                'client_id' => env('PASSPORT_CLIENT_ID'),
                'client_secret' => env('PASSPORT_CLIENT_SECRET'),
                'username' => 'xialu@html5.org.cn',
                'password' => '123456',
                'scope' => '',
            ]
        ]);
        Auth::attempt([
            'email' => 'xialu@html5.org.cn',
            'password' => '123456',
        ]);
        return $response->getBody();
    }

    public function register(Request $request)
    {
        return User::create([
            'name' => 'xialu',
            'email' => 'xialu@html5.org.cn',
            'password' => bcrypt('123456'),
        ]);
    }

    public function profile(Request $request)
    {
        return Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
