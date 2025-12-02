<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    private $file = 'data/buku.json';

    public function index() {
        $buku = json_decode(Storage::get($this->file), true);
        return view('buku.index', compact('buku'));
    }

    public function create() {
        return view('buku.create');
    }

    public function store(Request $request) {
        $buku = json_decode(Storage::get($this->file), true);
        $new = [
            'id' => count($buku) + 1,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
        ];
        $buku[] = $new;
        Storage::put($this->file, json_encode($buku, JSON_PRETTY_PRINT));
        return redirect('/buku');
    }

    public function destroy($id) {
        $buku = json_decode(Storage::get($this->file), true);
        $buku = array_filter($buku, fn($b) => $b['id'] != $id);
        Storage::put($this->file, json_encode(array_values($buku), JSON_PRETTY_PRINT));
        return redirect('/buku');
    }
}
