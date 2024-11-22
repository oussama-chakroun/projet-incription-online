<div class="main-content-body tab-pane p-4 border-top-0 @unless ($errors->getBag('updatePassword')->has('current_password') || 
            $errors->getBag('updatePassword')->has('password') || 
            $errors->getBag('updatePassword')->has('password_confirmation'))
            active
        @endunless" id="info">
    <div class="card-body border" data-select2-id="12">
        <form class="form-horizontal" data-select2-id="11" method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="mb-4 main-content-label">{{__('messages.account')}}</div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">{{__('messages.user')}} {{__('messages.name')}}</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control @error('name') is-invalid state-invalid @enderror" name="name" placeholder="{{__('messages.user')}} {{__('messages.name')}}" value="{{old('name', $user->name)}}"> 
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">{{__('messages.email')}}</label>
                    </div>
                    
                    <div class="col-md-9">
                        <input type="text" class="form-control @error('email') is-invalid state-invalid @enderror" name="email" placeholder="{{__('messages.email')}}" value="{{old('email', $user->email)}}"> 
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3"> </div>
                    <div class="col-md-9"> <button type="submit" style="border: none;background-color: transparent;color:#6259ca;" class="mg-r-20" href="#">{{__('messages.change_info')}}</button> </div>
                </div>
            </div>
        </form>
    </div>
</div>