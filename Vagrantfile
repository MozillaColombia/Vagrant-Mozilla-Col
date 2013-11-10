# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

    config.vm.box = "precise64"
    # config.vm.box_url = "http://cloud-images.ubuntu.com/vagrant/precise/current/precise-server-cloudimg-amd64-vagrant-disk1.box"

    # config.vm.network :private_network, ip: "200.200.200.200"
    config.vm.network :forwarded_port, guest: 80, host: 8080

    #config.vm.synced_folder "www", "/home/vagrant/www"
    #config.vm.synced_folder "puppet", "/home/vagrant/puppet"


    config.vm.provider :virtualbox do |v|
        # v.gui = true
        # v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
        v.customize ["modifyvm", :id, "--memory", 512]
        v.customize ["modifyvm", :id, "--name", "Vagrant-Mozilla-Col"]
    end

    config.vm.provision :puppet do |puppet|
        puppet.manifests_path = "puppet/manifests"
        puppet.module_path    = "puppet/modules"
        puppet.manifest_file  = "init.pp"
        puppet.options        ="--verbose --debug"
    end

end
