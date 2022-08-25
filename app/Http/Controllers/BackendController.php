<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Product;

class BackendController extends Controller
{
    public function dashboard(){
        return view('backend.pages.dashboard');
    }
    public function calendar(){
        return view('backend.pages.calendar');
    }

    public function employeeslist(){
    //$employees=Employee::where('age','>','18')->orderBy('id')->get();
    $employees=Employee::where('age','>','18')->orderBy('id','desc')->paginate(25);
    return view('backend.pages.employees',compact('employees'));
   //return $employees;
}

    public function products(){
    //$employees=Employee::where('age','>','18')->orderBy('id')->get();
    /*$employees=Employee::where('age','>','18')->orderBy('id','desc')->paginate(25);
   //return $employees;*/
   $products=Product::orderBy('id','desc')->paginate(25);
   return view('backend.pages.products',compact('products'));
}

    //อ่านข้อมูลจากตาราง employee ทั้งหมด
public function employees(){
    $employees=DB::table('employees')->get(); // select * from employees
    //$employees=DB::table('employees')->first(); // select * from employees limit 0,1
    //$employees=DB::table('employees')->get(['fullname','gender','emial']); // select * from employees limit 0,1
    //ค้นหาข้อมูลตามเงื่อนไข
    /*$data=DB::table('employees')
    ->where('age','>','18')
    ->where('gender','male')
    ->get();*/
    //สิ้นสุด
    //ค้นหาข้อมูลโดยระบุ primarykey
    //$employees=DB::table('employees')->find(25);

    //$employees=DB::table('employees')->max('age');//ค่าสูงสุด
    //$employees=DB::table('employees')->min('age');//ค่าต่ำสุด
    //$employees=DB::table('employees')->avg('age');//เฉลี่ย
    //$employees=DB::table('employees')->count();//นับจำนวน
   // $employees=DB::table('employees')->orderByDesc('age','desc')->get();//order by desc
    //$employees=DB::table('employees')->orderBy('age')->get();//order by asc
    //$employees=DB::table('employees')->orderByDesc('age')->limit(3)->get();//limit
   // $employees=DB::table('employees')->orderBy('age')->limit(3)->get();//order by asc

/*
    $data = array(
             'fullname' => 'Samit Koyom',
             'gender' => 'Male',
             'email' => 'samit@email.com',
             'tel' => '0898938889389',
             'age' => 38,
             'address' => '20/2 moo.2 bangkok',
             'avartar' => 'noavatar.jpg',
             'status' => 1
         );

    $employees=DB::table('employees')->insert($data);// insert 
*/
/*แก้ไข
$data = array(
    'fullname' => 'Thananchai Juime',
    'email' => 'djunghoo@gmail.com',
);

$employees=DB::table('employees')->where('email','samit@email.com')->update($data);// insert 

*/
//$employees=DB::table('employees')->where('email','djunghoo@gmail.com')->delete();// insert 
    return view('backend.pages.employees',$employees);
   //return $employees;
}
}