<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function index()
    {
        $criterias = Criteria::all();
        return view('kriteria', [
            'criterias' => $criterias,
            'title' => 'kriteria'
        ]);
    }

    public function create()
    {
        return view('createKriteria', [
            'title' => 'createKriteria'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_kriteria' => 'required',
            'nama_kriteria' => 'required',
            'cb' => 'required',
            'bobot' => 'required'
        ]);

        Criteria::create([
            'kode_kriteria' => $request->kode_kriteria,
            'nama_kriteria' => $request->nama_kriteria,
            'cb' => $request->cb,
            'bobot' => $request->bobot
        ]);

        return redirect('createKriteria')-> with('status','Kriteria Berhasil Ditambahkan');
    }

    public function edit(int $id)
    {
        $criteria = Criteria::findOrFail($id);
        // return $criteria;
        return view('editKriteria',compact('criteria'),[
            'title' => 'editKriteria'
        ]);
    }
    
    public function update(Request $request, int $id)
    {
        $request->validate([
            'kode_kriteria' => 'required',
            'nama_kriteria' => 'required',
            'cb' => 'required',
            'bobot' => 'required'
        ]);

        Criteria::findOrFail($id)->update([
            'kode_kriteria' => $request->kode_kriteria,
            'nama_kriteria' => $request->nama_kriteria,
            'cb' => $request->cb,
            'bobot' => $request->bobot
        ]);

        return redirect()->back()-> with('status','Kriteria Berhasil Dipudate');
    }

    public function destroy(int $id)
    {
        $criteria = Criteria::findOrFail($id);
        $criteria->delete();

        return redirect()->back()->with('status','Kriteria Berhasil Dihapus');
    }
}
