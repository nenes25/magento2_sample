#Module de tests pour Magento 2
Pour installer le module :

bin/magento module:status # this will give us the status of each module. It'll show ours as disabled.
bin/magento module:enable Ashsmith_Blog # this will enable our module
bin/magento setup:upgrade # upgrade the system, essentially this will make sure any setup scripts have been run and the current module version saved to the setup_module table.
bin/magento module:status # confirm our module has been enabled!