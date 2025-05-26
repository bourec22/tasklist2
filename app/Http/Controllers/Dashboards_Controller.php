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

}

Public function detail(){
//route = /dashboard/{id}

}

Public function edit(){
//route = /dashboard/{id}

}
Public function delete(){
//route = /dashboard/{id}

}
}
