@extends('layouts.crm')

@section('head')

@stop

@section('content')
<html>
<style>
  .mdi{
    margin-left: 5px;
    font-size: 18px;
  }
.table thead th, .jsgrid .jsgrid-table thead th {
    font-size: 14px !important;
}
.table td, .jsgrid .jsgrid-table td {
    font-size: 14px !important;
}
.blue{
  color: blue;
}
</style>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
  <div class="card-body">
  <div class="row">
  <div class="col-lg-12" id="content_desc">
  <div class="mb-3">
  <div class="col-md-12 col-xs-12 col-sm-12">


  <form id="commentForm" action="{{url('addbooking')}}" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" method="POST"> 
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="x_panel">
  <div class="form-group">
  <div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12 ">
  <div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3"><h3 style="margin-top: 10px;">Membership List</h3></div>
    <div class="form-group col-sm-12 col-md-5 col-lg-5">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="mdi mdi-magnify"></i></span>
        </div>
        <input type='text' id='txt_searchall' class="form-control" placeholder='Search Here'>&nbsp; </div>
      </div>

  </div>
  <table id="sortable-table-2A" class="table table-striped " style="width:100%;margin-top: 20px;">
    <thead>
    <tr>
    <th class="sortStyle" style="border-left: none;">S.No</th>
    <th class="sortStyle" style="border-left: none;">First Name</th>
    <th class="sortStyle" style="border-left: none;">Last Name</th>
    <th class="sortStyle" style="border-left: none;">Email</th>
    <th class="sortStyle" style="border-left: none;">Phone number</th>
    <th class="" style="">Action</th>
    </tr>
    </thead>
      <?php $i=1;?>
      @foreach($membership as $member)
      <tr>
        <td>{{$i}}</td>
        <td>{{$member->firstname}}</td>
        <td>{{$member->lastname}}</td>
        <td>{{$member->email}}</td>
        <td>{{$member->phone}}</td>
        <td>
          <a href="{{url('view-form')}}/{{$member->id}}">&nbsp;&nbsp;<i class="fa fa-eye blue"></i></a>
        </td>
      </tr>
      <?php $i=$i+1;?>
      @endforeach
    </tbody>
  </table>
  <div class="col-sm-12 col-md-12 col-lg-12 notfound">No Records Found</div>
  
</div></div></div></div></form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</html>

 @stop
