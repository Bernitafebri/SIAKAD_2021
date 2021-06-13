<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('admin.mahasiswa.tambah');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
                'nama' => 'required',
                'nim' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'noHP' => 'required',
                'semester' => 'required',
                'prodi' => 'required',
            ],
            [
                'nama.required' => 'Anda belum memasukkan nama!',
                'nim.required' => 'Anda belum memasukkan nim!',
                'gender.required' => 'Anda belum memasukkan Jenis Kelamin!',
                'address.required' => 'Anda belum memasukkan Alamat!',
                'noHP.required' => 'Anda belum memasukkan no. HP!',
                'semester.required' => 'Anda belum memasukkan Semester!',
                'prodi.required' => 'Anda belum memasukkan prodi!'
            ]
        );

        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'gender' => $request->gender,
            'address' => $request->address,
            'noHP' => $request->noHP,
            'semester' => $request->semester,
            'prodi' => $request->prodi, 
        ]);

        return redirect('/data-mhs')->with('success', 'Data berhasil ditambahkan!');
    }

    
    public function edit(Mahasiswa $mhs)
    {
        return view('admin.mahasiswa.edit', compact('mhs'));
    }


    public function update(Request $request, Mahasiswa $mhs) {
        $request->validate(
            [
                'nama' => 'required',
                'nim' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'noHP' => 'required',
                'semester' => 'required',
                'prodi' => 'required',
            ],
            [
                'nama.required' => 'Anda belum memasukkan nama!',
                'nim.required' => 'Anda belum memasukkan nim!',
                'gender.required' => 'Anda belum memasukkan Jenis Kelamin!',
                'address.required' => 'Anda belum memasukkan Alamat!',
                'noHP.required' => 'Anda belum memasukkan no. HP!',
                'semester.required' => 'Anda belum memasukkan Semester!',
                'prodi.required' => 'Anda belum memasukkan prodi!'
            ]
        );


        Mahasiswa::where('id', $mhs->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'gender' => $request->gender,
            'address' => $request->address,
            'noHP' => $request->noHP,
            'semester' => $request->semester,
            'prodi' => $request->prodi,
        ]);

        return redirect('/data-mhs')->with('toast_success', 'Data berhasil diubah!');
    }
    

    public function destroy($id)
    {
        $mhs = Mahasiswa::find($id);

        Mahasiswa::destroy($id);
        return redirect('/data-mhs')->with('toast_error', 'Data berhasil dihapus!');
    }
}
