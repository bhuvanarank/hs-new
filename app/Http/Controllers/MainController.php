<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Users;
use File;
use Mail;
use DB;
use Image;

class MainController extends Controller

{
    
    public function index()
    {

        return view('panels.crm.index',[]);
        
    }


}