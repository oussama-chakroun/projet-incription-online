<!-- resources/views/convocations/index.blade.php -->
<x-app-layout>
    <div class="container py-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Convocations</h5>
                <a href="{{ route('convocations.create') }}" class="btn btn-primary">Create New</a>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($convocations as $convocation)
                                <tr>
                                    <td>{{ $convocation->title }}</td>
                                    <td>{{ $convocation->convocation_date }}</td>
                                    <td>{{ $convocation->start_time }} - {{ $convocation->end_time ?? 'N/A' }}</td>
                                    <td>{{ $convocation->location }}</td>
                                    <td>
                                        @if($convocation->status === 1)
                                            <span class="badge bg-success">Active</span>
                                        @elseif($convocation->status === 0)
                                            <span class="badge bg-danger">Inactive</span>
                                        @else
                                            <span class="badge bg-secondary">Not Set</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('convocations.show', $convocation) }}" class="btn btn-sm btn-warning">Show</a>
                                        <a href="{{ route('convocations.edit', $convocation) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('convocations.destroy', $convocation) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
