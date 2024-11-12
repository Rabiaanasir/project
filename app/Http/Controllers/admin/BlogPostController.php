<?php

namespace App\Http\Controllers\admin;

use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BlogPostController extends Controller
{
  /**
     * Display a listing of blog posts with AJAX for DataTables.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = BlogPost::select('id', 'title', 'description', 'image')->get();

            return DataTables::of($data)
                ->addColumn('image', function ($row) {
                    // return '<img src="' . asset('storage/images/' . $row->image) . '" width="70" height="50" />';
                    // Check if the image exists; if it does, return the image tag, else return an empty string
                return $row->image ? '<img src="' . asset('storage/images/' . $row->image) . '" width="70" height="50" />' : '';

                })
                ->addColumn('action', function ($row) {
                    $viewBtn = '<a href="' . route('posts.view', $row->id) . '"
                    data-href="' . route('posts.view', $row->id) . '"
                    data-container_view=".view_modal"
                    class="btn btn-sm btn-success modal_view">View</a>';
                    // Edit button with modal support
                    $editBtn = '<a href="' . route('posts.edit', $row->id) . '"
                                    data-href="' . route('posts.edit', $row->id) . '"data-container_edit=".edit_modal" class="btn btn-sm btn-primary modal_edit">Edit</a>';

                    // Delete button
                    $deleteBtn = '<button data-id="' . $row->id . '"
                                    class="btn btn-sm btn-danger deleteposts">Delete</button>';

                    return $viewBtn . ' ' . $editBtn . ' ' . $deleteBtn;
                })
                ->addColumn('description', function ($row) {
                    // Truncate description to 50 characters and append '...' if it's too long
                    $truncatedDescription = strlen($row->description) > 50
                        ? substr($row->description, 0, 35) . '...'
                        : $row->description;

                    return $truncatedDescription; // Return truncated description
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }

        return view('admin.blogposts.index');
    }


    public function view($id)
    {
        // Fetch the listing with the specified ID along with its related brand
        $post = BlogPost::findOrFail($id);

        // Return the view with the listing data
        return view('admin.BlogPosts.view', compact('post'));
    }
    /**
     * Show the form for creating a new blog post.
     */

    public function create()
    {
        return view('admin.blogposts.create');
    }

    /**
     * Store a newly created blog post in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
        }

        BlogPost::create(array_merge($validated, ['image' => $imageName]));

        return response()->json(['success' => 'Blog post created successfully.']);
    }

    /**
     * Show the form for editing the specified blog post.
     */
    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('admin.blogposts.edit', compact('post'));
    }

    /**
     * Update the specified blog post in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $post = BlogPost::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::delete('public/images/' . $post->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);

            $validated['image'] = $imageName;
        } else {
            $validated['image'] = $post->image;
        }

        $post->update($validated);

        return response()->json(['success' => 'Blog post updated successfully.']);
    }

    /**
     * Remove the specified blog post from storage.
     */
    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);

        $post->delete();  //Delete the project

        return response()->json(['success' => 'Post deleted successfully.']);
    }

    /**
     * Display all blog posts on the frontend.
     */
    public function frontendBlogPosts()
    {
        $blogPosts = BlogPost::all();
        return view('frontend.blog', compact('blogPosts'));
    }
}
