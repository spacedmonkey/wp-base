for url in $(bin/wp site list --field=domain --allow-root)
do
    /usr/bin/curl -sS http://localhost/wp-cron.php?doing_wp_cron -H "host: ${url}" 2>&1 &
done
wait