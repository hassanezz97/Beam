
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #80ACDC">x</span>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/person-male.png"/>
                </div>
                <h3 class="text-center mb-4">Sign In</h3>
                <form method="POST" action="{{ route('login') }}" class="login-form" >
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control rounded-left @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocu>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group d-flex">
                        <input type="password" class="form-control rounded-left @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="form-check w-50">
                            <label class="custom-control fill-checkbox">
                                <input type="checkbox" class="fill-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="fill-control-indicator"></span>
                                <span class="fill-control-description">Remember Me</span>
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <div class="w-50 text-md-right">
                            <a href="#">Forgot Password</a>
                        </div>
                        @endif
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <p>Not a member? <a href="#">Create an account</a></p>
            </div>
        </div>
    </div>
</div>

