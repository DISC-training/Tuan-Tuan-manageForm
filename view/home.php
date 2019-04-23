
<body>
<div class="container">
  <h1 class="text-center mg-myself">
    Login To ...
  </h1>
  <div class="loginBox">
      <form action="HomeController.php" method= "Post"> 
          <div class="pd-title">
              <h1 class="text-center">Login</h1>
          </div>
          <div class="form-group pd-myself form-group-lg">
        <label for="userName"><h3>UserName</h3></label>
        <input type="Text" class="form-control inp-myself input-lg" id="userName" placeholder="Enter UserName">
      </div>
      <div class="form-group pd-myself">
        <label for="PassWord"><h3>PassWord</h3></label>
        <input type="password" class="form-control inp-myself"  id="PassWord" placeholder="Enter PassWord">
      </div>
      <div class=" pd-myself">
      <button type="submit" class="btn btn-outline-primary form-control ">Login</button>
            </div>
      </form>
            <div class="pd-myself">
              <a href="#" class=" text-primary">Forgot Your Password?</a>
            </div>
            <div class="pd-myself">
              <a href="#" class=" text-primary">Or Create A New Account ?</a>
            </div>
  </div>
</div>
</body>


