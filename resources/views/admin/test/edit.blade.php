@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Mark Tests</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tests</h5>

                    <form action=" {{ url('admin/tests/update/' . $tests->id)}}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">What are your full names? <span style="color: red;">
                                    *</span>
                            </label><br>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required value="{{ $tests->name}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">What is your age ? <span style="color: red;">
                                    *</span>
                            </label><br>
                            <div class="col-sm-10">
                                <input type="text" name="age" class="form-control" required value="{{ $tests->age}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">What are your contacts? <span style="color: red;">
                                    *</span>
                            </label><br>
                            <div class="col-sm-10">
                                <input type="text" name="contact" class="form-control" required
                                    value="{{ $tests->contact}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">What inspired you to become a climber guide? <span
                                    style="color: red;"> *</span>
                            </label><br>
                            <div class="col-sm-10">
                                <input type="text" name="inspiration" class="form-control" required
                                    value="{{ $tests->inspiration}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">What's your most memorable climb and why? <span
                                    style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="memories" class="form-control" required
                                    value="{{ $tests->memories}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">What key skills are essential for a climbing
                                guide?<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="skills" class="form-control" value="{{ $tests->skills}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">How do you prepare for a climb physically and
                                mentally ? <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="preparations" class="form-control" required
                                    value="{{ $tests->preparations}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Share an experience where you made a tough decision
                                for safety. <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="experience" class="form-control" required
                                    value="{{ $tests->experience}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">What common mistakes do climbers make, and how do you
                                help them? <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="mistakes" class="form-control" required
                                    value="{{ $tests->mistakes}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">How do you handle varying skill levels among
                                climbers? <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="handle" class="form-control" required
                                    value="{{ $tests->handle}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Describe a challenging climb and how you overcame
                                obstacles. <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="challenge" class="form-control" required
                                    value="{{ $tests->challenge}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">What do you do to ensure environmental sustainability
                                while climbing? <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="environmental" class="form-control" required
                                    value="{{ $tests->environmental}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">How has climbing changed over the years, and what
                                trends do you see? <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="changes" class="form-control" required
                                    value="{{ $tests->changes}}">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Passed</button>
                                <a href="{{url('admin/tests/fail/' . $tests->id)}}"
                                                class="btn btn-danger">Failed</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>






@endsection