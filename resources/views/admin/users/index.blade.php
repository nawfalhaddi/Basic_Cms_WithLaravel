@extends('layouts.admin')

@section('content')

    @if(Session::has('delete_msg'))
        <div class="alert alert-danger" role="alert">{{session('delete_msg')}}</div>
        @endif
    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo_id?$user->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{$user->name}}<br><a href="{{route('admin.users.edit',$user->id)}}">update</a> </td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active==1?'Active':'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
@endsection