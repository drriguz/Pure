<?php

class PureTemplate extends BaseTemplate
{
	/**
	 * Backwards compatibility method to get personal tools the "classic way" that doesn't trigger
	 * deprecation warnings (T422975).
	 *
	 * @return array
	 */
	private function getPersonalToolsClassic() {
		$cNav = $this->get( 'content_navigation' );
		$personalTools = array_merge(
			$cNav['user-interface-preferences'],
			$cNav['user-page'],
			$cNav['notifications'],
			$cNav['user-menu']
		);

		return $this->getSkin()->getPersonalToolsForMakeListItem( $personalTools );
	}

	private function getContentNavigationClassic() {
		$cNav = $this->get( 'content_navigation' );
		unset( $cNav['user-interface-preferences'] );
		unset( $cNav['user-page'] );
		unset( $cNav['notifications'] );
		unset( $cNav['user-menu'] );
		return $cNav;
	}

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
