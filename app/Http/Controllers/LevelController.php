<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LevelModel;
use App\DataTables\LevelDataTable;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable) {
        return $dataTable->render('level.index');
    }
    public function create() {
        return view ('level.create');
    }
}
