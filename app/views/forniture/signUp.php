<?php $this-> view("forniture/header" , $data); ?>

<div class="form-page">
    <?php check_message() ?>
    <div class="form">
    <form class="register-form" id="register" method="post">
        <input type="text" name="username" placeholder="name"/>
        <input type="password" name="password" placeholder="password"/>
        <input type="email" name="email" placeholder="email address"/>
        <button>create</button>
        <p class="message">Already registered? <a id="ele" href="<?=ROOT?>login">Sign In</a></p>
    </form>
    </div>
</div>

<?php $this-> view("forniture/footer" , $data); ?>
