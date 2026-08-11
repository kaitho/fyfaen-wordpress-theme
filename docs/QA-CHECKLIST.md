# FYFAEN Theme QA Checklist

## Theme safety
- [ ] Activate theme on staging only.
- [ ] Keep Astra available as rollback during migration.
- [ ] Confirm no theme code creates, edits, deletes or refunds orders.
- [ ] Confirm no theme code calls Stripe, Vipps/MobilePay or other payment APIs.

## Product flow
- [ ] Product images load.
- [ ] Variable products allow selecting valid combinations.
- [ ] Stock status remains correct.
- [ ] Sale prices remain correct.
- [ ] Add to cart works for simple products.
- [ ] Add to cart works for variable products.

## Cart
- [ ] Quantity updates work.
- [ ] Remove item works.
- [ ] Coupons work if enabled.
- [ ] Shipping calculation works.
- [ ] Cart totals match WooCommerce.
- [ ] Checkout button points to the configured WooCommerce checkout.

## Checkout
- [ ] Billing fields work.
- [ ] Shipping fields work.
- [ ] Order notes work if enabled.
- [ ] Terms/privacy requirements work.
- [ ] All configured payment methods appear.
- [ ] Gateway-specific fields/widgets load.
- [ ] Express payment buttons load if enabled.
- [ ] Failed payment returns the expected WooCommerce/gateway error.
- [ ] Successful payment creates exactly one order.
- [ ] Customer receives the normal confirmation flow.

## Mobile
- [ ] Header navigation works.
- [ ] Product gallery works.
- [ ] Cart remains usable at narrow widths.
- [ ] Checkout remains usable at narrow widths.
- [ ] Payment buttons/widgets are not clipped.

## Performance/accessibility
- [ ] No console errors on homepage, shop, product, cart and checkout.
- [ ] Keyboard focus is visible.
- [ ] Reduced-motion preference is respected.
- [ ] Theme assets are only loaded where needed.
- [ ] Images are not unnecessarily duplicated or enlarged.

## Release gate
Do not activate on production until every checkout/payment item above passes on staging.
