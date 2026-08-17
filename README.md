# FYFAEN WordPress Theme

Custom WooCommerce-first WordPress theme for **fyfaen.store**.

## Design goal

A modern Norwegian streetwear storefront: bold typography, editorial layouts, strong product imagery, minimal black/white visual language and a fast mobile experience.

## Commerce boundary

The theme owns presentation only.

- WooCommerce owns products, variants, cart, checkout, orders and store calculations.
- Stripe, Vipps/MobilePay and other payment extensions own their payment flows.
- The theme does not call payment APIs or implement order/payment processing.
- Cart and checkout should be tested on staging with the real site's installed extensions before production activation.

## Current milestone

**0.5.0 — staging-ready presentation milestone**

Homepage, shop/archive, product presentation, cart styling and checkout styling are included. The checkout is intentionally styled without replacing WooCommerce's Cart/Checkout Blocks or payment gateway internals.

## QA

Use [`docs/QA-CHECKLIST.md`](docs/QA-CHECKLIST.md) before production activation.
