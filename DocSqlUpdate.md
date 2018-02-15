# mysql
## 1ère étape
### Ouvrez mysql Workbench

appuyez sur le +

Nommez le 'Data' comme vous voulez Username : root connectez vous

```Terminal
1. mysql -u root -p root
2. CREATE SCHEMA `Data`
3. DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
4. CREATE TABLE `Data`.`Article` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `title` VARCHAR(50) NOT NULL, `description` VARCHAR(720) NOT NULL, `price` VARCHAR(10) NOT NULL, `image` BLOB NOT NULL, PRIMARY KEY (`id`));
5. USE DATA;
6. SHOW DATABASES;
7. DESCRIBE ARTICLE;


//Si on veut le faire par le terminal directement: 
INSERT INTO `Article` (`id`, `title`, `description`, `price`) VALUES (NULL, 'FITT360', 'Description goes here', 'xxx€');//
```

# mySQL Workbench
dans la section à gauche sous 'SCHEMA', click droit 'refresh all' ouvrez Data ouvrez Tables Article, poser sa souris dessus, et cliquer sur l'icône à droite.