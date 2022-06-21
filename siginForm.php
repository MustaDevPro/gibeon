<style>
    .form-group{
        padding: 0;
        margin: 0;
        width: auto;
        
    }
    .form-input,label{
        width:100%;
        border:none;
        outline:0px;
    }
    .p-auto{
        padding: 0.5rem;
    }
    .p-1{
        padding: 1rem;
    }
    .px-1{
        padding-left: 1rem;
        padding-right: 1rem;
    }
    .px-2{
        padding-left: 2rem;
        padding-right: 2rem;
    }
    .py-1{
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .py-2{
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .card{
        background: rgba(0,0,0, .6);
        overflow:hidden;
    }
    .round{
        border-radius:7px;
    }
    .card-header{
        background: blue;
    }
    .sign-up{
        margin-top: -5rem;
    }
</style>
<div class="overlay" style="background-image:url(./images/globe.jpg);">
    <div class="container">
        <div class="row" style="margin-top:-7rem;">
            <div class="col-md-8 col-sm-8 text-center d-sm-none">
                <h1 class="main-heading-title"><span class="main-element themecolor" data-elements="Oline Services, Buy your Products, We are here for you"></span></h1>
                <h1 class="main-heading-title"><span class="main-element themecolor" data-elements="Crypto Technology Center,CTC"></span></h1>
                <p class="main-heading-text">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,<br/>cum soluta nobis est eligendi optio cumque nihil impedit quo facilis</p>
        
                <div class="btn-bar">
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-start" >
                <div class="sign-in">
                    <div class="card round">
                        <div class="card-header text-center themecolor py-1"><h4>Sign In</h4></div>
                        <div class="card-body px-2">
                            <div class="form-group ">
                                <form action="#" method="post">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-input round p-1" placeholder="Enter your Username">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-input round p-1" placeholder="Enter your Password">
                                </form>
                            </div>
                        </div>
                        <div class="card-footer px-2 py-2">
                            <span><button type="submit" class="round p-1 px-2 btn-success">Sign In</button></span>
                            <span> <a href="#">Forgot password?</a></span>
                            <p>Already have Account? <a onclick="sign();" href="#">Sign Up</a></p>
                        </div>
                    </div>
                </div>
                <div class="sign-up">
                    <div class="card round">
                        <div class="card-header text-center themecolor py-1"><h4>Sign In</h4></div>
                        <div class="card-body px-2">
                            <div class="form-group ">
                                <form action="#" method="post">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-input round p-auto" placeholder="Enter your Email">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-input round p-auto" placeholder="Enter your Username">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-input round p-auto" placeholder="Enter your Password">
                                    <label for="">Comfirm Password</label>
                                    <input type="password" name="cpassword" class="form-input round p-auto" placeholder="Re-enter your Password">
                                </form>
                            </div>
                        </div>
                        <div class="card-footer px-2 py-2">
                            <span><button type="submit" class="p-auto px-2 btn-primary round">Sign Up</button></span>
                        <span>Already have Account? <a onclick="log();" href="#">Sign In</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<script>
    var login = document.querySelector(".sign-in");
    var signup = document.querySelector(".sign-up");
    signup.style.display='none'
    const log = ()=>{
        login.style.display='block'
        signup.style.display='none'
    }
    const sign = ()=>{
        login.style.display='none'
        signup.style.display='block'
    }
</script>
