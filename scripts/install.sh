composer update 
composer update
mv web/wp-content/dropins/memcache-object-cache/object-cache.php web/wp-content/object-cache.php
mv web/wp-content/dropins/hyperdb/db.php web/wp-content/db.php
mv web/wp-content/plugins/batcache/advanced-cache.php web/wp-content/advanced-cache.php
rm -rf web/wp-content/dropins
cp inc/dropins/*.php web/wp-content/