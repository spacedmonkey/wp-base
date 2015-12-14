composer update --prefer-dist --no-dev --verbose
composer update --prefer-dist --no-dev --verbose
mv web/wp-content/dropins/memcached-redux/object-cache.php web/wp-content/object-cache.php
mv web/wp-content/dropins/hyperdb/db.php web/wp-content/db.php
mv web/wp-content/dropins/batcache/advanced-cache.php web/wp-content/advanced-cache.php
mv web/wp-content/dropins/batcache/batcache.php web/wp-content/mu-plugins/batcache.php
cp inc/dropins/*.php web/wp-content/
cp inc/mu-plugins/*.php web/wp-content/mu-plugins/
ln -s /var/www/content /var/www/web/wp-content/uploads
