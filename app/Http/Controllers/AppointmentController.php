<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:appointments|max:255', // this appointments is the table created inside the db
            'telephone' => 'required|unique:appointments|max:255',
            'pname' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);
        $Appointment = new Appointment; //object
        $post = Appointment::create([
            'pname' => $request->get('pname'),            
            'email' => $request->get('email'),            
            'telephone' => $request->get('telephone'),            
            'date' => $request->get('date'),            
            'time' => $request->get('time'),            
            'message' => $request->get('message'),            
        ]);
        return redirect()->back()->with('Success','Appointment Added Successfully');
    } 
    
    public function view(){
        $Appointment = new Appointment; //object 
        $data = Appointment::all(); // through this we can retrieve data using ORM.
        return $data;
    }
}


