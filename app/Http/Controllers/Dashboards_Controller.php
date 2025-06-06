<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class Dashboards_Controller extends Controller
{
public function index(){
//route = /dashboard
    return Dashboard::all();
}

public function create(Request $request){
//route = /dashboard/create
    Dashboard::create([
        'name' => $request-> input('name'),
    ]);
    return response()->json(['message' => 'Dashboard created successfully']);
}

public function detail($id){
//route = /dashboard/{id}
    $dashboard = Dashboard::find($id);
    if (!$dashboard) {
        return response()->json(['message' => 'Dashboard not found'], 404);
    }   
    return response()->json($dashboard);    
    
}

public function edit(  Request $request, $id) {
//route = /dashboard/{id}
        $dashboard = Dashboard::find($id);
        if (!$dashboard) {
            return response()->json(['message' => 'Dashboard not found'], 404);
        }
        $dashboard->update([
            'name' => $request->input('name'),
        ]);
    
    return response()->json(['message' => 'Dashboard updated successfully', 'dashboard' => $dashboard]);
}
public function delete($id){
//route = /dashboard/{id}
    $dashboard = Dashboard::find($id);
    if (!$dashboard) {
        return response()->json(['message' => 'Dashboard not found'], 404);
    }
    
    $dashboard->delete();
    
    return response()->json(['message' => 'Dashboard deleted successfully']);   
}
}
