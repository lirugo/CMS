@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        {!! Form::open(['route' => 'permissions.store', 'method' => 'POST']) !!}

        <div class="columns">
            <div class="column">
                <h1 class="title">Create New Permission</h1>
            </div>
        </div>

        <div class="columns">
            <div class="column is-one-fifth">
                <b-radio v-model="permissionType" name="permission_type" native-value="basic">Basic Permission</b-radio>
            </div>
            <div class="column is-one-fifth">
                <b-radio v-model="permissionType" name="permission_type" native-value="crud">CRUD Permission</b-radio>
            </div>
        </div>

        <div class="columns">
            <div class="column is-one-third">
                <div class="control has-icons-left has-icons-right m-b-10" v-if="permissionType == 'basic'">
                    {!! Form::text('name', null, ['class' => 'input' . ($errors->has('name') ? ' is-danger' : ''), 'placeholder' => 'Name (Display Name)', 'required']) !!}
                    <span class="icon is-small is-left"><i class="fa fa-lock"></i></span>
                    @if($errors->has('name'))
                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="control has-icons-left has-icons-right m-b-10" v-if="permissionType == 'basic'">
                    {!! Form::text('display_name', null, ['class' => 'input' . ($errors->has('display_name') ? ' is-danger' : ''), 'placeholder' => 'Enter display_name', 'required']) !!}
                    <span class="icon is-small is-left"><i class="fa fa-terminal"></i></span>
                    @if($errors->has('display_name'))
                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                        <p class="help is-danger">{{$errors->first('display_name')}}</p>
                    @endif
                </div>
                <div class="control has-icons-left has-icons-right m-b-10" v-if="permissionType == 'basic'">
                    {!! Form::text('description', null, ['class' => 'input' . ($errors->has('description') ? ' is-danger' : ''), 'placeholder' => 'Enter description', 'required']) !!}
                    <span class="icon is-small is-left"><i class="fa fa-align-justify"></i></span>
                    @if($errors->has('description'))
                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                        <p class="help is-danger">{{$errors->first('description')}}</p>
                    @endif
                </div>


                <div class="control has-icons-left has-icons-right m-b-20" v-if="permissionType == 'crud'">
                    {!! Form::text('resource', null, ['class' => 'input' . ($errors->has('resource') ? ' is-danger' : ''), 'v-model' => 'resource', 'placeholder' => 'Enter Resource Name', 'required']) !!}
                    <span class="icon is-small is-left"><i class="fa fa-database"></i></span>
                    @if($errors->has('resource'))
                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                        <p class="help is-danger">{{$errors->first('resource')}}</p>
                    @endif
                </div>
                <div class="columns" v-if="permissionType == 'crud'">
                    <div class="column is-half">
                        <div class="field">
                            <b-checkbox v-model="crudSelected" native-value="create">Create</b-checkbox>
                        </div>
                        <div class="field">
                            <b-checkbox v-model="crudSelected" native-value="read">Read</b-checkbox>
                        </div>
                        <div class="field">
                            <b-checkbox v-model="crudSelected" native-value="update">Update</b-checkbox>
                        </div>
                        <div class="field">
                            <b-checkbox v-model="crudSelected" native-value="delete">Delete</b-checkbox>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column" v-if="permissionType == 'crud'">
                {!! Form::hidden('crud_selected', null, [':value' => 'crudSelected']) !!}
                <table class="table is-narrow is-fullwidth" v-if="resource.length >= 3 && crudSelected.length > 0">
                    <thead>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    </thead>
                    <tbody>
                    <tr v-for="item in crudSelected">
                        <td v-text="crudName(item)"></td>
                        <td v-text="crudSlug(item)"></td>
                        <td v-text="crudDescription(item)"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                {!! Form::submit('Create Permission', ['class' => 'button is-success is-outlined']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                permissionType: 'basic',
                resource: '',
                crudSelected: ['create', 'read', 'update', 'delete'],
            },
            methods: {
                crudName: function(item) {
                    return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
                },
                crudSlug: function(item) {
                    return item.toLowerCase() + "-" + app.resource.toLowerCase();
                },
                crudDescription: function(item) {
                    return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
                }
            }
        })
    </script>
@endsection