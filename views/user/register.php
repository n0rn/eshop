<?php include ROOT. '/views/layouts/header.php';?>

<div class="registration-form">
    <div class="container">
        <div class="dreamcrub">
            <ul class="breadcrumbs">
                <li class="home">
                    <a href="/" title="Go to Home Page">Home</a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li class="women">
                    Registration
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <h2>Registration</h2>
        <?php if($result): ?>
            <p>Вы зарегистированы!</p>
        <?php else: ?>
        <?php if(isset($error) && is_array($error)):?>
            <ul>
            <?php foreach($error as $item):?>
                <li> - <?php echo $item;?></li>
                <?php endforeach;?>
            </ul>
        <?php endif;?>
        <div class="registration-grids">
            <div class="reg-form">
                <div class="reg">
                    <form action="#" method="post">
                        <ul>
                            <li class="text-info">First Name: </li>
                            <li><input type="text" name="fname" placeholder="First Name" value="<?php echo $fname;?>"></li>
                        </ul>
                        <ul>
                            <li class="text-info">Last Name: </li>
                            <li><input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>"></li>
                        </ul>
                        <ul>
                            <li class="text-info">Email: </li>
                            <li><input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"></li>
                        </ul>
                        <ul>
                            <li class="text-info">Password: </li>
                            <li><input type="password" name="password" placeholder="Password" value="<?php echo $password;?>"></li>
                        </ul>
                        <input type="submit" name="submit" value="REGISTER NOW">
                    </form>
                </div>
                <?php endif;?>
            </div>
            <div class="reg-right">
                <h3>Completely Free Account</h3>
                <div class="strip"></div>
                <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio
                    libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
                <h3 class="lorem">Lorem ipsum dolor.</h3>
                <div class="strip"></div>
                <p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- registration-form -->


<?php include ROOT. '/views/layouts/footer.php';?>
