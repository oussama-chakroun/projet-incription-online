<x-app-layout>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1">Concour</h6>
                                        <p class="text-muted card-sub-title">Veuillez entrer les informations nécessaires.</p>
                                    </div>
                                    <form method="POST" action="{{ route('concour.store') }}" data-parsley-validate enctype="multipart/form-data">
                                        @csrf

                                        <!-- File Upload -->
                                        <div class="form-group">
                                            <label for="choix" class="form-label">Choix</label>
                                            <select class="form-control select2" name="choix" id="choix" required>
                                                <option value="" disabled selected>Choisissez une option</option>
                                                <option value="Génie Informatique">Génie Informatique</option>
                                                <option value="Cycle Préparatoire Scientifique">Cycle Préparatoire Scientifique</option>
                                                <option value="Génie des Systèmes Embarqués">Génie des Systèmes Embarqués</option>
                                                <option value="Transformation Digitale">Transformation Digitale</option>
                                                <option value="Génie Civil">Génie Civil</option>
                                            </select>
                                        </div>

                                        <!-- File Upload -->
                                        <div class="form-group">
                                            <label class="form-label">File Upload</label>
                                            <input type="file" class="form-control" name="file[]" accept=".jpg,.png,.jpeg,.pdf" required multiple>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="form-group row justify-content-end">
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-primary">Register</button>
                                                <button type="reset" class="btn btn-secondary">Reset</button>
                                                <a href="/dashboard" class="btn btn-dark">back</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
