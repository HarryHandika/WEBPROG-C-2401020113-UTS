<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    private $file = 'data/anggota.json';

    public function index()
    {
        $anggota = json_decode(Storage::get($this->file), true);
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $anggota = json_decode(Storage::get($this->file), true);

        $new = [
            'id' => count($anggota) + 1,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
        ];

        $anggota[] = $new;
        Storage::put($this->file, json_encode($anggota, JSON_PRETTY_PRINT));

        return redirect('/anggota')->with('success', 'Anggota baru berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $anggota = json_decode(Storage::get($this->file), true);
        $data = collect($anggota)->firstWhere('id', $id);
        return view('anggota.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $anggota = json_decode(Storage::get($this->file), true);

        foreach ($anggota as &$a) {
            if ($a['id'] == $id) {
                $a['nama'] = $request->nama;
                $a['email'] = $request->email;
                $a['password'] = $request->password;
                break;
            }
        }

        Storage::put($this->file, json_encode($anggota, JSON_PRETTY_PRINT));
        return redirect('/anggota')->with('success', 'Data anggota berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $anggota = json_decode(Storage::get($this->file), true);
        $anggota = array_filter($anggota, fn($a) => $a['id'] != $id);
        Storage::put($this->file, json_encode(array_values($anggota), JSON_PRETTY_PRINT));

        return redirect('/anggota')->with('success', 'Anggota berhasil dihapus!');
    }
}
