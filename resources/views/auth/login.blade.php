@extends('layouts.app')

@section('content')
<h1>Navigation Bar</h1>
    <!-- //title -->
    <!-- content -->
    <div class="sub-main-w3">
        <form action="#" method="post">
            <div class="form-style-agile">
                <label>
                    <i class="fas fa-user"></i>
                    Email
                </label>
                <input placeholder="Email" name="Name" type="email" required="">
            </div>
            <div class="form-style-agile">
                <label>
                    <i class="fas fa-unlock-alt"></i>
                    Password
                </label>
                <input placeholder="Password" name="Password" type="password" required="">
            </div>
            <!-- checkbox -->
            <div class="wthree-text">
                <ul>
                    <li>
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>Remember me</span>
                        </label>
                    </li>
                    <li>
                        <a href="#">Forgot Password?</a>
                    </li>
                </ul>
            </div>
            <!-- //checkbox -->
            <input type="submit" value="Log In"><br>
            <p style="font-size: 12px; text-align: center;"> By signing you agree to our services and privacy policy.</p>
          <br><br><div class="wthree-text">
                <ul>
                    <li>
                            <span>New to this site?</span>
                        
                    
                        <a href="signup.html">Sign Up>></a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    @endsection
