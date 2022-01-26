<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function formGeneral() {
        return view('admin.forms.general');
    }

    public function formAdvanced() {
        return view('admin.forms.advanced');
    }

    public function formEditor() {
        return view('admin.forms.editors');
    }

    public function formValidation() {
        return view('admin.forms.validation');
    }

    public function tableData() {
        return view('admin.tables.data');
    }

    public function tableJsGrid() {
        return view('admin.tables.jsgrid');
    }

    public function tableSimple() {
        return view('admin.tables.simple');
    }
}
