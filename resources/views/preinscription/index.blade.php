<x-app-layout>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>{{__('messages.preinscriptions')}}
                        </h4>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="exportexample">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('messages.photo')}}</th>
                                    <th>{{__('messages.first_name')}}</th>
                                    <th>{{__('messages.last_name')}}</th>
                                    <th>{{__('messages.email')}}</th>
                                    <th>{{__('messages.birthday')}}</th>
                                    <th>{{__('messages.status')}}</th>
                                    <th>{{__('messages.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        @if (isset($item->photo))
                                            <img src="{{ asset('storage\images\users\\') . $item->photo }}" width="40px" height="40px" alt="">
                                        @else
                                            <img src="{{ asset('storage\images\users\default-avatar.jpg') }}" width="40px" height="40px" alt="">
                                        @endif
                                    <td>{{ $item->prenom }}</td>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->date_naissance }}</td>
                                    <td>
                                        @if (isset($item->status))
                                            @if ($item->status == 1)
                                                <label class="badge bg-success text-white mx-1">Confirmed</label>
                                            @else
                                            <label class="badge bg-danger text-white mx-1">Rejected</label>
                                            @endif
                                        @else
                                            <label class="badge bg-warning text-white mx-1">Not Yet</label>
                                        @endif
                                    </td>
                                    <td>
                                        @role('super-admin|admin')
                                        <a href="{{ url('items/'.$item->id.'/edit') }}" class="btn btn-sm btn-success"><i class="zmdi zmdi-eyedropper" data-toggle="tooltip" title="" data-original-title="{{__('messages.edit')}}"></i></a>
                                        @endrole

                                        @role('super-admin')
                                        <a href="{{ url('items/'.$item->id.'/delete') }}" class="btn btn-sm btn-danger mx-2">{{__('messages.delete')}}</a>
                                        @endrole
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
