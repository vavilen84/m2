#!/bin/bash
sudo chmod 777 -R var
php bin/magento cache:clean
php bin/magento cache:flush