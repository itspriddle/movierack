# Movierack

Movierack is a PHP "micro app" for Apache's `mod_autoindex`. It includes a
header and footer file which will be loaded by Apache, and a few custom
PHP functions.

Movierack attempts to make the default Apache index template a little prettier
using CSS and JavaScript. Other than that, it simple serves a directory
index of your document root. In the future, I'd like to add `<video>` and
`<audio>` support.


## Setup

Clone this repo:

    cd /home
    git clone git://github.com/movierack.git

Symlink your content:

    cd /home/movierack/public
    ln -s /media/my_drive/Movies

Or alternatively, Movierack will display anything you drop in `public/`,
(aside from PHP files, and the directory `assets/`).

Create a virtual host:

    <VirtualHost *:80>
      ServerName movierack.local
      DocumentRoot "/home/movierack/public"
      <Directory "/home/movierack/public">
        Order allow,deny
        Allow from all
        Options +FollowSymLinks
        AllowOverride All
      </Directory>
    </VirtualHost>

Visit <http://movierack.local> in your browser.


## License

MIT License, see LICENSE in this repo.
