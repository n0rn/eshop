<?php include ROOT. '/views/layouts/header.php';?>
<div class="content">
    <div class="container">
        <div class="login-page">
        <div class="dreamcrub">
            <ul class="breadcrumbs">
                <li class="home">
                    <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li class="women">
                    Login
                </li>
            </ul>
            <ul class="previous">
                <li><a href="index.html">Back to Previous Page</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="account_grid">
            <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                <h2>NEW CUSTOMERS</h2>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                <a class="acount-btn" href="/user/register">Create an Account</a>
            </div>
            <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                <h3>REGISTERED CUSTOMERS</h3>
                <?php if(isset($error) && is_array($error)) :?>
                <ul>
                    <?php foreach($error as $item):?>
                    <li>- <?php echo $item; ?></li>
                    <?php endforeach;?>
                </ul>
                <?php endif;?>
                <form action="#" method="post">
                    <div>
                        <span>Email Address<label>*</label></span>
                        <input type="text" name="email" placeholder="E-mail" value=""">
                    </div>
                    <div>
                        <span>Password<label>*</label></span>
                        <input type="password" name="password" placeholder="Password" value="">
                    </div>
                    <a class="forgot" href="#">Forgot Your Password?</a>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
</div>

<?php include ROOT. '/views/layouts/footer.php';?>
