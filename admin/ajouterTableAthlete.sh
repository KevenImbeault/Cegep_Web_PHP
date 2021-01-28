#!/bin/sh

php -f /srv/http/TP/admin/ajouterTableAthlete.php

rm -r /srv/http/TP/images/

cp -r /tmp/images /srv/http/TP/images/