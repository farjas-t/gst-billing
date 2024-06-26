<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }

    public function about()
    {
        return view("about");
    }

    // Function to soft delete
    public function delete($table, $id)
    {
        $param = array('is_deleted' => 1);
        DB::table($table)->where('id', $id)->update($param);

        // Redirect back
        return redirect()->back()->withStatus("Record deleted successfully");
    }

}
