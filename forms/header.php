<header class="header">
<div class="header_class">
<div class="navigation">
              <a class="arf" href="/index.php">Главная</a>
              <a class="arf" href="/php/catalog.php">Каталог</a>
              <a class="arf" href="../forms/about.php">О нас</a>
              <a class="arf" href="/php/teams.php">Команды</a>
            </div>
            <div class="userfunc">
              <?php
                if(isset($_SESSION['user'])): ?>
                  <a class="argh" href="/forms/profile.php">
                    <p>Профиль</p>
                  </a>
                  <a class="argh" href="/php/logout.php">
                    <p>Выход</p>
                  </a>
              <?php else: ?>
                  <a class="argh" href="/forms/aut.php">
                    <p>Вход</p>
                  </a>
                  <a class="argh" href="/forms/register.php">
                    <p>Регистрация</p>
                  </a>
                <?php endif; ?>
              </div>
              </div>
    </header>