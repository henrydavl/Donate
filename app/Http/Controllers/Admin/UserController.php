<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Events\WelcomeEmailEvent;
use App\Role;
use App\User;
use App\Utd;
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
        $users = User::all()->whereIn('role_id', [3,4])->sortBy('id');
        $pages = 'ulist';
        return view('admin.user.index', compact('pages','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'uadd';
        $city = City::pluck('nama','id')->all();
        $utd = Utd::pluck('nama','id')->all();
        $roles = Role::pluck('nama','id')->all();
        return view('admin.user.add', compact('roles','pages','city','utd'));
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
        event(new WelcomeEmailEvent($request->email));
        return redirect('/admin/user')->with('Success', 'Added New User');
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
            'password' => md5($data['password']),
            'role_id' => 3,
            'kotalahir' => $data['kotalahir'],
            'kotadomisili' => $data['kotadomisili'],
            'alamat' => $data['alamat'],
            'job' => $data['job'],
            'birthday' => $data['birthday'],
            'telp' => $data['telp'],
            'gender' => $data['gender'],
            'goldarah' => $data['goldarah'],
            'rhesus' => $data['rhesus'],
            'isvalid' => '1',
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
        if (Auth::id() == $id){
            $pages = 'dash';
        }
        return view('admin.profile', compact('user','pages'));
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
        $user = User::find($id);
        if(trim($request->password) == ''){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = Hash::make($request->password);
        }
        $user->update($input);
        return redirect()->route('admin')->with('Success', 'Profile '.$user->name.' updated');
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

}
