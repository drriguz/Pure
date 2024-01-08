<?php

class PureTemplate extends BaseTemplate
{
	private function getPureFooterIcons() {
		$footericons = $this->get('footericons');
		foreach ( $footericons as $footerIconsKey => &$footerIconsBlock ) {
			foreach ( $footerIconsBlock as $footerIconKey => $footerIcon ) {
				if ( !isset( $footerIcon['src'] ) ) {
					unset( $footerIconsBlock[$footerIconKey] );
				}
			}
		}
		return $footericons;
	}

	public function execute()
	{
		global $wgUser; ?>

		<!-- START LESS TEMPLATE -->
		<?php include_once("partial/Nav.php") ?>
		<?php include_once("partial/PageMenu.php") ?>
		<?php include_once("partial/Content.php") ?>
		<?php include_once("partial/Footer.php") ?>
		<!-- END LESS TEMPLATE   -->
	<?php
			}
		}
