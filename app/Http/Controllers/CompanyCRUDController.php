<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    // Create Index
    /*
            desc คือเรียงข้อมูลจากมาก ไปหา น้อย
            asc คือ เรียงข้อมูลจากน้อย ไปหา มาก
            paginate จำกัดข้อมูลอยู่ที่ 5 หน้า
    */
    public function index()
    {
        $data['companies'] = Company::orderBy('id','asc')->paginate(10); // ข้อมูลที่เราเก็บมา
        return view('companies.index' , $data); // ส่งข้อมูลที่เราต้องการให้ไปที่หน้า index , ข้อมูลที่เก็บไว้ในตัวแปรนี้
    }

    // Create resource
    public function create()
    {
        return view('companies.create');
    }

    // Store resource
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        $company = new Company; // เก็บข้อมูลจาก request และบันทึกลงฐานข้อมูล
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save(); // บันทึกข้อมูลลงฐานข้อมูล
        return redirect()->route('companies.index')->with('success' , 'บริษัทได้ถูกเพิ่มเข้าสู่ฐานข้อมูลเข้าไปแล้ว');

    }

    // Edit
    public function edit(Company $company)
    {
        return view('companies.edit' , compact('company'));
    }

    // Update

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        $company = Company::find($id); // หา id ที่ match ค้นหาข้อมูลที่ต้องการ update
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('companies.index')->with('success','ข้อมูลของบริษัทได้ถูกแก้ไขเรียบร้อยแล้ว');

    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success','ข้อมูลของบริษัทได้ถูกลบเรียบร้อยแล้ว');
    }
}