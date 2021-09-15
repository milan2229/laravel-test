<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

//use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
//        dd($users);
        return view('user/index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
//        $user->password=$request->input('password');
        $user->birthday = $request->input('birthday');
        $user->iscool = $request->input('cool') == "1" ? 1 : 0;

//        dd($request->input('cool'));

        $user->save();

//        $results=Result::where('iscool',true)->get();

        //一覧表示画面にリダイレクト

        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @param $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $user = User::find($id);
////        dd($user);
////        $user = new User();
////        $user->name=$request->input('name');
//        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
//        dd($user);
        return view('user.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->birthday = $request->input('birthday');
//        $user->iscool = $request->input('iscool');
        $user->iscool = $request->input('cool') == "1" ? 1 : 0;

//        dd($request);

//            $user->password = $request->input('password');


        $user->save();
//        dd($user);

//            User::where('id', $id)->update($update);
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
//        dd($user);
        $user->delete();

        return redirect('/user');
    }
}
