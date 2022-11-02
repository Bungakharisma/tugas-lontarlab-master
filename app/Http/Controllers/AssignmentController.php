<?php

namespace App\Http\Controllers;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
 public function index()
 {
$data_tugas= DB::table('assignments')->get();
 return view('home.index', ['data_tugas' => $data_tugas]);
 }
}
