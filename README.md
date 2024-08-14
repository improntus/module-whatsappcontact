# Module WhatsappContact

### Installation steps
#### Developer mode
```sh
composer require improntus/module-whatsappcontact
php bin/magento module:enable Improntus_WhatsappContact --clear-static-content
php bin/magento setup:upgrade
rm -rf var/di var/view_preprocessed var/cache generated/*
php bin/magento setup:static-content:deploy
```

#### Production mode
```sh
composer require improntus/module-whatsappcontact
php bin/magento module:enable Improntus_WhatsappContact --clear-static-content
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

### Features and user manual

Please refer to the [Adobe Commerce Marketplace](https://commercemarketplace.adobe.com/improntus-whatsappcontact.html) to get the user manual and available features.

If this module was helpful, we really appreciate you leaving us your review on the [Adobe Commerce Marketplace](https://commercemarketplace.adobe.com/improntus-whatsappcontact.html) ♡♡


## Author

[![N|Solid](https://improntus.com/wp-content/uploads/2022/05/Logo-Site.png)](https://www.improntus.com)
