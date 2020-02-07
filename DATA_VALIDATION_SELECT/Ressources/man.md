# DATA VALIDATION SELECT

## Flag
```
03A944B434D5BAFF05F46C4BEDE5792551A2595574BCAFC9A6E25F67C382CCAA
```

## Découverte

Sur la page http://{IP_ADDRESS}/?page=survey lorsqu'on inspecte les balises \
select on peut voir et changer la valeur d'une option.
example:
```
<option value="9999999999999">2</options>
```
Une fois le choix validé on trouve le flag ! Ne jamais faire confiance aux \
données clients.

## Documentation
- [owasp - Improper Data Validation](https://owasp.org/www-community/vulnerabilities/Improper_Data_Validation)

---

[RETURN](https://github.com/jlange91/darkly)
