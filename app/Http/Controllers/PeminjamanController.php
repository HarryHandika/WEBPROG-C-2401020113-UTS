<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeminjamanController extends Controller
{
    private $file = 'peminjaman.json';

    private function readData()
    {
        if (!Storage::exists($this->file)) {
            Storage::put($this->file, json_encode([]));
        }

        return json_decode(Storage::get($this->file), true);
    }

    private function saveData($data)
    {
        Storage::put($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function index()
    {
        $data = $this->readData();
        return view('peminjaman.index', ['peminjaman' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
        ]);

        $data = $this->readData();

        $data[] = [
            'id' => time(),
            'nama' => $request->nama,
            'judul_buku' => $request->judul_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'Dipinjam'
        ];

        $this->saveData($data);

        return redirect('/peminjaman')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    public function returnBook($id)
    {
        $data = $this->readData();

        foreach ($data as &$item) {
            if ($item['id'] == $id) {
                $item['status'] = 'Dikembalikan';
                break;
            }
        }

        $this->saveData($data);

        return redirect('/peminjaman')->with('success', 'Buku telah dikembalikan');
    }

    public function destroy($id)
    {
        $data = $this->readData();

        $data = array_filter($data, function ($item) use ($id) {
            return $item['id'] != $id;
        });

        $this->saveData(array_values($data));

        return redirect('/peminjaman')->with('success', 'Data peminjaman dihapus');
    }
}
