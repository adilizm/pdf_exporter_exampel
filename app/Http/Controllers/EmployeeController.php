<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Employee;
class EmployeeController extends Controller
{
    // Display user data in view
    public function showEmployees(){
        $employee = Employee::all();
        return view('index', compact('employee'));
      }
  
      // Generate PDF
      public function createPDF() {
   // retreive all records from db
   $data = Employee::all();

   // share data to view
  // view()->share('employee',$employee);
   
   $pdf = PDF::loadView('test',compact('data'));
      
        // download PDF file with download method

        return $pdf->download('welcome.pdf');
      }
}
