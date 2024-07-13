@extends('clients.layouts.app')


@section('content')
 <div class="pagetitle">
    <h1>Connect Guide</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Portfolio</h5>

                    <form action=" {{ url('client/portfolio/update/'.$cases->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <input type="hidden" name="old_image" value="{{ $cases->image}}">

                       
                                               
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Names<span style="color: red;"> *</span>
                            </label><br>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required value="{{ $cases->name}}">
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Contact <span style="color: red;"> *</span>
                            </label><br>
                            <div class="col-sm-10">
                                <input type="text" name="contact" class="form-control" required value="{{ $cases->contact}}">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Climber Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="client_name" class="form-control" required value="{{ $cases->client_name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Climber Age
                                <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="client_age" class="form-control" value="{{ $cases->client_age}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Climber Contact
                                <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="client_contact" class="form-control" value="{{ $cases->client_contact}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Climber Location
                                <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="client_location" class="form-control" required value="{{ $cases->client_location}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Duration
                                <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="duration" class="form-control" required value="{{ $cases->duration}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Expectations
                                <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="message" class="form-control" required value="{{ $cases->message}}">
                            </div>
                        </div>
                      
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label"> 
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Connect</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>






 @endsection