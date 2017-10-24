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

### Har du någon erfarenhet av automatiserade testar och CI sedan tidigare?

Förutom det jag har stött på genom dbwebb har jag ingen erfarnhet alls
av detta. Jag tyckte dock det var intressant att se resultaten från de
automatiserade testerna, speciellt scrutinizer.

Dock lite drygt att testerna körs först efter man gjort en commit på Github.
Om något blir fel måste jag ändra det och göra en commit igen. Visst, kanske
därför man har phpunit lokalt så man kan testa där. Men då finns det lite anledning till att köra t.ex. Travis förutom att få en badge att lägga i sin
readme. Scrutinizer är lite mer användbart då man får kod kvalité och täckning också.

### Hur ser du på begreppen, bra, onödigt, nödvändigt, tidskrävande?

Jag ser automatiserade tester som en bra grej men så vi har gjort det har
varit mycket frustrerande tycker jag. Man behöver tänka på testerna mycket tidigare, så när man utvecklar hela tiden tänker på att göra testbar kod.
Så vi ar jobbat har gjort det mycket svårt att skriva testbra kod från början.

Dessutom tycker jag det har varit mycket svårt att får rätt på testerna då
många funktioner använder sånt som ligger nere i ramverket, och resultatet blir att det helt enkelt inte funkar när man kör phpunit. T.ex. vid användning av ramverkets "view", får jag en error med phpunit som kommer från
ViewHelperFunctions.php. Det känns som att det inte går att fixa då modulen
ska fungera med de dependencies som composer laddar ner, inte det jag möjligtvis kan fixa i view modulen.

Då verkar det som att jag inte kan använda view i mina klasser, eller så får jag helt enkelt strunta i att göra tester på den klassen? Jag vet inte, det känns väldigt rörigt att få ramverkets funktioner att fungera korrekt med phpunit, vilket gjorde det frustrerande och mycket tidskrävande.

### Hur stor kodtäckning lyckades du uppnå i din modul?

Efter jag tog bort mina user klasser (då de bara skapade problem och jag kunde knappt testa dem alls då de använder funktioner från ramverket, eller andra moduler), kom jag upp i 90% kodtäckning på min kommentarsmodul. Den kod som
inte är testad ligger i min kontroller-klass. Den koden innehåller bland annat redirects och pagerender. Vi får ju inte lägga denna koden i routerna så därför ligger den i kontroller-klassen, och då blir den koden ej testbar. Inte mycket att göra åt det.

Jag fick iaf det att testa stor del av koden  med hjälp av en sqlite databas.

### Berätta hur det gick att integrera mot de olika externa tjänsterna?

Det var inga problem alls. Gick smidigt och lätt. Efter kmom05 kändes det som att modulen var väl föreberedd för detta. Det var bara att ansluta tjänsterna och sen funkade det.

### Vilken extern tjänst uppskattade du mest, eller har du förslag på ytterligare externa tjänster att använda?

Scrutinizer var absolut den tjänst som gav mest, och den jag gillade mest. Där får man build status, kodkvalité och kodtäckning i samma. De andra gav bara en av dessa. Så varför använda flera olika tjänster när man bara behöver en?

Tyckte också att webbsidan för scrutinizer var väldigt snygg och bra. Man får direkt bra feedback på sin kod. Riktigt bra tyckte jag.

## Kmom07/10

### Krav 1-3

Jag började med att installera ett nytt anax-skelett, och använde sen composer för att ladda ner min kommentarsmodul och alla beroenden. Det var ett bra sätt att komma igång men jag insåg snabbt att jag behövde göra många ändringar i min kommentarsmodul. Jag använder fortfarande många av de klasser som redan fanns - men skapade också många nya.

För inloggning och användare på webbplatsen tog jag mina User-filer från me-sidan. Dessa gjorde jag ingen ändring i, och det funkar för att hantera inloggning och kommentarer kopplade till användare.

Alla formulär för att skirva frågor, svar och kommentarer är skyddade av inloggning. Man kan fortfarande borwsa runt på webbplatsen, men inte skriva till kommentarsmodulen. Vill man kunna skriva kan man registrera en ny användare på webbplatsen.

Varje användare har en profil där man kan ändra email och gravatar, som är användarens bild. Det står inte specifikt vad som ska kunna uppdateras genom profilen så jag prioriterade bort att t.ex. kunna ändra lösenord. Det känns inte så viktigt i detta projektet då vi har fokus på kommentarerna, och hantering av inloggning och sånt har vi redan gjort mycket i oophp. Det är viktigare att kunna ändra email då denna är kopplad till användarens bild som visas i kommentarssystemet.

Användare admin, admin och doe, doe finns i systemet. Admin har speciella rättigheter som t.ex. ta bort och redigera alla kommentarer även om den inte skrivit dem. Annars är det bara användaren som skrivit kommentarer som kan redigera och ta bort.

#### Förstasidan

Förstasidan är hyfsat enkel. Den ger en översikt över de senaste tio frågorna (sorterat efter datum och tid). Varje fråga listas med själva rukbriken, hur många votes den har, hur många svar den har, vilka taggar som är kopplade till den och vem som skapade den när.

Längre ner listas de tio mest populära taggarna, det vill säga de taggar som är kopplade till flest kommentarer. Den tag som förekommer mest i databasen är den som ligger först i listan.

Längst ner visas de fem mest aktiva användarna. Det som bestämmer en användares aktivitet är deras rykte, eller reputation. Alltså, den användare med högst rykte ligger först i listan. Vad som ger en användare rykte förklaras i krav 5.

#### Sida för frågor

På denna sida listas alla frågor på samma sätt som på förstasidan, men det finns ingen limit på hur många som visas och det är här man kan ställa nya frågor via ett formulär. Dessutom kan man ändra sorteringen så den visar de senaste frågorna överst eller de med högst votes överst. Mer om det i krav 4. Klickar man på rubriken för frågan kommer man till en ny sida där den frågan visas tillsammans med alla svar och kommentarer. Det är alltså här man kan skriva svar och kommentarer till frågan, samt rösta. Alla kommentarer skrivs i Markdown.

Formuläret för svar ligger under varje fråga. Och under varje fråga och svar finns en länk för att skriva en kommentar. Klickar man på den kommer man till en ny sida där man skriver sin kommentar. Meningen var att detta skulle fungera som en popup, likt twitter men det blev inte tid till det. Detta funkar också okej.

Jag skapade en helt ny klass bara för skapandet av hela frågan med alla svar och sånt. Det blev lite för mycket kod för att göra det direkt i vyn  därför blev det en hyfsat stor och komplicerad klass för detta. Jag är dock väldigt nöjd med det då man kan bara skicka med vilka frågor (mer än en kan visas så här) man vill ha och sen skapar klassen allting. Då kan det återanvändas på andra sidor om man vill. Det känns DRY.

Varje fråga, svar och kommentar har unika id samt olika "article" id (t.ex. en fråga har article id 1, svar har 1b, 2b osv och kommentarer har xb där x är svarets eller frågans id). Det är på så sätt allting kopplas till sin plats.

#### Sida för användare

Denna listar användare på samma sätt som på förstasidan men utan limit. Klickar man på en användare listas alla frågor som den har ställt eller besvarat. Dessa listas på samma sätt som tidigare. Här ser man också användarens reputation och hur många up-votes den har gett till andra.

#### Sida för taggar

Igen, dessa visas på samma sätt som på förstasidan utan en limit på hur många. Den tag med flest frågor kopplade till sig är först. Klickar man på en tag listas alla frågor kopplade till den och man kan klicka på en fråga för att visa alla svar och kommentarer.

#### About-sida / Github

En about-sida finns men väldigt kort text om webbplatsen och mig tillsammans med en länk till Github repot. På Github finns en readme om hur man kan ladda ner webbplatsen och installera den. Där finns också badges från Travis och Scrutinizer. Code coverage visas som 0% då jag inte har några enhetstester. Men build visar iaf som passing så den gå igenom make test.

### Krav 4: Frågor

Som sagt kan man up-votea varje fråga, svar och kommentar. Detta kan göras av alla användare förutom den som då skrivit kommentaren. Man kan alltså inte up-votea sin egen kommentar.

Jag valde att inte ta med möjlighet att down-votea då jag aldrig har gillat det konceptet. Det räcker att om någon gillar din kommentar, de kan up-votea den. Om de inte gillar den kan de bara gå vidare. Visst, det kanske finns dåliga svar men jag tycker inte de behöver downvotas ändå. Bara vad jag tycker.

Det hade varit väldigt enkelt att lägga till en funktion för att down-votea, men som sagt har jag valt att utesluta den så jag tycker inte att det ska påverka min poäng från detta kravet. Men det är upp till rättaren.

Jag läste fel på krav 4 och gjorde istället så att frågor kan sorteras enligt datum eller antal röster. Jag har inte gjort detta för svaren.

Man kan dock markera ett svar som accepterat svar. Detta kan bara göras av användaren som ställde frågan, och man kan bara markera ett svar som accepterat (inte flera). Om det accepterade svaret tas bort kan man markera ett annat svar som accepterat.

Så jag har inte gjort riktigt hela kravet men hoppas jag kan få lite poäng iaf på de grejer som jag har gjort.

### Krav 5: Användare

Jag har infört ett poängsystem för att mäta en användares aktivitet. Följande påverkar en användares rykte (reputation).

* Skriva fråga - 1 poäng
* Skriva svar - 1 poäng
* Skriva kommentar - 1 poäng
* En upvote (Från annan användare) på skriven fråga/svar/kommentar - 1 poäng per upvote
* Skrivet svar markerat som acceptarat svar - 2 poäng

Allting summeras och läggs till användarens reputation som visas på användares sida. Här visas också hur många upvotes användaren har givit.

När det gäller översikt av användarens aktivitet visste jag inte riktigt vad som skulle visas. Men här visas en lista av alla frågor som användaren har ställt/svarat/kommenterat. Alltså, även om användaren bara har svarat på en fråga men inte ställt den, så visas den frågan i listan. Det räknar jag som en översikt av användarens aktivitet, då alla frågor som användaren skrivit något på visas - även om själva listan bara visar själva frågan.

### Allmänt

Det blev väldigt stressigt då vi också har individuella projektkursen som tar up extremt mycket tid. Men tack vare lite scaffolding och att vi redan hade kommentarsmodulen så gick det lätt att komma igång.

Min kommentarsmodul var dock inte jättebra för projektet och jag fick jobba mycket med den för att anpassa den. Därför drog jag ur den från vendor mappen och la den i src-mappen - det blev lättare att jobba med den då. Men det var nog det som tog längst tid i projektet - att bygga och anpassa modulen. Speciellt hur jag skulle göra med hantering av fråga/svar/kommentarer på samma sida. Men jag tyckte jag löste det hyfsat bra med min klass, även om det tog lång tid.

Jag använde mycket av Active Record modulen men när man ska göra andra SQL queries än basic where så finns inget stöd för det i den modulen. Till slut fick jag därför kommunicera med databasen på det vanliga sättet, vilket inte direkt gjorde något men jag hade gärna använda samma sätt genom hela webbplatsen.

Annars flöt resten på hyfsat bra. Till stor del för att jag höll det väldigt enkelt med databasen och allt. Jag såg till att utveckla saker på ettt sätt som gjorde att jag kunde återanvända de på olika platser, vilket sparade mig en hel del tid. Dock spenderade jag mycket tid på designen som jag kanske hade kunnat lägga på fler och bättre funktioner. Men jag blev riktigt nöjd med större delen av designen så det gör inte så mycket.

I allmänhet tyckte jag projektet var bra men hade gärna sett lite friare krav. Det var väldigt inriktat på en stackoverflow-kopia och jag tyckte inte att det fanns stor möjlighet att göra t.ex. (som jag egenligen ville) utan att göra om hela projektet. Så det kändes inte helt möjligt att göra så även om vi fick reda på att man kunde göra något annat istället för stackoverflow. Det jag har gjort ser jag som en stackoverflow-kopia men på ett annorlunda sätt.

### Om kursen

Jag tycker kursen har varit hyfsat bra med MVC-konceptet och hur man skapar egna moduler osv. Det känns riktigt bra att ta med sig härifrån. Men det kändes väldigt klurigt, konstigt och jobbigt att skapa en modul inne i en anax-installation där den är mycket beroende av andra saker. Det blir svårt att se det som en fristående modul då, och det märker man när man ska göra enhetstester på den där den står fri från en anax-installation. Det blir inte bra. Och det förstörde mycket av kursen för mig om jag ska vara ärlig. Det hade varit bättre om vi kunde göra en modul som är helt fristående och kan användas till typ vad som helst, även vid senare projekt. 

Tyckte också kursen saknade någon form av genomgång av enhetstesterna. Ja, vi kan enhetstester sedan tidigare men detta var väldigt annorlunda från vad vi har gjort förut, t.ex. där vi ska göra enhetstester på klasser som är beroende av en databas. Hur gör man enhetstester på det? Ja, det fick man klura ut på egen hand. Och eftersom vi skulle använda oss av di och inte skriva någon kod i routerna var vi tvungna att göra renderPage i våra klasser - men då kan de metoderna inte enhetstestas... Hur ska vi uppnå 100% kodtäckning när vi är tvungna skapa metoder som inte kan testas? Eller finns det ett sätt att testa dem eller göra på något annat sätt? Inget av detta togs upp i kursen vilket jag tyckte var mycket konstigt.

Annars är jag hyfsat nöjd med kursen och skulle kunna rekommendera till andra. 7/10.
