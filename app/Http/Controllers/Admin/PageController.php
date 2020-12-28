<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.page_index');
    }

    public function create()
    {
        return view('admin.page_create');
    }

    public function store(Request $request)
    {
        $page = new Page();
        $request->request->set('slug', Str::slug($request->get('title')));
        $page->fill($request->all());
        $page->save();

        return redirect('/')->with('modal', route('page.index'));
    }

    public function edit(Page $page)
    {
        return view('admin.page_edit')->with([
            'page' => $page
        ]);
    }

    public function update(Request $request, Page $page)
    {
        $request->request->set('slug', Str::slug($request->get('title')));
        $page->fill($request->all());
        $page->save();

        return redirect('/')->with('modal', route('page.index'));
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect('/')->with('modal', route('page.index'));
    }

    public function sort(Request $request)
    {
        foreach ($request->get('items') as $key => $id) {
            $page = Page::find($id);
            $page->sort = $key;
            $page->save();
        }

        echo 1;
    }
}
