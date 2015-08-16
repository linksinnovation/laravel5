@extends('layouts.default')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Add New Subject</h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Links Innovatoin Co., Ltd
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">

                    	<h3>Links Innovation Co., Ltd</h3>
                        <form role="form">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" value="" placeholder="Enter something">
                            </div>

                            <div class="form-group">
                                <label>Type</label>
                                <input class="form-control" value=""  placeholder="Enter something">
                            </div>

                            <div class="form-group">
                                <label>Text area</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>

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