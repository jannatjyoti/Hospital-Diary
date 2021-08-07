<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Admin;
use App\Models\ServiceDetail;

//use Illuminate\Support\Facades\Schema;
use Illuminate\Support\facades\Hash;

class HomeController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $results = Service::where('service_name', 'LIKE', "%{$search}%")
            ->get();

        //$columns = Schema::getColumnListing('services');
        $query = Admin::query();
        $columns = ['hospital_name', 'address', 'contact_no'];
            foreach($columns as $column){
                $query->orWhere($column, 'LIKE', "%{$search}%");
            }
        $hospitals = $query->get();

        $query = Doctor::query();
            $columns = ['doctor_Name', 'designation', 'degree','specialized','number'];
            foreach($columns as $column){
                $query->orWhere($column, 'LIKE', "%{$search}%");
            }
        $doctors = $query->get();

        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        return view('fn.searchres', compact('results','total_admin','services','hospitals','doctors'));
    }

    public function index()
    {
        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        $hospitals = Admin::select('hospital_name','address','contact_no')->get();
        session(['services' => $services]);
        return view('fn.index', compact('services','total_admin','hospitals'));
    }

    public function doctor()
    {
        $doctors = Doctor::cursorPaginate(5)->fragment('doctors');
        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        return view('fn.doctors', compact('services','doctors','total_admin'));
    }

    public function hospital()
    {
        $hospitals = Admin::cursorPaginate(6)->fragment('hospitals');
        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        return view('fn.hospitals', compact('services','hospitals','total_admin'));
    }

    public function service($id)
    {
        $service = Service::find($id);

        $services= Service::get();
        $total_admin = count(Admin::get())-1;
        return view('fn.service', compact('service','services','total_admin'));
    }

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

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
