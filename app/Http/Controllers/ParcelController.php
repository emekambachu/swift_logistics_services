<?php

namespace App\Http\Controllers;

use App\Parcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $parcels = Parcel::paginate(15);
        return view('controlpanel.parcels.index', compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controlpanel.parcels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //Get parcel ID
        function parcelId($length = 4){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = 'CBLOG-';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        // get all form fields with array
        $input = $request->all();

        //assign parcel id result to number field
        $input['parcel_number'] = parcelId();

        //create user or post
        Parcel::create($input);

        //flash notification
        Session::flash('success', $input['name'].' Added');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function show(Parcel $parcel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parcel  $parcel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $parcel = Parcel::findOrFail($id);
        return view('controlpanel.parcels.edit', compact('parcel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parcel  $parcel
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //get item with ID
        $parcel = Parcel::findOrFail($id);

        $parcel->update($request->all());

        //session notification
        Session::flash('success', 'Updated');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parcel  $parcel
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //find item with ID
        $parcel = Parcel::findOrFail($id);

        //Delete item
        $parcel->delete();

        //flash notification
        Session::flash('danger', 'Deleted');

        return redirect()->back();
    }
}
