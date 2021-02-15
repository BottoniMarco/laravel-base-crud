<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    private $bookValidation = [
        'id' => 'required|numeric',
        'brand' => 'required|max:50',
        'name' => 'required|max:50',
        'ABV' => 'required|numeric',
        'description' => 'required|max:500'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        // dd($beers);
        return view('beers',compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate($this->bookValidation);

        $beer = new Beer();
        // $beer->$id = $data["id"];
        // $beer->brand = $data["brand"];
        // $beer->name = $data["name"];
        // $beer->ABV = $data["ABV"];
        // $beer->description = $data["description"];
        $beer->fill($data);
        $result = $beer->save();

        $newBeer = Beer::orderBy('id', 'DESC')->first();
        // return redirect()->route('beers.show', $newBeer);
        return redirect()->route('beers.index')->with('message',"Birra '".$beer->name."' creata correttamente");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $beer = Beer::find($id);
        return view('show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request -> all();
        $request->validate($this->bookValidation);
        $beer->update($data);

        return redirect()->route('beers.index')->with('message',"Birra '".$beer->name."' aggiornata correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {   
        $title = $beer->name;
        $beer -> delete();
        return redirect()->route('beers.index')->with('message',"Birra '".$title."' eliminata correttamente");
    }
}
