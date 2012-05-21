- Ir al directorio del proyecto y ejecutar:
    mkdir cache log && chmod 777 cache log

- Ejecutar 'ifconfig' para saber tu IP local actual y anotarla, por ejemplo '192.168.1.64'.

- Editar el archivo httpd.conf, en XAMPP el archivo /opt/lampp/etc/etxtra/httpd-vhosts.conf y añadir lo siguiente, 
ojo sustituir 'IP_LOCAL' por tu ip local y 'RUTA_DE_TU_PC' por la ruta global hasta el directorio del proyecto:

    # Be sure to only have this line once in your configuration
    # the address can be 127.0.0.1 or any other
    #NameVirtualHost 127.0.0.4:80 

    # This is the configuration for your project
    # the address can be 127.0.0.1 or any other
    #Listen 127.0.0.4:80 

    <VirtualHost IP_LOCAL:80>  # the address can be 127.0.0.1 or any other
      ServerName rutino-server
      DocumentRoot "/RUTA_DE_TU_PC/rutino-server/web"
      DirectoryIndex frontend_dev.php

      <Directory "/RUTA_DE_TU_PC/rutino-server/web">
        AllowOverride All
        Allow from All
      </Directory>

      Alias /sf /RUTA_DE_TU_PC/rutino-server/lib/vendor/symfony/data/web/sf
      <Directory "/RUTA_DE_TU_PC/rutino-server/lib/vendor/symfony/data/web/sf">
        AllowOverride All
        Allow from All
      </Directory>
    </VirtualHost>


- Editar el archivo /etc/hosts y añadir, ojo sustituir 'IP_LOCAL' por tu ip local:
    IP_LOCAL rutino-server

- Reiniciar Apache.

- Desde el directorio del proyecto ejecutar los siguientes comandos:
    php symfony doctrine:build --all --no-confirmation
    php symfony doctrine:data-load

- Entrar en la aplicación a través del navegador, ojo sustituir 'IP_LOCAL' por tu ip local:
    http://IP_LOCAL/backend_dev.php (usuario: admin, clave: admin)

- Prueba la api a través del navegador, ojo sustituir 'IP_LOCAL' por tu ip local:
    http://IP_LOCAL/api_dev.php/wallet (para ver todas las wallet en json)
    http://IP_LOCAL/api_dev.php/wallet.json (para ver todas las wallet en json)
    http://IP_LOCAL/api_dev.php/wallet.xml (para ver todas las wallet en xml)
    http://IP_LOCAL/api_dev.php/wallet.xml?user_id=2 (para ver todas las wallet del usuario 2 en json)
  
    http://IP_LOCAL/api_dev.php/account (para ver todas las account en json)
    http://IP_LOCAL/api_dev.php/account.json (para ver todas las account en json)
    http://IP_LOCAL/api_dev.php/account.xml (para ver todas las account en xml)
    http://IP_LOCAL/api_dev.php/account.xml?user_id=2 (para ver todas las account del usuario 2 en json)
  
    http://IP_LOCAL/api_dev.php/transaction (para ver todas las transaction en json)
    http://IP_LOCAL/api_dev.php/transaction.json (para ver todas las transaction en json)
    http://IP_LOCAL/api_dev.php/transaction.xml (para ver todas las transaction en xml)
    http://IP_LOCAL/api_dev.php/transaction.xml?user_id=2 (para ver todas las transaction del usuario 2 en json)
  
    http://IP_LOCAL/api_dev.php/periodic_transaction (para ver todas las periodic_transaction en json)
    http://IP_LOCAL/api_dev.php/periodic_transaction.json (para ver todas las periodic_transaction en json)
    http://IP_LOCAL/api_dev.php/periodic_transaction.xml (para ver todas las periodic_transaction en xml)
    http://IP_LOCAL/api_dev.php/periodic_transaction.xml?user_id=2 (para ver todas las periodic_transaction del usuario 2 en json)
  
    http://IP_LOCAL/api_dev.php/report (para ver todas las report en json)
    http://IP_LOCAL/api_dev.php/report.json (para ver todas las report en json)
    http://IP_LOCAL/api_dev.php/report.xml (para ver todas las report en xml)
    http://IP_LOCAL/api_dev.php/report.xml?user_id=2 (para ver todas las report del usuario 2 en json)
  
    http://IP_LOCAL/api_dev.php/currency (para ver todas las currency en json)
    http://IP_LOCAL/api_dev.php/currency.json (para ver todas las currency en json)
    http://IP_LOCAL/api_dev.php/currency.xml (para ver todas las currency en xml)

    http://IP_LOCAL/api_dev.php/account_type (para ver todas las account_type en json)
    http://IP_LOCAL/api_dev.php/account_type.json (para ver todas las account_type en json)
    http://IP_LOCAL/api_dev.php/account_type.xml (para ver todas las account_type en xml)
