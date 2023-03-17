<?php

namespace App\Http\Controllers;

use App\ListData;
use Illuminate\Http\Request;

class ListDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listdata = ListData::select('*')
            ->get();

        return view('listdata.index', ['listdata' => $listdata]);
        // $listdata = ListData::all();
        // $data = [
        //     'listdata' => $listdata
        // ];
        // return view('listdata/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('listdata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nama'     => 'required|min:10',
        //     'email'     => 'required|min:5',
        //     'status'   => 'required|min:10'
        // ]);
        // ListData::create([
        //     'nama'     => $request->hashName(),
        //     'email'     => $request->email,
        //     'status'   => $request->status
        // ]);
        // return redirect()->route('listdata.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $listdata = ListData::findOrFail($id);

        //render view with post
        return view('listdata.show', compact('listdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
