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
                        <h4>{{__('messages.users')}}
                            @can('create user')
                            <a href="{{ url('users/create') }}" class="btn btn-primary float-end">{{__('messages.add_user')}}</a>
                            @endcan
                        </h4>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="exportexample">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('messages.name')}}</th>
                                    <th>{{__('messages.email')}}</th>
                                    <th>{{__('messages.roles')}}</th>
                                    <th>{{__('messages.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $rolename)
                                                <label class="badge bg-primary text-white mx-1">{{ $rolename }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->hasRole('super-admin'))
                                        {{__('messages.not_allow')}}
                                        @else
                                            @can('update user')
                                            <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-success">{{__('messages.edit')}}</a>
                                            @endcan

                                            @can('delete user')
                                            <a href="{{ url('users/'.$user->id.'/delete') }}" class="btn btn-danger mx-2">{{__('messages.delete')}}</a>
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
    </div>

</x-app-layout>