<?php $this-> view("forniture/header" , $data); ?>

<div class="login-page">
  <div class="form">
    <form class="login-form" id="login" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a id="ele2" href="<?=ROOT?>signUp">Create an account</a></p>
    </form>
  </div>
</div>


<?php $this-> view("forniture/footer" , $data); ?>
