<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Storage;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('users.index',[
          'users' => User::orderBy('created_at','DESC')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View('users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'name'      => 'required|string|max:255',
          'mobile'    => 'required|string',
          'codemeli'  => 'required|string',
          'codeposti' => 'required|string',
          'email'     => 'required|string|unique:users,email|email',
          'password'  => 'required|string|min:8|confirmed',
          'address'   => 'required|string',
          
          
      ]);
      $user = User::create([
        'name'      => $request->input('name'),
        'mobile'    => $request->input('mobile'),
        'codemeli'  => $request->input('codemeli'),
        'codeposti' => $request->input('codeposti'),
        'email'     => $request->input('email'),
        'password'  => Hash::make($request->input('password')),
        'adress'    => $request->input('adress'),
        
      ]);
      return redirect()->route('usersList')->withErrors(new MessageBag(['messages' => 'کاربر با موفقیت ثبت شد']));

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
    public function edit(User $user)
    {
      return View('users.edit')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

      $request->validate([
          'name'           => 'required|string|max:255',
          'email'          => 'required|string|unique:users,email,'.$user->id.'|email',
      ]);
      if($request->input('password') != null){
        $request->validate([
            'password'       => 'required|string|min:8|confirmed',
        ]);
        $user->password   = Hash::make($request->input('password'));
      }
      if($request->input('mobile') != null){
        $request->validate([
          'mobile'           => 'string',
        ]);
        $user->mobile       = $request->input('mobile');
      }
      if($request->input('adress') != null){
        $request->validate([
          'mobile'           => 'string',
        ]);
        $user->codeposti      = $request->input('string');
      }
      if($request->input('codeposti') != null){
        $request->validate([
          'codeposti'           => 'string',
        ]);
        $user->codeposti      = $request->input('mobile');
      }
      $user->name       = $request->input('name');
      $user->email       = $request->input('email');
      $user->save();
      return redirect()->route('usersList')->withErrors(new MessageBag(['messages' => 'کاربر با موفقیت ویرایش شد']));
    }


}
