<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('.admin.edit.cerita.dataStory',[
            'title' => 'Cerita'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.edit.cerita.createStory',[
            'title' => 'Tambah Cerita'
        ]);
    }

    public function sedit1()
    {
        return view('admin.edit.cerita.editStory1',[
            'title' => 'Edit Cerita'
        ]);
    }
    public function sedit2()
    {
        return view('admin.edit.cerita.editStory2',[
            'title' => 'Edit Cerita'
        ]);
    }
    public function sedit3()
    {
        return view('admin.edit.cerita.editStory3',[
            'title' => 'Edit Cerita'
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story)
    {
        //
    }
}
