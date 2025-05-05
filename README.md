# Database Final Project
### Introduction
This website is my final project for CS342 Database Management Systems. The primary goal is to create a database which can only be interacted with through what is allowed by the website.

### How to setup
To setup this server for yourself, you will need to set up Apache Web Server v2 as well as MySQL. It is also recommended that you utilize a firewall.

Once that is complete, clone this repository into /var/www. Then, you must change Apache's DocumentRoot from /var/www/html to /var/www/[path-to-repository], inside /etc/apache2/sites-available/000-default.conf.

After that, you will need additionally to create PHP scripts in a separate folder from the root to access the database. I decided to place them in /var/www/db_connections.

Once that is complete, you will have a working version of this app!
