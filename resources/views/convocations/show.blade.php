<!-- resources/views/convocations/show.blade.php -->
<x-app-layout>
    <div class="container py-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Convocation Details</h5>
                <div>
                    <a href="{{ route('convocations.edit', $convocation) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('convocations.destroy', $convocation) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this convocation?')">Delete</button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Title:</div>
                    <div class="col-md-9">{{ $convocation->title }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Date:</div>
                    <div class="col-md-9">{{ $convocation->convocation_date->format('F d, Y') }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Time:</div>
                    <div class="col-md-9">
                        {{ $convocation->start_time }}
                        @if($convocation->end_time)
                            - {{ $convocation->end_time }}
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Location:</div>
                    <div class="col-md-9">{{ $convocation->location }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Description:</div>
                    <div class="col-md-9">{{ $convocation->description ?? 'No description provided' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Status:</div>
                    <div class="col-md-9">
                        @if($convocation->status)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    </div>
                </div>

                <div class="text-start">
                    <a href="{{ route('convocations.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
