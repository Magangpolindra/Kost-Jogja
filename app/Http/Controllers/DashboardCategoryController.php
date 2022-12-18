<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;


class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom tidak boleh kosong',
            'unique' => 'Data sudah ada',
            'images' => 'Format harus gambar',
            'mimes' => 'Format yang diizinkan :values',
            'images.max' => 'Maksimal 5mb'
        ];
        $validated = $request->validate([
            'name' => 'required|unique:categories,name',
            'slug' => 'required',
            'images' => 'required|image|mimes:jpg,png,jpeg|max:5000'
        ], $messages);
        if ($request->file('images')) {
            $validated['images'] = $request->file('images')->store('categories-image');
        }
        Category::create($validated);

        return redirect('/dashboard/categories')->with('success', 'Category created successfully');
    }

    public function checks(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $post = Post::with(['category'])->where('category_id', $category->id)->get();
        return view('dashboard.categories.show', compact('post'), [
            'category' => $category,
            'posts' => $post,
        ]);
    }
    public function show_post($category)
    {
        $posts = Post::where('category_id', $category)->get();
        $categories = Category::where('id', $category)->first();
        return view('dashboard.categories.show', compact('posts', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $categories = Category::findOrFail($category);
        $posts = Post::where('category_id', $category)->get();

        if ($categories->images) {
            Storage::delete($categories->images);
        }
        if (isset($posts)) {
            foreach ($posts as $p) {
                Post::destroy($p->id);
                Storage::delete($p->image);
            }
        }
        Category::destroy($category);
        return back()
            ->with('delete', 'Category deleted successfully');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
