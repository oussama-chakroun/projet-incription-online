<x-app-layout>

    <div class="container-fluid mt-5">
        <a href="{{ url('roles') }}" class="btn btn-primary mx-1">{{__('messages.roles')}}</a>
        <a href="{{ url('permissions') }}" class="btn btn-info mx-1">{{__('messages.permissions')}}</a>
        <a href="{{ url('users') }}" class="btn btn-warning mx-1">{{__('messages.users')}}</a>
    </div>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>{{__('messages.permissions')}}
                            @can('create permission')
                            <a href="{{ url('permissions/create') }}" class="btn btn-primary float-end">{{__('messages.add_permission')}}</a>
                            @endcan
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th width="40%">{{__('messages.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->id }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        
                                        @if (in_array($permission->name, ['update role','delete user','update user','update permission', 'delete permission', 'view role', 'create role', 'delete role', 'view permission', 'create permission','view user','create user']))
                                            {{__('messages.not_allow')}}
                                        @else
                                            @can('update permission')
                                            <a href="{{ url('permissions/'.$permission->id.'/edit') }}" class="btn btn-success">{{__('messages.edit')}}</a>
                                            @endcan

                                            @can('delete permission')
                                            <a href="{{ url('permissions/'.$permission->id.'/delete') }}" class="btn btn-danger mx-2">{{__('messages.delete')}}</a>
                                            @endcan
                                        
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>