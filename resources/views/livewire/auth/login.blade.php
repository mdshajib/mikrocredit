<div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
                <div class="card-body px-5 py-5">
                    <div class="col-4 logo">
                        <img src="{{asset('assets/images/mc.png')}}" style="width: 100%;" />
                    </div>
                    <div class="col-8 login-box">
                        <h3 class="card-title text-left mb-3">Login</h3>
                        <form wire:submit.prevent="Login">
                            <div class="form-group">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="text" id="email" class="form-control p_input" wire:model.defer="email">
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password <span class="required">*</span></label>
                                <input type="password" id="password" class="form-control p_input" wire:model.defer="password">
                                @error('password') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                    </label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn btn-rounded">
                                    <span wire:loading wire:target="Login" class="spinner-border spinner-border-sm"></span> Login
                                </button>
                            </div>
                        </form>
                        @if (session()->has('error'))
                            <div class="badge badge-outline-warning error-show">{{ session('error') }}</div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
