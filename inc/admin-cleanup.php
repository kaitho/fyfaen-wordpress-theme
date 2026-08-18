<?php
/** FYFAEN admin cleanup. */

defined( 'ABSPATH' ) || exit;

/** Hide known, irrelevant admin notices without disabling the underlying plugins or checks. */
add_action( 'admin_footer', function () {
	?>
	<script>
	(function () {
		const hiddenNoticeText = [
			'Astra Pro requires Astra to be your active theme.',
			'WooCommerce har oppdaget at noen av de aktive utvidelsene dine er inkompatible med nå påståtte WooCommerce-funksjoner.'
		];

		document.querySelectorAll('.notice, .updated, .error, .is-dismissible').forEach(function (notice) {
			const text = (notice.textContent || '').trim();
			if (hiddenNoticeText.some(function (needle) { return text.indexOf(needle) !== -1; })) {
				notice.style.display = 'none';
			}
		});
	})();
	</script>
	<?php
} );
