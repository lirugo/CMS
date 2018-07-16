@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">View User Details</h1>
            </div> <!-- end of column -->

            <div class="column">
                <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit User</a>
            </div>
        </div>
        <div class="columns">
            <div class="column is-one-third">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">{{$user->name}}</p>
                                <p class="subtitle is-6">{{$user->email}}</p>
                                <div class="field">
                                    <label class="label">Roles</label>
                                    <ul>
                                        @forelse ($user->roles as $role)
                                            <li>{{$role->display_name}} - ({{$role->description}})</li>
                                        @empty
                                            <p>This user has not been assigned any roles yet</p>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection