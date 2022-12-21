<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::activeCategories()->latest()->paginate(10);
        return view('admin.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'inputTitle' => 'required',
            'inputBody' => 'required',
            'CategoryType' => 'required',
        ]);

        Category::create([
            'title' => $request['inputTitle'],
            'body' => $request['inputBody'],
            'status' => $request['checkBoxActive'] == 'on' ? true : false,
            'type' => $request['CategoryType']
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::find($id);
        if ($cat) {
            return view('admin.category.edit', compact('cat'));
        } else {
            toastr()->error('Ops! Category was not found.');
            return redirect()->route('category.index');
        }
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
        $cat = Category::find($id);
        if ($cat) {
            $request->validate([
                'inputTitle' => 'required',
                'inputBody' => 'required',
                'CategoryType' => 'required'
            ]);
            $cat->update([
                'title' => $request['inputTitle'],
                'body' => $request['inputBody'],
                'status' => $request['checkBoxActive'] == 'on' ? true : false,
                'type' => $request['CategoryType'],
                'updated_at' => Carbon::now()
            ]);
            toastr()->success('Category edit was success.');
            return redirect()->route('category.index');
        } else {
            toastr()->error('Ops! Category not Found');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id', $id)->update([
            'deleted_at' => Carbon::now(),
        ]);

        return redirect()->route('category.index');
    }
}
