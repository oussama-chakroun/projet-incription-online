<x-app-layout>

    <div class="container-fluid mt-5">
        <a href="{{ url('roles') }}" class="btn btn-primary mx-1">{{__('messages.roles')}}</a>
        <a href="{{ url('permissions') }}" class="btn btn-info mx-1">{{__('messages.permissions')}}</a>
        <a href="{{ url('users') }}" class="btn btn-warning mx-1">{{__('messages.users')}}</a>
    </div>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">

                @if (session('lang'))
                    <div class="alert alert-success">{{ __('messages.lang', ['language' => session('lang')]) }}</div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success">{{ __(session('status')) }}</div>
                @endif

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>
                            {{__('messages.roles')}}
                            @can('create role')
                            <a href="{{ url('roles/create') }}" class="btn btn-primary float-end">{{__('messages.add_role')}}</a>
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
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        

                                        @if ($role->name == "super-admin")
                                            {{__('messages.not_allow')}}
                                        
                                        @else
                                            <a href="{{ url('roles/'.$role->id.'/give-permissions') }}" class="btn btn-warning">
                                                {{__('messages.add_edit_role_permission')}}
                                            </a>

                                            @can('update role')
                                            <a href="{{ url('roles/'.$role->id.'/edit') }}" class="btn btn-success">
                                                {{__('messages.edit')}}
                                            </a>
                                            @endcan

                                            @can('delete role')
                                            <a href="{{ url('roles/'.$role->id.'/delete') }}" class="btn btn-danger mx-2">
                                                {{__('messages.delete')}}
                                            </a>
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