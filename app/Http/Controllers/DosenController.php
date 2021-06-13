<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function index()
    {
        $dosens = Dosen::all();
        return view('admin.dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('admin.dosen.tambah');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
                'nama' => 'required',
                'nip' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'noHP' => 'required',
                'pengampu_matkul' => 'required',
                'prodi' => 'required',
            ],
            [
                'nama.required' => 'Anda belum memasukkan nama!',
                'nip.required' => 'Anda belum memasukkan nip!',
                'gender.required' => 'Anda belum memasukkan nip!',
                'address.required' => 'Anda belum memasukkan nip!',
                'noHP.required' => 'Anda belum memasukkan nip!',
                'pengampu_matkul.required' => 'Anda belum memasukkan Pengampu Matkul!',
                'prodi.required' => 'Anda belum memasukkan prodi!'
            ]
        );

        Dosen::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'gender' => $request->gender,
            'address' => $request->address,
            'noHP' => $request->noHP,
            'pengampu_matkul' => $request->pengampu_matkul,
            'prodi' => $request->prodi, 
        ]);

        return redirect('/data-dosen')->with('success', 'Data berhasil ditambahkan!');
    }

    
    public function edit(Dosen $dosen)
    {
        return view('admin.dosen.edit', compact('dosen'));
    }


    public function update(Request $request, Dosen $dosen) {
        $request->validate(
            [
                'nama' => 'required',
                'nip' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'noHP' => 'required',
                'pengampu_matkul' => 'required',
                'prodi' => 'required',
            ],
            [
                'nama.required' => 'Anda belum memasukkan nama!',
                'nip.required' => 'Anda belum memasukkan nip!',
                'gender.required' => 'Anda belum memasukkan nip!',
                'address.required' => 'Anda belum memasukkan nip!',
                'noHP.required' => 'Anda belum memasukkan nip!',
                'pengampu_matkul.required' => 'Anda belum memasukkan Pengampu Matkul!',
                'prodi.required' => 'Anda belum memasukkan prodi!'
            ]
        );


        Dosen::where('id', $dosen->id)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'gender' => $request->gender,
            'address' => $request->address,
            'noHP' => $request->noHP,
            'pengampu_matkul' => $request->pengampu_matkul,
            'prodi' => $request->prodi,
        ]);

        return redirect('/data-dosen')->with('toast_success', 'Data berhasil diubah!');
    }
    

    public function destroy($id)
    {
        $dosen = Dosen::find($id);

        Dosen::destroy($id);
        return redirect('/data-dosen')->with('toast_error', 'Data berhasil dihapus!');
    }

    
}
