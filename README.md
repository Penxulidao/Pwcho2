# Pwcho2

## Aby uruchomić Stack, trzeba wprowadzić polecenie ##
```
docker compose up --build
```
Wynik działania aplikacji pokazano poniżej.
![alt text](https://github.com/Penxulidao/Pwcho2/blob/main/screenshots/Page.png "Http")


## Aby wygenerować schemat docker-compose.yml trzeba użyć polecenie ##

```
docker run --rm -it --name dcv -v ${PWD}:/input pmsipilot/docker-compose-viz render -m image docker-compose.yml --output-file=achmea.techday.png --force
```
![alt text](https://github.com/Penxulidao/Pwcho2/blob/main/screenshots/schemat.png "Schemat")

