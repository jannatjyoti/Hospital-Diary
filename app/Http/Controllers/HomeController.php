<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Admin;
use App\Models\ServiceDetail;

use Illuminate\Support\facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        $hospitals = Admin::select('hospital_name','address','contact_no')->get();
        session(['services' => $services]);
        return view('fn.index', compact('services','total_admin','hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function service($id)
    {
        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        $service = Service::find($id);
        return view('fn.service', compact('service','services','total_admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        return view('fn.about', compact('services','total_admin'));
    }

    public function contact()
    {
        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        return view('fn.contact', compact('services','total_admin'));
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

    public function search(Request $request)
    {
        $search = $request->input('search');
        $results = Service::query()
            ->where('service_name', 'LIKE', "%{$search}%")
            //->orWhere('body', 'LIKE', "%{$search}%")
            ->get();
            
        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        return view('fn.searchres', compact('results','total_admin','services'));
    }
}
