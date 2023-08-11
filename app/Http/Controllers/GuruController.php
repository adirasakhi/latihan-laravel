<?php
  
namespace App\Http\Controllers;
  
use Excel;
use App\Models\Guru;
use Illuminate\Http\Request;
use App\Exports\GurusExport; // Buat class StudentsExport sesuai kebutuhan Anda

class guruController extends Controller
{
    public function exportgurus()
{
    return Excel::download(new gurusExport, 'gurus.xlsx');
}

    public function index()
    {
        $gurus = Guru::latest()->paginate(5);
      
        return view('gurus.index',compact('gurus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('gurus.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pendidikan' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
        ]);
      
        Guru::create($request->all());
       
        return redirect()->route('gurus.index')
                        ->with('success','guru created successfully.');
    }
  
    public function show(Guru $guru)
    {
        return view('gurus.show',compact('guru'));
    }
  
    public function edit(Guru $guru)
    {
        return view('gurus.edit',compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required',
            'pendidikan' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
        ]);
      
        $guru->update($request->all());
      
        return redirect()->route('gurus.index')
                        ->with('success','guru updated successfully');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();
       
        return redirect()->route('gurus.index')
                        ->with('success','guru deleted successfully');
    }
}