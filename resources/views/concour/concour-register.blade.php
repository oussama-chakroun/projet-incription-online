<x-app-layout>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
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
        <div class="col-lg-8 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Concour</h6>
                        <p class="text-muted card-sub-title">Veuillez entrer les informations necessaires.</p>
                    </div>
                    <form method="POST" action="{{ route('concour.store') }}" data-parsley-validate="" enctype="multipart/form-data">
                        @csrf


                        <!-- File Upload -->
                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                            <p class="mg-b-10">Choix</p>
                            <select class="form-control select2" name="choix">
                                <option label="Choose one">
                                </option>
                                <option value="Génie Informatique">
                                    Génie Informatique
                                </option>
                                <option value="Cycle Préparatoire Scientifique">
                                    Cycle Préparatoire Scientifique
                                </option>
                                <option value="Génie des Systémes Embarqués">
                                    Génie des Systémes Embarqués
                                </option>
                                <option value="Transformation Digitale">
                                    Transformation Digitale
                                </option>
                                <option value="Génie Civil">
                                    Génie Civil
                                </option>
                            </select>
                        </div><!

                        <!-- File Upload -->
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">File Upload</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="file" class="form-control" name="file[]" accept=".jpg, .png, .jpeg, .pdf" required multiple>
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


</x-app-layout>
