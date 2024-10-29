<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Complaint::count();
        $pending = Complaint::where('status', 'pending')->count();
        $proses = Complaint::where('status', 'proses')->count();
        $selesai = Complaint::where('status', 'selesai')->count();

        $user_id = Auth::user()->id;
        $all_user = Complaint::where('user_id', $user_id)->count();
        $pending_user = Complaint::where('user_id', $user_id)->where('status', 'pending')->count();
        $proses_user = Complaint::where('user_id', $user_id)->where('status', 'proses')->count();
        $selesai_user = Complaint::where('user_id', $user_id)->where('status', 'selesai')->count();
        return view('user.dashboard.index',[
            'all' => $all,
            'pending' => $pending,
            'process' => $proses,
            'done' => $selesai,
            'all_user' => $all_user,
            'pending_user' => $pending_user,
            'process_user' => $proses_user,
            'done_user' => $selesai_user
        ]);
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
    public function store(Request $request)
    {
        //
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
