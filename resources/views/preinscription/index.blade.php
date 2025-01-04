<x-app-layout>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>{{ __('messages.preinscriptions') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="exportexample">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('messages.first_name') }}</th>
                                        <th>{{ __('messages.last_name') }}</th>
                                        <th>{{ __('messages.email') }}</th>
                                        <th>{{ __('messages.birthday') }}</th>
                                        <th>{{ __('messages.status') }}</th>
                                        <th>{{ __('messages.file') }}</th>
                                        <th>{{ __('messages.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->prenom }}</td>
                                            <td>{{ $item->nom }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->date_naissance }}</td>
                                            <td>
                                                @if (isset($item->status))
                                                    @if ($item->status == 1)
                                                        <label
                                                            class="badge bg-success text-white mx-1">Confirmed</label>
                                                    @else
                                                        <label class="badge bg-danger text-white mx-1">Rejected</label>
                                                    @endif
                                                @else
                                                    <label class="badge bg-warning text-white mx-1">Not Yet</label>
                                                @endif
                                            </td>
                                            <td style="max-width: 40px; overflow-x: auto; white-space: nowrap;">
                                                <div style="display: inline-block;">
                                                    @if (isset($item->file) && !empty($item->file))
                                                        @php
                                                            $files = explode(',', $item->file); // Split the file paths by comma
                                                        @endphp
                                                        @foreach ($files as $index => $file)
                                                            <a href="{{ Storage::url(trim($file)) }}" target="_blank" class="btn btn-sm btn-primary" style="margin-right: 5px;">
                                                                {{ $index+1 }}
                                                            </a>
                                                        @endforeach
                                                    @else
                                                        No document
                                                    @endif
                                                </div>
                                            </td>
                                            <td>

                                                @role('super-admin|admin')
                                                    <a href="{{ route('pre_inscription.validateCondidature', $item) }}"
                                                        class="btn btn-sm btn-success"><i class=""
                                                            data-toggle="tooltip" title=""
                                                            data-original-title="{{ __('messages.validate') }}"></i>validate</a>

                                                    <a href="{{ route('pre_inscription.rejectCondidature', $item) }}"
                                                        class="btn btn-sm btn-danger"><i class=""
                                                            data-toggle="tooltip" title=""
                                                            data-original-title="{{ __('messages.reject') }}"></i>reject</a>
                                                @endrole

                                                @role('super-admin')
                                                    <a href="{{ route('pre_inscription.delete' , $item) }}"
                                                        class="btn btn-sm btn-danger mx-2">{{ __('messages.delete') }}</a>
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
