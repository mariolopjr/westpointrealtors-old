#!/bin/sh

# Export username, password, and output for SQL backup
envsubst '$MYSQL_DB_NAME $MYSQL_DB_USERNAME $MYSQL_ROOT_PASSWORD $MYSQL_DB_BACKUP_FILE_PATH' < /backup.template > /etc/cron.daily/backup
chmod ug+x /etc/cron.daily/backup
sh /etc/cron.daily/backup
mysqld
