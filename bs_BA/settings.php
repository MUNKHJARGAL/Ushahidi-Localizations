<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2013-01-09 06:10+0000
// PO revision date:  2013-01-08 15:38+0000
$lang = array(
	'allow_comments' => array(
		'between' => 'Polje Dozvoli komentare ne sadrži validne vrijednosti',
		'required' => 'Polje odobri komentare je obavezno.',
	) ,
	'allow_feed' => array(
		'between' => 'U polje include nije unešena validna vrijednost.',
		'required' => 'Polje include je obavezno polje.',
	) ,
	'allow_alerts' => array(
		'between' => 'U polje za aktiviranje upozorenja nije unešena validna vrijednost.',
		'required' => 'Polje dopusti obavještenja je obavezno.',
	) ,
	'allow_reports' => array(
		'between' => 'Polje za davanje dozvole za primanje izvještaja ne sadrži validnu vrijednost.',
		'required' => 'Polje dopusti obavještenja je obavezno.',
	) ,
	'allow_stat_sharing' => array(
		'between' => 'U polje za dijeljenje statistika nije unešena validna vrijednost.',
		'required' => 'Polje za dijeljenje statistika je obavezno polje.',
	) ,
	'api' => array(
		'default_record_limit' => 'Broj izvještaja koji se automatski dobija svakim API zahtjevom',
		'maximum_record_limit' => 'Maksimalni broj zapisa za preuzimanje po API zahtjevu',
		'maximum_requests_per_ip_address' => 'Maksimalni broj API zahtjeva po IP adresi',
	) ,
	'api_akismet' => array(
		'alpha_numeric' => 'U polje Akismet nije unešena validna vrijednost.',
		'length' => 'U polje Akismet nije unešena validna vrijednost.',
	) ,
	'banner_image' => array(
		'default' => 'Došlo je do greške u postavljanju baner slike.',
		'size' => 'Veličina banera prelazi dozvoljeni limit.',
	) ,
	'cache_pages' => array(
		'between' => 'Polje za keširane strane je obavezno polje.',
		'required' => 'U polje za keširane strane nije unešena validna vrijednost.',
	) ,
	'cache_pages_lifetime' => array(
		'in_array' => 'U polje za rok trajanja keširanih strana nije unešena validna vrijednost.',
		'required' => 'Polje za rok trajanja keširanih strana obavezno je.',
	) ,
	'cleanurl' => array(
		'clean_url_disabled' => 'Izgleda da server nije podešen za procesiranje čistih URLova. Moraćete da promjenite konfiguraciju vašeg servera pre nego što omogućite otvaranje čistih URLova. Više informacija o tome kako omogućiti čiste URLove imate na <a href="http://forums.ushahidi.com/topic/server-configuration-for-apache-mod-rewrite" target="_blank">ovom postu na forumu</a>',
		'clean_url_enabled' => 'Ova opcija omogućava pristup Ushahidiju putem "čistih" URLova (bez "index.php" u URL).',
		'enable_clean_url' => 'Dozvolite čišćenje URL',
		'title' => 'Očisti URLove',
	) ,
	'clickatell_api' => array(
		'length' => 'Polje Clickatell API broja ne može imati više od 20 karaktera.',
		'required' => 'Polje Clickatell API broja je obavezno polje.',
	) ,
	'clickatell_password' => array(
		'length' => 'Polje Clickatell lozinke mora biti duže od 5, ali najviše 50 karaktera.',
		'required' => 'Polje Clickatell lozinke je obavezno polje.',
	) ,
	'clickatell_username' => array(
		'length' => 'Polje Korisnički nalog na Clickatellu ne smije biti duže od 50 karaktera. ',
		'required' => 'Clickatell korisničko ime je obavezno.',
	) ,
	'configure_map' => 'Konfigurirajte mapu.',
	'default_location' => 'Zadana lokacija',
	'default_map_all' => array(
		'alpha_numeric' => 'U polje za unos boje nije unešena validna vrednost.',
		'length' => 'Polje za unos boje ne smije biti duže od 6 karaktera.',
		'required' => 'Polje boja je obavezno.',
	) ,
	'default_map_view' => 'Automatski prikaz mape',
	'default_zoom_level' => 'Zadani nivo zumiranja',
	'download_city_list' => 'Povucite imena gradova iz Geonames-a',
	'email_host' => array(
		'length' => 'Polje za unos porta Mail servera predugačko je.',
		'numeric' => 'Polje za unos porta Mail servera treba sadržati samo brojeve.',
	) ,
	'email_password' => array(
		'length' => 'Polje Lozinka Mail servera mora biti duže od 5 karaktera, ali ne više od 50 karaktera.',
		'required' => 'Polje Lozinka Mail servera je obavezno za popunjavanje.',
	) ,
	'email_port' => array(
		'length' => 'Polje Mail server port je predugačko.',
		'numeric' => 'Polje Mail server port treba sadržati samo brojeve.',
	) ,
	'email_servertype' => array(
		'length' => 'Polje Mail server port je predugačko.',
		'required' => 'Polje Mail Server Type je obavezno za popunjavanje.',
	) ,
	'email_username' => array(
		'length' => 'Polje Mail Server Username ne smije biti duže od 50 karaktera.',
		'required' => 'Polje Mail Server Username je obavezno za popunjavanje.',
	) ,
	'facebook' => array(
		'title' => 'Opcije za podešavanje Facebooka ',
		'description' => 'Kako bi ste dobili informaciju ispod potrebno je da kreirate novu Facebook aplikaciju za',
		'app_id' => 'Facebookov App ID',
		'app_secret' => 'Facebookob App Secret',
	) ,
	'google_analytics' => array(
		'length' => 'Polje Google Analytics mora sadržati validni Web Property ID kod u formatu UA-XXXXX-XX.',
	) ,
	'https' => array(
		'enable_https' => 'Omogući HTTPS',
		'https_disabled' => 'Ova opcija omogućava pristup Ushahidiju u nebezbjednom modu; <strong>bez</strong> "https://" u prefiksu URLa',
		'https_enabled' => 'Ova opcija omogućava pristup Ushahidiju u bezbjednom modu; sa  <strong>https</strong> u prefiksu URLa',
		'title' => 'HTTPS',
	) ,
	'items_per_page' => array(
		'between' => 'U Polje za unos broja članaka koji će se prikazivati po strani (Frontend) nije unešena validna vrijednost. ',
		'required' => 'Polje Broj članaka po strani (Frontend) je obavezno za popunjavanje.',
	) ,
	'items_per_page_admin' => array(
		'between' => 'U polje za unos broja članaka po strani (Admin) nije unešena validna vrijednost.',
		'required' => 'Polje Broj članaka po strani (Admin) je obavezno za popunjavanje.',
	) ,
	'map' => array(
		'default_location' => 'Podešavanje vašeg provajdera mapa jednostavan je proces. Odaberite provajder, uzmite API kluč sa websajta provajdera i unesite API ključ.',
		'zoom' => 'Nivo zumiranja',
	) ,
	'map_provider' => array(
		'choose' => 'Odaberite Provajder mape',
		'enter_api' => 'Unesite novi API ključ',
		'get_api' => 'Preuzmite API ključ',
		'info' => 'Podešavanje vašeg provajdera mapa jednostavan je proces. Odaberite provajder, uzmite API kluč sa websajta provajdera i unesite API ključ.',
		'name' => 'Provajder mape',
	) ,
	'map_timeline' => 'Hronologija mape',
	'map_settings' => 'Postavke mape',
	'multiple_countries' => 'Dali ova implementacija Ushahidija obuhvata više država?',
	'select_default_location' => 'Odaberite državu.',
	'set_location' => 'Kliknite i povucite mapu da postavite svoju tačnu lokaciju',
	'site' => array(
		'allow_clustering' => 'Izvještaji o klasterima na mapi',
		'allow_comments' => 'Dozvoli korisnicima komentiranje prijava.',
		'allow_feed' => 'Uključi RSS News Feed na web stranici',
		'allow_alerts' => 'Dozvoli korisnicima da se pretplate za obavještenja',
		'allow_reports' => 'Dozvoli korisnicima da unesu izvještaje',
		'api_akismet' => 'Akismet ključ',
		'banner' => 'Baner stranice',
		'blocks_per_row' => 'Broj blokova u redu',
		'cache_pages' => 'Cache-irane strane',
		'cache_pages_lifetime' => 'Rok trajanja Cacheiranih strana',
		'checkins' => 'Dozvolite Prijave',
		'copyright_statement' => 'Izjava o autorskim pravima stranice',
		'default_category_colors' => 'Osnovna boja za sve kategorije',
		'default_category_icons' => 'Osnovna ikona za sve kategorije',
		'delete_banner_image' => 'Obriši sliku banera',
		'delete_default_map_all_icon' => 'Obriši osnovnu ikonu',
		'display_contact_page' => 'Prikaži kontakt stranicu',
		'display_howtohelp_page' => 'Prikaži stranicu "Kako pomoći"',
		'email_alerts' => 'E-mail adresa za obavještenja',
		'email_notice' => '<span>Za dobijanje izvještaja elektronskom poštom, konfigurirajte postavke vašeg korisničkog računa elektronske pošte.</span>',
		'email_site' => 'E-mail adresa stranice',
		'google_analytics' => 'Google Analytics',
		'google_analytics_example' => 'Web Property ID - Format: UA-XXXXX-XX',
		'items_per_page' => 'Broj članaka po strani - Front End',
		'items_per_page_admin' => 'Broj članaka po strani - Admin',
		'kismet_notice' => 'Onemogućite spamiranje komentara korištenjem Automatticovog <a href="http://akismet.com/" target="_blank">Akismeta</a>. <BR />Besplatni API kluč možete dobiti registracijom za <a href="http://en.wordpress.com/api-keys/" target="_blank">korisnički nalog na WordPress.com</a>',
		'laconica_configuration' => 'Akreditivi Laconica',
		'laconica_site' => 'Website Laconica',
		'language' => 'Jezik stranice',
		'manually_approve_users' => 'Ručna potvrda korisnika',
		'message' => 'Poruka stranice',
		'name' => 'Ime stranice',
		'private_deployment' => 'Privatna implementacija',
		'require_email_confirmation' => 'Potrebna potvrda korisničkog e-maila',
		'submit_report_message' => 'Postavi poruku izvještaja ',
		'share_site_stats' => 'Omogućite sakupljanje statistika (čuvane na serveru Ushahidija)',
		'tagline' => 'Tagline sajta',
		'timezone' => 'Vremenska zona',
		'title' => 'Postavke stranice',
		'twitter_configuration' => 'Termini za pretraživanje Twittera',
		'twitter_hashtags' => 'Hashtag - odvojeni zarezima',
	) ,
	'site_email' => array(
		'email' => 'Polje za unos email adrese ne sadrži validnu email adresu.',
		'length' => 'Polje za unos email adrese ne može imati manje od 4 i više od 100 karaktera.',
	) ,
	'site_name' => array(
		'length' => 'Polje za unos imena sajta ne može biti kraće od 3 i duže od 50 karaktera.',
		'required' => 'Polje naziv stranice je obavezno.',
	) ,
	'site_tagline' => array(
		'length' => 'Polje za unos tagline-a ne može biti kraće od 3 i duže od 100 karaktera.',
		'required' => 'Obavezno popuniti polje za unos tagline-a.',
	) ,
	'sms' => array(
		'clickatell_api' => 'Upišite vaš Clickatell API broj',
		'clickatell_check_balance' => 'Provjerite stanje na vašem kretitnom računu na Clickatell-u.',
		'clickatell_load_balance' => 'Dopunite kreditni račun',
		'clickatell_password' => 'Vaša Clickatell lozinka',
		'clickatell_text_1' => 'Prijavite se za Clickatellove usluge na <a href="https://www.clickatell.com/central/user/client/step1.php?prod_id=2" target="_blank">ovom linku</a>',
		'clickatell_text_2' => 'U polje ispod unesite vaše pristupne informacije za Clickatell-ov račun',
		'clickatell_username' => 'Vaše Clickatell korisničko ime',
		'flsms_description' => 'FrontlineSMS je softver otvorenog izvornog koda koji pretvara vaš laptop ili mobilni telefon u centralno komunikacijsko čvorište. Kada je instaliran, program omogućava korisnicima slanje i primanje tekstualnih poruka ka i od velikih grupa ljudi putem mobilnog telefona. Kliknite na sivo polje ako želite da snimite program sa FrontlineSMS.com',
		'flsms_download' => 'Snimite FrontlineSMS i instalirajte ga na vaš računar.',
		'flsms_instructions' => 'Poruke primljene u čvorište FrontlineSMS mogu biti sinhronizirane sa Ushahidijem. Detaljna uputstva za sinhronizaciju imate <strong><a href="http://wiki.ushahidi.com/display/WIKI/How+to+Set-up+FrontlineSMS+and+Ushahidi" target="_blank">ovdje</a></strong>. Za podešavanje sinhronizacije sa FrontlineSMS-om biće vam potrebni ključ i link navedeni ispod',
		'flsms_key' => 'Vaš Ushahidi Sync ključ',
		'flsms_link' => 'FrontlineSMS HTTP Post LINK',
		'flsms_synchronize' => 'Sinhronizirajte sa Ushahidi-jem',
		'flsms_text_1' => 'Unesite telefonski broj (ili brojeve) povezane na Frontline SMS u polje (polja) ispod',
		'flsms_text_2' => 'Unesite broj u polje ispod, bez korištenja + ili crtica',
		'option_1' => 'Opcija 1: Koristi Frontline SMS',
		'option_2' => 'Opcija 2: Iskoristite Global SMS Gateway',
		'title' => 'Opcije za podešavanje SMS-a',
	) ,
	'sms_no1' => array(
		'length' => 'Polje Telefon 1 ne sadrži validnu vrijednost.',
		'numeric' => 'U polje Telefon 1 treba unijeti samo brojeve.',
	) ,
	'sms_no2' => array(
		'length' => 'Polje telefon 2 je predugačko.',
		'numeric' => 'Polje telefon 2 treba sadržati samo brojeve.',
	) ,
	'sms_no3' => array(
		'length' => 'Polje telefon 3 je predugačko.',
		'numeric' => 'Polje telefon 3 treba sadržati samo brojeve.',
	) ,
);
