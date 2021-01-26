#!/bin/sh
echo "service mysql start;exit;"|su
mysqladmin -u root password root
mysql -e "CREATE DATABASE IF NOT EXISTS ctf;USE ctf; use ctf;source /ctf.sql;update  \`flag\` set  flag='AliPayPassIs00234141$FLAG' where id=1" -uroot -proot
export FLAG=not_flag
FLAG=not_flag
service apache2 start
rm -f /ctf.sql
tail -F /dev/null
