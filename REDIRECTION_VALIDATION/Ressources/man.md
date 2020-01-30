# HIDDEN_FILES

## Flag
```
B9E775A0291FED784A2D9680FCFAD7EDD6B8CDF87648DA647AAF4BBA288BCAB3
```

## Découverte

Lorsqu'on inspecte la page http://{IP_ADDRESS}/index.php on peut voir un \
élément intéressant :
```
<a href="index.php?page=redirect&site=facebook" class="icon fa-facebook"></a>
```
si on change le nom de la redirection on récupère un flag par exemple :
```
<a href="index.php?page=redirect&site=https://malware.com" class="icon fa-facebook"></a>
```

## Documentation
- [owasp - Unvalidated Redirects](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html)

---

[RETURN](https://github.com/jlange91/darkly)
