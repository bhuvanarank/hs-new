@extends('layouts.crm')
@section('head')
@stop
@section('content')
<style>
.form-group {
    margin-bottom: 1rem !important;
}
.error{color:#a01d1c;}
.radio-mg{
    margin-left: -8px;
}
.hd-left{
    margin-left: 10px;
}
</style>

<head>
</head>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-lg-12" id="content_desc">
    <div class="mb-3">
    <div class="col-md-12 col-xs-12 col-sm-12">
    <form id="commentForm" action="{{url('update-agentcustomer')}}" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" method="POST">  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="x_panel">
    <div class="form-group">
    <div class="row">
    <div class="col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
        
    <div id="multi_divq">
    <div id="multi_div" >
    <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-8">
        <h3> Membership Form</h3>
        </div>
        <div class="col-sm-3 col-md-4 col-lg-4 text-right">
            <a href="{{ url('membership') }}" data-toggle="tooltip" data-placement="top" title="View Listing"><i style="" class=" mdi mdi-close text-primary hv-cls"></i></a>
        </div>
        </div>
        <hr>

    <div class="row" style="margin-top: 0px;">
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>First Name</label>
        <input class="form-control" type="text" value="{{$membership->firstname}}"/>
        </div>  
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>Last Name</label>
        <input class="form-control" type="text" value="{{$membership->lastname}}"/>
        </div>
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>DOB</label>
        <input class="form-control" type="text" value="{{date('d/m/Y',strtotime($membership->dob))}}"/>
        </div>
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>Gender</label>
        <input class="form-control" type="text" value="{{$membership->gender}}"/>
        </div>
        <div class="form-group col-sm-12 col-md-12 col-lg-12">
        <label>Address</label>
        <input class="form-control" type="text" value="{{$membership->address1}}"/><br>
        <input class="form-control" type="text" value="{{$membership->address2}}"/>
        </div>
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>City</label>
        <input class="form-control" type="text" value="{{$membership->city}}"/>
        </div>
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>State</label>
        <input class="form-control" type="text" value="{{$membership->state}}"/>
        </div>
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>Country</label>
        <input class="form-control" type="text" value="{{$membership->countryname}}"/>
        </div>
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>Postcode</label>
        <input class="form-control" type="text" value="{{$membership->postcode}}"/>
        </div>
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>Email</label>
        <input class="form-control" type="text" value="{{$membership->email}}"/>
        </div>
        <div class="form-group col-sm-12 col-md-3 col-lg-3">
        <label>Contact Number</label>
        <input class="form-control" type="text" value="{{$membership->phone}}"/>
        </div>
        <div class="form-group col-md-12 col-sm-12"></div>
        <div class="form-group col-md-6 col-sm-12">
          <label>Do you play any sports ?  </label>
          <div class="radio-mg">
          <input type="radio" class="radio-wd play_any_sports" value="Yes" @if($membership->play_any_sports=='Yes') checked="checked" @endif>Yes
          <input type="radio" class="radio-wd play_any_sports" value="No" @if($membership->play_any_sports=='No') checked="checked" @endif>No
          <label id="play_any_sports-error" class="error" for="play_any_sports"></label>
          </div>
      </div>
      <div class="col-md-12 col-sm-12 "></div>
      <div class="form-group col-md-12 col-sm-12 sh_sportslist">
          <label>Please select below sports</label>
          <div class="radio-mg">
          <input type="checkbox" id="sports_items" class="radio-wd sports_items" value="Football" @if(in_array('Football',explode(',',$membership->sports_items))) checked="checked" @endif>Football
          <input type="checkbox" id="sports_items1" class="radio-wd sports_items" value="Cricket"  @if(in_array('Cricket',explode(',',$membership->sports_items))) checked="checked" @endif>Cricket
          <input type="checkbox" id="sports_items2" class="radio-wd sports_items" value="Netball"  @if(in_array('Netball',explode(',',$membership->sports_items))) checked="checked" @endif>Netball 
          <input type="checkbox" id="sports_items3" class="radio-wd sports_items" value="Other"  @if(in_array('Other',explode(',',$membership->sports_items))) checked="checked" @endif> Other
          </div>
      </div>
      @if($membership->others_play!='')
      <div class="form-group col-md-6 col-sm-12 Other_box">
          <label>Please enter the sports you play</label>
          <input name="others_play" type="text" class="form-control" value="{{$membership->others_play}}">
      </div>
      @endif
      @if($membership->football_age!='')
      <div class="form-group col-md-12 col-sm-12 Football_box" >
          <label>Please select Your Age group (Football Adults) </label>
          <div class="radio-mg">
          <input name="football_age" type="radio" value="Over 20" @if($membership->football_age=='Over 20') checked="checked" @endif>Over 20
          <input name="football_age" type="radio" value="Over 30" @if($membership->football_age=='Over 30') checked="checked" @endif>Over 30
          <input name="football_age" type="radio" value="Over 40" @if($membership->football_age=='Over 40') checked="checked" @endif>Over 40
          <input name="football_age" type="radio" value="Over 50" @if($membership->football_age=='Over 50') checked="checked" @endif>Over 50
          </div>
      </div>
      @endif
      @if($membership->netball_age!='')
      <div class="form-group col-md-12 col-sm-12 Netball_box">
          <label>Please select Your Age group (Netball Adults) </label>
          <div class="radio-mg">
          <input name="netball_age" type="radio" value="Over 20" @if($membership->netball_age=='Over 20') checked="checked" @endif>Over 20
          <input name="netball_age" type="radio" value="Over 30" @if($membership->netball_age=='Over 30') checked="checked" @endif>Over 30
          <input name="netball_age" type="radio" value="Over 40" @if($membership->netball_age=='Over 40') checked="checked" @endif>Over 40
          </div>
      </div>
      @endif

      <div class="form-group col-md-12 col-sm-12">
          <label>Do you have any children under age -19?</label>
          <div class="radio-mg">
          <input name="any_under_age" type="radio" @if($membership->any_under_age=='Yes') checked="checked" @endif>Yes
          <input name="any_under_age" type="radio" @if($membership->any_under_age=='No') checked="checked" @endif>No
          <label id="any_under_age-error" class="error" for="any_under_age"></label>
          </div>
      </div>
      <h4 class="hd-left">Add details of your children</h4>

      <div class="col-md-12 col-sm-12">
      @foreach($childs as $child)
      <div class="row" id="">
      <div class="form-group col-md-4 col-sm-12">
          <label>First Name </label>
          <input type="text" class="form-control" value="{{$child->first_name}}">
      </div>
      <div class="form-group col-md-4 col-sm-12">
          <label>Last Name </label>
          <input type="text" class="form-control" value="{{$child->last_name}}">
      </div>
      <div class="form-group col-md-4 col-sm-12">
          <label>DOB </label>
          <input type="text" class="form-control" value="{{date('d/m/Y',strtotime($child->dob))}}">
      </div>
      <div class="form-group col-md-6 col-sm-12">
          <label>Does your child play sports ? </label>
          <div class="radio-mg">
          <input type="radio" @if($child->play_any_sports=='Yes') checked="checked" @endif>Yes
          <input type="radio" @if($child->play_any_sports=='No') checked="checked" @endif>No
          </div>
      </div>
      <div class="col-md-12 col-sm-12 "></div>
      <div class="form-group col-md-12 col-sm-12 ch_sportslist" id="ch_sportslist_1">
          <label>Please select below sports</label>
          <div class="radio-mg">
          <input type="checkbox" @if(in_array('Football',explode(',',$child->sports_items))) checked="checked" @endif>Football
          <input type="checkbox" @if(in_array('Cricket',explode(',',$child->sports_items))) checked="checked" @endif>Cricket
          <input type="checkbox" @if(in_array('Netball',explode(',',$child->sports_items))) checked="checked" @endif>Netball
          <input type="checkbox" @if(in_array('Other',explode(',',$child->sports_items))) checked="checked" @endif>Other
          </div>
      </div>
      @if($child->others_play!='')
      <div class="form-group col-md-6 col-sm-12 ch_Other_box" id="ch_Other_box_1">
          <label>Please enter the sports your child play</label>
          <input type="text" class="form-control" value="{{$child->others_play}}">
      </div>
      @endif
      @if($child->football_age!='')
      <div class="form-group col-md-12 col-sm-12 ch_Football_box" id="ch_Football_box_1">
          <label>Please select Age group (Football - Kids) </label>
          <div class="radio-mg reduce-fs">
          <input type="radio" @if($child->football_age=='Under 7') checked="checked" @endif>Under 7<input type="radio" @if($child->football_age=='Under 9') checked="checked" @endif>Under 9<input type="radio" @if($child->football_age=='Under 11') checked="checked" @endif>Under 11<input type="radio" @if($child->football_age=='Under 13') checked="checked" @endif>Under 13<input type="radio" @if($child->football_age=='Under 15') checked="checked" @endif>Under 15<input type="radio" @if($child->football_age=='Under 17') checked="checked" @endif>Under 17<input type="radio" @if($child->football_age=='Under 19') checked="checked" @endif>Under 19
          </div>
      </div>
      @endif
      @if($child->netball_age!='')
      <div class="form-group col-md-12 col-sm-12 ch_Netball_box" id="ch_Netball_box_1">
          <label>Please select Age group (Netball - Kids) </label>
          <div class="radio-mg reduce-fs">
          <input type="radio"  @if($child->netball_age=='Under 13') checked="checked" @endif>Under 13<input type="radio"  @if($child->netball_age=='Under 15') checked="checked" @endif>Under 15<input type="radio"  @if($child->netball_age=='Under 17') checked="checked" @endif>Under 17<input type="radio" @if($child->netball_age=='Under 19') checked="checked" @endif>Under 19
          </div>
      </div>
      @endif
      </div>
      <hr>
      @endforeach
      </div>

    </div> 
    </div>
    </div>
   
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>

@stop

