@extends('layouts.template')
@section('content')

    <div class="content-wrapper">
        <div class="row justify-content-center">

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form to send invoice </h4>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif

                  <form action="{{route('send_invoice')}}" method="post"  class="forms-sample" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name Of Client</label>
                        <input type="text" name="nameclient" value="{{old('nameclient')}}" class="form-control" placeholder="Client's name" >
                        
                        @if($errors->has('nameclient'))
                            <span class="text-danger">{{$errors->first('nameclient')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Contact</label>
                        <input type="number" name="contactclient" value="{{old('contactclient')}}" class="form-control" placeholder="Number">
                        
                        @if($errors->has('contactclient'))
                            <span class="text-danger">{{$errors->first('contactclient')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="emailclient" value="{{old('emailclient')}}" class="form-control" placeholder="Client's email">
                        @if($errors->has('emailclient'))
                            <span class="text-danger">{{$errors->first('emailclient')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                      <label>Upload Invoice</label>
                      <input type="file" name="invoice"  class="form-control" >
                        @if($errors->has('invoice'))
                            <span class="text-danger">{{$errors->first('invoice')}}</span>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Send</button>
                  </form>
                </div>
              </div>
            </div>

        </div>
    </div>    

@endsection 