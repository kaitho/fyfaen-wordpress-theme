<?php
/** FYFAEN admin cleanup. */

defined( 'ABSPATH' ) || exit;

/**
 * Hide only the two known, irrelevant admin notices.
 *
 * This is intentionally scoped to actual WordPress notice elements so the
 * admin page itself can never be hidden.
 */
add_action( 'admin_footer', function () {
	?>
	<script>
	(function () {
		'use strict';

		const noticeSelector = '.notice, .updated, .error, .is-dismissible';

		const shouldHide = function (notice) {
			if (!notice || notice.nodeType !== 1 || !notice.matches(noticeSelector)) {
				return false;
			}

			const text = (notice.textContent || '')
				.replace(/\s+/g, ' ')
				.trim()
				.toLowerCase();

			return (
				text.indexOf('astra pro requires astra to be your active theme') !== -1 ||
				(
					text.indexOf('woocommerce har oppdaget') !== -1 &&
					text.indexOf('inkompatible') !== -1 &&
					text.indexOf('woocommerce-funksjoner') !== -1
				)
			);
		};

		const scan = function (root) {
			if (!root || root.nodeType !== 1) {
				return;
			}

			if (root.matches(noticeSelector) && shouldHide(root)) {
				root.style.setProperty('display', 'none', 'important');
			}

			root.querySelectorAll(noticeSelector).forEach(function (notice) {
				if (shouldHide(notice)) {
					notice.style.setProperty('display', 'none', 'important');
				}
			});
		};

		const init = function () {
			if (!document.body) {
				return;
			}

			scan(document.body);

			const observer = new MutationObserver(function (mutations) {
				mutations.forEach(function (mutation) {
					mutation.addedNodes.forEach(function (node) {
						if (node.nodeType === 1) {
							scan(node);
						}
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
