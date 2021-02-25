# Dyn.WebProg-ChriMaMi
Willkommen im Projekt von Christoph Frischmuth, Matthias Gabel und Mickey Knop!

##Repository

Das Repiository ist über folgenden Link erreichbar: https://github.com/fh-erfurt/Dyn.WebProg-ChriMaMi

##Webseite

Um die Webseite in Betrieb zu nehmen müssen folgende Punkte abgearbeitet werden.

1. Kopieren Sie die den "**Dyn.WebProg-ChriMaMi**"-Ordner in das htcdocs Verzeichnes der XAMPP-Anwendung
2. Importieren Sie die SQL-Datei "**Dyn.WebProg-ChriMaMi/src/database/HORSCH_DB.sql**" in Ihren MySQL-Server
    (Es sollten nun 83 Abfragen ausgeführt worden sein. Die DB ist somit auch gleich befüllt.)
3. Starten Sie die Webseite in Ihrem Localhost in dem Sie in dem Projektordner auf das **src**-Verzeichnis klicken
    
Um die Webseite zu testen stehen Ihnen folgende Nutzer zur Verfügung

    Administrator
    Email-Adresse:  admin@admin.de
    Passwort:       Admin123
    
    User
    Email-Adresse:  user@user.de
    Passwort:       User123

Der Administrator kann im Gegensatz zum User andere Accounts Löschen.

Der User kann seine eigene Daten ändern.

Bei Bedarf können weitere Nutzer registriert werden. Diese werden standardmäßig als User angelegt.
Wenn man einen User zum Admin ändern möchte, muss man dieses in der DB tun.

##Ordnerstruktur

###/assets
In /assets finden Sie folgende Dateien:
* design Dateien (css)
* skript Dateien (js)
* diverse Bilder/Icons/Logos (png, jpg)
* JSON Dateien (json)
* Font Dateien 

 ###/config
 In /config finden Sie folgende Dateien:
 * configurations-Datei der Datenbank (database.php)
 * init-Datei zum initialisieren der Pfade (init.php)
 
 ###/controllers
 * accountsController (Signup, Login)
 * administrationController (MyData, MyOrder, UserManagement, Remove)
 * errorsController (Error404)
 * pagesController (Index, Main, Products, Imprint, SignUp, AboutUs, News, RedirectTimeOut, Contact)
 * sharedController (AdminNav, Footer, Header, SubNav)
 * shopController (Categories, Cart, Contact, Checkout, Add, Remove)
 
 ###/