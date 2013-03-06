<?php $TRANSLATIONS = array(
"Failed to delete the server configuration" => "Eliminazione della configurazione del server non riuscita",
"The configuration is valid and the connection could be established!" => "La configurazione è valida e la connessione può essere stabilita.",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "La configurazione è valida, ma il Bind non è riuscito. Controlla le impostazioni del server e le credenziali.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "La configurazione non è valida. Controlla il log di ownCloud per ulteriori dettagli.",
"Deletion failed" => "Eliminazione non riuscita",
"Take over settings from recent server configuration?" => "Vuoi recuperare le impostazioni dalla configurazione recente del server?",
"Keep settings?" => "Vuoi mantenere le impostazioni?",
"Cannot add server configuration" => "Impossibile aggiungere la configurazione del server",
"Connection test succeeded" => "Prova di connessione riuscita",
"Connection test failed" => "Prova di connessione non riuscita",
"Do you really want to delete the current Server Configuration?" => "Vuoi davvero eliminare la configurazione attuale del server?",
"Confirm Deletion" => "Conferma l'eliminazione",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Avviso:</b> le applicazioni user_ldap e user_webdavauth sono incompatibili. Potresti riscontrare un comportamento inatteso. Chiedi al tuo amministratore di sistema di disabilitarne uno.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Avviso:</b> il modulo PHP LDAP non è installato, il motore non funzionerà. Chiedi al tuo amministratore di sistema di installarlo.",
"Server configuration" => "Configurazione del server",
"Add Server Configuration" => "Aggiungi configurazione del server",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "È possibile omettere il protocollo, ad eccezione se è necessario SSL. Quindi inizia con ldaps://",
"Base DN" => "DN base",
"One Base DN per line" => "Un DN base per riga",
"You can specify Base DN for users and groups in the Advanced tab" => "Puoi specificare una DN base per gli utenti ed i gruppi nella scheda Avanzate",
"User DN" => "DN utente",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Il DN per il client dell'utente con cui deve essere associato, ad esempio uid=agent,dc=example,dc=com. Per l'accesso anonimo, lasciare vuoti i campi DN e Password",
"Password" => "Password",
"For anonymous access, leave DN and Password empty." => "Per l'accesso anonimo, lasciare vuoti i campi DN e Password",
"User Login Filter" => "Filtro per l'accesso utente",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Specifica quale filtro utilizzare quando si tenta l'accesso. %%uid sostituisce il nome utente all'atto dell'accesso.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "utilizza il segnaposto %%uid, ad esempio \"uid=%%uid\"",
"User List Filter" => "Filtro per l'elenco utenti",
"Defines the filter to apply, when retrieving users." => "Specifica quale filtro utilizzare durante il recupero degli utenti.",
"without any placeholder, e.g. \"objectClass=person\"." => "senza nessun segnaposto, per esempio \"objectClass=person\".",
"Group Filter" => "Filtro per il gruppo",
"Defines the filter to apply, when retrieving groups." => "Specifica quale filtro utilizzare durante il recupero dei gruppi.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "senza nessun segnaposto, per esempio \"objectClass=posixGroup\".",
"Connection Settings" => "Impostazioni di connessione",
"Configuration Active" => "Configurazione attiva",
"When unchecked, this configuration will be skipped." => "Se deselezionata, questa configurazione sarà saltata.",
"Port" => "Porta",
"Backup (Replica) Host" => "Host di backup (Replica)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Fornisci un host di backup opzionale. Deve essere una replica del server AD/LDAP principale.",
"Backup (Replica) Port" => "Porta di backup (Replica)",
"Disable Main Server" => "Disabilita server principale",
"When switched on, ownCloud will only connect to the replica server." => "Se abilitata, ownCloud si collegherà solo al server di replica.",
"Use TLS" => "Usa TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "Da non utilizzare per le connessioni LDAPS, non funzionerà.",
"Case insensitve LDAP server (Windows)" => "Case insensitve LDAP server (Windows)",
"Turn off SSL certificate validation." => "Disattiva il controllo del certificato SSL.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Se la connessione funziona esclusivamente con questa opzione, importa il certificato SSL del server LDAP nel tuo server ownCloud.",
"Not recommended, use for testing only." => "Non consigliato, utilizzare solo per test.",
"Cache Time-To-Live" => "Tempo di vita della cache",
"in seconds. A change empties the cache." => "in secondi. Il cambio svuota la cache.",
"Directory Settings" => "Impostazioni delle cartelle",
"User Display Name Field" => "Campo per la visualizzazione del nome utente",
"The LDAP attribute to use to generate the user`s ownCloud name." => "L'attributo LDAP da usare per generare il nome dell'utente ownCloud.",
"Base User Tree" => "Struttura base dell'utente",
"One User Base DN per line" => "Un DN base utente per riga",
"User Search Attributes" => "Attributi di ricerca utente",
"Optional; one attribute per line" => "Opzionale; un attributo per riga",
"Group Display Name Field" => "Campo per la visualizzazione del nome del gruppo",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "L'attributo LDAP da usare per generare il nome del gruppo ownCloud.",
"Base Group Tree" => "Struttura base del gruppo",
"One Group Base DN per line" => "Un DN base gruppo per riga",
"Group Search Attributes" => "Attributi di ricerca gruppo",
"Group-Member association" => "Associazione gruppo-utente ",
"Special Attributes" => "Attributi speciali",
"Quota Field" => "Campo Quota",
"Quota Default" => "Quota predefinita",
"in bytes" => "in byte",
"Email Field" => "Campo Email",
"User Home Folder Naming Rule" => "Regola di assegnazione del nome della cartella utente",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Lascia vuoto per il nome utente (predefinito). Altrimenti, specifica un attributo LDAP/AD.",
"Test Configuration" => "Prova configurazione",
"Help" => "Aiuto"
);
