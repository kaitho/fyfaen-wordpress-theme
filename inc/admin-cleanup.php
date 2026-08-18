<?php
/** FYFAEN admin cleanup. */

defined( 'ABSPATH' ) || exit;

/**
 * Hide only the two known, irrelevant admin notices without disabling the
 * underlying plugins, WooCommerce checks or other WordPress warnings.
 *
 * Some of these notices are injected after the initial admin page render,
 * so a MutationObserver is used in addition to the initial scan.
 */
add_action( 'admin_footer', function () {
	?>
	<script>
	(function () {
		'use strict';

		const shouldHide = function (notice) {
			if (!notice || notice.nodeType !== 1) return false;

			const text = (notice.textContent || '')
				.replace(/\s+/g, ' ')
				.trim()
				.toLowerCase();

			const isAstraNotice = text.indexOf('astra pro requires astra to be your active theme') !== -1;
			const isWooCompatibilityNotice =
				text.indexOf('woocommerce har oppdaget') !== -1 &&
				text.indexOf('inkompatible') !== -1 &&
				text.indexOf('woocommerce-funksjoner') !== -1;

			return isAstraNotice || isWooCompatibilityNotice;
		};

		const scan = function (root) {
			if (!root || root.nodeType !== 1) return;

			if (shouldHide(root)) {
				root.style.setProperty('display', 'none', 'important');
				return;
			}

			root.querySelectorAll('.notice, .updated, .error, .is-dismissible').forEach(function (notice) {
				if (shouldHide(notice)) {
					notice.style.setProperty('display', 'none', 'important');
				}
			});
		};

		const init = function () {
			scan(document.body);

			const observer = new MutationObserver(function (mutations) {
				mutations.forEach(function (mutation) {
					mutation.addedNodes.forEach(function (node) {
						scan(node);
					});
				});
			});

			observer.observe(document.body, { childList: true, subtree: true });
		};

		if (document.readyState === 'loading') {
			document.addEventListener('DOMContentLoaded', init);
		} else {
			init();
		}
	})();
	</script>
	<?php
} );
