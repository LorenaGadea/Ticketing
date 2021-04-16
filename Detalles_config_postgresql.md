# Postgres en CentOS con autenticación usuario/contraseña local 
PostgreSQL viene configurado en CentOS de forma que no se pueda acceder con usuario/contraseña desde una conexión local.

Hay que modificar el fichero pg_hba.conf que se encuentra en `/var/lib/pgsql/data/pg_hba.conf` .
La configuración mostrada a continuación permite acceder especificando host, usuario y contraseña desde la misma máquina.

``` conf
# TYPE  DATABASE        USER            ADDRESS                 METHOD
# "local" is for Unix domain socket connections only
local   all             all                                     peer

# Enable md5 user/password IPv4 local connections with md5 user/password auth
host    all             all             127.0.0.1/32            md5

# Enable md5 user/password IPv4 local connections with md5 user/password auth
host    all             all             ::1/128                 md5

# Allow replication connections from localhost, by a user with the
# replication privilege.
local   replication     all                                     peer
host    replication     all             127.0.0.1/32            ident
host    replication     all             ::1/128                 ident
```
