<?php _X ('common-pre') ?>

<div class="common">



<div class="flag">
  <?php _X ('header-pre') ?>

  <div class="header-content">



    <div class="spotlight">
      <?php #_T_DEFER ('stat') ?>

    </div>

  </div>

  <?php _X ('header-post') ?>
</div>



<div class="content">

<?php _T ('heading') ?>
<?php _T ('theme-preview') ?>
<?php _T ('message') ?>
<?php _T ('welcome') ?>
<?php _T ('unavailable') ?>
<?php _T ('notes') ?>
<?php _T ('notes-list') ?>
<?php _T ('tags') ?>
<?php _T ('nothing') ?>
<?php _T ('sessions') ?>
<?php _T ('sources') ?>
<?php _T ('pages') ?>
<?php _T ('comments') ?>
<?php _T ('popular') ?>
<?php _T ('tags-menu') ?>
<?php _T ('unsubscribe') ?>
<?php _T ('form') ?>

</div>




<div class="footer">
<?php _X ('footer-pre') ?>
© <span id="e2-blog-author"><?= @$content['blog']['author'] ?></span>, <?=$content['blog']['years-range']?>

<a class="e2-rss-button" href="<?=@$content['blog']['rss-href']?>"><?= _S ('gs--rss') ?></a>

<div class="engine">
<?= $content['engine']['about'] # please do not remove ?>
<?php _T_DEFER ('stat') ?>
</div>

<!-- <?php _T ('login-element'); ?> -->

<?php _X ('footer-post') ?>
</div>




</div>

<?php _T ('niceerror'); ?>
