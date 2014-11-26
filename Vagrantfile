Vagrant.configure("2") do |config|

  # VirtualBox
  #config.vm.provider "virtualbox" do |v|
    config.vm.box = "precise64"
    config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  #end

  # VMWare Fusion
  #config.vm.provider "vmware_fusion" do |v|
  #  config.vm.box = "precise64_vmware"
  #  config.vm.box_url = "http://files.vagrantup.com/precise64_vmware.box"
  #end

  ##
  # Ansible
  #
  config.vm.provision "ansible" do |ansible|
    ansible.sudo = "true"
    ansible.playbook = "playbook.yml"
  end

  ##
  # Hostname and SSH credentials
  #
  config.vm.hostname = "graindev"

  ##
  # Network Configuration
  #
  config.vm.network "private_network", ip: "192.168.30.10"

  ##
  # Share code repository to webroot
  #, owner: "root", group: "root"
  config.vm.synced_folder "./www/", "/var/www"

end
