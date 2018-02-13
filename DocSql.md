# mysql

## 1ère étape
Ouvrez mysql Workbench

appuyez sur le +

Nommez le 'connection name' comme vous voulez
Username : root
connectez vous

```Terminal
1. mysql -u root -p
(entrez votre mdp: root OU mdp de votre machine)

2. CREATE SCHEMA 'Data'
3. DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
4. CREATE TABLE `Data`.`User` ( `UserName` INT UNSIGNED NOT NULL AUTO_INCREMENT, `lastName` VARCHAR(50) NOT NULL, `firstName` VARCHAR(50) NOT NULL, `password` VARCHAR(20) NOT NULL, `town` VARCHAR(40) NOT NULL, `birthday` VARCHAR(20) NOT NULL, PRIMARY KEY (`UserName`));
5. SHOW DATABASES;
(un tableau)
6. USE DATA;
7. DESCRIBE USER;
(encore un tableau)
8. INSERT INTO `User` (`id`, `lastname`, `firstname`, `city`, `birthday`) VALUES (NULL, 'unNom', 'unPrenom', 'uneville', 'uneData(jjmmaaaa)');
```
## mySQL Workbench

dans la section à gauche sous 'SCHEMA', click droit 'refresh all'
ouvrez Data
ouvrez Tables
User, click droit 'Table Inspector'
User, poser sa souris dessus, et cliquer sur l'icône à droite
