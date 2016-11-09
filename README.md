# ProjectChur

WebApplikationsprojekt IuK von Robert Panzer und Adriano Barra

Die WebApp ist für Vereine, die Ihre Termine einfach verwalten wollen. Der Verein kann Mitglieder zu den einzelnen Terminen einladen.


# Projektname: myClub

Framework: Laravel

Homepage: https://laravel.com/

Dokumentation: https://laravel.com/docs/5.3

Version: 5.3




Der Code für diese WebApp ist in diesem Git Repository. Damit die Website angeschaut werden kann braucht es eine virtuelle Maschine.

Hier die Anleitung zur Installation der virtuellen Maschine und Homestead:
(Die Anleitung ist nur in Englisch verfügbar und Teile davon wurden von der Laravel-Seite kopiert)




# 1 Installationen:

### 1.1 Vagrant installieren: 
https://www.vagrantup.com/downloads.html
### 1.2 VirtualBox installieren: 
https://www.virtualbox.org/wiki/Downloads

### 1.3 Vagrant Box installieren: 
Once VirtualBox / VMware and Vagrant have been installed, you should add the laravel/homestead box to your Vagrant installation using the following command in your terminal. It will take a few minutes to download the box, depending on your Internet connection speed:
Öffnen sie dazu z.B. die Git Bash und kopieren sie folgenden Befehl:
```
vagrant box add laravel/homestead
```

### 1.4 Homestead installieren:
You may install Homestead by simply cloning the repository. Consider cloning the repository into a  Homestead folder within your "home" directory, as the Homestead box will serve as the host to all of your Laravel projects:
```
cd ~

git clone https://github.com/laravel/homestead.git Homestead
```

Once you have cloned the Homestead repository, run the bash init.sh command from the Homestead directory to create the "Homestead.yaml" configuration file. The "Homestead.yaml" file will be placed in the "~/.homestead" hidden directory:
```
bash init.sh
```


# 2 Homestead konfigurieren:

### 2.1 Ordnerkonfiguration
The folders property of the "Homestead.yaml" file lists all of the folders you wish to share with your Homestead environment. As files within these folders are changed, they will be kept in sync between your local machine and the Homestead environment. You may configure as many shared folders as necessary:
```
folders:
    - map: ~/Code *
      to: /home/vagrant/Code *
```

### 2.2 Konfiguration Nginx Sites
Not familiar with Nginx? No problem. The sites property allows you to easily map a "domain" to a folder on your Homestead environment. A sample site configuration is included in the "Homestead.yaml" file. Again, you may add as many sites to your Homestead environment as necessary. Homestead can serve as a convenient, virtualized environment for every Laravel project you are working on:
```
sites:
    - map: homestead.app *
      to: /home/vagrant/Code/Laravel/public *
```      
If you change the sites property after provisioning the Homestead box, you should re-run "vagrant reload --provision" to update the Nginx configuration on the virtual machine.

### 2.3 Das Hostfile bearbeiten

You must add the "domains" for your Nginx sites to the hosts file on your machine. The hosts file will redirect requests for your Homestead sites into your Homestead machine. On Mac and Linux, this file is located at "/etc/hosts". On Windows, it is located at  "C:\Windows\System32\drivers\etc\hosts". The lines you add to this file will look like the following:
```
192.168.10.10  myclub.app
```
Make sure the IP address listed is the one set in your "~/.homestead/Homestead.yaml" file. Once you have added the domain to your hosts file and launched the Vagrant box you will be able to access the site via your web browser:
```
http://myclub.app
```

### 2.4 Git Repository Clonen

Clonen sie jetzt dieses Repository in den Ordner "~/Code"
```
git clone https://github.com/kleinadi/ProjectChur.git
```

### 2.5 Erstelle ein SSH key pair 
run this command in your homestead folder:
```
ssh-keygen -t rsa -C "your@email.com"
```


# 3 Vagrant Box

### 3.1 Vagrant Box starten
Once you have edited the "Homestead.yam"l to your liking, run the "vagrant up" command from your Homestead directory. Vagrant will boot the virtual machine and automatically configure your shared folders and Nginx sites.

To destroy the machine, you may use the "vagrant destroy --force" command.

### 3.2 Vagrant Box Befehle
Execute following commands from your homestead folder to start shutdown and reboot the vagrant box
```
vagrant up 
vagrant halt
bagrant reload
```

### 3.3 Zugriff auf die Vagrant Box
Execute following command from your homestead folder to access the vagrant box via ssh
```
vagrant ssh
```

### 3.4 Installation der benötigten Packete
Enter your vagrant box via ssh and navigate to the root of the lineup project and execute following command to let the composer install the required packages:
```
composer install
```

### 3.5 Datenbank aktualisieren
All the migrations have to be executed with following command to create the database structure:
```
php artisan migrate
```
