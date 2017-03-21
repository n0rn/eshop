<?php include ROOT. '/views/layouts/header.php';?>

<div class="container">
<h1>Кабинет пользователя</h1>
<h3>Привет, <?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?>!</h3>
<ul>
    <li><a href="/cabinet/edit">Редактировать данные</a></li>
    <li><a href="/cabinet/history">Список покупок</a></li>
</ul>
</div>
<?php include ROOT. '/views/layouts/footer.php';?>
