---
title: "Redovisningar"
...
Redovisningar
=========================

## Kmom01

### Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.

Det är svårt att säga. Jag känner att jag har bra koll på grunderna i PHP nu och hur man skriver bra PHP kod. Vi har jobbat mycket med databaser/PDO så det är också något jag har bra koll på nu. Men när man läser "PHP The Right Way" inser man hur mycket man har kvar att lära sig och bli bättre på. Något jag skulle vilja bli bättre på är "Error and Exceptions", testing och säkerhet. I oophp hade jag inte mycket tid att lägga på detta, så det är absolut något jag vill fortsätta utveckla nu det kommande året.

Sen finns det bland annat "Servers and Deployment", "Virtualization" och "Caching" som verkar intressant. Det är sånt jag inte har något koll på alls, men skulle kanske vilja lära mig mer om. Speciellt object caching.

### Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?

Jag gjorde min egen undersökning för ett litet tag sen inför ett eget projekt. Då var Laravel en överlägsen vinnare och det verkar som det fortfarande är samma då majoriteten av de artiklar som jag tittat på sätter Laravel som nummer 1.

Andra frameworks som förekommer högt upp i rankingen är Symphony och Phalcon - de ligger 2:a eller 3:a i de flesta artiklar. En vill även placera CakePHP som nummer ett i sin ranking, men i övriga artiklar ligger det längre ner i listan.

Mina källor:

http://www.hongkiat.com/blog/best-php-frameworks/

https://insanelab.com/blog/web-development/laravel-best-php-framework-2017/

http://noeticforce.com/best-php-frameworks-for-modern-web-development

http://www.archer-soft.com/en/blog/top-7-best-php-frameworks-2017

https://dzone.com/articles/top-php-frameworks-of-2017

https://coderseye.com/best-php-frameworks-for-web-developers/

https://medium.com/level-up-web/best-php-frameworks-for-web-developers-in-2017-c8a041671a79

Alla undersökningar är från 2017 (enligt artiklarna).

### Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.

Ja, får ju säga att man har klarat första året på programmet tack vare dessa communities som finns, som stackoverflow till exempel. Utan dem hade jag aldrig klarat mig, och det hade definitivt inte varit lika roligt att programmera. Tycker det är fantastiskt att det finns så många flitiga programmerare som lägger tid och energi på att hjälpa andra dela sin egen kod.

Tyvärr har jag inte mycket erfarenhet av att själv hjälpa till då det oftast är jag som ställer frågan. Det är något jag skulle vilja bli bättre på. Hur många gånger jag har googlat ett problem och hittat lösningen på stackoverflow eller liknande går inte att räkna. Någon gång får man ju ge tillbaks.

Jag ser dessa communities som absolut nödvändiga, och jag tror starkt på allt som har med open source att göra. Det ger så mycket och många fantastiska grejer har kommit från att programmerare har kunnat utbyta idéer fitt med varandra.

### Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?

Det verkar kanon att kunna ha friheten att plocka efter behov och inte vara inlåst i ett ramverk. Många erfarna utvecklare vill nog gärna ha den friheten. Dock verkar det som att färdiga ramverk för tillfället växer i efterfrågan, då det är enklare för mindre erfarna utvecklare.

Så det finns behov för båda, och kommer förmodligen alltid att finnas. Man behöver båda för att alla ska bli glada. Då är det svårt att föreställa sig en helt ramverklös värld inom den närmsta framtiden. Men förhoppningsvis kommer vi gå mot en ramverksfri värld i framtiden.

### Hur gick dina förberedelser inför kommentarssystemet?

Jag har inte gjort något större planering av mitt kommentarsystem. Jag tittade runt lite på olika webbplatser som stackoverflow och reddit för att få en idé om hur det kan se ut och vilken struktur det kan ha.

Sen har jag tänkt mycket på hur kod och databasstrukturen skulle kunna se ut för att det ska funka som en fristående modul. Men att börja skriva någon kod innan jag vet mer om vad det faktiskt är vi ska göra, är lite svårt.

## Kmom02

### Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?

Vi har kommit i kontakt med det lite i tidigare kurser som oopython och webapp men jag tänkte inte mycket på själva begreppet just då. Efter att ha läst artiklen på dbwebb och hört mos prata om det på föreläsningen så kan jag säga att jag förstår vad vi gjorde då och varför.

Främst ser jag att det blir en tydlig uppdelning av koden och mer ordning vilket är en stor fördel - jag gillar när min kod är snygg och bra strukturerad även om jag också kan skriva väldigt rörig kod när jag är för lat för att dela upp den.

Under uppgiften gjorde jag som med remserver - jag hade först ingen kontrollerklass och det var mer kod i routerna. Sen gjorde jag en kontrollerklass och ändrade om koden så den kan fungera som en fristående modul. Fick då se skillnaden på min egen kod och få en bättre uppfattning om hur mycket bättre det blir.

En annan fördel är ju också att koden blir mer testbar. Om man har en massa kod i routerna blir den svår att testa - men om den ligger i klasser blir det mycket enklare.

### Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?

Nja, det kändes lite flummigt men så som jag förstod det, handlar det om ett tankesätt som programmerare ska ha när de skapar OOP kod. Begreppet är en akronym som t.ex. "KISS" - och det står för följande:

S - Single responsibility - en klass ska bara göra en sak och inte ha mer än en anledning att ändras.
O - Open/closed principle - klasser osv ska vara öppna för utbyggnad men stängda för modifiering. T.ex. man ska kunna lägga till nya funktioner men inte modifiera existerande.
L - Liskov substitution principle - Ett objekt av en klass ska kunna ersättas av dess bestpndsdelar utan att det blir fel i programmet.
I - Interface segregation principle - Det är bättre att göra fler enkla interfaces än få stora för att undvika att skapa onödiga beroenden.
D - Dependency inversion principle - Klasser ska inte vara beroende av andra klasser. De kopplas genom ett gränssnitt mellan klasserna.

### Gick arbetet med REM servern bra och du lyckades integrera den i din me-sida?

Ja, det gick bra och relativt snabbt. Hade bara lite problem med sessionen vilket skapade problem med API'et. Det uppståd då jag hade implementerat mitt kommentarssystem, eftersom sessionen redan var startad när man skickade en request mot API'et. Tog bort session start i remserver-klassen och det fungerade igen.

Annars gjorde övningen det väldigt lätt att integrera remservern i me-sidan.

### Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?

Jag hade tänkt göra databasen direkt men blev att jag använde sessionen till att börja med. Min struktur blev två vyer. Den första är en sida där man lägger till kommentarer - för varje kommentar finns länkar för att redigera och ta bort. Jag valde att kommentarer skrivs i bbcode istället för markdown då det kändes lite mer intressant och mer vanligt på t.ex. forum. Jag valde också att inte ta med bilder från gravatar just nu då det inte riktigt passar in i vad jag har gjort. Bygger jag vidare mot forum-stilen kan jag integrera det senare, men för nu har jag hoppat det.

Min andra vy är till för när man redigerar kommentarer. Min kontroller ger direktiv till modellen och därefter skickas data till vyn via kontrollern. Jag har alltså försökt lägga mycket fokus på MVC-arkitekturen.

Jag gjorde också en funktion för att lägga till hela kommentars-sektionen. Om det är bra eller dåligt återstår att se...

## Kmom03

### Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?

Det är många nya begrepp men det känns riktigt bra! Jag förstår inte fullt vad de betyder men det börjar fastna nu när vi jobbar med det. Generellt känns det bättre att använda dessa tekniker då t.ex. lazy loading kan bidra till att göra sidan lite snabbare. Det blir coolare helt enkelt. Men som sagt lite klurigt att greppa vad som egentligen sker ibland, men jag tycker ändå att jag hade full koll på vad jag gjorde i övningarna och uppgifterna.

### Hur känns det att göra dig av med beroendet till $app, blir $id bättre?

I allmänhet tror jag det är bättre med $id, men när man sitter och kodar spelar det ju inget större roll förutom att det faktiskt krävs lite mer koda vid användning av $id. Det är get("") som gör det något jobbigare att skriva. Ska kanske ta en titt på "En mer magisk DI" på forumet som mos och lrc kom fram till.

### Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättringar på kodstrukturen, eller bara annorlunda?

Det blir mycket att ta in varje gång då det är mycket kod som ändras. Man fick gå igenom koden och se hur allt är kopplat i ramverket för att riktigt förstå den, vilket tog sin tid. Men därefter kändes det bra då jag tycker
strukturen blir bättre och koden är mer organiserad då vi inte skrotar ner routerna eller vyerna. Så det blir både annorlunda och bättre.

### Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?

Ja jag har helt plockat bort $app nu och använder bara $di i kommentarssystemet. Det var faktiskt väldigt lätt efter jag fick remservern att fungera med den nya kodstrukturen. Blev dock ingen vidareutveckling av själva kommentarssystemet denna gången, mer än mental förberedelse för hur jag ska koppla till databasen osv.

### Påbörjade du arbetet (hur gick det) med databasmodellen eller avvaktar du till kommande kmom?

Jag avvaktar då det känns som att jag lika bra kan lägga full fokus på det i nästa kmom. Men har gjort lite av arbetet i huvudet så jag har bra koll på hur jag ska börja och var. Tanken var att börja på det i helgen men då jag inte hade tillgång till datorn den större delen av tiden fick jag istället bara tänka ut en lösning utan att implementera den.

### Allmänna kommentare kring din me-sida och dess kodstruktur?

jag försöker lägga fokus på att hålla det så rent som möjligt överallt, och än så länge tycker jag det är hyfsat bra. Ska dock ta en titt på min klass för kommentarssystemet och se om jag kan göra några förbättringar där. Tanken är att jag ska följa SOLID så bra jag kan genom kursen.

## Kmom04

### Hur gick det att integrera formulärhantering och databashantering i ditt kommentarssystem?

Det var inga större problem. Efter artiklarna och bok exemplet hade man hyfsad koll på hur man kunde göra. Det jag gjorde var att skapa en my klass som innehåller tabellen för databasen. Via controllern kan jag då koppla mig till databasen och lägga till, ta bort och redigera kommentarer.

Jag integrera bara formulärhantering för administrativ hantering av användare, alltså där man kan göra crud på användare. Det gick dock bra då jag scaffoldade fram klasserna och vyerna som i bokexemplet och redgierade det sen till att funka med mina användare.

DOck hade jag stora problem med BTH databasen när jag skulle använda det på studentservern. Jag kunde inte skapa fler tabeller då MySQL Workshop gav error "too many open files" vilket verkar ha att göra med resurserna på server och vad som finns tillgängligt för min användare (det kom jag fram till genom lite googlande iaf). Jag var tvungen att ta bort tabeller från tidigare kurser för att skapa nya, och även efter det hade jag lite problem. Det gick dock över av sig själv till slut. Detta skapade också problem med sessioner då sidor med sessioner helt slutade att ladda. Det tog väldigt lång tid att felsöka och försöka fixa och därför har jag blivit mycket försenad nu.

### Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?

Just active record verkar riktigt bra. Det blev så mycket lättare att prata med databasen. Med just det vi använde för databashanteringen var det lite klurigt att uppdatera en kolumn i databasen. Jag fick aldrig riktigt till det så jag kunde enbart uppdaterna en kolumn utan jag fick hämta datan som redan fanns på raden och använda den igen där datan inte skulle uppdateras. Kanske missade något men det verkar som en konstigt sätt att göra det på, när man vanligtvis bara kan göra UPDATE.

### Utveckla din syn på koden du nu har i ramverket och din kommentars- och användarkod. Hur känns det?

Hade nog kunnat bli bättre vid det här laget. Detta kursmomentet kändes lite som oophp då vi t.ex. skulle integrera crud för både böckerna och användarna (att göra crud är extremt tråkigt, även när man kan scaffolda fram stor del av koden). Jag tror vi had klarat det utan att integrera bokexemplet i me-sidan - för jag ser ingen anledning att ha det där. Det räcker ju med crud för användarna för att se om vi gjort den delen rätt? Nu fick vi göra samma sak tre gånger. En gång för övningen och två för me-sidan. Det är mycket crud i ett kursmoment.

På grund av detta då tillsammans med databasproblemen jag hade fick koden lida lite och jag hade inte tid att snygga till och organisera den på ett bra sätt. Koden för kommentererna känns ganska okej, koden för användare/profil mindre så.

Jag hade gärna skapat några mer avancerade vyer för att få allt att se bättre ut. Men det får kanske bli i kommande kursmoment.

Annars ser man en klar förbättring i koden i allmänhet medans vi jobbar oss framåt i kursen. Den är bättre nu än den var från början iaf.

### Om du vill, och har kunskap om, kan du även berätta om din syn på ORM och designmönstret Data Mapper som är närbesläktade med Active Record. Du kanske har erfarenhet av likande upplägg i andra sammanhang?

Jag har lite erfarenhet från oopython kursen då vi använde oss av SQLAlchemy vilket jag verkligen tyckte om. Kommunikationen med databasen blir mycket mer lätthanterlig och man får bättre koll på den i allmänhet.

Men vad exakt som är skillnaden på dessa deisngmönser är inget jag har speciellt bra koll på.

### Vad tror du om begreppet scaffolding, kan det vara något att kika mer på?

Det är ett riktigt bra sätt att komma igång med ett nytt projekt. Man kanske måste ändra en hel del i det man scaffoldar fram men det kan oftast vara bättre än att behöva starta från stratch. Man kan spara en hel del tid på att använda det - så det är absolut något jag skulle vilja kika mer på.

PS: Det går att logga in med admin/admin och doe/doe för att testa. Validering ger fortfarande fel på $di (short variable) i vissa mappar. Varför vet jag inte, men jag har gjort dbwebb update och di står med i exceptions i phpmd.

## Kmom05

### Hur gick arbetet med att lyfta ut koden ur me-sidan och placera i en egen modul?

Jo, själva biten att lyfta ut koden gick ju bra. Kändes som att mitt kommentarssystem var hyfsat väl förberett för att flyttas ut som en självstående modul. Visste dock inte riktigt om jag skulle ta med user and admin klasserna eller inte. Vid det här laget är ju modulen ganska beroende av att det finns ett system för användare, även om jag enbart använder session när det gäller den biten i systemet (så man hade kunnat använda ett separat användarsystem, men då måste datan som jag tar från sessionen vara exakt samma...). Vet inte riktigt vad som var meningen där men jag tog med dem iaf.

### Flöt det på bra med GitHub och kopplingen till Packagist?

Japp, inga större problem. Det var faktiskt lättare än vad jag trodde. Blev dock lite förvirrad när det gällde tokens. Behövde först en token från Github för att göra någonting, sen när jag behövde en token för Packagist visste jag inte riktigt vilken jag skulle använda. Ja, tills jag hittade ett sätt att generera en token på Packagist...

Men I allmänhet tyckte jag artiklen var förvirrande och inte helt tydlig i vissa delar.

### Hur gick det att åter installera modulen i din me-sida med composer, kunde du följa du din installationsmanual?

Det gick bra för det mesta. Installerade först i min nya dev mapp och sen tog jag bort filerna på me-sidan och testade att hämta de nya med composer. Det gick bra förutom när jag råkade tagga innan en commit och composer hämtade hem fel grejer hehe.

Jag hade gjort lite ändringar i min modul så behöver committa och tagga fler gånger för att få det att bli bra i me-sidan. Men med hjälp av min readme funkade det sen.

### Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?

Nja, det blev lite klurigt där. Jag ville göra tester på min kontroller-klass (för kommentarssystemet) men jag fick aldrig det att funka med di. Känns som jag testade allting men fick aldrig rätt på det. Så jag slösade all min tid där innan jag gav upp och gick vidare till min Comments klass. Där uppnådde jag 87.5%. Jag gjorde också tester på min Filter-klass som är min egna klass för omvandling av bbcode till html. Där blev det 100% då den var väldigt enkel.

Det var de två jag gjorde tester på. Lite klurigt då kommentarssystemet hela tiden jobbar mot databasen. Det löste jag genom att skapa en sqlite databas med de tables som jag har i me-sidan, så jag kunde köra testerna med den. Behövde dock köra apache för att den skulle ansluta till databasen.

Den största irritationen jag har med många verktyg vi använder är att jag får en hel hög med errors bara för att jag kör från en path som har "André" i den. Det är mitt användarnamn på datorn och dbwebb-kurserna ligger under den. Förstår inte varför phpunit över huvudtaget bryr sig om pathen har UTF-8 karaktärer eller inte. Gör det väldigt tråkigt att göra enhetstester dock.

### Några reflektioner över skillnaden med och utan modul?

Det är ju precis samma kod så egentligen är det ingen skillnad alls. Men jag gillar när jag sitter och bugfixar lite så jobbar jag med modulen och inte i me-sidan - det känns bättre och mer hanterligt. Lättare att underhålla koden.

## Kmom06

## Kmom07/10
