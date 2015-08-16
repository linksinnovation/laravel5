@extends('layouts.default')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">{{ $title }}</h3>
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
                                <th>
                                    Subject
                                </th>
                                <th>Type</th>
                                <th>Vote</th>
                                <th style="width:100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->count() > 0)
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                         <a href="{{ URL::to('section/dashboard/'.$item->id) }}">
                                        {{ $item->title }}
                                        </a>
                                    </td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->vote }}</td>
                                    <td>
                                    	<a href="{{ URL::to('subject/edit/'.$item->id) }}">Edit</a> || 
                                    	<a href="{{ URL::to('subject/delete/'.$item->id) }}">Edit</a> 
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            
        </div>
    </div>
</div>

@stop