<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illumiate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get siswa
        $siswa = siswa::latest()->paginate(5);

        //render view with siswa
        return view('siswa.index', compact('siswa'));
    }


    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'kelas'     => 'required',

        ]);

        //create siswa
        siswa::create([
            'nama'     => $request->nama,
            'kelas'     => $request->kelas,

        ]);
        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $siswa
     * @return void
     */
    public function edit(siswa $siswa)
    {

        return view('siswa.edit', compact('siswa'));

        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Didelete!']);
    }
    public function update(Request $request, Siswa $siswa)
    {
        //validate form
        $this->validate($request, [

            'nama'     => 'required',
            'kelas'     => 'required',
        ]);

            //update post without image
            $siswa->update([
                'nama'     => $request->nama,
                'kelas'     => $request->kelas,
            ]);


        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
