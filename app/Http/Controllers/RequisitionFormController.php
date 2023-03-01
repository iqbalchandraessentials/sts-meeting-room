<?php

namespace App\Http\Controllers;

use App\Models\div;
use App\Models\Employee_requisition;
use App\Models\Pt;
use App\Models\Responsibilities;
use Illuminate\Http\Request;

class RequisitionFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $er = Employee_requisition::with(['respons', 'pt'])->get();
        // dd($er);
        return view('MeetingRoom.index', [ 'data' =>$er]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pt = Pt::get();
        $div = div::get();
        return view('MeetingRoom._add', ['pt' =>  $pt , 'div' => $div]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->budgeted);
        $Employee_requisition =  $request->except(['_token', 'main_response', 'task', 'report']);
        $er = Employee_requisition::create($Employee_requisition);
        foreach ($request->main_response as $a => $v) {
        Responsibilities::create(['id_requisition'=> $er->id, 'main_response' => $request->main_response[$a], 'task' => $request->task[$a], 'report' => $request->report[$a] ]);
        }
        return redirect()->route('requisition.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pt = Pt::get();
        $div = div::get();
        $er = Employee_requisition::with(['respons', 'pt'])->findOrFail($id);

        return view('MeetingRoom.detailMeetingRoom', ['pt' =>  $pt , 'div' => $div, 'data'=> $er]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
