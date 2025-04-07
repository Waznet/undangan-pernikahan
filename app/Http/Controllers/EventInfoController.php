<?php

namespace App\Http\Controllers;

use App\Models\EventInfo;
use Illuminate\Http\Request;

class EventInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = EventInfo::First();
        return view('admin.edit.informasiAcara.dataEvent',[
            'title' => 'Informasi Acara',
        ]);
    }
    public function sedit()
    {
        return view('admin.edit.informasiAcara.editEvent',[
            'title' => 'Edit Acara',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.edit.informasiAcara.createEvent',[
            'title' => 'Tambah Acara',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal'=> 'required|date',
            'deskripsi'=> 'required|max:255',
            'lokasi'=> 'required|max:255',
            'kota'=> 'required|max:255',
            'alamat'=> 'required|max:255',
            'link_map'=> 'required',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(EventInfo $eventInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventInfo $eventInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventInfo $eventInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventInfo $eventInfo)
    {
        //
    }
}
