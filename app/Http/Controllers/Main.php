<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function getForm(){
        return view('form');
    }
    public function getFormOld(){
        return view('formold');
    }


    public function postForm(Request $req){
        if($req->input('name') == 'anon' && $req->input('pass123') == 'superSecretPass'){
            return view('user')->with('name', $req->input('name'));
        }elseif ($req->input('name') == 'admin' && $req->input('pass123') == 'superMegaS3cretP4ss'){
            return view('user')->with('name', $req->input('name'));
        }elseif ($req->input('name') && $req->input('pass123')){
            return redirect('/denied');
        }else{
            return response('', 422);
        }
    }
    public function postFormOld(Request $req){
        if($req->input('name') == 'anon' && $req->input('pass123') == 'superSecretPass'){
            return view('user')->with('name', $req->input('name'));
        }elseif ($req->input('name') == 'admin' && $req->input('pass123') == 'superMegaS3cretP4ss'){
            return view('user')->with('name', $req->input('name'));
        }elseif ($req->input('name') && $req->input('pass123')){
            return redirect('/denied');
        }else{
            return response('', 422);
        }
    }
    public function postFormUnfilter(Request $req){
        return view('user')->with('name', $req->input('name'));
    }


}
