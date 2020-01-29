# HIDDEN_FILES

## Flag
```
99dde1d35d1fdd283924d84e6d9f1d820
```

## Découverte

Sur la page http://{IP_ADDRESS}/robots.txt on peut voir une route /.hidden \
dans cette route on retrouve tout un tas de fichiers qui ont tous un README. Je
fais donc un script php pour chercher tous les README:
```
README => Demande à ton voisin de gauche
README => Non ce n'est toujours pas bon ...
README => Demande à ton voisin du dessous
README => Demande à ton voisin du dessus
README => Toujours pas tu vas craquer non ?
README => Demande à ton voisin de droite
README => Tu veux de l'aide ? Moi aussi !
README => 99dde1d35d1fdd283924d84e6d9f1d820
```
Le dernier README semble ne pas être crypté donc j'en déduis que c'est le flag
à trouver.

## Documentation
- [owasp - Revue des fichiers obsolètes, de sauvegarde, non references pour recherche d'informations sensibles](https://www.owasp.org/index.php/4.3.4_Revue_des_fichiers_obsol%C3%A8tes,_de_sauvegarde,_non_references_pour_recherche_d%27informations_sensibles_(OTG-CONFIG-004))
- [owasp - Web Application Security Quick Reference Guide](https://www.owasp.org/images/4/42/OWASP_Web_Application_Security_Quick_Reference_Guide_0.2.pdf)

---

[RETURN](https://github.com/jlange91/darkly)
