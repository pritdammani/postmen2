@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row">
    <div class="sub-main-w3 col-sm-12">
        
    <form action="#" method="post">
            <div class="row">
            <div class="col-sm-3">


            <div class="wthree-text bg">
                <table><br>
                    <tr>
                        <i style="font-size:60px" class="fa">&#xf2be;</i>
                        <h5>Create Account </h5>
                        <br>
                    </tr>
                    
                    <tr>
                        <i style="font-size:60px" class="fa">&#xf0fe;</i>
                        <h5>Attach Profiles</h5>
                        <br>
                    </tr>

                    <tr>
                        <i style="font-size:60px" class="fa">&#xf14a;</i>
                        <h5>Authentication of Profile </h5>
                    <br>
                    </tr>

                      <tr>
                         <i style="font-size:60px" class="glyphicon">&#xe024;</i>
                        <h5>Start Using Tool </h5>
                        <br>
                    </tr>


                </table>    
                        
            </div>
            </div>
            <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="row">
            <div class="col-sm-6">
            <div class="form-style-agile">
            <label>
                    <i class="fas fa-user"></i>
                    FirstName
                </label>
                <input placeholder="FirstName" name="Name" type="text">
            </div></div>
            <div class="col-sm-6">
            <div class="form-style-agile">
                <label>
                    <i class="fas fa-user"></i>
                    LastName
                </label>
                <input placeholder="LastName" name="Name" type="text" >
            </div></div>
        </div>

        <div class="row">
            <div class="col-sm-6">
            <div class="form-style-agile">
                <label>
                    <i class="fas fa-user"></i>
                    Email
                </label>
                <input placeholder="Email" name="Name" type="email" >
            </div></div>
            <div class="col-sm-6">
            <div class="form-style-agile">
                <label>
                    <i class="fas fa-user"></i>
                    Option
                </label>
                <input placeholder="LastName" name="Name" type="email" >
            </div></div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            <div class="form-style-agile">
                <label>
                    <i class="fas fa-unlock-alt"></i>
                    Password
                </label>
                <input placeholder="Password" name="Password" type="password">
            </div></div>
            <div class="col-sm-6">
            <div class="form-style-agile">
                <label>
                    <i class="fas fa-unlock-alt"></i>
                    Confirm Password
                </label>
                <input placeholder="Confirm Password" name="Password" type="password">
            </div></div>
        </div>
            <!-- checkbox -->
            <div class="wthree-text">
                <ul>
                    <li>
                        <label class="anim">
                            <input type="checkbox" class="checkbox">
                            <span>I agree terms of services</span>
                        </label>
                    </li>
                    
                </ul>
                <ul>
                    <li>
                        <label class="anim">
                            <input type="checkbox" class="checkbox">
                            <span>I agree Policy privacy</span>
                        </label>
                    </li>
                    
                </ul>
            </div>
            <!-- //checkbox -->
            <input type="submit" value="Create Account"><br>
            <div class="wthree-text">
                <ul>
                    <li>
                            <span>Already Created Account?</span>
                        
                    
                        <a href="#">Sign In>></a>
                    </li>
                </ul>
            </div>

        </div>

        </div>

        <button id="myBtn">Open Modal</button>

<!-- PopUp-->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 style="text-align: center;font-family: lato;">Let's Connect Your First Account </h1>
    
    <center>
    <a href="#"><i class="fa fa-facebook">&nbsp; Facebook</i></a>
<a href="#"><i class="fa fa-twitter">&nbsp; Twitter</i></a><br>

<a href="#"><i class="fa fa-google"><b>+ </b>&nbsp; Google Plus</i></a>
<a href="#"><i class="fa fa-linkedin">&nbsp; LinkedIn</i></a>
</center>

<h5 style="text-align: center;">By connecting your first social media account, you shall able to schedule post and <br> get the feel of this tool works.You can also connect accounts later from the dashboard.</h5> 
<br><br><hr style="color: blue;width: 200px;"><br>

  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!--pop up-->

        </form>
    </div>
    
<!-- //content signup -->

</div></div>
    <!-- Jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- //Jquery -->

@endsection
