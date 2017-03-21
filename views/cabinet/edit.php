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
                   Edit
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <h2>Редактировать данных</h2>
        <?php if($result): ?>
            <p>Данные отредактированы!</p>
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
                            <li class="text-info">Password: </li>
                            <li><input type="password" name="password" placeholder="Password" value="<?php echo $password;?>"></li>
                        </ul>
                        <input type="submit" name="submit" value="Save">
                    </form>
                </div>
                <?php endif;?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php include ROOT. '/views/layouts/footer.php';?>