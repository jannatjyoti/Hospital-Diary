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
            ->where('is_active', "1")
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

        $services= Service::where('is_active', "1")->get();
        $total_admin = count(Admin::get())-1;
        $total_dr = count(Doctor::get());
        return view('fn.searchres', compact('results','total_admin','services','hospitals','doctors','total_dr'));
    }

    public function index()
    {
        $hospitals = Admin::select('id','hospital_name','address','contact_no')->skip(1)->take(10)->get();
        
        $services= Service::where('is_active', "1")->get();
        $total_admin = count(Admin::get())-1;
        $total_dr = count(Doctor::get());
        $doctors = Doctor::paginate(10);
        return view('fn.index', compact('services','doctors','total_admin','hospitals','total_dr'));
    }

    public function doctor()
    {
        $doctors = Doctor::cursorPaginate(5)->fragment('doctors');
        $services= Service::where('is_active', "1")->get();
        $total_admin = count(Admin::get())-1;
        $total_dr = count(Doctor::get());
        return view('fn.doctors', compact('services','doctors','total_admin','total_dr'));
    }

    public function hospital()
    {
        $hospitals = Admin::skip(1)->cursorPaginate(6)->fragment('hospitals');
        $services= Service::where('is_active', "1")->get();
        $total_admin = count(Admin::get())-1;
        $total_dr = count(Doctor::get());
        return view('fn.hospitals', compact('services','hospitals','total_admin','total_dr'));
    }
    
    public function hos_details($id)
    {
        $hospital = Admin::find($id);

        $services= Service::where('is_active', "1")->get();
        $total_admin = count(Admin::get())-1;
        $total_dr = count(Doctor::get());
        return view('fn.hosdetails', compact('services','hospital','total_admin','total_dr'));
    }

    public function service($id)
    {
        $service = Service::find($id);

        $services= Service::where('is_active', "1")->get();
        $total_admin = count(Admin::get())-1;
        $total_dr = count(Doctor::get());
        return view('fn.service', compact('service','services','total_admin','total_dr'));
    }

    public function about()
    {
        $services= Service::where('is_active', "1")->get();
        $total_admin = count(Admin::get())-1;
        $total_dr = count(Doctor::get());
        return view('fn.about', compact('services','total_admin','total_dr'));
    }

    public function contact()
    {
        $services= Service::where('is_active', "1")->get();
        $total_admin = count(Admin::get())-1;
        $total_dr = count(Doctor::get());
        return view('fn.contact', compact('services','total_admin','total_dr'));
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
