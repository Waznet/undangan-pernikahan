<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainInfo;
use Illuminate\Support\Facades\Storage;

class IMController extends Controller
{
    public function index()
    {
        return view('admin.edit.informasiMempelai.dataIM',[
            'title' => 'Informasi Mempelai',
            'main_infos'=> MainInfo::all()
        ]);
    }

    public function create()
    {
        return view('admin.edit.informasiMempelai.createIM',[
            'title' => 'Tambah Mempelai',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'foto_pria' => 'required|file|image|max:2048',
            'nama_pria' => 'required|max:255',
            'ortu_pria' => 'required|max:255',
            'foto_wanita' => 'required|file|image|max:2048',
            'nama_wanita' => 'required|max:255',
            'ortu_wanita' => 'required|max:255',
        ]);

        $validated['foto_pria'] = $request->file('foto_pria')->store('foto-mempelai');
        $validated['foto_wanita'] = $request->file('foto_wanita')->store('foto-mempelai'); 
        

        // Insert data
        MainInfo::create($validated);
        return redirect('/admin/edit/informasi-mempelai/data')->with('success', 'Data Mempelai Berhasil Ditambahkan');
    }


    // public function edit(MainInfo $main_info)
    // {
    //     return view('admin.edit.informasiMempelai.edit',[
    //         'title' => 'Edit Data Mempelai',
    //         'main_info' => $main_info
    //     ]);
    // }

    public function update(Request $request, MainInfo $main_info)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'foto_pria' => 'required',
            'nama_pria' => 'required|max:255',
            'ortu_pria' => 'required|max:255',
            'foto_wanita' => 'required',
            'nama_wanita' => 'required|max:255',
            'ortu_wanita' => 'required|max:255',
        ]);

        // Update data
        MainInfo::find($main_info->id)->update($validated);
        return redirect('/admin/edit/informasi-mempelai/data')->with('success', 'Data Mempelai Berhasil Ditambahkan');
    }
}
