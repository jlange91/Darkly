# USER AGENT

## Flag
```
f2a29020ef3132e01dd61df97fd33ec8d7fcd1388cc9601e7db691d17d4d6188
```

## Découverte

Lorsqu'on inspecte la page http://{IP_ADDRESS}/index.php?page=e43ad1fdc54babe674da7c7b8f0127bde61de3fbe01def7d00f151c2fcca6d1c \
on retrouve des commentaires interessant :
```
<!--
You must coming from : "https://www.nsa.gov/" to go to the next step
-->
```
et :
```
<!--
 Let's use this browser : "ft_bornToSec". It will help you a lot.
-->
```
On tente le curl en modifiant le lien de référence ainsi que le User-Agent du \
header.

```
curl -H "User-Agent:ft_bornToSec" --referer https://www.nsa.gov/ http://10.11.200.198/index.php\?page\=e43ad1fdc54babe674da7c7b8f0127bde61de3fbe01def7d00f151c2fcca6d1c > test.txt
```
Et Bingo on trouve le flag.

---

## Documentation
- [cyberciti - linux curl command](https://www.cyberciti.biz/faq/linux-unix-appleosx-bsd-curl-command-httpreferer/)


[RETURN](https://github.com/jlange91/darkly)
