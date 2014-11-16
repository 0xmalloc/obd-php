#!/bin/bash
l_path=`pwd`
php-fpm -c ./etc/php.ini -p $l_path  
sbin/nginx
