<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Models\prodi;

class prodiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'prodi';
        $slug = 'prodi';
        $dataProdi = prodi::all();
        // $dataMhs = mahasiswa::join('prodi', 'mahasiswa.kd_prodi','=','prodi.kd_prodi')
        // ->get();
        return view('prodi.index', compact('title','slug','dataProdi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Data prodi';
        $slug = 'prodi';
        $dataProdi = prodi::all();
        return view('produk.createprodi', compact('title','slug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = prodi::insert([
            'kd_prodi'=> $request->kode,
            'nama_prodi'=> $request->nama,
            'created_at'=> now(),
            'updated_at'=> now()
        ]);
        if($result){
            return redirect('/prodi');
        }else{
            return $this->create();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $title = 'Perbarui Data Prodi';
        $slug = 'prodi';
        $dataMhs = mahasiswa::join('prodi', 'mahasiswa.kd_prodi','=','prodi.kd_prodi')
                    ->where('nim_mahasiswa','=', $id)
                    ->first();
        $dataProdi = prodi::where('kd_prodi', '=',$id)
                    ->first();
        return view('prodi.update', compact('title','slug','dataProdi','dataMhs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $id = $request->kode;
        prodi::where('kd_prodi','=', $id)
                    ->update([
                        
                        'nama_prodi' => $request->nama,
                        
        ]);
        return redirect('/prodi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        prodi::where('kd_prodi',$id)
        ->delete();
        
        return redirect('/prodi');
    }
}
