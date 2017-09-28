<h3 class="header-title">André Johansson</h3>

<div class="user-actions">
    <?php if ($di->get("session")->get("user") == null) { ?>
    <a class="ua-link" href="<?=$di->get("url")->create("user/login")?>">Logga in</a>
    <a class="ua-link" href="<?=$di->get("url")->create("user/create")?>">Registrera</a>
    <?php } else { ?>
    <a class="ua-link" href="<?=$di->get("url")->create("user")?>">Profil</a>
    <?php } ?>
</div>
