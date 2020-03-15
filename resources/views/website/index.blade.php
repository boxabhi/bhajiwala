

@extends('layout')


@section('content')

<div class="container m-5">
    <div class="row">
        <a href="/stock">
        <div class="col-lg-4 m-2">
            <div style="width: 18rem;">
                <div class="card card-stats">
                    <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class=" pt-2 card-title text-uppercase text-muted mb-0">
                            Manage Stock</h5>
                      
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                          <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                </div>
            
                
            </div>
                </div>    
                </div>
        </div>
        </a>

        <a href="/serve">
        <div class="col-lg-4 m-2">
            <div style="width: 18rem;">
                <div class="card card-stats">
                    <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class=" pt-2 card-title text-uppercase text-muted mb-0">
                            Serve restraunt</h5>
                      
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                          <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                </div>    
            </div>
                </div>    
                </div>
        </div>
        </a>

        <a href="/product">
        <div class="col-lg-4 m-2">
            <div style="width: 18rem;">
                <div class="card card-stats">
                    <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class=" pt-2 card-title text-uppercase text-muted mb-0">
                            View Products</h5>
                      
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                          <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                </div>
            
                
            </div>
                </div>    
                </div>
        </div>
        </a>




        <a href="/restraunt">
            <div class="col-lg-4 m-2">
                <div style="width: 18rem;">
                    <div class="card card-stats">
                        <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class=" pt-2 card-title text-uppercase text-muted mb-0">
                                View Restraunt</h5>
                          
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                              <i class="ni ni-chart-pie-35"></i>
                          </div>
                        </div>
                    </div>
                
                    
                </div>
                    </div>    
                    </div>
            </div>
            </a>



            <a href="/generate-bill">
                <div class="col-lg-4 m-2">
                    <div style="width: 18rem;">
                        <div class="card card-stats">
                            <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class=" pt-2 card-title text-uppercase text-muted mb-0">
                                    Billing</h5>
                              
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                  <i class="ni ni-chart-pie-35"></i>
                              </div>
                            </div>
                        </div>
                    
                        
                    </div>
                        </div>    
                        </div>
                </div>
                </a>
    </div>
</div>

@stop