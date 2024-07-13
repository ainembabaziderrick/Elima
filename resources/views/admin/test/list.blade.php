@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Tests</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-24">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">
                    <a href="{{ url('admin/crimes/add')}}" class="btn btn-primary">Add New Crime</a>
                     </h5> -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Full Names</th>
                                <th scope="col">Age</th>
                                <th scope="col">Contact</th>
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

                                    <td>{{ date('d-m-Y H:i:s', strtotime($value->created_at))}}</td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/tests/mark/' . $value->id)}}"
                                                class="btn btn-sm btn-primary">Mark</a>
                                            <a href="{{url('admin/tests/delete/' . $value->id)}}"
                                                class="btn btn-sm btn-danger">Delete</a>
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