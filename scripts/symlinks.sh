#!/bin/bash

rm -rf web/wp-content;
ln -s ../wp-content web/wp-content;
ln -s ../uploads wp-content/uploads;
