@extends('layouts.default')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Subjects Dashboard</h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Links Innovatoin Co., Ltd
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:40px;">#</th>
                                <th>Subject</th>
                                <th>Type</th>
                                <th style="width:100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                	<a href="#">Edit</a> || 
                                	<a href="#">Delete</a> 
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                	<a href="#">Edit</a> || 
                                	<a href="#">Delete</a> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            
        </div>
    </div>
</div>

@stop