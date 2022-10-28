<div class="mt-32">
	<div class="w-full mt-10 ml-auto mr-5">
		<div class="w-4/6 mr-2 ml-auto">
			<?php
			$i = 1;
			foreach ($_REQUEST['erreurs'] as $erreur) {
			?>
				<div class=" notification numNotif<?php echo $i; ?> is-danger is-light mt-5">
					<button class="delete" dt-numNotif="<?php echo $i; ?>"></button>
					<?php echo "<li>$erreur</li>";
					?>
				</div>
			<?php
				$i += 1;
			}
			?>
		</div>
	</div>
</div>