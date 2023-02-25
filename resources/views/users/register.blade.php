<x-layout>
    <div class="wrapper">
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
                                {{-- <div class="dropdown">
                                    <button class="btn">Gender</button>
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </button>
                                    <div class="dropdown-menu" name="gender" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" value="male" href="#">Male</a>
                                        <a class="dropdown-item" value="female" href="#">Female</a>
                                    </div>

                                    @error('gender')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>   --}}
                               {{--  <input placeholder="Selected date" type="date" name="birthdate" id="date-picker-example" class="inputs"> --}}                            
                            </div>
    
                            <div class="input-field" name="voters_type">
                                <div name="voters_type">
                                    <div class="dropdown" name="voters_type">
                                        <button class="btn1" name="voters_type">Registered Voter / None Registered</button>
                                        <button class="dropdown-toggle toggle" name="voters_type" type="button" id="dropdownMenuButton"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        </button>
                                      
                                        <div class="dropdown-menu" name="voters_type" aria-labelledby="dropdownMenuButton">
                                            <span class="dropdown-item" value="registered">Registered</span>
                                            <span class="dropdown-item" value="not registered">None</span>
                                        </div>         
                                    </div>
                                </div>
                                

                               {{--  <select name="voters_type" id="" aria-placeholder="Registers / Not Registered">
                                    <option value="registered">Registered</option>
                                    <option value="not registered">Not Registered</option>
                                </select> --}}

                                @error('voters_type')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
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
    
    