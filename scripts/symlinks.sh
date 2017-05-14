#!/bin/bash

rm -rf html/wp-content;
ln -s ../wp-content html/wp-content;
cp htaccess.txt html/.htaccess
