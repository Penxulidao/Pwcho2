# Pwcho2Kolomoiets

## Aby uruchomić Stack, trzeba wprowadzić polecenie ##
```
docker compose up --build
```
Wynik działania aplikacji pokazano poniżej.

![alt text](https://github.com/DenisFromUkraine/Pwcho2Kolomoiets/blob/main/screenshots/Page.PNG "Http")

## Aby wygenerować schemat docker-compose.yml trzeba użyć polecenie ##

```
docker run --rm -it --name dcv -v ${PWD}:/input pmsipilot/docker-compose-viz render -m image docker-compose.yml --output-file=achmea.techday.png --force
```
![alt text](https://github.com/DenisFromUkraine/Pwcho2Kolomoiets/blob/main/screenshots/schemat.PNG "Schemat")

