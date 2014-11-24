## Grain LAMP Stack

### Installation ###

1. Create a folder (or symlink to your prefered web directory) named `www` adjacent to `Vagrantfile`.
2. Enter `vagrant up`  to configure and launch the machine.
3. Enter the following line in your local `/etc/hosts` file to map a working hostname to the Vagrant box's IP address: `192.168.30.10 graindev`

### Usage ###

IP: 192.168.30.10
(Apache is running on port 80)

SSH Username: vagrant
SSH Password: vagrant

MySQL Username: root
MySQL Password: vagrant
(use an SSH tunnel to connect to MySQL)

You can also enter `vagrant ssh` to SSH into the machine.
