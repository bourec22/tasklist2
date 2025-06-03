<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class Dashboards_Controller extends Controller
{
Public function index(){
//route = /dashboard
    return Dashboard::all();
}

Public function create(){
//route = /dashboard/create
    dashboard::create([
        'name' => request('name'),
        'id' => request('id'),
    ]);
    return response()->json(['message' => 'Dashboard created successfully']);
}

Public function detail(){
//route = /dashboard/{id}
    $dashboard = Dashboard::findOrFail(request('id'));
    if (!$dashboard) {
        return response()->json(['message' => 'Dashboard not found'], 404);
    }   
    return response()->json($dashboard);    
    
}

Public function edit(){
//route = /dashboard/{id}
    $dashboard = Dashboard::findOrFail(request('id'));
    if (!$dashboard) {
        return response()->json(['message' => 'Dashboard not found'], 404);
    }
    
    $dashboard->update([
        'name' => request('name'),
        'id' => request('id'),
    ]);
    
    return response()->json(['message' => 'Dashboard updated successfully', 'dashboard' => $dashboard]);
}
Public function delete(){
//route = /dashboard/{id}
    $dashboard = Dashboard::findOrFail(request('id'));
    if (!$dashboard) {
        return response()->json(['message' => 'Dashboard not found'], 404);
    }
    
    $dashboard->delete();
    
    return response()->json(['message' => 'Dashboard deleted successfully']);   
}
}
