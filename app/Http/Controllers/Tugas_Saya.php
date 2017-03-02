<?php

namespace App\Http\Controllers;

use App\TugasSaya;

//use Illuminate\Http\Request;

class Tugas_Saya extends Controller
{
    //
    public function index()
    {
      $tasks= TugasSaya::all();
      //return $tasks;

    return view('tasks.index', compact('tasks'));
    }
    public function show(TugasSaya $tugassaya)
    {
      //$task = TugasSaya::find($id);

      //return $task;
      //return $tugassaya;
    return view('tasks.show', compact('tugassaya'));
    }
}
