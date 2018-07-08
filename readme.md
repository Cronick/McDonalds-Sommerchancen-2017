# McDonalds Sommerchancen 2017

Dette system er forældet og virker ikke. Så nok ikke meget i får ud af det alligevel.

Proxy opbygget til at gør det muligt at lave kuponer til McDonalds Sommerchancen 2017.

### Opsætning - Android

*REMINDER: Slå WiFi fra. Den følgende guide kan IKKE udføres på WiFi.*

1. Download og installér certifikatet: mcd-cert.pem
2. Download Drony
3. Åbn Drony og swipe til højre, så du kommer til Settings. Tryk på "Settings for not listed networks".
4. Udfyld settings så den matcher dette: http://i.imgur.com/JkFs12r.png (Ændre dog hostname til din egen ip)
5. Swipe til venstre igen så du kommer til en side, hvor der står "OFF" nede i bunden. Tryk på OFF og vent på at der kommer en masse tekst frem (de linjer kaldes requests, hvis I lige vil blære jer overfor vennerne).
6. Åbn jeres favorit browser og indtast http://myip.dk/ og vent på at den loader. Den burde gerne give jer en IP og et hostname. Tjek at ipen passer til din server.

Hvis du kører Android Nougat (version 7) eller over, så skal du fjerne McDonalds appen og installere denne i stedet for: com.mcdonalds.mobileapp\_1.0.3\_patched.apk

### Opsætning - iOS
1. Installer det her certifikat på din iPhone: mcd-cert.crt
2. Gå ind i wifi og tryk på "i" tegnet ud for det wifi du er forbundet til. 
3. Gå ned i bunden under http-proxy og tryk på manuelt og skriv din server-ip i server og 9999 i port.
4. Åbn jeres favorit browser og indtast http://myip.dk/ og vent på at den loader. Den burde gerne give jer en IP og et hostname. Tjek at ipen passer til din server.