<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //action
     public function index(){
        return "<h1> Xin chào devmaster";
     }

     public function show($id){
      return "<h1> Xin chào devmaster -> action show: - $id";
   }

   public function store($name){
      return "<h1> Xin chào devmaster -> action store: - $name";
   }
}
