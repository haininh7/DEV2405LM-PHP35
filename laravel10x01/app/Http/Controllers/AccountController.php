<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index()
    {
        return "<h1> account controller; action index; return string";
    }
    public function create()
    {
    // trả về view có tên create trong thư mục \\resources\views\account-create.blade.php
       return view('account-create');
    }
    // action: return view and data
    public function showData()
    {   
        //tạo mock data
        $message ="<h1> viện công nghệ và đào tạo devmaster</h1>";
        $data =['Apple','Oringe','Green','Blue'];
        // truyền dữ liệu lên view
        return view('show-data',compact('message','data'));
       
    }

    //action: return view, data object
    public function accountList()
    {
        // tạo mock data
        $data = array(
            ["id"=>"12345","UserName"=>"chungchung","Password"=>"123456@","Fullname"=>"Trịnh Văn Chung"],
            ["id"=>"12346","UserName"=>"devmaster","Password"=>"123456@","Fullname"=>"devmaster academy"],
        );
        // truyền data ra view
        return view('account-list',compact('data'));
    }
}
