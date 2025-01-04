<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container-fluid mt-2">

        <div class="row">
            <div class="col-5 p-5">
                <h3>Bonjour {{ auth()->user()->name }}</h3>

            </div>
        </div>

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
                                    <span class="d-block tx-12 mb-0 text-muted">Resultat Concours</span>
                                    <label class="pt-3 main-content-label tx-13 font-weight-bold mb-1">Vous étes admis pour passer concours</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endrole
    </div>


</x-app-layout>
