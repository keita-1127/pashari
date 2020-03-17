#!/bin/sh

chgrp -Rf www-data storage
chgrp -Rf www-data bootstrap/cache

chmod -Rf 770 storage/*
chmod -Rf 770 bootstrap/cache

chmod 644 bootstrap/cache/.gitignore
chmod 644 storage/app/.gitignore
chmod 644 storage/app/public/.gitignore
chmod 644 storage/framework/.gitignore
chmod 644 storage/framework/cache/.gitignore
chmod 644 storage/framework/sessions/.gitignore
chmod 644 storage/framework/testing/.gitignore
chmod 644 storage/framework/views/.gitignore
chmod 644 storage/logs/.gitignore
chmod 644 storage/debugbar/.gitignore
chmod 644 storage/framework/cache/data/.gitignore

