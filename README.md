# Dyn.WebProg-ChriMaMi
Willkommen im Projekt von Christoph Frischmuth, Matthias Gabel und Mickey Knop!

## Repository

Das Repository ist über folgenden Link erreichbar: https://github.com/fh-erfurt/Dyn.WebProg-ChriMaMi

## Webseite

Um die Webseite in Betrieb zu nehmen, müssen folgende Punkte abgearbeitet werden.

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

## Ordnerstruktur

### /assets
In /assets finden Sie folgendes:
* design Dateien (css)
* skript Dateien (js)
* diverse Bilder/Icons/Logos (png, jpg)
* JSON Dateien (json)
* Font Dateien 

 ### /config
 In /config finden Sie folgendes:
 * configurations-Datei der Datenbank (database.php)
 * init-Datei zum initialisieren der Pfade (init.php)
 
 ### /controllers
 In /controllers finden Sie folgendes:
 * accountsController (Signup, Login)
 * administrationController (MyData, MyOrder, UserManagement, Remove)
 * errorsController (Error404)
 * pagesController (Index, Main, Products, Imprint, SignUp, AboutUs, News, RedirectTimeOut, Contact)
 * sharedController (AdminNav, Footer, Header, SubNav)
 * shopController (Categories, Cart, Contact, Checkout, Add, Remove)
 
 ### /core
 In /core finden Sie folgendes:
 * Basisklasse Controller (controller.class.php)
 * Basisfunktionen (functions.php)
 * Basisfunktionen Login (functionsLogIn.php)
 * JSON-Verwaltung (jsonMapping.php)
 * Basisklasse Model (model.class.php)
 
 ### /data
 In /data finden Sie folgendes:
 * Spicherplatz für sessions
 
 ### /database
 In /database finden Sie folgendes:
 * Init-Datei der Datenbank (HORSCH_DB.sql)
 * diverse SQL-Dateien zum Initialisieren der DB
 * MySqlWorkbench-Datei zum modellieren der DB (HORSCH_DB.mwb)
 * Abbild des ER Diagramms
 
 ### /models
 In /models finden Sie folgendes:
 * diverse Dateien der verschiedenen Models.
 
 ### /views
 In /views finden Sie folgendes:
 * die jeweiligen Unterordner, die die jeweiligen Views beinhalten.
 
 
