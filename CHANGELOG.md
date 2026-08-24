CHANGELOG
---------

### 1.0.9 (2026-08-24)
* Replaced the empty WhatsApp icon placeholder with the brand SVG rendered inline, so the floating button icon shows again.
* Refactored `_module.less`: namespaced the LESS variables (`@whatsapp-widget__*`) to avoid colliding with other modules/themes, dropped obsolete vendor prefixes, extracted the popup speech-bubble arrow into a reusable mixin, and replaced the empty `@media` placeholders with Magento's native `.media-width()` mixin.
* Removed the popup "call to action" animation, which referenced a `@keyframes` that did not exist and never had a visible effect, along with the now-unused JS class toggling in the template.
* Fixed the floating button positioning at the top-right/top-left corners.
* Cleaned up `view/adminhtml`: moved the extension credits row's inline styles into `improntus.css`, modernized `Version.php` (typed, promoted, readonly constructor properties), and removed unused/duplicate admin assets (`logo_improntus.svg`, `brand_logo.svg`).

### 1.0.8 (2026-08-24)
* Compatibility with Adobe Commerce and Magento Open Source 2.4.9
* Replaced the inline `<script>` of the storefront template with `SecureHtmlRenderer` (Content Security Policy compliance).
* Built the `api.whatsapp.com` URL in the block using `http_build_query`, so the prefilled message is properly URL encoded.
* Replaced the deprecated jQuery `.mouseenter()` / `$(document).ready()` calls (jQuery 3.7).
* Added `declare(strict_types=1)`, return types and PHPDoc blocks across the module classes.

### 1.0.7 (2025-07-16)
* Compatibility with Adobe Commerce and Magento Open Source 2.4.8-p1

### 1.0.6 (2024-04-24)
* Removed require Default text in message field

### 1.0.5 (2024-02-03)
* Require the module improntus/module-core.

### 1.0.4 (2024-01-27)
* Refactored styles for the admin.
* Added improntus logo to menu in Store Configuration
* Added setting link to Improntus extension sidebar menu

### 1.0.3 (2024-08-28)

* Updated composer.json
* Compatibility with Adobe Commerce and Magento Open Source 2.4.7
* Removed unused files

### 1.0.2 (2023-05-12)

* Add compatibility php 8.1
