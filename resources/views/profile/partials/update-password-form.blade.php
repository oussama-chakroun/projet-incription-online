<div class="main-content-body tab-pane p-4 border-top-0 @if ($errors->getBag('updatePassword')->has('current_password') || 
            $errors->getBag('updatePassword')->has('password') || 
            $errors->getBag('updatePassword')->has('password_confirmation'))
            active
        @endif" id="pass">
    <div class="card-body border" data-select2-id="12">
        <form class="form-horizontal" data-select2-id="11" method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')

            <div class="mb-4 main-content-label">{{__('messages.account')}}</div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">{{__('messages.cur_pass')}}</label>
                    </div>
                    <div class="col-md-9">
                        <input type="password" name="current_password" class="form-control @error('current_password','updatePassword') is-invalid state-invalid @enderror" placeholder="{{__('messages.cur_pass')}}" > 
                        @error('current_password', 'updatePassword')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror	
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">{{__('messages.new_pass')}}</label>
                    </div>
                    <div class="col-md-9">
                        <input type="password" name="password" class="form-control @error('password','updatePassword') is-invalid state-invalid @enderror" name="email" placeholder="{{__('messages.new_pass')}}"> 
                        @error('password', 'updatePassword')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3">
                        <label class="form-label">{{__('messages.confirm_pass')}}</label>
                    </div>
                    <div class="col-md-9">
                        <input type="password" class="form-control @error('password_confirmation','updatePassword') is-invalid state-invalid @enderror" name="password_confirmation" placeholder="{{__('messages.confirm_pass')}}" > 
                        @error('password_confirmation', 'updatePassword')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror	
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <div class="row row-sm">
                    <div class="col-md-3"> </div>
                    <div class="col-md-9"> <button style="border: none;background-color: transparent;color:#6259ca;" type="submit" class="mg-r-20" href="#">{{__("messages.change_pass")}}</button> </div>
                </div>
            </div>
        </form>
    </div>
</div>
