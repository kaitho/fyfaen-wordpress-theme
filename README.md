# FYFAEN WordPress Theme

Custom WordPress theme for [fyfaen.store](https://fyfaen.store/).

## v0.1.0

This is the initial foundation for a WooCommerce-first custom theme.

### Design boundary

The theme is responsible for presentation, templates, navigation, CSS and frontend UX.

The following remain owned by WordPress/WooCommerce and their plugins:

- Products and variations
- Prices and inventory
- Cart and checkout processing
- Orders and customers
- Stripe payments
- Vipps/MobilePay payments
- Other payment gateways

The theme must not replace or modify payment processing logic.

## Development

The theme is intentionally being developed separately from the production site. Astra can remain installed as a fallback while the custom theme is tested.

## Roadmap

- [ ] Recreate FYFAEN header/navigation
- [ ] Build storefront/product grid
- [ ] Build single-product presentation
- [ ] Responsive mobile design
- [ ] Cart presentation
- [ ] Checkout presentation without changing payment logic
- [ ] Footer and content pages
- [ ] Accessibility and performance pass
- [ ] WooCommerce compatibility testing
- [ ] Stripe testing
- [ ] Vipps/MobilePay testing
