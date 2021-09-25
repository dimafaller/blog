<div class="header-box">
  <div>
    <nav class="menu">
      <ul class="menu-links">
        <li>
          <a href="https://turboded.ru/">Турбодед</a>
        </li>
        <li>
          <a href="https://turboded.ru/blog">Лента</a>
        </li>
        <li>
          <a href="https://turboded.ru/blog/all/">Все&nbsp;заметки</a>
        </li>
        <li>
          <a href="https://turboded.ru/blog/tags/urbanistika/">Урбанистика</a>
        </li>
      </ul>
    </nav>
    <div class="spotlight">
      <?php #_T_DEFER ('stat') ?>

      <span class="admin-links-floating">
        <?php _T ('author-menu') ?>
      </span>

      <?php if ($content['class'] != 'found') { ?>
        <?php _T_FOR ('form-search') ?>
      <?php } ?> 
    </div>
  </div>
</div>

<script>
const href = document.location.href
document.querySelectorAll('.header-box a').forEach(element => {
        if (element.href === href) {
            element.style.color = 'black'
        }
    })
</script>
<div class="menu-spacer"></div>

