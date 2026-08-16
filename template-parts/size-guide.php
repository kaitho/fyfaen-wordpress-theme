<?php
defined( 'ABSPATH' ) || exit;
?>

<style>
.fyfaen-size-guide-link {
	display: inline-flex;
	align-items: center;
	gap: 8px;
	margin: 4px 0 24px;
	padding: 0;
	border: 0;
	border-bottom: 1px solid currentColor;
	background: transparent;
	color: #111;
	font-size: .72rem;
	font-weight: 850;
	letter-spacing: .04em;
	cursor: pointer;
}

.fyfaen-size-guide-link::before {
	content: '?';
	display: inline-grid;
	place-items: center;
	width: 18px;
	height: 18px;
	border: 1px solid #111;
	border-radius: 50%;
	font-size: .65rem;
	font-weight: 900;
}

.fyfaen-size-guide-overlay {
	position: fixed;
	inset: 0;
	z-index: 10000;
	display: none;
	align-items: center;
	justify-content: center;
	padding: 24px;
	background: rgba(0,0,0,.72);
}

.fyfaen-size-guide-overlay.is-open { display: flex; }

.fyfaen-size-guide-modal {
	position: relative;
	width: min(760px, 100%);
	max-height: min(720px, calc(100vh - 48px));
	overflow: auto;
	padding: clamp(28px, 5vw, 52px);
	background: #fff;
	color: #111;
	box-shadow: 0 24px 80px rgba(0,0,0,.28);
}

.fyfaen-size-guide-modal__eyebrow {
	margin: 0 0 10px;
	font-size: .66rem;
	font-weight: 900;
	letter-spacing: .16em;
	text-transform: uppercase;
	color: #737373;
}

.fyfaen-size-guide-modal h2 {
	margin: 0;
	font-size: clamp(2.5rem, 6vw, 5rem);
	line-height: .86;
	letter-spacing: -.065em;
	font-weight: 950;
}

.fyfaen-size-guide-modal__intro {
	max-width: 560px;
	margin: 24px 0 30px;
	color: #555;
}

.fyfaen-size-guide-table {
	width: 100%;
	border-collapse: collapse;
	font-size: .9rem;
}

.fyfaen-size-guide-table th,
.fyfaen-size-guide-table td {
	padding: 14px 10px;
	border-bottom: 1px solid #e7e7e7;
	text-align: left;
}

.fyfaen-size-guide-table th {
	font-size: .66rem;
	font-weight: 900;
	letter-spacing: .1em;
	text-transform: uppercase;
}

.fyfaen-size-guide-table td:first-child {
	font-weight: 900;
}

.fyfaen-size-guide-modal__note {
	margin: 24px 0 0;
	font-size: .82rem;
	color: #737373;
}

.fyfaen-size-guide-close {
	position: absolute;
	top: 18px;
	right: 18px;
	width: 40px;
	height: 40px;
	border: 0;
	background: transparent;
	color: #111;
	font-size: 1.8rem;
	line-height: 1;
	cursor: pointer;
}

body.fyfaen-size-guide-open { overflow: hidden; }

@media (max-width: 560px) {
	.fyfaen-size-guide-overlay { padding: 12px; }
	.fyfaen-size-guide-modal { max-height: calc(100vh - 24px); padding: 28px 18px; }
	.fyfaen-size-guide-table { font-size: .76rem; }
	.fyfaen-size-guide-table th,
	.fyfaen-size-guide-table td { padding: 11px 5px; }
	.fyfaen-size-guide-table th { font-size: .56rem; }
}
</style>

<button type="button" class="fyfaen-size-guide-link" aria-haspopup="dialog" aria-controls="fyfaen-size-guide">
	Størrelsesguide
</button>

<div id="fyfaen-size-guide" class="fyfaen-size-guide-overlay" role="dialog" aria-modal="true" aria-labelledby="fyfaen-size-guide-title" aria-hidden="true">
	<div class="fyfaen-size-guide-modal">
		<button type="button" class="fyfaen-size-guide-close" aria-label="Lukk størrelsesguide">&times;</button>
		<div class="fyfaen-size-guide-modal__eyebrow">FYFAEN CLOTHING</div>
		<h2 id="fyfaen-size-guide-title">Størrelsesguide</h2>
		<p class="fyfaen-size-guide-modal__intro">T-shirts og Hoodies har en oversized passform. Sammenlign gjerne målene med et plagg du allerede liker passformen på.</p>
		<table class="fyfaen-size-guide-table">
			<thead>
				<tr>
					<th>Størrelse</th>
					<th>Lengde</th>
					<th>Bryst</th>
					<th>Skulderbredde</th>
					<th>Ermelengde</th>
				</tr>
			</thead>
			<tbody>
				<tr><td>XS</td><td>72 cm</td><td>56 cm</td><td>57 cm</td><td>23 cm</td></tr>
				<tr><td>S</td><td>74 cm</td><td>58 cm</td><td>57,5 cm</td><td>23,5 cm</td></tr>
				<tr><td>M</td><td>76 cm</td><td>60 cm</td><td>58 cm</td><td>24 cm</td></tr>
				<tr><td>L</td><td>78 cm</td><td>62 cm</td><td>59,5 cm</td><td>24,5 cm</td></tr>
				<tr><td>XL</td><td>80 cm</td><td>64 cm</td><td>61 cm</td><td>25 cm</td></tr>
				<tr><td>XXL</td><td>82 cm</td><td>66 cm</td><td>61,5 cm</td><td>25,5 cm</td></tr>
			</tbody>
		</table>
		<p class="fyfaen-size-guide-modal__note">Alle mål er oppgitt i cm.</p>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
	var overlay = document.getElementById('fyfaen-size-guide');
	if (!overlay) return;

	var openButton = document.querySelector('.fyfaen-size-guide-link');
	var closeButton = overlay.querySelector('.fyfaen-size-guide-close');

	function openGuide() {
		overlay.classList.add('is-open');
		overlay.setAttribute('aria-hidden', 'false');
		document.body.classList.add('fyfaen-size-guide-open');
		closeButton.focus();
	}

	function closeGuide() {
		overlay.classList.remove('is-open');
		overlay.setAttribute('aria-hidden', 'true');
		document.body.classList.remove('fyfaen-size-guide-open');
		openButton.focus();
	}

	openButton.addEventListener('click', openGuide);
	closeButton.addEventListener('click', closeGuide);
	overlay.addEventListener('click', function (event) {
		if (event.target === overlay) closeGuide();
	});
	document.addEventListener('keydown', function (event) {
		if (event.key === 'Escape' && overlay.classList.contains('is-open')) closeGuide();
	});
});
</script>
