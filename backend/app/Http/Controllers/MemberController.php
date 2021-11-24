<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged_in.common.member_registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $member = new Member;

        $member->last_name = $request->input('last_name');
        $member->first_name = $request->input('first_name');
        $member->name = $request->input('last_name' .' '. 'first_name');
        $member->last_name_reading = $request->input('last_name_reading');
        $member->first_name_reading = $request->input('first_name_reading');
        $member->name_reading = $request->input('last_name_reading' .' '. 'first_name_reading');
        $member->birthday = $request->input('birthday');
        $member->sex = $request->input('sex');
        $member->classification = $request->input('classification');
        $member->education_facility = $request->input('education_facility');
        $member->school_name = $request->input('school_name');
        $member->contract_kind = $request->input('contract_kind');

        $member->save();
        return view('logged_in.mypage');
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
    public function edit($id)
    {
        //
        $member = Member::find($id);

        return view('member.edit', compact('member'));
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
        $member = Member::find($id);

        $member->last_name = $request->input('last_name');
        $member->first_name = $request->input('first_name');
        $member->name = $request->input('last_name' .' '. 'first_name');
        $member->last_name_reading = $request->input('last_name_reading');
        $member->first_name_reading = $request->input('first_name_reading');
        $member->name_reading = $request->input('last_name_reading' .' '. 'first_name_reading');
        $member->birthday = $request->input('birthday');
        $member->sex = $request->input('sex');
        $member->classification = $request->input('classification');
        $member->education_facility = $request->input('education_facility');
        $member->school_name = $request->input('school_name');
        $member->contract_kind = $request->input('contract_kind');

        $member->save();
        return view('logged_in.mypage');
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
