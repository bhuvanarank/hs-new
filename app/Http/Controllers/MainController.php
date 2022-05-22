<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Users;
use App\Models\Membership;
use App\Models\UnderAgeChilds;
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
    public function membership()
    {
    	$membership = Membership::where('status',1)->get();

        return view('panels.crm.membership',['membership' => $membership]);
        
    }

    public function viewform($id=null)
    {
    	
    	$membership = Membership::select('membership.*','countries.name as countryname')->leftjoin('countries','countries.id','=','membership.country')->where('membership.id',$id)->first();
    	$childs = UnderAgeChilds::where('member_id',$id)->get();

        return view('panels.crm.viewform',['membership' => $membership, 'childs' => $childs]);
        
    }
}