<?php

class PureTemplate extends BaseTemplate
{
	public function execute()
	{
		global $wgUser;
		$this->html('headelement'); ?>

		<!-- START LESS TEMPLATE -->
		<?php include_once("partial/Nav.php") ?>
		<?php include_once("partial/PageMenu.php") ?>
		<?php include_once("partial/Content.php") ?>
		<?php include_once("partial/Footer.php") ?>
		<!-- END LESS TEMPLATE   -->

		<?php $this->printTrail(); ?>
		</body>

		</html><?php
			}
		}
