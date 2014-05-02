## Grain LAMP Stack

IP: 192.168.30.10

SSH Username: vagrant
SSH Password: vagrant

MySQL Username: root
MySQL Password: vagrant

Apache is configured with a variable document root, so that projects located at:

    /home/username/www/project1
    /home/username/www/project2
    /home/username/www/project3

can be accessed at:

    http://username.project1.example.com/
    http://username.project2.example.com/
    http://username.project3.example.com/

`./www` is mapped to `/var/www` on the virtual machine – creating a symlink
to your website files will allow you to browse and execute them at the IP
listed above.
