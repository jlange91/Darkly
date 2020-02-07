# HIDDEN FIELDS

## Flag
```
1D4855F7337C0C14B6F44946872C4EB33853F40B2D54393FBE94F49F1E19BBB0
```

## Découverte

En inspectant la page http://{IP_ADDRESS}/?page=recover on trouve un input \
caché.
```
<input type="hidden" name="mail" value="webmaster@borntosec.com" maxlength="15">
```
Si on change la valeur de cet input on trouve le flag que nous cherchions. Les \
input caché sont parfois utilisés pour stocker des données côté client.

## Documentation
- [owasp - Web Parameter Tampering](https://owasp.org/www-community/attacks/Web_Parameter_Tampering)

---

[RETURN](https://github.com/jlange91/darkly)
