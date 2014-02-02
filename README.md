# Requisitos
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

# Pasos para poner el sitio online en localhost
----------

- Descargamos los archivos
```
    git clone git@github.com:Mayccoll/Vagrant-Mozilla-Col.git
    cd Vagrant-Mozilla-Col
```

- Dentro del directorio de trabajo ejecutamos
 (Este proceso dura entre 3 y 5 minutos)

```
        $ vagrant up
```

 **Listo eso es todo ya tenemos nuestro entorno de trabajo listo para trabajar.**


Ahora abrimos Firefox y en la URL escribimos

```
        http://localhost:8080/
```

Se debe abrir la pagina de Mozilla Colombia totalmente funcional.

--------
# Directorio de Trabajo
----------

El directorio donde están ubicados los archivos  en nuestra carpeta de trabajo **WWW**

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
# Wordpress
----------

Si queremos acceder a la administración de wordpress

```
        http://localhost:8080/blog/wp-login.php
```

#### User: **vagrant**

#### Pass: **vagrant**

___________
# Cerrar
----------

Una vez terminemos de trabajar en la pagina apagamos la maquina virtual

```
        $ vagrant halt
        o
        $ vagrant suspend
```

La próxima vez que queramos volver a trabajar simplemente ejecutamos

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

# Como contribuir (IMPORTANTE)
----------
1. **Hacer un FORK en GITHUB.**

2. Clonar el repositorio desde su fork.
```bash
    git clone git@github.com:TUCUENTA/Vagrant-Mozilla-Col.git
```

3. Agregar upstream remoto.
```bash
    git remote add upstream git@github.com:Mayccoll/Vagrant-Mozilla-Col.git
   
    # Esto ahora te permitirá que hacer un pull de cambios del origen localmente y combinarlos, así:
    git fetch upstream
    git merge upstream/master
```

4. Crear una BRANCH con titulo detallado sobre lo que vas a trabajar y cambiarse a ella
```bash
    git checkout -b mejora_index
```

5. Trabajar

6. Agregar los cambios
```bash
    git add FILE
    # o
    git add .
```

7. Hacer COMMIT
```bash
    git commit -am "COMENTARIO DETALLADO"
```

8. Hacer un PUSH
```bash
    git push origin mejora_index
```

9. **Crea un PULL REQUEST**


- - -

By: ★m★
```bash
oooooooooo..........oooooooooo
oooooo..................oooooo
oooo.....oooooooooooo.....oooo
oo.....oooooooooooooo.......oo
o....ooooooooooooooooo.......o
....ooooo....ooooooooooooo....
...oooooo....oooooooooooooo...
...oooooo....oooooooooooooo...
...oooooo....oooooooooooooo...
....ooooo....oooooooooooooo...
o...ooooo....ooooooooooooo...o
oo....ooo....ooooooooooo.....o
ooo.....o....ooooooooo.....ooo
ooooo........oooooo......ooooo
ooooooo................ooooooo

```


