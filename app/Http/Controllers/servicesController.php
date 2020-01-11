<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));

    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => 'required'
        ]);

         Service::create($data);//mass asignment

//        $service = new Service;
//        $service->name = $request->name;
//        $service->save();
//
//        $services = Service::all();
        return redirect()->back();
    }
}
