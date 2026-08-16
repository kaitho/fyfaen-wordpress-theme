# FYFAEN WordPress Theme

Custom WooCommerce-first WordPress theme for **fyfaen.store**.

> **Production release: v1.0.0** 🖤

## About

FYFAEN is a custom Norwegian streetwear storefront built around a bold, clean and editorial visual identity. The theme focuses on strong typography, product presentation, a minimal black/white design language and a responsive shopping experience across desktop and mobile.

## v1.0.0

The first production release includes:

- Custom FYFAEN header and navigation
- Sticky/scrolled header behavior
- Responsive mobile navigation
- Custom homepage and shop/archive presentation
- WooCommerce product grid and product pages
- Product galleries with clean white presentation
- Related products
- Consistent **"Velg Størrelse"** variation labeling
- Custom cart presentation
- FYFAEN-styled add-to-cart notices
- WooCommerce Cart Block checkout button styling
- Custom checkout action buttons for card and Vipps/MobilePay flows
- Back In Stock Notifier styling
- Custom footer and brand statement
- Existing Kjøpsvilkår/refund page styled to match the theme
- Responsive mobile polish throughout the storefront
- GitHub Actions deployment to staging and production via SFTP

## Commerce boundary

The theme owns presentation only.

- WooCommerce owns products, variants, cart, checkout, orders and store calculations.
- Stripe, Vipps/MobilePay and other payment extensions own their payment flows.
- The theme does not call payment APIs or implement order/payment processing.
- Cart and checkout are styled without replacing WooCommerce's Cart/Checkout Blocks or payment gateway internals.

## Deployment

The project uses a simple promotion workflow:

```text
 develop → staging → test/approve → main → production
```

- `develop` deploys to the one.com staging environment.
- `main` is the production release branch.
- GitHub Actions deploys the theme via SFTP.
- Production deployment uses a separate `ONECOM_LIVE_THEME_DIR` secret.

## QA

Before future releases, test the complete shopping flow on staging:

1. Homepage
2. Shop/archive
3. Product page
4. Product variations
5. Add to cart
6. Cart
7. Checkout with card
8. Checkout with Vipps/MobilePay
9. Back In Stock form
10. Kjøpsvilkår/refund page
11. Desktop and mobile layouts

## Versioning

The project follows semantic versioning where practical:

- `1.0.x` — production bug fixes and small visual corrections
- `1.1.x` — new features and non-breaking improvements
- `2.0.0` — major architectural or breaking changes

---

**FYFAEN v1.0.0 — Production release.**
