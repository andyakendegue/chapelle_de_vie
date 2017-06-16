<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ImageResizePlus;
use ImageResizeSimple;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadFiles;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $events = DB::select('select * from evenements');
    return view('back/events/viewEvents',['events'=>$events]);
  }

  public function inscriptions(){
    $inscriptions = DB::select('select * from inscriptions');
    return view('back/events/viewInscriptions',['inscriptions'=>$inscriptions]);
  }

  public function create() {
    return view('back/events/addEvent');
  }

}
