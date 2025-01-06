<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container-fluid mt-2">

        @role('super-admin|admin')
            <div class="row">
                <div class="col-5 p-5">
                    <h3>Bonjour {{ auth()->user()->name }}</h3>

                </div>
            </div>
        @endrole

        @role('bachelier')
            <div class="row ">


                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <div class="card-item-icon card-icon">
                                    <svg class="text-primary" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
                                        <g>
                                            <rect height="14" opacity=".3" width="14" x="5" y="5"></rect>
                                            <g>
                                                <rect fill="none" height="24" width="24"></rect>
                                                <g>
                                                    <path
                                                        d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z">
                                                    </path>
                                                    <rect height="5" width="2" x="7" y="12"></rect>
                                                    <rect height="10" width="2" x="15" y="7"></rect>
                                                    <rect height="3" width="2" x="11" y="14"></rect>
                                                    <rect height="2" width="2" x="11" y="10"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="card-item-title mb-2">
                                    <span class="d-block tx-12 mb-0 text-muted">Bonjour {{ auth()->user()->name }}</span>
                                    <label class="pt-3 main-content-label tx-13 font-weight-bold mb-1">Vous étes admis pour
                                        passer concours</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <div class="card-item-icon card-icon">
                                    <a href="{{ route('concour.create') }}">
                                        <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            width="24" height="24">
                                            <path fill="currentColor" d="M19 13H13v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                        </svg>

                                    </a>
                                </div>
                                <div class="card-item-title mb-2">
                                    <label class="pt-3 main-content-label tx-13 font-weight-bold mb-1">Join to
                                        Concour</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">My Concours</h2>
                </div>
            </div>

            <div class="row">


                @foreach (auth()->user()->concours as $concous)
                    @if (isset($concous->status))
                        @if ($concous->status == 1)
                            <!-- Accepted Card -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-success" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="currentColor"
                                                        d="M9 19.5l-7-7 1.41-1.41L9 16.67l14-14L24 4l-15 15z" />
                                                </svg>
                                            </div>
                                            <div class="card-item-title mb-2">
                                                <label class="pt-3 main-content-label tx-13 font-weight-bold mb-1">Vous êtes
                                                    admis ({{ $concous->choix }})</label>
                                            </div>

                                            @if ($concous->convocation)
                                            <div class="card-item-body mb-2">

                                                <a href="{{ route('download.convocation' , $concous) }}">Download
                                                    Convocation Details</a>
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-danger" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="currentColor"
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z" />
                                                </svg>
                                            </div>
                                            <div class="card-item-title mb-2">
                                                <label class="pt-3 main-content-label tx-13 font-weight-bold mb-1">Vous êtes
                                                    refusé ({{ $concous->choix }})</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <!-- Warning Card -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="card-item">
                                        <div class="card-item-icon card-icon">
                                            <svg class="text-warning" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                width="24" height="24">
                                                <path fill="currentColor"
                                                    d="M1 21h22L12 2 1 21zm11-6h-2v2h2v-2zm0-4h-2V7h2v4z" />
                                            </svg>
                                        </div>
                                        <div class="card-item-title mb-2">
                                            <label class="pt-3 main-content-label tx-13 font-weight-bold mb-1">Not Valide
                                                ({{ $concous->choix }})
                                            </label>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach



            </div>
        @endrole
    </div>


</x-app-layout>
