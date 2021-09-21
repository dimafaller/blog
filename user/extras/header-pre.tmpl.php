<div class='header-box'>
 <nav class="menu">
  <ul>
   <li><a href="/">Главная</a></li>
   <li><a href="/all/">Все заметки</a></li>
   <li><a href="/tags/projects/">Проекты</a></li>
   <li><a href="/tags/advices/">Советы</a></li>
  </ul>
 </nav>
</div>

<script>
const href = document.location.href
document.querySelectorAll('.header-box a').forEach(element => {
        if (element.href === href) {
            element.style.color = 'gray'
        }
    })
</script>