<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ids = Auth::id();
        $admin = User::all()->where('id', '!=', $ids)->where('role_id', 2)->sortBy('id');
        $users = User::all()->whereIn('role_id', [3,4])->sortBy('id');
        $pages = 'ulist';
        return view('admin.user.index', compact('pages','users','admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'uadd';
        $roles = Role::pluck('nama','id')->all();
        return view('admin.user.add', compact('roles','pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->new($request->all());
        if (empty($user)) {
            redirect('/admin/user/')->with('Fail', 'Failed to add user');
        }
        event(new Registered($user));
        return redirect('/admin/user')->with('Success', 'Added New User, please confirm email address');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function new(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
        ]);
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
        $user = User::findOrFail($id);
        $roles = Role::pluck('nama','id')->all();
        if (Auth::id() == $id){
            $pages = 'dash';
            return view('admin.profile', compact('user','roles','pages'));
        }else{
            $pages = 'ulist';
            return view('admin.user.edit', compact('user','roles','pages'));
        }
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
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/admin/user')->with('Success', 'User Deleted');
    }

    public function deactivate(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->update(['isvalid' => '0']);
        return redirect('/admin/user')->with('Success', 'User Deactivated');
    }

    public function activate(Request $request)
    {
        $user = User::findOrFail($request->id);
//        return $user;
        $user->update(['isvalid' => '1']);
        return redirect('/admin/user')->with('Success', 'User Activated');
    }
}
