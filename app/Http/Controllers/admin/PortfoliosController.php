<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ports = Portfolio::notDeletedPortfolios()->with('user', 'category')->paginate(10);
        return view('admin.portfolio.list', compact('ports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::activePortfolioCategories();
        if (!count($cats) > 0) {
            toastr()->error('No category found. You must add category first!');
            return redirect()->route('portfolio.index');
        }
        return view('admin.portfolio.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'inputTitle' => 'required',
            'inputBody' => 'required',
            'category_id' => 'required',
            'image' => 'required'
        ]);
        Portfolio::create([
            'title' => $request['inputTitle'],
            'body' => $request['inputBody'],
            'status' => $request['checkBoxActive'] == 'on' ? true : false,
            'category_id' => $request['category_id'],
            'user_id' => Auth::user() ? Auth::id() : 1,
            'image' => $request['image'],
            'start_date' => $request->has('start_date') ? $request['start_date'] : Carbon::now(),
            'end_date' => $request->has('end_date') ? $request['end_date'] : Carbon::now(),
            'customer_name' => $request->has('customer_name') ? $request['customer_name'] : 'Personal project',
            'url' => $request->has('url') ? $request['url'] : null,
        ]);
        toastr()->success('Portfolio added successfully.');
        return redirect()->route('portfolio.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
