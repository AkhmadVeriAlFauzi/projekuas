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
            'nama_toko' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required'
        ]);

        Alternative::create([
            'nama_toko' => $request->nama_toko,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5
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
            'nama_toko' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required'
        ]);

        Alternative::findOrFail($id)->update([
            'nama_toko' => $request->nama_toko,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5
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
