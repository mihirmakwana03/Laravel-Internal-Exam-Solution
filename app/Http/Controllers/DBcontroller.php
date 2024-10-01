<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBcontroller extends Controller
{
    function showUser()
    {
        $records = DB::select("select * from customer");
        return view('presentation', compact('records'));
    }
    function insert(Request $req)
    {
        $cid = $req->cid;
        $cname = $req->cname;
        $pass = $req->pass;
        $email = $req->email;
        $mobile = $req->mobile;
        $qry = DB::insert("insert into customer (cid,cname,pass,email,mobile) values('$cid', '$cname', '$pass', '$email', '$mobile')");


        $records = DB::select("select * from customer");
        return view('presentation', compact('records'));
    }
    function searchName(Request $req)
    {
        $cname = $req->cname;
        $records = DB::select('SELECT * FROM customer WHERE cname="' . $cname . '"');
        return view('presentation', compact('records'));
    }

}
