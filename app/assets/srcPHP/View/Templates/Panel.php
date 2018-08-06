<?php Session::init(); ?>
	<div class='guide-panel'>
		<div class='guide-panel__list'>
			<a href="<?php echo URL;?>AddWork"> Add a Workout</a>
		</div>
		<div class='guide-panel__list'>
			<a href="<?php echo URL;?>Note"> Notes </a>
		</div>
		<div class='guide-panel__list'>
			<a href="<?php echo URL;?>Workout"> Workout of Day </a>
		</div>
		<div class='guide-panel__list'>
			<a href="<?php echo URL;?>Movie"> Movie </a>
		</div>
		<?php if(Session::get('$role') == 'admin'):?>
		<div class='guide-panel__list'>
			<a href="<?php echo URL;?>User"> Users</a>
		</div>
		<div class='guide-panel__list'>
			<a href="<?php echo URL;?>Article"> Article</a>
		</div>
		<?php endif; ?>
		<?php if(Session::get('$role') == 'redactor'):?>
		<div class='guide-panel__list'>
			<a href="<?php echo URL;?>Article"> Article</a>
		</div>
		<?php endif; ?>
		<?php if(Session::get('$role') == 'coach'):?>
			<div class='guide-panel__list'>
			<a href="<?php echo URL;?>Article"> Article</a>
		</div>
		<?php endif; ?>
	</div>

</div>