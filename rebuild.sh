php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
php bin/magento cache:flush
sudo chmod 777 -R var
sudo chmod 777 -R pub
sudo chmod 777 -R generated
