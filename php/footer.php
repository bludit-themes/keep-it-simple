<footer>

  <div class="row">

    <div class="twelve columns">

      <ul class="social-links">

      <!-- Social Networks -->
			<?php if ($site->facebook()): ?>
			<li><a href="<?php echo $site->facebook(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php endif ?>
      
			<?php if ($site->twitter()): ?>
			<li><a href="<?php echo $site->twitter(); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php endif ?>

			<?php if ($site->googleplus()): ?>
			<li><a href="<?php echo $site->googleplus(); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<?php endif ?>
      
      <?php if ($site->github()): ?>
			<li><a href="<?php echo $site->github(); ?>" target="_blank"><i class="fa fa-github"></i></a></li>
			<?php endif ?>

			<?php if ($site->linkedin()): ?>
			<li><a href="<?php echo $site->linkedin(); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<?php endif ?>
            
      <?php if ($site->codepen()): ?>
			<li><a href="<?php echo $site->codepen(); ?>" target="_blank"><i class="fa fa-github"></i></a></li>
			<?php endif ?>

      </ul>

      <p class="copyright"><?php echo $site->footer(); ?> Powered by <a target="_blank" href="https://www.bludit.com">Bludit</a>. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>

    </div>

  </div>

  <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

</footer>
