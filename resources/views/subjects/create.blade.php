@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Your Title</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

        	@if($errors->has())
        		<div class="alert alert-danger">
        			@foreach ($errors->all() as $error)
        				{{ $error }} <br />
        			@endforeach
        		</div>
        	@endif

            <div class="panel-heading">
                Create New Subjects
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">

                        <h3>Links Innovation Co., Ltd</h3>
                        <form role="form" name="form-subject" action="{{ URL::to('/subject/store') }}" method="POST">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" value="" placeholder="Enter something">
                            </div>

                            <div class="form-group">
                                <label>Type</label>
                                <input class="form-control" name="type" value=""  placeholder="Enter something">
                            </div>

                            <div class="form-group">
                                <label>Vote</label>
                                <input class="form-control" name="vote" value=""  placeholder="Enter something">
                            </div>

                            <div class="form-group">
                                <label>Desctiption</label>
                                <textarea class="form-control" name="description" rows="5"></textarea>
                            </div>

                            <input type="hidden" name="_token" value="{{ Session::token() }}" />

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop