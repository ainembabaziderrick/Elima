@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Guides</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-24">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">
                    <a href="{{ url('admin/portfolio/add')}}" class="btn btn-primary">Add New Portfolio</a>
                     </h5> -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Guide Names</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Client Location</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Brief Message</th>
                               
                                <th scope="col">Created At</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($getRecord as $value)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->climber_name}}</td>
                                    <td>{{$value->client_name}}</td>
                                    <td>{{$value->client_location}}</td>
                                   
                                    <td>{{$value->duration}}</td>
                                    <td>{{$value->message}}</td>
                                   
                                    <td>{{ date('d-m-Y H:i:s', strtotime($value->created_at))}}</td>

                                   

                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection