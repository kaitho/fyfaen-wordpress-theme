# FYFAEN Theme Architecture

## Boundary

The FYFAEN theme owns presentation:

- HTML templates
- CSS and frontend assets
- Navigation
- Visual layout
- Responsive behavior
- WooCommerce presentation

WordPress/WooCommerce/plugins own commerce:

- Products
- Variations
- Pricing
- Inventory
- Cart state
- Checkout processing
- Orders
- Customers
- Stripe
- Vipps/MobilePay

## Rule

Do not add payment processing, order mutation, gateway credentials, or checkout business logic to the theme.

When a visual requirement needs WooCommerce data, use WooCommerce's public APIs, template hooks, filters, and actions without replacing the underlying commerce workflow.
