@extends('layouts.crm')
@section('head')
@stop
@section('content')
<style>
   .dp-highlight .ui-state-default {
          background: #484 !important;
          color: #FFF !important;
        }
        .ui-datepicker.ui-datepicker-multi  {
          width: 100% !important;
        }
        .ui-datepicker-multi .ui-datepicker-group {
        float:none;
        }
        #datepicker {
          height: 300px;
          overflow-x: scroll;
        }
.ui-widget { font-size: 100% }

</style>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-6 mb-4 mb-xl-0">
              <div class="d-lg-flex align-items-center">
                <div>
                  <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                  <h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
                </div>
                <div class="ml-lg-5 d-lg-flex d-none">
                    <button type="button" class="btn bg-white btn-icon mr-2">
                      <i class="mdi mdi-view-grid text-success"></i>
                  </button>
                    <button type="button" class="btn bg-white btn-icon">
                      <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                    </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center justify-content-md-end">
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                      Feedback
                      <i class="mdi mdi-message-outline btn-icon-append"></i>                          
                    </button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                      Help
                      <i class="mdi mdi-help-circle-outline btn-icon-append"></i>                          
                  </button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                      Print
                      <i class="mdi mdi-printer btn-icon-append"></i>                          
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <h4 class="card-title">Sales Difference</h4>
                      <canvas id="salesDifference"></canvas>
                      <p class="mt-3 mb-4 mb-lg-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                      </p>
                    </div>
                    <div class="col-lg-5">
                      <h4 class="card-title">Best Sellers</h4>
                      <div class="row">
                        <div class="col-sm-4">
                          <ul class="graphl-legend-rectangle">
                            <li><span class="bg-danger"></span>Automotive</li>
                            <li><span class="bg-warning"></span>Books</li>
                            <li><span class="bg-info"></span>Software</li>
                            <li><span class="bg-success"></span>Video games</li>
                          </ul>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <canvas id="bestSellers"></canvas>
                        </div>
                      </div>
                      <p class="mt-3 mb-4 mb-lg-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                      </p>
                    </div>
                    <div class="col-lg-3">
                      <h4 class="card-title">Social Media Statistics</h4>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="progress progress-lg grouped mb-2">
                            <div class="progress-bar  bg-danger" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <ul class="graphl-legend-rectangle">
                            <li><span class="bg-danger"></span>Instagram (15%)</li>
                            <li><span class="bg-warning"></span>Facebook (20%)</li>
                            <li><span class="bg-info"></span>Website (25%)</li>
                            <li><span class="bg-success"></span>Youtube (40%)</li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-0 mt-2">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card congratulation-bg text-center">
                <div class="card-body pb-0">
                  <img src="../../images/faces/face29.png" alt="">  
                  <h2 class="mt-3 text-white mb-3 font-weight-bold">Congratulations
                    Johnson
                  </h2>
                  <p>You have done 57.6% more sales today. 
                    Check your new badge in your profile.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <h4 class="card-title">Customers</h4>
                    <div class="dropdown dropdown-menu-right card-menu-dropdown">
                      <button class="btn p-0" type="button" id="cardMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="cardMenuButton1">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <p class="mb-3">Total customers this month</p>
                  <div class="d-flex flex-column justify-content-center">
                    <h1 class="font-weight-bold text-dark">92556</h1>
                    <div class="d-flex align-items-baseline flex-wrap">
                      <h5 class="mb-0 font-weight-normal text-success">1.35</h5>
                      <i class="mdi mdi-arrow-up text-success mr-1"></i>
                      <h5 class="mb-0 mt-0 mt-md-2 mt-xl-0 font-weight-normal text-dark">More than last month</h5>
                    </div>
                  </div>
                </div>
                <canvas height="110" id="customers-chart"></canvas>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card overflow-hidden">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <p class="card-title">Conversion</p>
                    <div class="dropdown dropdown-menu-right card-menu-dropdown">
                      <button class="btn p-0" type="button" id="cardMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="cardMenuButton2">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <p class="mb-3">Total conversion this month</p>
                  <div class="d-flex flex-column justify-content-center">
                    <h1 class="font-weight-bold text-dark">53812</h1>
                    <div class="d-flex align-items-baseline flex-wrap">
                      <h5 class="mb-0 font-weight-normal text-danger">0.17</h5>
                      <i class="mdi mdi-arrow-down text-danger mr-1"></i>
                      <h5 class="mb-0 mt-0 mt-md-2 mt-xl-0 font-weight-normal text-dark">Less than last month</h5>
                    </div>
                  </div>
                </div>
                <canvas height="110" id="conversion-chart"></canvas>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card overflow-hidden">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <p class="card-title">Revenue</p>
                    <div class="dropdown dropdown-menu-right card-menu-dropdown">
                      <button class="btn p-0" type="button" id="cardMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="cardMenuButton3">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <p class="mb-3">Total revenue this month</p>
                  <div class="d-flex flex-column justify-content-center">
                    <h1 class="font-weight-bold text-dark">40008</h1>
                    <div class="d-flex align-items-baseline flex-wrap">
                      <h5 class="mb-0 font-weight-normal text-success">0.06</h5>
                      <i class="mdi mdi-arrow-up text-success mr-1"></i>
                      <h5 class="mb-0 mt-0 mt-md-2 mt-xl-0 font-weight-normal text-dark">Less than last month</h5>
                    </div>
                  </div>
                </div>
                <canvas height="110" id="revenue-chart"></canvas>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8 flex-column d-flex stretch-card">
              <div class="row flex-grow">
                <div class="col-lg-4 d-flex grid-margin stretch-card">
                  <div class="card bg-primary">
                    <div class="card-body text-white">
                      <h3 class="font-weight-bold mb-3">18,39 (75GB)</h3>
                      <div class="progress mb-3">
                        <div class="progress-bar  bg-warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pb-0 mb-0">Bandwidth usage</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 d-flex grid-margin stretch-card">
                  <div class="card sale-diffrence-border">
                    <div class="card-body">
                      <h2 class="text-dark mb-2 font-weight-bold">$6475</h2>
                      <h4 class="card-title mb-2">Sales Difference</h4>
                      <small class="text-muted">APRIL 2019</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 d-flex grid-margin stretch-card">
                  <div class="card sale-visit-statistics-border">
                    <div class="card-body">
                      <h2 class="text-dark mb-2 font-weight-bold">$3479</h2>
                      <h4 class="card-title mb-2">Visit Statistics</h4>
                      <small class="text-muted">APRIL 2019</small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 grid-margin d-flex stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Sales Difference</h4>
                        <div class="dropdown">
                          <a href="#" class="text-success btn btn-link px-1 py-0 mb-4"><i class="mdi mdi-refresh"></i></a>
                          <a href="#" class="text-success btn btn-link px-1 py-0 mb-4 dropdown-toggle dropdown-arrow-none" data-toggle="dropdown" id="settingsDropdownsales">
                            <i class="mdi mdi-dots-horizontal"></i></a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="settingsDropdownsales">
                              <a class="dropdown-item">
                                <i class="mdi mdi-grease-pencil text-primary"></i>
                                Edit
                              </a>
                              <a class="dropdown-item">
                                <i class="mdi mdi-delete text-primary"></i>
                                Delete
                              </a>
                            </div>
                        </div>
                      </div>
                      <div>
                        <ul class="nav nav-tabs tab-no-active-fill" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active pl-2 pr-2" id="revenue-for-last-month-tab" data-toggle="tab" href="#revenue-for-last-month" role="tab" aria-controls="revenue-for-last-month" aria-selected="true">Revenue for last month</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link pl-2 pr-2" id="server-loading-tab" data-toggle="tab" href="#server-loading" role="tab" aria-controls="server-loading" aria-selected="false">Server loading</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link pl-2 pr-2" id="data-managed-tab" data-toggle="tab" href="#data-managed" role="tab" aria-controls="data-managed" aria-selected="false">Data managed</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link pl-2 pr-2" id="sales-by-traffic-tab" data-toggle="tab" href="#sales-by-traffic" role="tab" aria-controls="sales-by-traffic" aria-selected="false">Sales by traffic</a>
                          </li>
                        </ul>
                        <div class="tab-content tab-no-active-fill-tab-content">
                          <div class="tab-pane fade show active" id="revenue-for-last-month" role="tabpanel" aria-labelledby="revenue-for-last-month-tab">
                            <div class="d-lg-flex justify-content-between">
                              <p class="mb-4">+5.2% increase in last 7 days</p>
                              <div id="revenuechart-legend" class="revenuechart-legend">f</div>
                            </div>
                            <canvas id="revenue-for-last-month-chart"></canvas>
                          </div>
                          <div class="tab-pane fade" id="server-loading" role="tabpanel" aria-labelledby="server-loading-tab">
                            <div class="d-flex justify-content-between">
                              <p class="mb-4">+5.2% increase in last 7 days</p>
                              <div id="serveLoading-legend" class="revenuechart-legend">f</div>
                            </div>
                            <canvas id="serveLoading"></canvas>
                          </div>
                          <div class="tab-pane fade" id="data-managed" role="tabpanel" aria-labelledby="data-managed-tab">
                            <div class="d-flex justify-content-between">
                              <p class="mb-4">+5.2% increase in last 7 days</p>
                              <div id="dataManaged-legend" class="revenuechart-legend">f</div>
                            </div>
                            <canvas id="dataManaged"></canvas>
                          </div>
                          <div class="tab-pane fade" id="sales-by-traffic" role="tabpanel" aria-labelledby="sales-by-traffic-tab">
                            <div class="d-flex justify-content-between">
                              <p class="mb-4">+5.2% increase in last 7 days</p>
                              <div id="salesTrafic-legend" class="revenuechart-legend">f</div>
                            </div>
                            <canvas id="salesTrafic"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 flex-column d-flex stretch-card">
              <div class="row flex-grow">
                <div class="col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-8">
                          <h3 class="font-weight-bold text-dark">Canada,Ontario</h3>
                          <p class="text-dark">Monday 3.00 PM</p>
                          <div class="d-lg-flex align-items-baseline mb-3">
                            <h1 class="text-dark font-weight-bold">23<sup class="font-weight-light"><small>o</small><small class="font-weight-medium">c</small></sup></h1>
                            <p class="text-muted ml-3">Partly cloudy</p>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="position-relative">
                            <img src="../../images/congratz/live.png" class="w-100" alt="">
                            <div class="live-info badge badge-success">Live</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 mt-4 mt-lg-0">
                          <div class="bg-primary text-white px-4 py-4 card mt-3 mt-xl-0">
                            <div class="row">
                              <div class="col-sm-6 pl-lg-5">
                                <h2>$1635</h2>
                                <p class="mb-0">Your Iincome</p>
                              </div>
                              <div class="col-sm-6 climate-info-border mt-lg-0 mt-2">
                                <h2>$2650</h2>
                                <p class="mb-0">Your Spending</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row pt-3 mt-md-1">
                        <div class="col">
                          <div class="d-flex purchase-detail-legend align-items-center">
                            <div id="circleProgress1" class="p-2 pl-0"></div>
                            <div>
                              <p class="font-weight-medium text-dark text-small">Sessions</p>
                              <h3 class="font-weight-bold text-dark  mb-0">26.80%</h3>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="d-flex purchase-detail-legend align-items-center">
                            <div id="circleProgress2" class="p-2 pl-0"></div>
                            <div>
                              <p class="font-weight-medium text-dark text-small">Users</p>
                              <h3 class="font-weight-bold text-dark  mb-0">56.80%</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Visits Today</h4>
                            <div class="dropdown">
                              <a href="#" class="text-success btn btn-link px-1 py-0 mb-4"><i class="mdi mdi-refresh"></i></a>
                              <a href="#" class="text-success btn btn-link px-1 py-0 mb-4 dropdown-toggle dropdown-arrow-none" data-toggle="dropdown" id="profileDropdownvisittoday"><i class="mdi mdi-dots-horizontal"></i></a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdownvisittoday">
                                <a class="dropdown-item">
                                  <i class="mdi mdi-grease-pencil text-primary"></i>
                                  Edit
                                </a>
                                <a class="dropdown-item">
                                  <i class="mdi mdi-delete text-primary"></i>
                                  Delete
                                </a>
                              </div>
                            </div>
                          </div>
                          <p class="mt-1">Calculated in last 30 days</p>
                          <div class="d-lg-flex align-items-center justify-content-between">
                            <h1 class="font-weight-bold text-dark">4332</h1>
                            <div class="mb-3">
                              <button type="button" class="btn btn-outline-light text-dark font-weight-normal">Day</button>
                              <button type="button" class="btn btn-outline-light text-dark font-weight-normal">Month</button>
                            </div>
                          </div>
                          <canvas id="visitorsToday"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-success font-weight-bold">18390</h2>
                    <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
                  </div>
                </div>
                <canvas id="newClient"></canvas>
                <div class="line-chart-row-title">MY NEW CLIENTS</div>
              </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-danger font-weight-bold">839</h2>
                    <i class="mdi mdi-refresh mdi-18px text-dark"></i>
                  </div>
                </div>
                <canvas id="allProducts"></canvas>
                <div class="line-chart-row-title">All Products</div>
              </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-info font-weight-bold">244</h2>
                    <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
                  </div>
                </div>
                <canvas id="invoices"></canvas>
                <div class="line-chart-row-title">NEW INVOICES</div>
              </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-warning font-weight-bold">3259</h2>
                    <i class="mdi mdi-folder-outline mdi-18px text-dark"></i>
                  </div>
                </div>
                <canvas id="projects"></canvas>
                <div class="line-chart-row-title">All PROJECTS</div>
              </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-secondary font-weight-bold">586</h2>
                    <i class="mdi mdi-cart-outline mdi-18px text-dark"></i>
                  </div>
                </div>
                <canvas id="orderRecieved"></canvas>
                <div class="line-chart-row-title">Orders Received</div>
              </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-dark font-weight-bold">7826</h2>
                    <i class="mdi mdi-cash text-dark mdi-18px"></i>
                  </div>
                </div>
                <canvas id="transactions"></canvas>
                <div class="line-chart-row-title">TRANSACTIONS</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Support Tracker</h4>
                    <h4 class="text-success font-weight-bold mb-4">Tickets<span class="text-dark ml-3">163</span></h4>
                  </div>
                  <div id="support-tracker-legend" class="support-tracker-legend"></div>
                  <canvas id="supportTracker"></canvas>
                </div>
              </div>
            </div>
            <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-lg-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Product Orders</h4>
                    <p class="text-dark mb-4">+5.2% increase in last 7 days</p>
                  </div>
                  <div class="product-order-wrap padding-reduced">
                    <div id="productorder-gage-horizontal" class="gauge productorder-gage"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

<script>
/** Display Checkin Datepicker and Checkout DatePicker */


$(document).ready(function(){
     var url= window.location.href;
     var id = url.substring(url.lastIndexOf('/') + 1);
     if(id=='login'){
      window.location = "http://localhost:8080/hs-new/public/index";
     }
});


</script>
@stop
