1. Jármű osztály létrehozása. Fel kell paraméterezni olyan változókkal ami lehet motor vagy autó is.
    - Szín
    - Súly
    - Kerék száma
    - Márka
    - Végsebesség

    - getJarmuInfo()
    - start()
    - getAlvazSzam() //egyedi számsor generálását adja vissza, de nem a metódus generál, hanem amikor létrejött egy jármű, akkor létrehozáskor generálódjon le. Ezt az értéket ne lehessen sehogyan sem felülírni, módosítani

2. Motor osztály létrehozása. Legyenek olyan egyébb paraméterek amik csak motor esetében értelmezhetőek és a getJarmuInfo metódus ezeket az infókat az alap adatokkal együtt adja vissza
3. Az autó osztáylra is a 2. pontban lévők a feladat
4. start metódus írja ki hogy a jármű beindítva és azt is hogy milyen jármű lett beindítva

5. Figyeljünk a változók láthatóságára. Ne tudjuk felülírni a getAlvazSzam metódus logikáját a gyermek osztályokból sem

6. Minden osztály külön file.
7. Generálj random 5-5 autót és motort. Használj hozzá tömböt vagy amit szeretnél. 
8 tálblázatban lássuk a végén az eredményt. autó típusa szine stb. és a metódusok meghívásának az eredményét

9. echo OSztálynév-re írja ki az osztálynak a nevét.

A feladat egy weboldal készítése

1. Főoldal: Logó, menüpontok, random szöveg és footer rész
2. Minden menüpont külön page de a page-ek kezelésére írj egy osztályt. 
3. Ha az autó/motor menüpontra kattituntunk, akkor listázzódjanak ki a járművek.
4. Legyen midnen járműnek saját adatlapja, amin megtudjuk nézni a részleteket.
5. Kapcsolat menüpontban egy test form ahol lehet üzenetet írni