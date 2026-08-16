<?php
/**
 * Template Name: FYFAEN Størrelsesguide
 *
 * Replaces the legacy image-based size page with a responsive text guide.
 */
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main class="fyfaen-size-page">
	<section class="fyfaen-section">
		<div class="container">
			<div class="fyfaen-section-heading">
				<div>
					<div class="fyfaen-kicker">FYFAEN CLOTHING</div>
					<h1>Størrelsesguide</h1>
				</div>
				<p>Rene mål for T-shirts og Hoodies med oversized passform.</p>
			</div>

			<div class="fyfaen-size-page__intro">
				<p><strong>T-shirts og Hoodies</strong></p>
				<p>Bruk gjerne et plagg du allerede liker passformen på som sammenligning. Alle mål er oppgitt i cm.</p>
			</div>

			<div class="fyfaen-size-table-wrap">
				<table class="fyfaen-size-page__table">
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
			</div>

			<div class="fyfaen-size-page__note">
				<strong>Tips:</strong> T-shirts og Hoodies er laget med oversized passform. Sammenlign målene med et plagg du allerede bruker for å finne riktig størrelse.
			</div>
		</div>
	</section>
</main>

<style>
.fyfaen-size-page h1 {
	margin: 0;
	font-size: clamp(3.5rem, 8vw, 8rem);
	line-height: .84;
	letter-spacing: -.075em;
	font-weight: 950;
}

.fyfaen-section-heading > p {
	max-width: 360px;
	margin: 0;
	color: #737373;
	font-weight: 650;
}

.fyfaen-size-page__intro {
	max-width: 650px;
	margin-bottom: 42px;
}

.fyfaen-size-page__intro p {
	margin: 0 0 8px;
}

.fyfaen-size-table-wrap {
	overflow-x: auto;
	border-top: 1px solid #111;
	border-bottom: 1px solid #111;
}

.fyfaen-size-page__table {
	width: 100%;
	min-width: 680px;
	border-collapse: collapse;
}

.fyfaen-size-page__table th,
.fyfaen-size-page__table td {
	padding: 20px 16px;
	border-bottom: 1px solid #e7e7e7;
	text-align: left;
}

.fyfaen-size-page__table th {
	font-size: .66rem;
	font-weight: 900;
	letter-spacing: .1em;
	text-transform: uppercase;
}

.fyfaen-size-page__table td {
	font-size: 1rem;
}

.fyfaen-size-page__table td:first-child {
	font-weight: 900;
}

.fyfaen-size-page__table tbody tr:last-child td {
	border-bottom: 0;
}

.fyfaen-size-page__note {
	max-width: 650px;
	margin-top: 28px;
	color: #737373;
	font-size: .86rem;
}

@media (max-width: 700px) {
	.fyfaen-size-page h1 { font-size: clamp(3.4rem, 18vw, 6rem); }
	.fyfaen-size-page__table th,
	.fyfaen-size-page__table td { padding: 16px 10px; }
}
</style>

<?php
get_footer();
