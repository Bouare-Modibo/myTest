@extends('layouts.template')
@section('content')

	<div class="content-wrapper">
	
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome to EITSEC Ghana Dashboard</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! <span class="text-primary"> </span></h6>
                  
                  @if(Session::has('message'))
                    <br/><h6 class="font-weight-normal mb-0"><span class="text-primary"> 
                            {{Session::get('message')}}
                    </span></h6>
                    @endif

                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  
                    <button class="btn btn-sm btn-light bg-white" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (DD MM YYYY)
                    </button>
                   
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            
            <div class="col-md-10 grid-margin transparent justify-center">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Users</p>
                      <p class="fs-30 mb-2">##</p>
                      <p>##</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Invoives Sent</p>
                      <p class="fs-30 mb-2">##</p>
                      <p>##</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Today’s Registration</p>
                      <p class="fs-30 mb-2">##</p>
                      <p>##</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of Clients</p>
                      <p class="fs-30 mb-2">##</p>
                      <p>##</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>	
          </div>          
    </div>

@endsection 