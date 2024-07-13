@extends('admin.layouts.app')


@section('content')
 <div class="pagetitle">
    <h1>Edit Portfolio</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Portfolio</h5>

                    <form action=" {{ url('admin/portfolio/update/'.$cases->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <input type="hidden" name="old_image" value="{{ $cases->image}}">
                                               
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Full Names<span style="color: red;"> *</span>
                            </label><br>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required value="{{ $cases->name}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Age <span style="color: red;"> *</span>
                            </label><br>
                            <div class="col-sm-10">
                                <input type="text" name="age" class="form-control" required value="{{ $cases->age}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Contact <span style="color: red;"> *</span>
                            </label><br>
                            <div class="col-sm-10">
                                <input type="text" name="contact" class="form-control" required value="{{ $cases->contact}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Image <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control"  value="{{ $cases->image}}">
                            </div>
                        </div>
                        <div  class="form-group">
                            <img src="{{ asset($cases->image)}}" style="width: 400px; Height: 200px;" alt="">

                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Experience <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="experience" class="form-control" required value="{{ $cases->experience}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Location
                                <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="location" class="form-control" value="{{ $cases->location}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Brief Description
                                <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="about" class="form-control" required value="{{ $cases->about}}">
                            </div>
                        </div>
                      
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label"> 
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>






 @endsection