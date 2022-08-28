<?php

  $href = [
        'Главная' => '/',
        'Авторизация' => '/authorization/',
        'Список Бродского' => '/brodsky/',
        'О проекте' => '/about/'
        ];

  function activeClass (string $href): string {
    if (
        (!isset($_GET['page']) and $href == $_SERVER["REQUEST_URI"]) or
        (isset($_GET['page']) and $_GET['page'] == $href)
    )
    {
        $class = ' class="active"';
    } else  {
        $class = '';
    }
    return $class;
  }
  ?>

<ul class="navigation_list">
  <?php foreach ($href as $name => $page): ?>
    <?php $class = activeClass($page); ?>
    <li class="navigation_li"><a href="<?= $page ?>"<?= $class ?>><?= $name ?></a></li>
  <?php endforeach; ?>
</ul>
