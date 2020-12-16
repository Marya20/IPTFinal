@extends('base')

@section('content')
@include('info')

<div class="float-right">
    <a href="{{url('/courses/create')}}" class="btn btn-primary">
    &#10133;  New 
    </a>
</div>
<h1 style="text-align:center;">Learners</h1><br>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Status</th>
        <th class="text-center"></th>
    </thead>
    <tbody>
        @foreach($learners as $ln)

        <tr>
            <td>{{$ln->id}}</td>
            <td>{{$ln->user->lname}}</td>
            <td>{{$ln->user->fname}}</td>
            <td>{{$ln->status}}</td>
            <td class="text-center">
                <a href="{{url('/learners/' . $ln->id)}}" class="btn btn-info btn-sm">&#x270E;</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
