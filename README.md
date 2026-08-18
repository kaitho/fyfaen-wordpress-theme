# FYFAEN WordPress Theme

Custom WooCommerce-first WordPress theme for **fyfaen.store**.

## Design goal

A modern Norwegian streetwear storefront: bold typography, editorial layouts, strong product imagery, minimal black/white visual language and a fast mobile experience.

## Current release

**v1.5.0 — visual storefront refresh** 🖤

The current production release includes:

- Editorial shop hero with **FYFAEN CLOTHING / est 2024** branding
- Refined product presentation and responsive product grid
- **EKTE KVALITET / EKTE FOLK** customer/model image gallery
- Compact responsive image gallery with natural image proportions
- White gallery presentation with tight spacing
- Updated shop and footer brand copy
- Responsive mobile and desktop visual polish
- Existing WooCommerce cart and checkout presentation
- Custom size guide and storefront navigation

## Commerce boundary

The theme owns presentation only.

- WooCommerce owns products, variants, cart, checkout, orders and store calculations.
- Stripe, Vipps/MobilePay and other payment extensions own their payment flows.
- The theme does not call payment APIs or implement order/payment processing.
- Cart and checkout should be tested on staging with the real site's installed extensions before production activation.

## Deployment

The project uses the following promotion workflow:

```text
develop → staging → test/approve → main → production
```

- `develop` is used for staging development and visual testing.
- `main` is the production release branch.
- GitHub Actions deploys the theme to the configured hosting environments.
- Production changes should be tested and approved on staging before promotion.

## QA

Before production changes, test the complete shopping flow on staging:

1. Homepage / shop
2. Shop/archive and product grid
3. Product page
4. Product variations and size selection
5. Add to cart
6. Cart
7. Checkout with card
8. Checkout with Vipps/MobilePay
9. Back In Stock form
10. Size guide
11. Footer and navigation
12. Desktop and mobile layouts

Use [`docs/QA-CHECKLIST.md`](docs/QA-CHECKLIST.md) as the detailed QA reference.

## Versioning

The production theme follows semantic versioning where practical:

- `1.5.x` — production visual improvements and bug fixes
- `1.6.x` — new non-breaking features and larger visual improvements
- `2.0.0` — major architectural or breaking changes

---

**FYFAEN v1.5.0 — Production release.** 🖤
