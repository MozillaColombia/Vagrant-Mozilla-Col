# Install latest Wordpress

class wordpress::install {

  # Create the Wordpress database
  exec { 'create-database':
    unless  => '/usr/bin/mysql -u root -pvagrant wordpress',
    command => '/usr/bin/mysql -u root -pvagrant --execute=\'create database wordpress\'',
  }

  exec { 'create-user':
    unless  => '/usr/bin/mysql -u wordpress -pwordpress',
    command => '/usr/bin/mysql -u root -pvagrant --execute="GRANT ALL PRIVILEGES ON wordpress.* TO \'wordpress\'@\'localhost\' IDENTIFIED BY \'wordpress\'"',
  }

  # Get a new copy of the latest wordpress release
  # FILE TO DOWNLOAD: http://wordpress.org/latest.tar.gz

  file { "/vagrant/www":
      ensure => "directory",
  }

    file { "/vagrant/www/blog":
      ensure => "directory",
  }

  # exec { 'download-wordpress': #tee hee
  #   command => '/usr/bin/wget http://wordpress.org/latest.tar.gz',
  #   cwd     => '/vagrant/www/blog/',
  #   #creates => '/vagrant/latest.tar.gz'
  #   creates => '/vagrant/www/blog/latest.tar.gz'
  # }

  # exec { 'untar-wordpress':
  #   cwd     => '/vagrant/www/blog',
  #   command => '/bin/tar --strip-components=1 -zxvf /vagrant/www/blog/latest.tar.gz',
  #   require => Exec['download-wordpress'],
  #   #creates => '/vagrant/wordpress',
  # }

  # Import a MySQL database for a basic wordpress site.
  file { '/tmp/wordpress-db.sql':
    source => 'puppet:///modules/wordpress/wordpress-db.sql'
  }

  exec { 'load-db':
    command => '/usr/bin/mysql -u wordpress -pwordpress wordpress < /tmp/wordpress-db.sql && touch /home/vagrant/db-created',
    creates => '/home/vagrant/db-created',
  }

  # Copy a working wp-config.php file for the vagrant setup.
  file { '/vagrant/www/blog/wp-config.php':
    source => 'puppet:///modules/wordpress/wp-config.php'
  }

}
