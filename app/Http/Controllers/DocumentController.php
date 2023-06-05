<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $documents = DB::table('documents');

        $documents = array("documents" => Document::all());

        return view('users.home', $documents);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(Request $request){

            // dd($request);
            $validated = $request->all();

            Document::create($validated);

            return redirect('users/home')->with('message', 'Data was successfully saved!');

        }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
