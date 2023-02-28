<x-layout>
    <div class="register">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="{{ asset('images/side.jpg') }}" alt="">
                </div>
                <div class="col-md-6 right">
                    {{-- <div class="image"> --}}
                        <img src="{{ asset('images/logo.png') }}" class="image" alt="">
                  {{--   </div>  --}}
                     <div class="input-box">
                        <header>Create your account!</header>
                        <form action="/users" method="POST">
                            @csrf
                            <div class="input-field">
                                <input type="text" class="inputs" id="email" name="firstname" required autocomplete="off" placeholder="Firstname">

                               @error('firstname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                               @enderror
                            </div>
    
                            <div class="input-field">
                                <input type="text" class="inputs" id="email" name="lastname" required autocomplete="off" placeholder="Lastname">

                                @error('lastname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="grid">
                                <select class="gender inputs" name="gender" id="">
                                    <option disabled selected value="gender">Gender</option>
                                    <option class="gender-option" value="male">Male</option>
                                    <option class="gender-option" value="female">Female</option>
                                    @error('gender')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </select>

                                <input placeholder="Selected date" type="date" name="birthdate" id="date-picker-example" class="inputs">
                                @error('birthdate')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror                        
                            </div>
                            
                            <div class="input-field">
                                <select class="voters-type inputs" name="voters_type" id="">
                                    <option disabled selected value="voters">Voters Type</option>
                                    <option class="voters" value="registered">Registered</option>
                                    <option  class="voters" value="non_registered">Non Registered</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <input type="text" class="inputs" id="email" name="email" required autocomplete="off" placeholder="Email Address">
                            
                                @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="input-field">
                                <input type="password" class="inputs" id="email" name="password" required autocomplete="off" placeholder="Password">
                                

                                @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="input-field">
                                <input type="password" class="inputs" id="email" name="password_confirmation" required autocomplete="off" placeholder="Confirm Password">

                                @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>  
                            <div class="input-field">
                                <button class="submit">
                                    Sign up
                                </button>
                            </div>
                            <div class="signin">
                                <span>Already have an account? <a href="/login">Login in here</a></span>
                            </div> 
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>   
    
    