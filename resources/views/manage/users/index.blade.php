@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i>Create User</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <table class="table is-striped is-fullwidth is-hoverable is-narrow">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->toFormattedDateString('Y-m-d')}}</td>
                                <td><a href="{{route('users.edit',$user->id)}}" class="button is-outlined">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$users->links()}}
    </div>
@endsection
