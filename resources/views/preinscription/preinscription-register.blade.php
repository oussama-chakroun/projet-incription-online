<x-guest-layout>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-lg-6 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Preinscription</h6>
                        <p class="text-muted card-sub-title">Veuillez entrer les informations necessaires.</p>
                    </div>
                    <form method="POST" action="{{ route('pre-inscription') }}" data-parsley-validate="" enctype="multipart/form-data">
                        @csrf

                        <!-- Firstname -->
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">Firstname</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" name="nom" placeholder="Enter your firstname" type="text" required>
                            </div>
                        </div>

                        <!-- Lastname -->
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">Lastname</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" name="prenom" placeholder="Enter your lastname" type="text" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">Email</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" name="email" placeholder="Enter your email" type="email" required>
                            </div>
                        </div>

                        <!-- Date of Birth -->
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">Date of Birth</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" name="date_naissance" type="date" required>
                            </div>
                        </div>

                        <!-- File Upload -->
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">File Upload</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="file" class="form-control" name="file" accept=".jpg, .png, .jpeg, .zip, .css, .js" required>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="form-group row justify-content-end mb-0">
                            <div class="col-md-8 pl-md-2">
                                <button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Register</button>
                                <button type="reset" class="btn ripple btn-secondary pd-x-30">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</x-guest-layout>
