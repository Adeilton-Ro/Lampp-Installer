#!/bin/bash
sudo apt install lamp-server^ -y
sudo mv Lampp-Installer/ /var/www/html/
cd /var/www/html
sudo mkdir projects
sudo chmod -R 777 projects/ Lampp-Installer/
cd ~

echo "
#!/bin/bash
sudo service apache2 start 
Resposta='';
Resposta=\$(xdg-settings get default-web-browser);
Resposta=\${Resposta//.desktop};
code /var/www/html/projects/;
\$Resposta http://localhost/Lampp-Installer/src/index.html;
sudo service apache2 stop
" >> xampp.sh

chmod 777 xampp.sh