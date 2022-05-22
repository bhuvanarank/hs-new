<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;
use Carbon\Carbon;
use File;
use Mail;
use DB;
use Image;

class WebController extends Controller

{
    
    public function landing()
    {

        return view('panels.website.landing',[]);
        
    }
    
}