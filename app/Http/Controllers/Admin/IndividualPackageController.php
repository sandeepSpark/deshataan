<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\IndividualPackage;
use App\PackageType;
use Illuminate\Http\Request;

class IndividualPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $individualPkgs = IndividualPackage::all();
        return view('admin.individualPackage')->with('individualPkgs', $individualPkgs);
    }

    public function home()
    {
        $packages = PackageType::all();
        return view('admin.addIndividualPackage')->with('packages', $packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = PackageType::all();
        return view('admin.addIndividualPackage')->with('packages', $packages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $individualPkg = new IndividualPackage();

        $individualPkg->title = $request->input('title');
        $individualPkg->description = $request->input('description');
        $individualPkg->location = $request->input('location');
        $individualPkg->duration = $request->input('duration');
        $individualPkg->start_date = $request->input('startDate');
        $individualPkg->end_date = $request->input('endDate');
        $individualPkg->ticket_quantity = $request->input('ticketQuantity');
        $individualPkg->price = $request->input('price');
        $individualPkg->package_type = $request->input('packageType');

        $individualPkg->save();

        return redirect()->route('adminn.indipackage.index')->with("status", "Individual Package added successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($p_id)
    {
        $packages = PackageType::all();
        $individualPkg = IndividualPackage::find($p_id);

        return view('admin.editIndividualPackage')->with(['individualPkg' => $individualPkg, 'packages' => $packages]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $p_id)
    {
        $individualPkg = IndividualPackage::find($p_id);

        $individualPkg->title = $request->input('title');
        $individualPkg->description = $request->input('description');
        $individualPkg->location = $request->input('location');
        $individualPkg->duration = $request->input('duration');
        $individualPkg->start_date = $request->input('startDate');
        $individualPkg->end_date = $request->input('endDate');
        $individualPkg->ticket_quantity = $request->input('ticketQuantity');
        $individualPkg->price = $request->input('price');
        $individualPkg->package_type = $request->input('packageType');

        $individualPkg->save();

        return redirect()->route('adminn.indipackage.index')->with("status", "Individual Package Updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($p_id)
    {
        $individualPkg = IndividualPackage::find($p_id);
        $individualPkg->delete();
        return redirect()->route('adminn.indipackage.index')->with("status", "Individual Package Deleted successfully");

    }
}