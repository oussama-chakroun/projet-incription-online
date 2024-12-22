<x-guest-layout>

        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-lg-6 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h6 class="main-content-label mb-1">Preinscription</h6>
                            <p class="text-muted card-sub-title">Veuillez entrer vos informations</p>
                        </div>
                        <div class="">
                            <!-- Firstname -->
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">Firstname</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="Enter your firstname" type="text">
                                </div>
                            </div>

                            <!-- Lastname -->
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">Lastname</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="Enter your lastname" type="text">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">Email</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="Enter your email" type="email">
                                </div>
                            </div>

                            <!-- Date of Birth -->
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">Date of Birth</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" type="date">
                                </div>
                            </div>

                            <!-- File Upload -->
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">File Upload</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input id="demo" type="file" class="form-control" accept=".jpg, .png, .jpeg, .zip, .css, .js" />
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="form-group row justify-content-end mb-0">
                                <div class="col-md-8 pl-md-2">
                                    <button class="btn ripple btn-primary pd-x-30 mg-r-5">Register</button>
                                    <button class="btn ripple btn-secondary pd-x-30">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</x-guest-layout>
