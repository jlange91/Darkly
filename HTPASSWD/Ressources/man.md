# HTPASSWD

## Flag
```
d19b4823e0d5600ceed56d5e896ef328d7a2b9e7ac7e80f4fcdb9b10bcb3e7ff
```

## Découverte

Sur la page http://{IP_ADDRESS}/robots.txt on peut voir une route /whatever \
dans cette route on retrouve un fichier htpasswd qui contient l'utilisateur :
```
root:8621ffdbc5698829397d97767ac13db3
```
Encore a l'aide de notre fantastique pote google il s'avère que \
8621ffdbc5698829397d97767ac13db3 est crypté en md5.
```
8621ffdbc5698829397d97767ac13db3 -> dragon
```
Sur la page http://{IP_ADDRESS}/admin on test cet utilisateur et BINGO !

## Documentation
- [owasp - Revue des fichiers obsolètes, de sauvegarde, non references pour recherche d'informations sensibles](https://www.owasp.org/index.php/4.3.4_Revue_des_fichiers_obsol%C3%A8tes,_de_sauvegarde,_non_references_pour_recherche_d%27informations_sensibles_(OTG-CONFIG-004))
- [owasp - Web Application Security Quick Reference Guide](https://www.owasp.org/images/4/42/OWASP_Web_Application_Security_Quick_Reference_Guide_0.2.pdf)

---

[RETURN](https://github.com/jlange91/darkly)
