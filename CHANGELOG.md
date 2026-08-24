CHANGELOG
---------

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
