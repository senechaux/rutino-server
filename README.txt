Editar el archivo httpd.conf, en XAMPP el archivo /opt/lampp/etc/etxtra/httpd-vhosts.conf

# Be sure to only have this line once in your configuration
NameVirtualHost 127.0.0.4:80 # the address can be 127.0.0.1 or any other

# This is the configuration for your project
Listen 127.0.0.4:80 # the address can be 127.0.0.1 or any other

<VirtualHost 127.0.0.4:80>  # the address can be 127.0.0.1 or any other
  ServerName rutino-server
  DocumentRoot "/home/angel/workspace_rutino/rutino-server/web"
  DirectoryIndex frontend_dev.php

  <Directory "/home/angel/workspace_rutino/rutino-server/web">
    AllowOverride All
    Allow from All
  </Directory>

  Alias /sf /home/angel/workspace_rutino/rutino-server/lib/vendor/symfony/data/web/sf
  <Directory "/home/angel/workspace_rutino/rutino-server/lib/vendor/symfony/data/web/sf">
    AllowOverride All
    Allow from All
  </Directory>
</VirtualHost>


Editar el archivo /etc/hosts