<?php $this-> view("forniture/header" , $data); ?>

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 13% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 0;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #e99c2e;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #f9bb62;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #e99c2e;
  text-decoration: none;
}
/* .form .register-form {
  display: none;
} */
/* .none{
  display : none;
}
.display{
  display : block;
} */

</style>

<div class="login-page">
  <div class="form">
    <form class="register-form" id="register" method="post">
      <input type="text" name="username" placeholder="name"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="text" name="email" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a id="ele" href="#">Sign In</a></p>
    </form>
    <form class="login-form" id="login" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a id="ele2" href="#">Create an account</a></p>
    </form>
  </div>
</div>

<script>
  let ele = document.getElementById("ele");
  let login = document.getElementById("login");
  let register = document.getElementById("register");

ele.addEventListener("click", function(){
    login.style.display="block";
    register.style.display="none";


});

ele2.addEventListener("click", function(){
    login.style.display="none";
    register.style.display="block";

});
register.style.display="none";
login.style.display="block";
</script>

<?php $this-> view("forniture/footer" , $data); ?>
