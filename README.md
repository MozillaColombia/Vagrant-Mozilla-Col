Requisitos
----------
Tener instalado:

- Virtualbox

```
        https://www.virtualbox.org/
```

- Vagrant

```
        http://www.vagrantup.com/
```

- Less (opcional)

```
        http://lesscss.org/
```

---------
Pasos
----------

- Creamos un Directorio donde vamos a trabajar
```
        ejem: 
        $ mkdir Vagrant-Mozilla-Col
```

- Descargar la box precise64 y la ubicamos en el directorio de trabajo

```
        http://files.vagrantup.com/precise64.box
```

- Descargar Archivos de Github ya sea clonando o descargando el archivo zip

```
        https://github.com/mozilla/One-Mozilla-blog/archive/master.zip
```

```
        $ git clone https://github.com/Mayccoll/Vagrant-Mozilla-Col.git .
```

- El directorio debe quedar asi

```
        Vagrant-Mozilla-Col
        ├── puppet
        │   ├── manifests
        │   └── modules
        ├── www
        │   ├── blog
        │   ├── main
        │   ├── favicon.ico
        │   ├── index.php
        │   ├── notas.txt
        │   ├── README.md
        │   └── robots.txt
        └── Vagrantfile
        └── precise64.box
```

- Por consola añadimos nuestra box a vagrant

```
        $ vagrant box add precise64 [RUTA_A_BOX]

        Ejem:
        $ vagrant box add precise64 /home/Vagrant-Mozilla-Col/precise64.box
```

- Verificamos que nuestra box esta agregada a vagrant
```
        $ vagrant box list
        precise64 (virtualbox)
```

- Por consola dentro del directorio de trabajo ejecutamos
 (Este proceso dura entre3 y 5 minutos)

```
        $ vagrant up
```

Listo eso es todo ya tenemos nuestro entorno de trabajo listo para trabajar.


Ahora abrimos Firefox y en la URL escribimos 

```
        http://localhost:8080/
```

Se debe abrir la pagina de Mozilla Colombia totalmente funcional.

--------
### Directorio de Trabajo

El directorio donde estan ubicados los archivos estan en nuestra carpeta de trabajo **WWW**

```
        Vagrant-Mozilla-Col
        ├── www
        │   ├── blog
        │   ├── main

```

El archivo CSS  para editar la pagina principal esta en:

```
        >>> _css.less
        /Vagrant-Mozilla-Col/www/main/less/_css.less
```

El archivo CSS para editar del blog (wordpress) esta en:

```
        >>> _OneColombia.less
        /Vagrant-Mozilla-Col/www/blog/wp-content/themes/OneColombia/less/_OneColombia.less
```
__________
### Wordpress

Si queremos aceder a la administracion de wordpress

```
        http://localhost:8080/blog/wp-login.php
```

#### User: **vagrant**

#### Pass: **vagrant**

___________
### Cerrar

Una vez terminemos de trabajar en la pagina apagamos la maquina virtual

```
        $ vagrant halt
        o
        $ vagrant suspend
```

La proxima vez que queramos volver a trabajar simplemente ejecutamos

```
        $ vagrant up
```

#### Notas : 
- Preferiblemente clonar el repositorio para poder hacer pull request.
- No actualizar wordpress ni los plugins
- Si queremos destruir la maquina virtual ejecutamos dentro del directorio de trabajo

```
    $ vagrant destroy
```
