<x-layout>
    <section class="login section mt-20">
        <div class="container mt-10">
            <div class="row mt-10">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head mt-10">
                        <h4 class="title">Create Account</h4>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input name="name" class="is-invalid" id="name" value="{{old('name')}}" type="text" placeholder=" Eg. Nana Adjei">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-select" name="gender" id="">
                                    <option value="">Select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input name="date_of_birth" value="{{old('date_of_birth')}}" type="date" placeholder=" Eg. Nana Adjei">
                                @error('date_of_birth')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Telephone Number</label>
                                <input name="phone_number" type="text" value="{{old('phone_number')}}"
                                    @error('phone_number') {{ 'is-invalid' }} @enderror" placeholder="Eg. 024XXXXXXXX">
                                @error('phone_number')
                                     <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class=" form-group">
                                <label>Password</label>
                                <input name="password" id="passwordInput" value="{{old('password')}}" type="password" placeholder="" required>
                                <small id="passwordVisibility">Show Password</small>
                                 @error('password')
                                     <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            {{-- <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                                <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                            </div> --}}

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input name="password_confirmation" value="{{old('password_confirmation')}}" id="passwordConfirmInput" type="password" required>
                                @error('confirm_password')
                                     <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="check-and-pass">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input width-auto"
                                                id="exampleCheck1" required>
                                            <label class="form-check-label">Agree to our <a
                                                    href="javascript:void(0)">Terms and
                                                    Conditions</a> </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">Create Account</button>
                            </div>
                            {{-- <div class="alt-option">
                                <span>Or</span>
                            </div>
                            <div class="socila-login">
                                <ul>
                                    <li><a href="javascript:void(0)" class="facebook"><i
                                                class="lni lni-facebook-original"></i>Login With
                                            Facebook</a></li>
                                    <li><a href="javascript:void(0)" class="google"><i class="lni lni-google"></i>Login
                                            With Google
                                            Plus</a>
                                    </li>
                                </ul>
                            </div> --}}
                            <p class="outer-link">Do you already have an account? <a href="{{ route('login') }}">Login
                                    here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
