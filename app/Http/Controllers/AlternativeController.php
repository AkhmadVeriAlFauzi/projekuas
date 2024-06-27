<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    public function index()
    {
        $alternatives = Alternative::get();
        return view('alternative', [
            'alternatives' => $alternatives,
            'title' => 'alternative'
        ]);
    }

    public function create()
    {
        return view('createAlternative', [
            'title' => 'createAlternative'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required'
        ]);

        Alternative::create([
            'nama_toko' => $request->nama_toko
        ]);

        return redirect('createAlternative')->with('status', 'Alternative Berhasil Ditambahkan');
    }

    public function edit(int $id)
    {
        $alternative = Alternative::findOrFail($id);
        // return $alternative;
        return view('editAlternative',compact('alternative'),[
            'title' => 'editAlternative'
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_toko' => 'required'
        ]);

        Alternative::findOrFail($id)->update([
            'nama_toko' => $request->nama_toko,
        ]);

        return redirect()->back()->with('status', 'Alternative Berhasil Diupdate');
    }

    public function destroy(int $id)
    {
        $alternative = Alternative::findOrFail($id);
        $alternative->delete();

        return redirect()->back()->with('status', 'Alternative Dihapus');
    }
}
