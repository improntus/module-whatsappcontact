# Módulo WhatsappContact

### Instalación
#### Developer mode
```sh
composer require improntus/whatsappcontact
php bin/magento module:enable Improntus_WhatsappContact --clear-static-content
php bin/magento setup:upgrade
rm -rf var/di var/view_preprocessed var/cache generated/*
php bin/magento setup:static-content:deploy
```

#### Production mode
```sh
composer require improntus/whatsappcontact
php bin/magento module:enable Improntus_WhatsappContact --clear-static-content
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

### Configuraciones

### Funcionamiento

## Author

[![N|Solid](https://improntus.com/wp-content/uploads/2022/05/Logo-Site.png)](https://www.improntus.com)