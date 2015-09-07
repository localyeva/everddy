#!/bin/bash
clear
pwd
lessc css/erveddy.less > css/erveddy.css
cp /var/www/everddy/public_html/html/css/erveddy.css /var/www/everddy/public_html/wp-content/themes/august2015/css/erveddy.css
echo "-------------------------------"
echo "run less sh"
echo "-------------------------------"

