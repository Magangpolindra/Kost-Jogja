<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->latest()->get();
        return view('dashboard.admin.index', [
            'users' => $user
        ]);
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
        $messages = array(
            'required' => 'Kolom tidak boleh kosong',
            'unique' => 'Data sudah digunakan',
            'email' => 'Format bukan email'
        );
        $validated = $request->validate([
            'name' => 'required|string',
            'username' => 'required|unique:users,username|string',
            'password' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'is_admin' => 'required'
        ], $messages);
        $validated['password'] = Hash::make($request->input('password'));
        // dd($validated['is_admin']);
        User::create($validated);
        return redirect('/dashboard/admin')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($admin)
    {
        $post = Post::with(['category', 'author'])->where('user_id', '=', $admin->id)->get();
        return view('dashboard.admin.show', compact('admin', 'post'));
    }
    public function show_post($id)
    {
        $post = Post::with(['category', 'author'])->where('user_id', '=', $id)->get();
        $user = Admin::where('id', $id)->first();
        return view('dashboard.admin.show', compact('post', 'user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id  
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($admin)
    {
        $admin = DB::table('users')->where('id', '=', $admin)->first();
        return view('dashboard.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $admin)
    {
        $user = User::findOrFail($admin);
        $validated = $request->validate([
            'password' => '',
            'email' => 'required',
            'name' => 'required',
            'username' => 'required',
            'is_admin' => 'required'
        ]);
        if ($request->email == $user->email) {
            $validated['email'] = $user->email;
        }
        if ($request->password == NULL) {
            $validated['password'] = $user->password;
        } else {
            $validated['password'] = Hash::make($request->password);
        }
        $user->update($validated);
        return redirect()->route('admin_index-post')->with('update', 'Berhasil update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($admin)
    {
        $post = Post::where('id', $admin)->first();
        Storage::delete($post->image);
        Post::destroy($post->id);
        return redirect('/dashboard/admin')
            ->with('delete', 'Category deleted successfully');
    }

    public function destroy_user($id)
    {
        $user = Admin::where('id', $id)->first();
        Admin::destroy($user->id);
        return redirect()->back()->with('delete', 'Category deleted successfully');
    }
}
