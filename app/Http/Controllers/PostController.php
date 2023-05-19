<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('book.books', [
            "title" => "All Books" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString(),
            // 'post' => Post::where('user_id', auth()->user()->id->get())
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create', [
            "title" => "Create Book",
            "categories" => Category::all()
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

        $validatedData = $request->validate([
            'title' => ['required'],
            'slug' => ['unique:posts'],
            'author' => ['required'],
            'publisher' => ['required'],
            'category_id' => ['required'],
            'image'=> ['image', 'file', 'max:500'],
            'description' => ['required']
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->description, 100));

        Post::create($validatedData);

        return redirect('/books')->with('success', 'New Book has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $book)
    {
        return view('book.show', [
            "title" => "book",
            "post" => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $book)
    {
        return view('book.edit', [
            "post" => $book,
            "title" => "Edit Book",
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, POST $book)
    {
        $rules = $request->validate([
            'title' => ['required'],
            'author' => ['required'],
            'publisher' => ['required'],
            'category_id' => ['required'],
            'image'=> ['image', 'file', 'max:500'],
            'description' => ['required']
        ]);

        if($request->slug != $book->slug){
            $rules['slug'] = ['required', 'unique:posts']; 
        }

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->description, 200));

        Post::where('id', $book->id)
                ->update($validatedData);

        return redirect('/books')->with('success', 'New Book has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $book)
    {
        if($book->image){
            Storage::delete($book->image);
        }

        Post::destroy($book->id);
        return redirect('/books')->with('success', 'New Book has been Deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
