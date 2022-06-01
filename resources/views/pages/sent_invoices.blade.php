@extends('layouts.template')
@section('content')

    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Sent Invoices</h3>
                        <p class="card-description">
                            All previously sent invoices <code>!!!</code>
                        </p>
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Client Number</th>
                                        <th>Client email</th>
                                        <th>Sent Invoice</th>
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    @forelse($sentInvoices as $si)
                                        <tr>
                                            <td>{!! $si->client_name !!} </td>
                                            <td>{!! $si->client_number !!}</td>
                                            <td><label class="badge badge-info">{!! $si->client_email !!}</label></td>
                                            <td><a href="storage/{{ $si->client_invoicepath }}"><button class="btn btn-success btn-sm">Invoice (click to view invoice)</button></a></td>
                                            
                                        </tr>
                                    @empty
                                        <td>Any sent invoice</td>
                                    @endforelse 
                                </tbody>

                            </table>
                        </div>
                    </div>
                    {{$sentInvoices->links()}}
                </div>
            </div>
        </div>
    </div>    

@endsection 