<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::notDeletedSkills()->with('user')->paginate(10);
        return view('admin.skill.list', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skill.create');
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
            'meta_name' => 'required',
            'meta_value' => 'required',
            'image' => 'required',
        ]);

        Skill::create([
            'meta_name' => $request['meta_name'],
            'meta_value' => $request['meta_value'],
            'image' => $request['image'],
            'user_id' => Auth::user() ? Auth::id() : 1,
            'status' => $request['checkBoxActive'] == 'on' ? true : false,
            'position' => $request['position'] ? $request['position'] : 0,
            'body' => $request['body'] ? $request['body'] : null,
        ]);

        toastr()->success('Insert Skill is successfully!');
        return redirect()->route('skill.index');
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
        $skill = Skill::find($id);
        if ($skill) {
            return view('admin.skill.edit', compact('skill'));
        }
        toastr()->error('Can\'t find skill! Please try again.');
        return back();
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
        $request->validate([
            'meta_name' => 'required',
            'meta_value' => 'required',
            'image' => 'required',
        ]);
        $skill = Skill::find($id);
        if ($skill) {
            $skill->update([
                'meta_name' => $request['meta_name'],
                'meta_value' => $request['meta_value'],
                'image' => $request['image'],
                'status' => $request['checkBoxActive'] == 'on' ? true : false,
                'position' => $request['position'] ? $request['position'] : 0,
                'body' => $request['body'] ? $request['body'] : null,
                'updated_at' => Carbon::now()
            ]);
            toastr()->success('Skill was updated successfully');
            return redirect()->route('skill.index');
        }
        toastr()->error('Skill was not found! Please try again.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        if ($skill) {
            $skill->update([
                'deleted_at' => Carbon::now()
            ]);
            toastr()->success('Skill was updated successfully');
            return redirect()->route('skill.index');
        }
        toastr()->error('Skill was not found! Please try again.');
        return back();
    }
}
