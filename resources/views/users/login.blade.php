<x-layout>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="{{ asset('images/side.jpg') }}" alt="">
                </div>
                <div class="col-md-6 right">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                     <div class="input-box">
                        <header>Hello Again!</header>
                        <div class="input-field">
                            <input type="text" class="input" name="email" id="email" required autocomplete="off" placeholder="Email Address">
                            <label for="email"></label>
                        </div>

                        <div class="input-field">
                            <input type="text" class="input" name="password" id="email" required autocomplete="off" placeholder="Password">
                            <label for="email"></label>
                        </div>
                        
                        <div class="input-field">
                            <input type="submit" class="submit" value="Login">
                            
                        </div>
                        <div class="signin">
                            <span>Don't have account yet? <a href="/register">Signup in here</a></span>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>   
    
    