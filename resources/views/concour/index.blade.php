<x-app-layout>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>{{ __('concours') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="exportexample">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('messages.full_name') }}</th>
                                        <th>{{ __('messages.email') }}</th>
                                        <th>{{ __('messages.choix') }}</th>
                                        <th>{{ __('messages.status') }}</th>
                                        <th>{{ __('messages.file') }}</th>
                                        <th>{{ __('messages.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->user->email }}</td>
                                            <td>{{ $item->choix }}</td>
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
                                            <td style="max-width: 40px; overflow-x: auto; white-space: nowrap;">
                                                <div style="display: inline-block;">
                                                    @if (isset($item->file) && !empty($item->file))
                                                        @php
                                                            $files = explode(',', $item->file);
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
                                                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal{{ $item->id }}">
                                                        <i class="" data-toggle="tooltip" title="" data-original-title="{{ __('messages.validate') }}"></i>
                                                        send Convocation
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal" id="modal{{ $item->id }}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content modal-content-demo">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title">Select Convocation</h6>
                                                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{ route('concour.validateConcour', $item) }}" method="POST">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="convocation{{ $item->id }}">Choose Convocation:</label>
                                                                            <select class="form-control" id="convocation{{ $item->id }}" name="convocation_id" required>
                                                                                <option value="">Select a convocation</option>
                                                                                @foreach($convocations as $convocation)
                                                                                    <option value="{{ $convocation->id }}">{{ $convocation->title }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn ripple btn-primary" type="submit">Send Convocation</button>
                                                                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="{{ route('concour.rejectConcour', $item) }}" class="btn btn-sm btn-danger">
                                                        <i class="" data-toggle="tooltip" title="" data-original-title="{{ __('messages.reject') }}"></i>reject
                                                    </a>
                                                @endrole

                                                @role('super-admin')
                                                    <a href="{{ route('concour.delete' , $item) }}" class="btn btn-sm btn-danger mx-2">{{ __('messages.delete') }}</a>
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
