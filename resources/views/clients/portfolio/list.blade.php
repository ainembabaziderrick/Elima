@extends('clients.layouts.app')

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
                                <th scope="col">Full Names</th>
                                <th scope="col">Age</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Image</th>
                                <th scope="col">Experience</th>
                                <th scope="col">Location</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($getRecord as $value)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->age}}</td>
                                    <td>{{$value->contact}}</td>
                                    <td> <img src="{{ asset($value->image)}}" style="height: 40px; width: 70px;" alt="">
                                    </td>
                                    <td>{{$value->experience}}</td>
                                    <td>{{$value->location}}</td>
                                   
                                    <td>{{ date('d-m-Y H:i:s', strtotime($value->created_at))}}</td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('clients/guides/add')}}"
                                                class="btn btn-sm btn-primary">Connect</a>
                                            
                                        </div>
                                    </td>

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