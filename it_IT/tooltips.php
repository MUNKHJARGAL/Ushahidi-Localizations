<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2014-09-27 06:25+0000
// PO revision date:  2014-09-27 05:31+0000
$lang = array(
	'actions' => array(
		'add_to_category' => 'Questo aggiunge la segnalazione a categorie aggiuntive. Se selezioni "Categoria 1" qui e la segnalazione è nella "Categoria 2", avrà sia "Categoria 1" che "Categoria 2".',
		'approve' => 'Approva una segnalazione o no. Se approvata, sarà visibile pubblicamente.',
		'assign_badge' => 'SaraI abilitato ad assegnare un badge per l\'utente di attivazione. Scegli il badge che viene assegnato qui.',
		'between_times' => 'Questa è una gamma di ore e/o minuti tra due orari nel formato 24 ore. Se inserisci un momento precedente nel secondo campo, verrà capovolto con il primo. Questi tempi devono essere all\'interno di un singolo giorno. Inoltre, questa volta viene confrontato con il tempo che hai configurato sul tuo sito nelle impostazioni del sito e <strong> non </ strong> necessariamente il fuso orario dell\'utente che interagisce con la tua distribuzione. Lascia questo a da 00:00 a 00:00 per ignorare questo qualificatore.',
		'category' => 'Se si desidera attivare i trigger solo quando si utilizza una determinata categoria, è possibile impostarli qui. Ciò consentirà che un trigger venga attivato solo se viene usata una delle categorie. Per esempio, se si seleziona Categoria 1 e Categoria 2 qui e un report è presentato utilizzando Categoria 2 e Categoria 3, esso passerà il test.',
		'days_of_the_week' => 'Se queste azioni si verificano in determinati giorni della settimana, qui prefissati. Ricorda che il giorno è determinato dal fuso orario configurato nella tua distribuzione. Premere Shift, un comando o controllo per la selezione multipla del giorno.',
		'email_body' => 'Corpo della email che sarà inviata.',
		'email_subject' => 'Oggetto della mail che sarà inviata.',
		'feed_id' => 'La parte dei feed può essere di tutti i feed o di uno specifico feed. Se si vuole uno solo come specifico feed, attivare un trigger, selezionandolo qui. In caso contrario, lasciare questa opzione come "tutti"',
		'from' => 'Nome utente Twitter dell\'autore (o più nomi utente separati da virgole). Se si desidera attivare i trigger solo per i messaggi Twitter da un particolare utente, inserire il suo nome utente qui (non includendo @)',
		'keywords' => 'Puoi scegliere di lasciare questo senza valore se non vuoi controllare parole chiave ulteriori. Se aggiungi parole qui, è necessario separarle con una virgola (,). Ad esempio, se si desidera attivare un trigger quando qualcuno parla di "amore" o "pace" nel messaggio, vorrai aggiungere "amore, pace" nella casella delle parole chiave.',
		'location' => 'Si può selezionare qualsiasi punto o una posizione specifica. Se si seleziona una posizione specifica, vi verrà chiesto di disegnare un riquadro intorno all\'area che qualifica l\'azione. Ad esempio, se si desidera che questo trigger venga attivato quando qualcuno inserisce un report in Brasile, si selezionerà "area specifica" e quindi si disegnerà la casella in Brasile. È possibile realizzare queste caselle piccole o grandi come si preferisce. È anche possibile disegnare caselle multiple.',
		'on_specific_count' => 'Questo qualificatore attiverà il trigger sul conteggio N-esimo sia per l\'intera base utenti collettiva, sia per ogni singolo utente. Lasciare vuoto per ignorarlo.',
		'report_title' => 'Titolo predefinito da aggiungere al report.',
		'response' => 'Se tutte i qualificatori di cui sopra sono passati, il trigger avvierà una risposta. Questo può verificarsi sia da approvazione di un report, che da email di un utente. Selezionare la risposta qui, attivando opzioni aggiuntive per le risposte specifiche.',
		'send_to' => 'Se si seleziona "User Trigger", l\'e-mail verrà inviata all\'utente che ha eseguito l\'azione. Se si seleziona il pulsante di opzione accanto alla casella di input, si sarà in grado di inserire un indirizzo email personalizzato. Questo è utile se si sta configurando trigger per informare le persone, quando in alcune parti della mappa si stanno vedendo i report, con spunta o qualche altra attività.',
		'specific_days' => 'È possibile selezionare più giorni qui. Le date sono determinate dalle impostazioni di fuso orario della tua distribuzione. Per impostazione predefinita di tutte le date, non selezionare alcuna data.',
		'trigger' => 'Il trigger è il componente principale di configurazione della tua Action Triggers. Ciò determina dove tu desideri che accada qualcosa quando qualcuno invia un report, esegue un check-in, ecc. Sarai in grado di filtrare le risposte a queste azioni dopo averne selezionata una.',
		'user' => 'L\'utente può essere chiunque o un utente specifico. Se si vogliono solo determinati utenti ad attivare un trigger, si selezionano qui. In caso contrario, se si vuole, lasciare questo come "qualcuno",  in quanto la maggior parte dei trigger sono impostati per tutti gli utenti che interagiscono con il sistema',
		'verify' => 'Contrassegna una segnalazione come verificata o no.',
	) ,
	'change_picture' => 'Le pagine di profilo di questo sito utilizzano Gravatar. Cliccando sull\'immagine, sarete indirizzati sul sito Gravatar in cui è possibile cambiare l\'immagine del profilo.',
	'default_value' => 'Separare ogni valore con una virgola. Esempio: valore1,valore2.',
	'radio_choices' => 'Separare ogni valore con una virgola. Esempio: valore1,valore2. Nel caso in cui tu voglia impostare un valore predefinito, concludi la tua lista delle opzioni con :: Esempio: Se vuoi mettere "valore3" come predefinito, dovrai mettere valore1,valore2,valore3::valore3',
	'dropdown_choices' => 'Separa ogni scelta con una virgola, esempio: Scelta 1, Scelta 2 etc.',
	'private_to' => 'Comincia a scrivere per visualizzare i membri.',
	'private_subject' => 'Oggetto messaggio privato.',
	'private_message' => 'Messaggio Privato',
	'profile_color' => 'Puoi scegliere un colore che verrà visualizzato sotto l\'immagine profilo del tuo profilo pubblico. Questo colore sarà anche quello del punto che verrà visualizzato per le tue selezioni.',
	'profile_email' => 'Il tuo indirizzo email',
	'profile_name' => 'Questo è uno dei modi in cui sarai riconosciuto nel sito. Ricorda che è pubblico!',
	'profile_new_password' => 'Se selezionata, questa sarà la tua nuova password. Lascia il campo vuoto se vuoi tenere la tua password corrente.',
	'profile_new_users_password' => 'Questa è una richiesta quando viene creato un nuovo utente e sarà la password degli utenti. Dovresti informare il tuo nuovo utente di cambiare la password dopo essersi connesso per la prima volta.',
	'profile_notify' => 'Seleziona SI\' per essere avvisato via email quando nuove segnalazioni o commenti vengono inviati al sito.',
	'profile_password' => 'La tua password. Lascia il campo in bianco se non vuoi modificare la password corrente.',
	'profile_public' => 'Il tuo profilo può essere visto da chiunque su Internet se selezioni questa opzione. Questo è anche il modo più facile per fare vedere le segnalazioni che hai inviato, le tue selezioni, i tuoi badges, etc. Tutto in una pagina.',
	'profile_public_url' => 'Questo è l\'indirizzo dove si trova il tuo profilo pubblico.',
	'profile_username' => 'Il tuo nome utente non può essere cambiato.',
	'settings_access_level' => 'I livelli di accesso vengono usati per limitare l\'accesso ai dati dei campi modulo personalizzati. Livelli di accesso più alti possono accedere ai campi da livelli più bassi. Superadmin ha il più alto livello di accesso (100). I dati pubblici sono visualizzati al livello di accesso più basso (0). I membri hanno livello di accesso 10. Admin ha livello di accesso a 90 per impostazione predefinita.',
	'settings_alert_email' => 'Questo è l\'indirizzo email che verrà utilizzato per inviare gli alert.',
	'settings_allow_alerts' => 'Permette agli utenti di iscriversi per gli avvisi via web.',
	'settings_allow_clustering' => 'Permetti di raggruppare segnalazioni simili in un unico punto sulla mappa',
	'settings_allow_comments' => 'Permetti agli utenti di commentare le segnalazioni sul sito pubblico',
	'settings_allow_feed' => 'Permetti di visualizzare i Feed RSS di notizie sul sito pubblico',
	'settings_allow_feed_category' => 'Questo permette di creare una nuova categoria dai feed RSS.',
	'settings_allow_reports' => 'Permetti agli utenti di inviare informazioni attraverso un modulo presente sul sito.',
	'settings_api_default_record_limit' => 'Numero di record di default per singola richiesta API',
	'settings_api_max_record_limit' => 'Massimo numero di record per singola richiesta API',
	'settings_api_max_requests_per_ip' => 'Massimo numero di richieste API per singolo IP',
	'settings_banner' => 'Il banner compare in alto nella parte front end del sito web se il tema che si sta usando lo supporta. La dimensione consigliata dipende dal tema in uso. Tenete a mente che andrà a sostituire il titolo del sito e lo slogan in cima alla pagina.',
	'settings_blocks_per_row' => 'Numero di Blocchi visualizzati per ogni riga.',
	'settings_cache_pages' => 'Attiva o disattiva il caching delle pagine. Se attivato le pagine si caricano più velocemente. E\' consigliato per i siti con parecchio traffico. **Ricorda che le segnalazioni compariranno sul sito pubblico con la frequenza che specifichi qui sotto (Durata Cache)',
	'settings_cache_pages_lifetime' => 'Definisce la durata della cache.',
	'settings_checkins' => 'Questo parametro abilita i check-in sul tuo dislocamento. Questo e\' un tipo di report semplificato che non sara\' moderato prima di andare online nella homepage e richiede che il tuo sito sia configurato di conseguenza. Prima di abilitarlo assicuratevi che il parametro del fuso orario sia UTC e che il vostro tema supporti i check-in. Abilitandolo, solo i temi che supportano i check-in saranno disponibili tra gli addon/temi configurabili.',
	'settings_configure_map' => 'Posiziona la mappa in modo da inquadrare una località specifica',
	'settings_default_category_colors' => 'Colore di default per le categorie',
	'settings_default_category_icons' => 'Seleziona una sola icona per tutte le categorie sul sito.',
	'settings_default_location' => 'Nazione a cui fa riferimento il sito',
	'settings_display_contact' => 'Visualizza il tab \'Contatti\' nel menu del sito pubblico',
	'settings_display_howtohelp' => 'Visualizza il tab \'Aiuto\' nel menu del sito pubblico',
	'settings_display_items_per_page' => 'Numero di segnalazioni visualizzate per pagina nel sito pubblico',
	'settings_display_items_per_page_admin' => 'Numero di segnalazioni visualizzate per pagina nella sezione amministrazione del sito',
	'settings_flsms_download' => 'Hub messaggi sms in entrata',
	'settings_flsms_synchronize' => 'Sincronizza l\'hub messaggi sms in entrata con la piattaforma Ushahidi',
	'settings_flsms_text_1' => 'Numeri di telefono abilitati a ricevere SMS',
	'settings_google_analytics' => 'Attiva statistiche avanzate sulle visite al sito',
	'settings_locale' => 'Seleziona la lingua da usare nel sito',
	'settings_manually_approve_users' => 'Se si imposta questa opzione su yes, è necessario approvare ogni singolo utente che crea un account sul tuo sito, assegnando i loro ruoli (es. Member, Admin, Superadmin).',
	'settings_map_provider' => 'Seleziona che tipo di mappa viene visualizzata sul sito',
	'settings_map_timeline' => 'Questo mostra la sequenza temporale in base alla data e l\'ora delle segnalazioni inviate',
	'settings_private_deployment' => 'Porre questo valore a VERO o SI rendera\' privato il tuo dislocamento, in tal modo solo gli account da te definiti avranno accesso al dislocamento. ',
	'settings_require_email_confirmation' => 'Agli utenti saranno inviate email con un link di conferma da cliccare prima di essere autorizzati ad accedere al sistema se questo è impostato su yes. Se si attiva questa opzione, quando la distribuzione accetta gli utenti, ad essi verrà chiesto di confermare il proprio account prima che gli venga permesso di continuare ad usarlo.',
	'settings_server_host' => 'Host (server) sul quale vengono ricevute le mail di segnalazione',
	'settings_server_password' => 'Password per l\'account email che riceve le segnalazioni',
	'settings_server_port' => 'Questa informazione è necessaria per ricevere email',
	'settings_server_ssl_support' => 'Questa informazione è necessaria per stabilire una connessione sicura con il server',
	'settings_server_type' => 'Questa informazione è necessaria per ricevere emails dal server',
	'settings_server_username' => 'Indirizzo email che riceve le segnalazioni',
	'settings_share_site_stats' => 'Le statistiche sulle visite vengono salvate su un server controllato da Ushahidi. Se abiliti questa opzione avrai accesso alle statistiche direttamente dal tuo pannello di amministrazione. Se la disabiliti il sistema smetterà di raccogliere le statistiche e non potrai recuperare le statistiche relative al periodo durante il quale l\'opzione è stata disabilitata.',
	'settings_site_copyright_statement' => 'E\' sempre bene specificare i diritti di copyright per ogni tua opera. Per aiutarti nell\'individuare quale licenza faccia al caso tuo, vista http://creativecommons.org/choose/  ',
	'settings_site_email' => 'Questo è l\'indirizzo email che riceverà le segnalazioni via email e i messaggi dal modulo contatti',
	'settings_site_message' => 'Questo è il testo che appare sopra alla mappa nella home. E\' utile per dare importanti informazioni ai visitatori. Per rimuovere il box sopra la mappa è sufficiente lasciare in bianco questo testo.',
	'settings_site_name' => 'Questo è il nome del sito, appare in alto nelle pagine del sito.',
	'settings_site_submit_report_message' => 'Questo è un messaggio che verrà visualizzato sulla pagina di invio del rapporto. Questo è un bene per incomprensioni o ulteriori istruzioni per i tuoi visitatori che stanno facendo un report.',
	'settings_site_tagline' => 'Spiega in poche parole di che cosa si occupa il tuo sito.',
	'settings_site_timezone' => 'Questo è il fuso orario in cui il tuo sito opera. Ha un effetto su qualsiasi azione tu abbia configurato che utilizzi l\'ora o la data, così come sull\'orario di riferimento per i report sia per gli utenti che per gli amministratori.',
	'settings_twitter_configuration' => 'Definisci l\'hashtag che verrà utilizzato nei post su twitter.',
);
