# SQL INJECTION

## Flag
```
46910d9ce35b385885a9f7e2b336249d622f29b267a1771fbacf52133beddba8
```

## Découverte

Sur la page http://{IP_ADDRESS}/index.php?page=upload on peut upload des \
fichiers qui ne sont pas forcément des images car il vérifie seulement le type \
et pas le nom du fichier. L'upload d'un fichier représente toujours un risque \
significatif lorsqu'on ne vérifie pas les metadatas.

```
curl -F "Upload=send" -F "uploaded=@script.php;type=image/jpeg" http://{IP_ADDRESS}/index.php\?page=upload
```

---

## Documentation
- [owasp - Unrestricted File Upload](https://owasp.org/www-community/vulnerabilities/Unrestricted_File_Upload)


[RETURN](https://github.com/jlange91/darkly)
