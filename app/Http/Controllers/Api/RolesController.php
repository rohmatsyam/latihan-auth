<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::with('user')->get();
        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get all roles",
            'data' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = Roles::create([
            'description' => $request->description
        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success create roles",
            'data' => $roles
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $roles)
    {
        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get roles with id = " . $roles->id,
            'data' => $roles
        ]);
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
    public function update(Request $request, Roles $roles)
    {
        $roles->update([
            'description' => $request->description
        ]);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success update roles with id = " . $roles->id,
            'data' => $roles
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $roles)
    {
        $roles->delete();

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success delete book with id = " . $roles->id,
            'data' => ""
        ]);
    }
}
