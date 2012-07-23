<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
define("_JOMRES_COM_MR_QUICKRESDESC","Prenotazione rapida");
define("_JOMRES_COM_MR_SHOWPROFILES","Mostra profili");
define("_JOMRES_COM_MR_QUICK______DESC","Spazi lasciati vuoti intenzionalmente");
define("_JOMRES_COM_MR_GENERALCONFIGDESC","Configurazione generale Pericolo!");
define("_JOMRES_COM_MR_BACK","Indietro");
define("_JOMRES_COM_MR_YES","Si");
define("_JOMRES_COM_MR_NO","No");
define("_JOMRES_COM_MR_NEWTARIFF","Nuova");
define("_JOMRES_COM_MR_NEWPROPERTY","Aggiungi Struttura");
define("_JOMRES_COM_MR_NEWPROPERTYFEATURE","Aggiungi Caratteristica (Struttura)");
define("_JOMRES_COM_MR_NEWGUEST","Check-in ospite");
define("_JOMRES_COM_MR_SAVE","Salva");
// Visualizza prenotazioni
define("_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME","Nome");
define("_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL","Data d'arrivo");
define("_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE","Data di partenza");
define("_JOMRES_COM_MR_VIEWBOOKINGS_BLANK","Spazi vuoti");
define("_JOMRES_COM_MR_ASSIGNUSER_TITLE","Assegna privilegi d' amministratore utenti");
define("_JOMRES_COM_MR_ASSIGNUSER_ID","ID");
define("_JOMRES_COM_MR_ASSIGNUSER_NAME","Nome");
define("_JOMRES_COM_MR_ASSIGNUSER_USERNAME","Nome utente");
define("_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER","Autorizzato attualmente");
define("_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL","struttura predefinita");
define("_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS","Cambia");
define("_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL","Livello di accesso");
define("_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE","Utente modificato");
define("_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE","non applicabile");
define("_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION","Reception");
define("_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN","Manager");
// Modificare prenotazioni
define("_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE","Tutte le prenotazioni");
define("_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS","Nuove Prenotazioni");
define("_JOMRES_COM_MR_EDITBOOKINGTITLE","Modifica prenotazione: ");
define("_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL","Arrivi/Partenze");
define("_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST","Ospite");
define("_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM","Camera");
define("_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT","Pagamento");
define("_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL","Nome");
define("_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL","Cognome");
define("_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ","Richieste speciali");
define("_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER","Nota bene: è possibile che alcune richieste necessitino di pagamenti aggiuntivi.");
define("_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING","Annulla prenotazione");
define("_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL","Numero civico");
define("_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL","Indirizzo");
define("_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL","Città");
define("_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL","CAP");
define("_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL","Numero di telefono");
define("_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL","Numero cellulare");
define("_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL","E-Mail");
define("_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN","Non è possibile anullare questa prenotazione perchè l'ospite è arrivato");
define("_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT","Deposito non pagato");
define("_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON","Conferma l'annullamento");
define("_JOMRES_COM_MR_EB_GUEST_CANCELLED","Prenotazione annullata");
define("_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL","N° Giorni all'arrivo");
define("_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL","Tipo di prenotazione");
define("_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK","Nero");
define("_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION","Reception");
define("_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET","Internet");
define("_JOMRES_COM_MR_EB_ROOM_NAME","Nome della camera");
define("_JOMRES_COM_MR_EB_ROOM_NUMBER","Camera numero");
define("_JOMRES_COM_MR_EB_ROOM_FLOOR","Piano");
define("_JOMRES_COM_MR_EB_ROOM_DISABLED","Accesso per disabili");
define("_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE"," Massimo occupanti consentito");
define("_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV","Tipo di camera");
define("_JOMRES_COM_MR_EB_ROOM_CLASS_DESC","Descrizione tipo camera");
define("_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST","Elenco delle caratteristiche della camera");
define("_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID","Deposito pagato");
define("_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE","Immetti deposito");
define("_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL","Totale da pagare");
define("_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF","Rif. deposito");
define("_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER","Numero prenotazione");
define("_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED","Deposito");
define("_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE","Deposito salvato");
// Modificare lingua
define("_JOMRES_COM_MR_QUICKRES_STEP2_TITLE","Camere disponibile");
define("_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME","struttura");
define("_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE","Tipo d camera");
//Mostrare form  ospite
define("_JOMRES_COM_MR_DISPGUEST_EDITDETAILS","Modificare i dati dell' ospite");
define("_JOMRES_COM_MR_DISPGUEST_FIRSTNAME","Nome");
define("_JOMRES_COM_MR_DISPGUEST_SURNAME","Cognome");
define("_JOMRES_COM_MR_DISPGUEST_HOUSE","Via");
define("_JOMRES_COM_MR_DISPGUEST_STREET","Via");
define("_JOMRES_COM_MR_DISPGUEST_TOWN","Città");
define("_JOMRES_COM_MR_DISPGUEST_POSTCODE","CAP");
define("_JOMRES_COM_MR_DISPGUEST_LANDLINE","Telefono");
define("_JOMRES_COM_MR_DISPGUEST_MOBILE","Cellulare");
define("_JOMRES_COM_MR_DISPGUEST_FAX","Fax");
define("_JOMRES_COM_MR_DISPGUEST_CCARDNO","Numero di carta di credito");
define("_JOMRES_COM_MR_DISPGUEST_CCARDISS","Emissione");
define("_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE","Scadenza");
define("_JOMRES_COM_MR_DISPGUEST_CCARISSNO","Numero emessione");
define("_JOMRES_COM_MR_DISPGUEST_CCARDNAME","Nome che appare sulla carta");
define("_JOMRES_COM_MR_QUICKRES_STEP4_TITLE","Seleziona una camera");
define("_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS","Durata soggiorno");
define("_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS","N° ospiti");
define("_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE","Totale");
// Scheda camere
define("_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE","Camere e struttura");
define("_JOMRES_COM_MR_VRCT_TAB_ROOM","Camere");
define("_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES","Caratteristiche della camera");
define("_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES","Tipo di camera");
define("_JOMRES_COM_MR_VRCT_TAB_PROPERTYS","Struttura");
define("_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES","Caratteristiche della struttura");
define("_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK","Camera");
define("_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE","Tipo");
define("_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME","Nome");
define("_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER","Numero");
define("_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR","Piano");
define("_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS","Accesso per disabili");
define("_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE","Massimo occupanti consetito");
define("_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES","Caratteristiche");
define("_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT","Camera aggiunta");
define("_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT","Modifica elemento:");
define("_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK","Caratteristiche della camera");
define("_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT","Descrizione della caratteristica");
define("_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT","Caratteristica della camera aggiunta");
define("_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE","Caratteristica della camera aggiornata");
define("_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK","Tipo di camera");
define("_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV","Abbreviazione tipo di camera");
define("_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC","Descrizione tipo di camera");
define("_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT","Tipo di camera aggiunto");
define("_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE","Tipo di camera aggiornato");
define("_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT","Modifica elemento:");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME","Nome");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET","Indirizzo");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN","Cap Città");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION","Regione");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY","Paese");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE","P.iva");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE","Telefono");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX","Fax");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL","E-Mail");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE","Sito Web");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES","Caratteristiche");
define("_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT","struttura aggiunta");
define("_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE","struttura aggiornata");
define("_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK","Caratteristiche della struttura");
define("_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV","Abbreviazione della caratteristiche della struttura");
define("_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC","Descrizione della caratteristiche della struttura");
define("_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT","Caratteristica della struttura aggiunta");
define("_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE","Caratteristica della struttura aggiornata");
define("_JOMRES_COM_MR_LISTTARIFF_TITLE","Tariffe");
define("_JOMRES_COM_MR_LISTTARIFF_RATETITLE","Nome tariffa");
define("_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION","Descrizione");
define("_JOMRES_COM_MR_LISTTARIFF_VALIDFROM","Valido da");
define("_JOMRES_COM_MR_LISTTARIFF_VALIDTO","Valido fino");
define("_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY","Tariffa per notte");
define("_JOMRES_COM_MR_LISTTARIFF_MINDAYS","Minimo  giorni");
define("_JOMRES_COM_MR_LISTTARIFF_MAXDAYS","Massimo giorni ");
define("_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE","Minimo occupanti consentito");
define("_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE","Massimo occupanti consentito");
define("_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS","Tipo di camera");
define("_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN","Ignorare TPN");
define("_JOMRES_COM_MR_LISTTARIFF_ALLOWWE","Permetti fine settimana");
define("_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT","Tariffa aggiunta");
define("_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE","Tariffa aggiornata");
define("_JOMRES_COM_MR_LISTTARIFF_LINKTEXT","Modificare elemento");
define("_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE","Clonare elemento");
define("_JOMRES_COM_MR_LISTTARIFF_DELETED","Tariffa eliminata");
define("_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT","Modifica tariffa");
define("_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE","Festività");
define("_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE","Prenotazione salvata");
define("_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN","Check-in ospite ");
define("_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT","Check-out ospite");
define("_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS","Elenco prenotazioni");
define("_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS","Elenco nuove prenotazioni");
define("_JOMRES_FRONT_MR_MENU_ADMIN_HOME","Pannello Amministrazione");
define("_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN","Amministra  ospiti");
define("_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN","Amministra struttura");
define("_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY","Controlla la disponibilità");
define("_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS","Conferma tuoi dati");
define("_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME","Nome");
define("_JOMRES_FRONT_MR_DISPGUEST_SURNAME","Cognome");
define("_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL","N° civico");
define("_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL","Indirizzo");
define("_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL","Città");
define("_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL","CAP");
define("_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL","Telefono");
define("_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL","Cellulare");
define("_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE","Non c'è nessuna camera disponibile per i parametri specificato");
define("_JOMRES_FRONT_MR_BOOKINGMADE","<center>Grazie per la tua prenotazione, ti auguriamo un piacevole soggiorno. La  prenotazione ti sarà confermata tramite mail al più presto possibile.</center>");
define("_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE","E' stata fatta una prenotazione : ");
define("_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM","E' stata prenotata una camera: ");
define("_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL","Arrivo: ");
define("_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE","Partenza: ");
define("_JOMRES_FRONT_MR_EMAIL_TEXT_NAME","Nome: ");
define("_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE","Telefono: ");
define("_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE","Telefono cellulare: ");
define("_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL","Il costo del contratto è: ");
define("_JOMRES_FRONT_MR_BOOKIN_TITLE","Check-in ospite ");
define("_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON","Seleziona ospite");
define("_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN","Ospite registrato ");
define("_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN","Non c'è nessun ospite che arriva oggi.");
define("_JOMRES_FRONT_MR_BOOKOUT_TITLE","Check-out  ospite ");
define("_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT","Non c'è nessun ospite che parte oggi.");
//Pannello di configurazione
define("_JOMRES_COM_A_SUPPLIMENTS","Supplemento");
define("_JOMRES_COM_A_TARIFFS","Tariffe e valute");
define("_JOMRES_COM_A_DISCOUNTS","Scontistica");
define("_JOMRES_COM_A_FILE_UPLOADS","Carica file ");
define("_JOMRES_COM_A_CURRENT_SETTINGS","Impostazione attuale");
define("_JOMRES_COM_A_EXPLANATION","Spiegazione");
define("_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON","Supplemento persona");
define("_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC","Assicurati di impostare SI se vuoi cambiare il suplemento  persona.");
define("_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST","Costo supplemento a persona");
define("_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE","Deposito richiesto in percentuale");
define("_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC","Se impostato in SI, viene richiesto il deposito in percentuale del totale della prenotazione altrimenti si applica un valore fisso.");
define("_JOMRES_COM_A_DEPOSIT_VALUE","Deposito richiesto");
define("_JOMRES_COM_A_TARIFFS_PER","Per persona, per notte");
define("_JOMRES_COM_A_TARIFFS_PER_DESC","Seleziona SI se vuoi chiedere il pagamento per persona a notte, NO  per camera a notte.");
define("_JOMRES_COM_A_UPLOADS_FILESIZE","dimensione del file");
define("_JOMRES_COM_A_UPLOADS_FILESIZE_DESC","dimensione massima del file  immagine in kilobyte");
define("_JOMRES_FRONT_MR_BOOKED","Occupato");
define("_JOMRES_COM_CONFIRMATION_TITLE","");
define("_JOMRES_COM_CONFIRMATION_DEAR","Caro");
define("_JOMRES_COM_CONFIRMATION_RATE_RULES","Costo unitario a notte");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS","Dati della prenotazione");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1","Grazie per la  prenotazione presso");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2",". Sotto trovi un riassunto dei dati della prenotazione. Controlla che non ci siano errori.");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN"," La registrazione può avvenire dopo le 11 pm.");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD","Arrivederci al ");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY","Speriamo che godrai un piacevole soggiorno.");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO","Nota bene");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT","Ricorda che una prenotazione è un contratto giuridicamante vincolante,in caso dovessi annullare o abbreviare il tuo soggiorno ti sarà trattenuta la caparra come penale.");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE","Non è prevista alcuna indennità per pasti non comsumati o per camere non occupate durante il periodo della prenotazione.");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO","<i>Penalità per anullamento o riduzione del periodo di soggiorno:");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS","30 giorni o più");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY"," Deposito.");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS","15 a 30 giorni");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT"," 50% del totale del valore del contratto.");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS"," 14 giorni");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT"," 100% del totale del contratto.");
define("_JOMRES_COM_CONFIRMATION_RESERVATION_VAT","Aliquota IVA  del 20% è inclusa in tutti le tariffe.");
define("_JOMRES_COM_CONFIRMATION_PRINT","Stampa la lettera di conferma.");
define("_JOMRES_COM_INVOICE_TITLE","Stampa fattura");
define("_JOMRES_COM_INVOICE_STAYNIGHTS","Numero notti: ");
define("_JOMRES_COM_INVOICE_CONTRACTAGREED","Totale (alla prenotazione): ");
define("_JOMRES_COM_INVOICE_COSTPERNIGHT","Tariffa per notte: ");
define("_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL","totale");
define("_JOMRES_COM_INVOICE_LETTER_INTRO1","Grazie per il suo soggiorno presso");
define("_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY","a presto.");
define("_JOMRES_COM_INVOICE_PRINT","Stampa fattura");
define("_JOMRES_COM_ADDSERVICE_TITLE","Aggiungi servizio al conto");
define("_JOMRES_COM_ADDSERVICE_DESCRIPTION","Descrizione del servizio");
define("_JOMRES_COM_ADDSERVICE_VALUE","Costo del servizio");
define("_JOMRES_COM_ADDSERVICE_BOOKINGDESC","Altri elementi fatturati");
define("_JOMRES_COM_ADDSERVICE_TOTALVALUE","Altri elementi fatturati, valore totale: ");
define("_JOMRES_COM_ADDSERVICE_SAVEMESSAGE","Elementi aggiunto al conto");
define("_JOMRES_UPLOAD_IMAGE","Carica immagine");
define("_JOMRES_FILE_UPLOAD","Carica file");
define("_JOMRES_FILE_ERROR_TYPE","Si possono caricare solo inseguenti tipi di file:\n");
define("_JOMRES_FILE_ERROR_EMPTY","Per favore seleziona un file prima di caricare.");
define("_JOMRES_FILE_ERROR_NAME","La stringa può solamente contenere caratteri alfanumerici e non spazi, per favore.");
define("_JOMRES_FILE_ERROR_SIZE","La dimensione del file eccede il massimo che consentito.");
define("_JOMRES_FILE_NOT_UPLOADED","File NON caricato.");
define("_JOMRES_FILE_UPDATED","Il suo file è stato caricato.");
define("_JOMRES_COM_A_JSCALENDAR","Calendario JS");
define("_JOMRES_COM_A_CALENDARLANGUAGE","Lingua del file di calendario JS");
define("_JOMRES_COM_A_CALENDARLANGUAGE_DESC","Scegliare la lingua del file utilizzata nel calendario Javascript. Si prega notare che è possibile che alcuni calendari contengano bugs, Vedi //sourceforge.net/per maggiori informazioni.");
define("_JOMRES_COM_A_CALENDARCSS","File CSS di calendario JS");
define("_JOMRES_COM_A_CALENDARCSS_DESC","Scegli il file CSS che deve essere utilizzato nel calendario Javascript.");
define("_JOMRES_COM_A_ODDS","Quotazioni.");
define('_JOMRES_COM_A_ERRORCHECKING','Elenca chiamate al minicomponente ');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Seleziona SI per vedere in fondo alla pagina il log dei minicomponenti chiamati al termine della esecuzione di Jomres. Disabilita anche la funzione interna di reindirizzamento. Funzione utile ad individuare quali minicomponenti stanno eseguendo determinati servizi.');
define("_JOMRES_FILE_DELETE","Elimina quest' immagine");
define("_JOMRES_FILE_DELETED","File eliminato");
define("_JOMRES_COM_MR_ROOM_DELETE","Elimina");
define("_JOMRES_COM_MR_ROOM_UNABLETODELETE","Non è possibile eliminare questo pulsante, ci sono prenotazioni.");
define("_JOMRES_COM_MR_ROOM_DELETED","Camera eliminata");
define("_JOMRES_COM_MR_ROOMFEATURE_DELETE","Elimina la caratteristica della camera");
define("_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE","Non è possibile eliminare questa caratteristica della camera, perchè assegnata ad altre camere. Elimina la caratteristica da quelle camere e riprova.");
define("_JOMRES_COM_MR_ROOMFEATURE_DELETED","Caratteristica della camera eliminata");
define("_JOMRES_COM_MR_PROPERTYFEATURE_DELETE","Elimina la caratteristica della struttura");
define("_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE","Non è possibile eliminare questa caratteristica della struttura, perchè è assegnata ad altre strutture. Elimina la caratteristica da quelle strutture e riprova.");
define("_JOMRES_COM_MR_PROPERTYFEATURE_DELETED","Caratteristica della struttura eliminata");
define("_JOMRES_COM_MR_ROOMCLASS_DELETE","Elimina il tipo di camera");
define("_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS","Non è possibile eliminare questo tipo di camera, perchè è stato assegnato ad altre camere.");
define("_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS","Non è possibile eliminare questo tipo d camera, perchè è stato assegnato ad una tariffa.");
define("_JOMRES_COM_MR_ROOMCLASS_DELETED","Tipo di camera eliminato");
define("_JOMRES_COM_MR_PROPERTY_DELETE","struttura eliminata");
define("_JOMRES_COM_MR_PROPERTY_DELETED","struttura eliminata");
define("_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS","Tu non hai sufficienti diritti per eliminare questa struttura.");
define("_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE","Larghezza dell'immagine a grandezza naturale");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK","Fai clic per un mappa");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION","Descrizione della struttura");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES","Ora di registrazione");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES","Attività della zona");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS","Come si arriva");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS","Aeroporti");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT","Altri mezzi transporti");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS","Politica e clausola esonerativa");
define("_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS","Indirizzo");
define("_JOMRES_COM_A_VISITORSCANBOOKONLINE","Permettere prenotazione in linea");
define("_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC","Imposta SI per permettere le prenotazioni on-line.");
define("_JOMRES_COM_A_FIXEDPERIODBOOKINGS","Prenotazioni  per un periodo fisso.");
define("_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC",'Se imposti SI, la prenotazione sarà per un periodo fisso. Se imposti NO, controlla di non aver impostato in SI  "Giorno di arrivo predefinito" (a meno che si voglia forzare gli arrivi in un giorno predefinito) in altro modo non sarà posibile ottenere link multipli del calendario disponibilit&agrave;.');
define("_JOMRES_COM_A_FIXEDPERIOD","Periodo di prenotazione: ");
define("_JOMRES_COM_A_BOOKING","Camere prenotazione");
define("_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS","Periodo massimo, Esempio 3x7 periodo di prenotazione = 21 giorni");
define("_JOMRES_COM_A_SINGLEROOMPROPERTY","Struttura di una sola camera");
define("_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC","Es. Un'appartamento per vacanze. In questo caso, assicurarti di avere una sola camera registrata in ciascuna struttura.");
define("_JOMRES_FRONT_MR_REVIEWBOOKING","Vedi prenotazione");
define("_JOMRES_COM_MR_CONFIRMBOOKING","Conferma prenotazione");
define("_JOMRES_COM_MR_WEEKDAYS_MONDAY","Lunedì");
define("_JOMRES_COM_MR_WEEKDAYS_TUESDAY","Martedì");
define("_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY","Mercoledì");
define("_JOMRES_COM_MR_WEEKDAYS_THURSDAY","Giovedì");
define("_JOMRES_COM_MR_WEEKDAYS_FRIDAY","Venerdì");
define("_JOMRES_COM_MR_WEEKDAYS_SATURDAY","Sabato");
define("_JOMRES_COM_MR_WEEKDAYS_SUNDAY","Domenica");
define("_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR","Lun");
define("_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR","Mar");
define("_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR","Mer");
define("_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR","Gio");
define("_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR","Ven");
define("_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR","Sab");
define("_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR","Dom");
define("_JOMRES_COM_A_AVLCAL","Calendario di disponibilità.");
define("_JOMRES_COM_AVLCAL_TODAYCOLOUR","Colore delle carattere per la data attuale ");
define("_JOMRES_COM_AVLCAL_INMONTHFACE","Colore delle carattere per i giorni nel mese mostrato ");
define("_JOMRES_COM_AVLCAL_OUTMONTHFACE","Colore delle carattere per i giorni che non sono nel mese mostrato");
define("_JOMRES_COM_AVLCAL_INBGCOLOUR","Colore dello sfondo della casella per i giorni quando è disponibile la camera/struttura.");
define("_JOMRES_COM_AVLCAL_OUTBGCOLOUR","Colore dello sfondo per i giorni che non stanno nel mese mostrato");
define("_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR","Sfondo della casella per giorni occupati");
define("_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR","Sfondo della casella per le camere con la prenotazione provvisoria (prenotazioni con nessun deposito fatto)");
define("_JOMRES_COM_AVLCAL_PASTCOLOUR","Fondo della casella per date  passate");
define("_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY","Occupata/ non disponibile");
define("_JOMRES_COM_AVLCAL_INMONTHFACE_KEY","Disponibile per la prenotazione");
define("_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY","Prenotazioni provvisorie");
define("_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO","Giorno di arrivo predefinito");
define("_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC","Solamente per strutture che offrono periodi fissi di prenotazione. Seleziona il giorno degli arrivi.");
define("_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY","Giorno di arrivo fisso");
define("_JOMRES_FRONT_MR_FIXEDPRIOD1","Periodo di soggiorno (giorni)");
define("_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR","Mostrare calendario della disponibilità");
define("_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC","Colloca questo in SI  per mostrare il calendario della disponibilità.");
define("_JOMRES_FRONT_AVAILABILITY","Disponibilità");
define("_JOMRES_FRONT_CALENDAR_CLICKDATES","Fai clic per  per vedere le date libere nel modulo di prenotazione.");
define("_JOMRES_FRONT_BLACKBOOKING","Camere indisponibili");
define("_JOMRES_FRONT_BLACKBOOKING_NEW","Nuova camera indisponiblie");
define("_JOMRES_FRONT_DELETEGUEST","Check-out  ospite");
define("_JOMRES_FRONT_DELETEGUEST_GUESTDELETED","Ospite eliminato");
define("_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST","Non è possibile eliminare questo ospite perchè ha delle prenotazioni aperte. ");
define("_JOMRES_COM_INVOICE_ACTUALROOMCOST","Costo della camera: ");
define("_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO","Ciao");
define("_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS","Grazie per la tua prenotazione ");
define("_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY","Segue un riassunto della prenotazione:");
define("_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS","Per domande, errori o per la richiesta di ulteriori servizi contattaci.");
define("_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE","Il nostro numero di telefono è");
define("_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL"," Contatto per posta elettronica");
define("_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING","Fumatori");
define("_JOMRES_FRONT_ROOMSMOKING_EITHER","indifferente");
define("_JOMRES_COM_CALENDAROUTPUT","Formato del calendario");
define("_JOMRES_COM_CALENDAROUTPUT_DESC","Questo permette al utenti cambiare il formato delle date in Jomres");
define("_JOMRES_COM_CALENDARINPUT","Formatto di immissione date nel calendario");
define("_JOMRES_COM_CALENDARINPUT_DESC","Questo permette al utenti cambiare il formato di immissione delle date in  Jomres.");
define("_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT","Le prenotazioni per un periodo fisso permettono brevi pause");
define("_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS","Durata della pausa");
define("_JOMRES_COM_MR_VRCT_PUBLISHED","Pubblicato");
define("_JOMRES_COM_A_PAYPAL","Paypal");
define("_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL","Tracce");
define("_JOMRES_MR_AUDIT_LISTING_DATE","Data");
define("_JOMRES_MR_AUDIT_LISTING_TIME","Ora");
define("_JOMRES_MR_AUDIT_LISTING_USER","Utente (nome utente)");
define("_JOMRES_MR_AUDIT_LISTING_OPERATION","Operazione");
define("_JOMRES_MR_AUDIT_LISTING_VIEWSQL","Visualizza dati");
define("_JOMRES_MR_AUDIT_LISTING_FILTER_DATE","Filtro  data");
define("_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME","Filtro nome utenti");
define("_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION","Filtro operazione");
define("_JOMRES_COM_MR_VIEWBOOKINGS_STATUS","Status");
define("_JOMRES_COM_MR_VIEWBOOKINGS_PENDING","Arrivo in sospeso");
define("_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY","Arrivi di oggi");
define("_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT","In casa");
define("_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY","Partenze di oggi");
define("_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE","Partenza scaduta");
define("_JOMRES_COM_MR_VIEWBOOKINGS_LATE","Non  arrivato");
define("_JOMRES_MR_AUDIT_UNKNOWNUSER","Utente sconosciuto");
define("_JOMRES_MR_AUDIT_INSERT_ROOM","Camera creata");
define("_JOMRES_MR_AUDIT_UPDATE_ROOM","Camera aggiornata");
define("_JOMRES_MR_AUDIT_DELETE_ROOM","Camera eliminata");
define("_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE","Caratteristica della camera creata");
define("_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE","Caratteristica della camera aggiornata");
define("_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE","Caratteristica della camera eliminata");
define("_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE","Tipo di camera inserito");
define("_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE","Tipo di camera aggiornato");
define("_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE","Tipo di camera eliminato");
define("_JOMRES_MR_AUDIT_INSERT_PROPERTY","struttura creata");
define("_JOMRES_MR_AUDIT_UPDATE_PROPERTY","struttura aggiornata");
define("_JOMRES_MR_AUDIT_DELETE_PROPERTY","struttura eliminata");
define("_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE","Caratteristica della struttura creata");
define("_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE","Caratteristica della struttura aggiornata");
define("_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE","Caratteristica della struttura eliminata");
define("_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS","Impostazione della struttura eliminata");
define("_JOMRES_MR_AUDIT_PUBLISH_PROPERTY","struttura pubblicata");
define("_JOMRES_MR_AUDIT_INSERT_TARIFF","Tariffa creata");
define("_JOMRES_MR_AUDIT_UPDATE_TARIFF","Tariffa aggiornata");
define("_JOMRES_MR_AUDIT_DELETE_TARIFF","Tariffa eliminata");
define("_JOMRES_MR_AUDIT_ADDSERVICE","Costo del servizio aggiunto");
define("_JOMRES_MR_AUDIT_BOOKEDGUESTIN","Check in ospite");
define("_JOMRES_MR_AUDIT_BOOKEDGUESTOUT","Check out ospite");
define("_JOMRES_MR_AUDIT_ENTEREDDEPOSIT","Immetti deposito ");
define("_JOMRES_MR_AUDIT_INSERT_GUEST","Ospite aggiunto");
define("_JOMRES_MR_AUDIT_UPDATE_GUEST","Ospite aggiornato");
define("_JOMRES_MR_AUDIT_DELETE_GUEST","Ospite eliminato");
define("_JOMRES_MR_AUDIT_BOOKED_ROOM","Prenotazione una camera");
define("_JOMRES_MR_AUDIT_INSERT_EXTRA","Crea un extra");
define("_JOMRES_MR_AUDIT_UPDATE_EXTRA","Aggiorna un extra");
define("_JOMRES_MR_AUDIT_DELETE_EXTRA","Elimina un extra");
define("_JOMRES_MR_AUDIT_PUBLISH_EXTRA","Extra pubblicato.");
define("_JOMRES_MR_AUDIT_BLACKBOOKING","Immetti una prenotazione nera .");
define("_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE","Elimina prenotazione nera .");
define("_JOMRES_COM_MR_EXTRA_TITLE","Extras");
define("_JOMRES_COM_MR_EXTRA_DESC","Descrizione");
define("_JOMRES_COM_MR_EXTRA_NAME","Nome");
define("_JOMRES_COM_MR_EXTRA_PRICE","Costo");
define("_JOMRES_COM_MR_EXTRA_SAVE_UPDATED","Extra aggiornato");
define("_JOMRES_COM_MR_EXTRA_LINKTEXT","Modificare l'elemento");
define("_JOMRES_COM_MR_EXTRA_DELETED","Extra eliminato");
define("_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS","Extras");
define("_JOMRES_COM_A_EXTRAS","Mostrare extras al momento della prenotazione");
define("_JOMRES_COM_A_EXTRAS_DESC","Imposta in SI per mostrare gli extra che vuoi offrire ai tuoi ospiti");
define("_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP","Extras facoltativi.");
define("_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS","Data di inizio e di fine dell' indisponibilità");
define("_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES","Motivazione");
define("_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS","Camere Indisponibili");
define("_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR","Errore durante la prenotazione, una o più  camere selezionate non sono libere.");
define("_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT","Camere inclusa fra le indisponibili");
define("_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING","Camere indisponibili");
define("_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS","Nessuna camera indisponibile da elencare");
define("_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS","Numero di stelle");
define("_JOMRES_COM_A_SMOKING","Mostrare l'opzione fumatori");
define("_JOMRES_COM_A_SMOKING_DESC","Scegli SI  per mostrare l'opzione fumatori.");
define("_JOMRES_COM_A_RESET","Reimpostare");
define("_JOMRES_COM_A_PAYPAL_CANCELLED","Prenotazione annullata");
define("_JOMRES_FRONT_MR_SEARCH_HERE","Ricerca quì per:");
define("_JOMRES_COM_A_SMOKING_OPTION","Opzione fumatori predefinita");
define("_JOMRES_COM_A_CURRENCYSYMBOL","Simbolo di valuta");
define("_JOMRES_COM_A_CURRENCYSYMBOL_DESC",'Es. , si prega notare che si devono utilizzare i codici degli enti HTML per il simbolo richiesto. Per vedere un elenco di questi visitare <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
define("_JOMRES_COM_A_CURRENCYCODE","Codice di valuta");
define("_JOMRES_COM_A_CURRENCYCODE_DESC",'Es. EUR. Questo è necessario se si utilizza  Paypal. Per vedere un elenco di questi codici per favore visitare <a href="http://www.xe.com/iso4217.htm">XE.com</a>"');
define("_JOMRES_COM_A_CLICKFORMOREINFORMATION","Informazioni");
define("_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO","Limitare prenotazione avanzata");
define("_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC","Imposta in  SI se vuoi limitare le prenotazioni anticipate (utilizza il campo di seguito per impostare  i giorni).");
define("_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS","Giorni di prenotazione avanzata limitati a:");
define("_JOMRES_COM_A_TAX_WARNING","<font color=red>NOTA: Non è raccomandato impostare le due opzioni qui di seguito in SI, devi utilizzare solamente uno due metodi di computazione dell' imposta disponibili. </FONT>");
define("_JOMRES_COM_FRONT_ROOMTAX","Imposta");
define("_JOMRES_COM_A_ROOMTAX","Imposta della camera");
define("_JOMRES_COM_A_ROOMTAX_DESC","Ex imposta di soggiorno. è possibile applicare un' importo  fisso o una percentuale da applicate al costo della camera.");
define("_JOMRES_COM_A_ROOMTAX_FIXED","Importo fisso  (imposta)");
define("_JOMRES_COM_A_ROOMTAX_PERCENTAGE","Imposta percentuale");
define("_JOMRES_COM_A_EUROTAX","Imposta");
define("_JOMRES_COM_A_EUROTAX_PERCENTAGE","Imposta percentuale");
define("_JOMRES_MR_AUDIT_ARCHIVE","Archiviare tutte le registrazioni");
define("_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE"," Registrazione archiviate");
define("_JOMRES_MR_AUDIT_ARCHIVED_AUDIT","Audit registri verificati");
define("_JOMRES_FRONT_TARIFFS","Le nostre tariffe");
define("_JOMRES_FRONT_TARIFFS_TITLE","Nome della tariffa");
define("_JOMRES_FRONT_TARIFFS_DESC","Descrizione della tariffa");
define("_JOMRES_FRONT_TARIFFS_ROOMTYPE","Tipo di camera");
define("_JOMRES_FRONT_TARIFFS_STARTS","Valido da");
define("_JOMRES_FRONT_TARIFFS_ENDS","Valido fino");
define("_JOMRES_FRONT_TARIFFS_PPPN","Per persona a notte");
define("_JOMRES_FRONT_TARIFFS_PN","a notte");
define("_JOMRES_FRONT_TARIFFS_NOTWEEKEND","Non includere fine settimana");
define("_JOMRES_FRONT_TARIFFS_MINDAYS","Durata minima della permanenza (gg)");
define("_JOMRES_FRONT_TARIFFS_MAXDAYS","Durata massima della permanenza (gg)");
define("_JOMRES_FRONT_TARIFFS_MINPEEPS","Minimo occupanti");
define("_JOMRES_FRONT_TARIFFS_MAXPEEPS","Massimo occupanti");
define("_JOMRES_FRONT_PREVIEW","Anteprima");
define("_JOMRES_COM_A_EDITINGMODEON","Modificare etichette");
define("_JOMRES_COM_A_EDITING_CURRENTTEXT","Testo attuale");
define("_JOMRES_COM_A_EDITING_NEWTEXT","Testo nuovo");
define("_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT","Aggiornare testo cliente.");
define("_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE","Modifica lingua");
define("_JOMRES_COM_A_AUDITING_SHOWING","Mostrando ultimi 200 registri");
define("_JOMRES_FRONT_PTYPE","Tipo di struttura");
define("_JOMRES_COM_PTYPES_LIST_TITLE","Elencare tipi di struttura");
define("_JOMRES_COM_PTYPES_LIST_TITLE_EDIT","Modificare tipo di struttura");
define("_JOMRES_COM_PTYPES_PTYPE","Tipo di struttura");
define("_JOMRES_COM_PTYPES_PTYPE_DESC","Descrizione del tipo di struttura");
define("_JOMRES_COM_PTYPES_SAVED","Tipo di  struttura salvato");
define("_JOMRES_COM_PTYPES_UNABLETO_DELETE","Non è possibile eliminare il tipo di struttura. Il tipo di struttura è assegnato a una o più strutture, assegna di nuovo le strutture prima provare ad eliminare.");
define("_JOMRES_COM_PTYPES_DELETED","Tipo di struttura eliminati");
define("_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY","Memo del pagamento");
define("_EXTRAS_NOEXTRAS","Nessun servizio addizionale da aggiungere alla fattura");
define("_JOMRES_COM_CHARGING_DEPOSIT","Deposito");
define("_JOMRES_COM_CHARGING_FULLAMT","Quantità completa");
define("_JOMRES_COM_CHARGING_CONFIG","Costo applicato al momento della prenotazione");
define("_JOMRES_COM_CHARGING_CONFIG_DESC"," Sceglie deposito se deve essere richiesta solo una caparra, altrimenti verrà richesto il pagamento della somma completa.");
define("_JOMRES_COM_MONTHSTOSHOW","Mesi del calendario da mostrare");
define("_JOMRES_COM_MONTHSTOSHOW_DESC","Nella disponibità della camera, quanti mesi del calendario devono essere mostrati");
define("_JOMRES_INVOICE_SIGNEDONBEHALFOF","   ");
// V1.4
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
define('_JOMRES_COM_A_CANCEL','Cancella');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Seleziona la camera che desideri tenere fuori servizio, e le date. Se la camera non ha il ceck selezionato, non potr&agrave; essere inclusa nelle indisponibili fino a che la prenotazione non sar&agrave; cancellata.<br/> Quando hai selezionato le date appropriate, clicca il bottune blu applicare ricontrolla la disponibilit&agrave;. ');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Sembra che sei stato scollegato per inattivit&agrave;.Perfavore, esegui nuovamente il login.</b> Please log in and try again.');
define('_JOMRES_JR_BLACKBOOKING_REASON','Ragione');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Usi dei gateway di pagamento');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Seleziona SI se usi il pagamento online.. <b>Nota:</b>Questo non disabilita il calcolo del deposito mostrato durante il processo di prenotazione. Per disabilitarlo puoi modificare i template che mostrano le camere e rimuovere gli elementi relativi ai depositi.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Seleziona un metodo di pagamento	.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway abilitato');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Modifica il dettaggio dei plug-in');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Settaggi plug-in inseriti');
define('_JOMRES_FRONT_GALLERYLINK','Visualizza il sito di questa struttura');
define('_JOMRES_COM_A_GALLERYLINK','Link esterno');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Inserisci qui un link al tuo sito.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Vedi Carta di credito');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Aggiorna Carta di credito');
define('_JOMRES_MR_CREDITCARD_EDIT','Edita Carta di Credito');
define('_JOMRES_COM_A_EDITICON','Dimensione icone');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Caricamento gruppo di immagini');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Immagini gi&agrave; presenti nella cartella');
define('_JOMRES_COM_A_SLIDESHOWS','Slideshows');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Mostra link slideshows');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Mostra slideshow inline');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Larghezza miniatura Slideshow');
define('_JOMRES_FRONT_SLIDESHOW','Slideshow');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Ci dispiace, nessuna immagine disponibile per questa struttura');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Mostra link alle tariffe');
define('_JOMRES_COM_A_POPUPSALLOWED','Popups permessi');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Se impostato su NO i link che normalmente sarebbero stati aperti in una finestra popup verranno aperti in linea. SPERIMENTALE! ');
define('_JOMRES_FRONT_IMAGEUPLOADS','Carica  Immagine');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Usa questo modulo per caricare le tue immagini.<br/><b>Nota</b> ogni immagine con lo stesso nome sar&agrave; sovrascritta. Le immagini relative alla struttura o alle specifiche camere vanno caricate nella sezione apposita.<br/>');
define('_JOMRES_A_TABS_MISC','Misc');
define('_JOMRES_A','Configurazione Sito');
define('_JOMRES_A_GLOBALPFEATURES','Usa le impostazioni di struttura globali');
define('_JOMRES_A_GLOBALPFEATURES_DESC','Seleziona SI se vuoi forzare tutte le strutture ad usare solo le funzioni definite dal Webmaster.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','Per assegnare ad una immagine questa caratteristica devi prima caricare il set di immagini relativo alle caratteristiche nella cartella /images/stories/jomres/pfeatures/ .');
define('_JOMRES_A_ICON','Icona');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Seleziona il plugin di ricerca che vuoi usare.');
define('_JOMRES_FRONT_NORESULTS','<b>La tua ricerca non ha fornito risultati. Ti preghiamo di modificarne i parametri e provare ancora.</b>');
define('_JOMRES_AREYOUSURE','Confermi');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Prenota');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Prenota questa struttura');
define('_JOMRES_COM_MR_DISPGUEST_CCV','Numero di sicurezza');
//v1.4c
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Mostrare tariffe in linea');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Mostra Indirizzo');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Mostra informazioni sulla struttura ricettiva');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Mostra la disponibilità di camere');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Tariffe');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Mostra le informazioni relative all indirizzo sotto questo link');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Mostra i dettagli della struttura sotto questo link');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Mostra le strutture e la disponibilita sotto questo link');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Mostra le tariffe sotto questo link');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Elenca le strutture ricettive per stato');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Elenca le strutture ricettive per regione');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Elenca le strutture ricettive per citt&agrave;');
define('_JOMRES_SEARCH_FEATURE_INFO','Seleziona le caratteristiche che ti interessano e avvia la ricerca.');
define('_JOMRES_SEARCH_BUTTON','Cerca');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Inserisci i termini da cercare qui sotto e avvia la ricerca.');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Termine/i da cercare: ');
define('_JOMRES_SEARCH_AVL_INFO','Seleziona le date che ti interessano e avvia la ricerca..');
define('_JOMRES_SEARCH_PTYPES','Elenca le strutture ricettive per tipologia');
// v1.4e
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Mostrare la data di partenza inserita?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Selezionare NO se non vuoi mostrare il box di selezione per la data di partenza. Utilizza NO solo se sai cosa stai facendo, cosi facendo la data di partenza selezionata sara sempre il giorno dopo quella di arrivo.");
// v1.4f
define('_JOMRES_COM_PROPERTYLISTDESC','Limite descrizione');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Limita il numero di caratteri delle descrizioni-struttura mostrate nell'elenco strutture .");
// v1.4g
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Tariffe Flat');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Medie');
define('_JOMRES_COM_A_TARIFFS_MODEL','Seleziona il modello di tariffa che vuoi utilizzare');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Hai due scelte di calcolo delle tariffe. La prima, il metodo 'tariffa flat' ti permette di offrire varie tariffe al cliente ed il prezzo per il pernottamento non vari per tutto il periodo prenotato. Utile se vuoi offrire varie tariffe per la stessa data, ad esempio trattamento bed and breakfast, mezza pensione o pensione completa. Scegli la tariffa 'media' se vuoi regolare le tue tariffe in base alla data scelta. Il sistema trovera tutte le tariffe per ciascun giorno di prenotazione, facendo la media tariffaria del periodo");
define('_JOMRES_COM_A_DATEFORMATSTYLE','Used date() formato data utilizzato?');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Seleziona SI se vuoi formattare le date secondo la funzione php date() (Vedi <a href="http://www.php.net/manual/en/function.date.php">Qui</a>). Seleziona NO per usare la formattazione strftime() (Vedi <a href="http://www.php.net/manual/en/function.strftime.php">Qui</a> eg. %b %d %Y ');
define('_JOMRES_COM_MR_VRCT_PUBLISH','Clicca per pubblicare');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Clicca per sospendere');
define('_JOMRES_A_GLOBALROOMTYPES','Utilizza tipo stanza globale');
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Impostare su SI se vogliamo forzare le struttura ad utilizzare solo i tipi stanza predefiniti dal webmaster.');
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Per assegnare una immagine a questo tipo stanza dobbiamo prima caricare una immagine nella cartella /images/stories/jomres/rmtypes/. ');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Errore inserimento colore di sfondo');
define('_JOMRES_COM_CONFIGCOUNTRIES','Form predefinita per nazione');
define('_JOMRES_JAVASCRIPT_','Eementi evidenziati in rosso sono richiesti.');
define('_JOMRES_COM_SELFREGISTRATION','Gli utenti possono registrare le proprie strutture');
define('_JOMRES_COM_SELFREGISTRATION_DESC','Impostare su SI se vogliamo che gli utenti siano in grado di registrare le proprie strutture senza il nostro intervento.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Inserire Regione e Nazione della vostra struttura.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Completare i dettagli della vostra struttura.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Elementi evidenziati in rosso sono richiesti.');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Crea struttura');
define('_JOMRES_REGISTRATION_NOTALLOWED',"Spiacente, non possiamo creare una struttura su questo sistema. Devi essere connesso come utente registrato.");
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Crea struttura: ');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Per utente: ');
// v1.4i
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Mostra calendario dall&acute;inizio dell&acute;anno?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Il calendario mostra dall&acute;iznio dell&acute;anno corrente.');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Numero di stanze disponibili');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Indietro ai dettagli struttura');
define('_JOMRES_FRONT_ROOMTYPES','Tipo stanza');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Limite di ricerca casuale');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Mostra collegamento convertitore valute di google nella lista tariffe?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','Converti costo in :');
define('_JOMRES_COM_ALLOWHTMLEDITOR','Permetti le modifiche utilizzando un editor HTML?');
// v2
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Usare questo modulo per fare le vostre prenotazioni. Portare il cursore del mouse sopra l&acute;immagine "i" per maggiori informazioni circa la colonna. Modificare i dati della vostra prenotazione come data di arrivo e partenza e numero di persone, poi selezionare la stanza richiesta dalla lista delle stanze. Cliccare qualsiasi stanza disponibile per aggiungerla alla prenotazione. Fatto questo, potrete aggiungere servizi extra  che potrebbero richiedere il vostro indirizzo. Quando la modulo avr&agrave; abbastanza dati informativi troverete il pulsante per inviare la vostra prenotazione e confermare.');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Usare questa modulo per fare le vostre prenotazioni. Portare il cursore del mouse sopra l&acute;immagine "i" per maggiori informazioni circa la colonna. Modificare i dati della vostra prenotazione come data di arrivo e partenza e numero di persone. Fatto questo, potrete aggiungere servizi extra  che potrebbero richiedere il vostro indirizzo. Quando la modulo avr&agrave; abbastanza dati informativi troverete il pulsante per inviare la vostra prenotazione.');
define('_JOMRES_AJAXFORM_PARTICULARS','Dati prenotazione');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Selezionare i dettagli della vostra prenotazione');
define('_JOMRES_AJAXFORM_AVAILABLE','Disponibilit&agrave; ');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Seleziona la stanza che hai richiesto');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Vedi qui se la struttura &egrave; disponibile al momento.');
define('_JOMRES_AJAXFORM_EXTRAS','Extra opzionali');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Seleziona qualsiasi extra opzionale che volete includere nella prenotazione');
define('_JOMRES_COM_PERDAY','Per notte');
define('_JOMRES_AJAXFORM_ADDRESS','Il vostro indirizzo');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Inserire i vostri dettagli. Nota che tutti i campi sono richiesti eccetto il numero di cellulare');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Stanze disponibili');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Stanze selezionate');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>La data possibile di arrivo pi&ugrave; vicina &egrave;: ');
define('_JOMRES_AJAXFORM_BILLING_ROOM','Per notte:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Totale:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extra:');
define('_JOMRES_AJAXFORM_BILLING_TAX','Tasse:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Sconto:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Toatel generale:');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Ospite');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Clicca adesso per aggiungere la stanza dalla tua selezione');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Clicca adesso per rimuovere la stanza dalla tua selezione');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Tipi ospite');
define('_JOMRES_VARIANCES_TYPE','Tipo');
define('_JOMRES_VARIANCES_TYPE_TT','Il genere di cliente, es Bambini  5-10 anni, o Studenti ');
define('_JOMRES_VARIANCES_NOTES','Note');
define('_JOMRES_VARIANCES_NOTES_TT','Tutte le informazioni riguardo il tipo cliente');
define('_JOMRES_VARIANCES_MAXIMUM','Massimo');
define('_JOMRES_VARIANCES_MAXIMUM_TT','Il masimo numero  di tipi clienti che possono essere selezionati nella modulo di prenotazione');
define('_JOMRES_VARIANCES_ISPERCENTAGE','la percentuale');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','La Cifra calcolata &egrave; una percentuale sulla base di tariffe calcolate per la stanza. Se questa &egrave; impostata su NO la cifra &egrave; specificata semplicemente da aggiungere o sottrarre dalla base del valore della stanza.');
define('_JOMRES_VARIANCES_POSNEG','Aggiungi variabile?');
define('_JOMRES_VARIANCES_POSNEG_TT','La cifra calcolata &grave; aggiunta o rimossa dalla base della cifra calcolata per la stanza. Impostare questo su NO se vogliamo ci sia uno sconto dalla base della tariffa. ');
define('_JOMRES_VARIANCES_VARIANCE','Variabili');
define('_JOMRES_VARIANCES_VARIANCE_TT','Il costo delle variabili');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modifica tipo ordine cliente');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Pubblica tipo cliente');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Cancella tipo cliente');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Crea tipo cliente');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Aggiorna tipo cliente');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Aggiorna tipo cliente');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Mostra collegamento alla lista delle stanze nella pagina dettagli struttura?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Mostra <b>solo</b> calendario disponibilit&agreve;/Lista stanza?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Impostare su SI per disabilitare intestazione e dettagli, in questo modo vedremo solo le liste e il calendario nella sezione strutture.  (es appartamenti, cottage ecc).');
define('_JOMRES_COM_A_MINIMUMINTERVAL','Arr-Part intervallo minimo');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Il minimo intervallo nella prenotazione tra la data di partenza e di arrivo.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Form prenotazione lista stanze mostra il numero stanza');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Form prenotazione lista stanze mostra il nome stanza');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Form prenotazione lista stanze mostra il titolo tariffa');
define('_JOMRES_ORDER','Ordine');
define('_JOMRES_REQUIREDFIELDS','Richiesto');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Giorni prima dell&acute;arrivo');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Il minimo numero di giorni che devono passare, da "oggi", prima della data di arrivo.');
define('_JOMRES_DTV','Tipo data variazioni');
define('_JOMRES_DTV_DOW','Giorno della settimana');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Tipo ospite predefinito');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Il numero predefinito del primo tipo ospite. Se utilizziaamo i tipi ospite, questo &egrave; il primo numero predefinito per il primo tipo opsite nella form di prenotazione che viene impostata.');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Solo gli utenti registrati possono prenotare online?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Spiacente, dovete registrarvi per poter prenotare online. Cliccare qui per registrarsi al sito. ');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Colore font per attuali prenotazioni');
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Bordo settimana');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Stanza prenotata');
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Prenotazione fasulla');
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Deposito pi&ugrave; vicino?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Carica depositi?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tariffa caricata come settimanale?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Abbiamo questa opzione per storicizzare la tariffa caricata per ogni giorno  o valori settimanali. Se storicizziamo queste settimanalmente, bobbiamo impostare la opzione su SI.');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Costo per settimana');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Date di arrivo fisse ricorrenti: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Quando le date di arrivo fisse sono selezionate, viene mostrato il numero che appare nella lista a discesa per le date disponibili');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opzione fumatori non valida');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Data arrivo non corretta');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Data partenza non corretta');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Il perido selezionato &grave; troppo breve. Dovete scegliere pi&grave; giorni tra la data di arrivo e quella di partenza:');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Il vostro intervallo &egrave;');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Variante tipo ospite non corretta');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Seleziona il numero di ospiti ed il tipo');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Siete troppi per la tariffa disponibile');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Hai scelto pi&ugrave, stanze che ospiti, clicca su un nome stanza per rimuoverlo dalla selezione');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Tropppi ospiti per i letti disponibili');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Desideri scegliere pi&ugrave; stanze');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Seleziona una stanza');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Il nome &egrave; richiesto');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Il cognome &egrave; richiesto');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Nome casa o numero richiesto');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Indirizzo richiesto');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Citt&agrave; richiesta');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Regione richiesta');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Codice postale richiesto');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Nazione richiesta');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Telefono richiesto');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Cellulare richiesto');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Indirizzo Email richiesto');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Indirizzo Email non valido');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Impossibile validare dominio email');
define('_JOMRES_SRP_WEHAVEVACANCIES','Abbiamo stanze libere!');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Nessuna stanza selezionata finora');
define('_JOMRES_BOOKING_NUMBER','Prenotazione no.');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Si al colore di sfondo nel messaggio');
define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump vars del template?');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Impostare questo per abilitare un dump DHTML delle variabili del template per ogni template FRONTEND  utile se volgliamo che certi elementi siano visibili con certi template.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Figure a percentuale');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Impostare questo su SI se la singola persona ha un calcolo a figuara a percentuale. Oppure viene applicato il sistema flat rate.');
//v2rc2
define('_JOMRES_COM_LIMITROOMSLIST','Stanze disponibili/limite tariffa');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Usa questo campo inserimento per inserire il numero di stanze disponibili e le tariffe che mostreremo nel modulo di prenotazione. Impostando su zero nessun limite viene praticato. ');
define('_JOMRES_SRP_WEHAVENOVACANCIES','Nessuna stanza libera al momento!');
// Translate from here
// Introduced in v2.5
// v2.6
define('_JOMRES_BOOKITNOW','Prenota ora: ');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Fai attenzione con questa funzione. Se impostata su SI, editing mode agira sul testo personalizzato per TUTTE le strutture nel sistema per la caratteristica che stai modificando.');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Componente wrapped');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Seleziona SI se il componente risulta wrapped, in questo modo le aree moduli e header non saranno visibili');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
define('_JOMRES_COM_WEEKENDONLY','Solo Weekend');
define('_JOMRES_COM_WEEKENDDAYS','Giorni Weekend');
define('_JOMRES_COM_WEEKENDDAYS_DESC','Seleziona i tuoi giorni weekend. Le tariffe che permettono o non permettono i weekend prenderanno in considerazione questa scelta nella generazione delle liste camere.');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Seleziona la tua nazione prima di aggiungere qualsiasi informazione riguardo la struttura');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Salva i cambiamenti alla struttura prima di caricare le immagini');
define('_JOMRES_TARIFFSFROM','Prezzi da - ');
define('_JOMRES_SEARCH_ALL','tutte');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Cerca nella Nazione');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Cerca nella Regione');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Cerca nel comune');
define('_JOMRES_SEARCH_FEATURE_INFO','Cerca caratteristiche.');
define('_JOMRES_SEARCH_BUTTON','Cerca');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Inserisci la parola nel box e clicca.');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Cerca parola(e): ');
define('_JOMRES_SEARCH_AVL_INFO','Inserisci le date di arrivo e partenza e clicca il pulsante per trovare tutte le strutture disponibili per i giorni selezionati.');
define('_JOMRES_SEARCH_PTYPES','Elenca tutte le strutture in base al tipo.');
define('_JOMRES_SEARCH_RTYPES','Elenca tutte le strutture in base al tipo di camera.');
define('_JOMRES_SORTORDER_DEFAULT','Standard');
define('_JOMRES_SORTORDER_PROPERTYNAME','Nome struttura');
define('_JOMRES_SORTORDER_PROPERTYREGION','Regione struttura');
define('_JOMRES_SORTORDER_PROPERTYTOWN','Comune struttura');
define('_JOMRES_SORTORDER_STARS','Stelle');
define('_JOMRES_PATHWAY_PROPERTYLIST','Elenco strutture');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Scheda struttura - ');
define('_JOMRES_PATHWAY_BOOKINGFORM','Form Prenotazione');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Aggiorna il tuo indirizzo');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Ri-controllo disponibilita camere<br/>(La selezione della camera sara resettata)');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Verifica disponibilita');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Attendi. modifica servizi extra');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Attendi. Modifica camera selezionata');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Attendi. Modifica indirizzo selezionato');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Uno o  pi&ugrave; dati indirizzo sono incorretti.');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','File uploads');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Usa global currency?');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Seleziona SI per utilizzare la stessa moneta su TUTTE le strutture (e.g. & # 8 3 6 4 ;)');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Immagine Camera');
define('_JOMRES_CURRENCYFORMAT','Formato moneta');
define('_JOMRES_MANAGEROPTIONSASIMAGES','Mostra opzioni Managers\'s come immagini');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Opzioni di ricerca');
define('JOMRES_COM_A_AVAILABLELOGS','Logs disponibili');
define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. Questo e normale, devi modificare manualmente jomres.php per attivare il logging');
define('JOMRES_COM_A_MESSAGE','Messaggio');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normale');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Avanzato');
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Microgestione');
define('JOMRES_COM_A_TARIFFMODE','Tariffe Configuration Mode');
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Attenzione: Cambiare spesso il metodo di gestione tariffe potrebbe causare una perdita di dati. Vedi la nota sotto a riguardo</b>.
<br/><br/>
Sono disponibili tre opzioni di configurazione delle tariffe.<br/>
Normale: Avrai una tariffa per ciascun tipo di camera che sara valido per i prossimi 10 anni.<br/>
Microgestione: E possibile modificare il prezzo singolarmente per ciascun giorno relativo a ogni singola camera/genere di struttura. <br/>
Avanzato: Il \"vecchio\" metodo Jomres di gestione tariffe. <br/>
<br/>
Ciascuna opzione di gestione permette di scegliere il metodo di configurazione che soddisfa al meglio le tue esigenze.<br/>
L'opzione Normale, la più semplicistica ma la più facile da capire, mette in corrispondenza camere e tariffe con il tipo di camera\"ad esempio matrimoniale\" e permette quindi di configurare camere e prezzi nella stessa pagina.<br/>
Microgestione permette di variare i prezzi giornalmente senza aver bisogno di gestire serie infinite di tariffe. Il risultato e un numero di tariffe per la gestione di un certo periodo di tempo, ma non puoi sovrapporre le tariffe tra di loro.<br/>
La gestione avanzata ti permette di creare una stanza e associarla con un tipo di camera. Quindi puoi creare una tariffa e associarla con un tipo di camera ad esempio \"matrimoniale\". Con questo metodo &egrave; possibile sovrapporre le tariffe tra loro, per esempio un tipo di camera \"matrimoniale\" puoi avere una tariffa per bed and breakfast, una per la mezza pensione e una per la pensione completa. La gestione avanzata richiede un pochino di attenzione ai dettagli in quanto possibile disassociare una camera o una tariffa da un tipo di camera, o inserire date errate per un determinato periodo, ad esempio alta stagione, ma questo tipo di configurazione rende possibili opzioni che gil metodi normale e microgestione non offrono. <br/>
<br/>
Siccome La gestione Normale e la MicroGestione richiedono una configurazione specifica delle camere e delle tariffe per far funzionare questi tipi di gestione il sistema potrebbe avere bisogno di resettare alcuni dati per rendere le opzioni sulle tariffe premodifica compatibili con il metodo di configurazione scelto.<br/>
<br/>
Normale -> Avanzato. Nessun Cambiamento. Le tariffe esistenti rimangono intatte.<br/>
Normale -> MicroGestione. Tutte le tariffe esistenti vengono rimosse.<br/>
Avanzato -> Normale. Tutte le tariffe esistenti vengono rimosse.<br/>
Avanzato -> MicroGestione. Tutte le tariffe esistenti vengono rimosse.<br/>
MicroGestione -> Avanzato. Tutte le corrispondenze tra le tariffe vengono rimosse, ma le tariffe rimangono intatte.<br/>
MicroGestione -> Normale. Tutte le corrispondenze tra le tariffe vengono rimosse.<br/>");

define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Mostra la lista delle camere nella scheda della struttura?');
define('JOMRES_PROPERTYTYPE','Tipo struttura');
define('JOMRES_COM_A_SRPONLY','Solo SRP');
define('JOMRES_MAXPEOPLEINROOM','Max persone per camera');
define('JOMRES_MAXPEOPLEINBOOKING','Max persone in prenotazione');
define('_JOMCOMP_BOOKINGNOTES_ADD','Aggiungi nota');
define('_JOMCOMP_BOOKINGNOTES_EDIT','Modifica nota');
define('_JOMCOMP_BOOKINGNOTES_DELETE','Elimina nota');
define('_JOMCOMP_BOOKINGNOTES_VIEW','Vedi note');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Nuova nota aggiunta');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Nota modificata');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Nota Eliminata');
define('_JOMCOMP_MYUSER_MENUTITLE','Le mie opzioni');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Elenca prenotazioni');
define('_JOMCOMP_MYUSER_MYBOOKINGS','Le mie prenotazioni');
define('_JOMCOMP_MYUSER_VIEWBOOKING','Vedi prenotazioni');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Vedi preferiti');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Non hai ancora aggiunto nessuna struttura preferita!');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Aggiungi ai preferiti');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Tipo struttura');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Strutture vicine');
define('_JOMCOMP_WISEPRICE_TITLE','Offerta');
define('_JOMCOMP_WISEPRICE_ACTIVE','Attivo');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Questo plugin ti permette di configurare i prezzi delle tue camere dinmicamente.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','La maggior parte delle strutture ricalcolano i prezzi delle camere in base al numero di camere disponibili in una data specifica. Questo consente di offrire sconti su tipi di camere non occupate in uno specifico periodo con lo scopo di attrarre ospiti che altrimenti non si avrebbero.<br/> Abilitare e configurare questo plugin consente di offrire prezzi variabili basandosi sul numero delle camere di un certo tipo, disponibili nella struttura nel periodo inserito.<br/> Days threashold definisce il periodo in cui la data di arrivo deve cadere prima che i prezzi siano modificati da questo plugin, quindi le opzioni percentuali permettono di configurare la percentuale di camere disponibili prima che lo sconto inserito sia applicato.');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentuale camere occupate < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentuale camere occupate < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentuale camere occupate < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentuale camere occupate < 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','Sconto %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' Scontata da ');
define('_JOMCOMP_WISEPRICE_TO',' per ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Prezzo camera non scontato ');
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
define('JOMRES_COM_A_MAPSKEY_DESC','Trova una google maps API key su <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Una volta inserito il tuo map key qui, il sistema mostrera la mappa nella scheda della tua struttura.');
define('JOMRES_COM_A_USE_SSL','Usa SSL nel modulo di prenotazione?');
define('JOMRES_COM_A_USE_SSL_DESC','Hai bisogno di un valido certificato SSL per ');
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
define('_JOMCOMP_LASTMINUTE_ACTIVE','Attivo?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Seleziona SI se vuoi offrire offerte last minute.');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Soglia');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Se una prenotazione risulta effettuata e il giorno di arrivo &egrave; solo N giorni dalla data di prenotazione, allora lo sconto puo essere applicato');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Sconto');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percentuale');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Uno sconto &egrave; stato applicato su questa prenotazione!');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Il costo della permaneza &egrave; stato ridotto di ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Questa struttura offre uno sconto last minute di  ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percentuale se prenoti il tuo arrivo prima ');
define('_JOMCOMP_LASTMINUTE_ORMORE',' percentuale aggiuntiva se prenoti il tuo arrivo prima ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Prenota ora per avere il massimo da questa offerta!');
define('JOMRES_COM_A_VERBOSETARIFFINTO','Informazioni complete tariffa');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Seleziona SI per mostrare informazioni  pi&ugrave; dettagliate sulle tariffe nel popup dettagli/tariffe');
define('JOMRES_COM_A_MINIMALCONFIG','Minimizza opzioni di configurazione');
define('_JOMCOMP_AMEND','Correggi Prenotazione - Seleziona struttura');
define('_JOMCOMP_AMEND_SELECTPROPERTY','Seleziona nuova struttura');
define('_JOMCOMP_AMEND_HEADER','Contratto originale:');
define('_JOMCOMP_AMEND_DEPOSITPAID','Deposito pagato');
define('_JOMCOMP_AMEND_DEPOSITDUE','Deposito Non Pagato');
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Correggi Totale');
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Correggi Deposito');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
define('_JRPORTAL_CANCEL','Annulla');
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Commissione standard');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Scegli la commissione standard che verra applicata su una struttura nel caso in cui nessun altra commissione sia stata configurata.');
define('_JRPORTAL_CPANEL_LISTCRATES','Lista commissioni prezzi');
define('_JRPORTAL_CPANEL_PATETITLE','Commissioni prezzi');
define('_JRPORTAL_CRATE_TITLE','Titolo');
define('_JRPORTAL_CRATE_TYPE','Tipo');
define('_JRPORTAL_CRATE_VALUE','Percentuale commissione');
define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Elenco strutture');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Nome struttura');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Indirizzo Struttura');
define('_JRPORTAL_PROPERTIES_LEGEND',' Alle strutture con sfondo rosso non &egrave; stato ancora applicato un tasso di commissione.');
define('_JRPORTAL_STATS_PATETITLE','Statistiche');
define('_JRPORTAL_STATS_STATTYPE','Statistiche per: ');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Click - Strutture');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Vista struttura');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Numero di prenotazioni');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Valore delle prenotazioni');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Stima commissioni');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Tasso di commissione');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Elenco prenotazioni');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Codice struttura');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Codice ospite');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Codice affiliato');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Codice pagamento');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Totale prenotazioni');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Codice contratto');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Numero contratto');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Creato');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archiviato');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Data di archiviazione');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Struttura associata (se applicabile)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Valore');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Descrizione');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Elemento prenotazione inserito con successo ");
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Vedi gli ordini");
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Elemento prenotazione non inserito ");
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Errore, non hai selezionato un valore sulla transazione ");
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Puoi selezionare un file di linguaggio specifico per un tipo di struttura scegliendo come nome di una sottodirectory quello del tipo di struttura, ad esempio "bed and breakfast" e copiando il file di linguaggio dentro quella sottocartella. Puoi quindi modificare quel file di linguaggio per il tipo di struttura corrispondente in modo che le camere possano diventare, ad esempio, motoscafi, auto etc.');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Non puoi eliminare questa struttura in quanto lunica a cui hai accesso. Se vuoi disabilitarla, usa il pulsante di disabilitazione nella barra degli strumenti. ');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Se questa &egrave; una installazione di prova e vuoi fare un upgrade alla versione Jomres Solo (gestione una struttura) allora dovresti creare prima una nuova struttura, quindi eliminarla prima di cambiare la chiave di licenza assegnata al momento dell acquisto. ');
define('_JOMRES_COM_EMAILERRORS',"Inviare Email con il log degli errori? ");
define('_JOMRES_COM_EMAILERRORS_DESC',"Seleziona SI se vuoi inviare a jomres.net automaticamente una copia dei messaggi di errore. Questo ci permette di attivarci nella risoluzione dei potenziali problemi in maniera più efficiente, sperando di risolvere ogni problema persino prima che voi ne siate a conoscenza. Nota, questa opzione risulta disabilitata in 'localhost'. ");
define('_JOMRES_COM_ISTHISANMRP',"Questa struttura &egrave; un hotel/bed and breakfast/casa vacanze/pensione? ");
define('_JOMRES_COM_ISTHISANMRP_DESC',"Le opzioni di configurazione differiscono tra loro se stai affittando camere di una struttura, o la struttura per intero. Seleziona MRP se stai offrendo camere, seleziona SRP se stai offrendo la struttura per intero. ");
// Jomres v3.0.6
define('_JOMRES_COM_JOMRESEMAILCHECK',"Usa il controllo mail di Jomres? ");
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Forza un controllo accurato sulle email inviate. Certi web server sicuri risponderanno con un 500 internal error se provi ad inviare una mail ad un indirizzo inesistente. Questo ci permette di usare il comando php checkdnsrr prima di inviare una mail, eliminando questi errori 500. ");
// Jomres v3.1
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Totale pernottamento ");
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"notte(i) a ");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per camera ");
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Incrementa totale pernottamento ");
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Riepilogo prezzo ");
define('_JOMRES_CONFIRMATION_ALERT',"Prego Leggere ed accettare ");
define('_JOMRES_CONFIRMATION_HEADER',"Riepilogo della tua prenotazione visualizzato in basso.<br /> Per effettuare qualche cambiamento, cliccare nel pulsante di annullamento prenotazione. ");
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Se hai bisogno di cambiare qualsiasi informazione mostrata sopra clicca qui ");
define('_JOMRES_CONFIRMATION_AMEND',"Annulla Prenotazione ");
define('_JOMRES_CONFIRMATION_SPECIALS',"Inserire qualsiasi richiesta speciale nel box in basso. ");
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Confermo che le informazioni sopra sono corrette e accetto il ");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per persona per notte ");
// Jomres 3.1.10
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"File linguaggio di default");
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Cambia il linguaggio di default che Jomres dovrebbe usare se il linguaggio non è stato impostato su Joomfish.");// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	define('_PN_OF','di');
if (!defined('_PN_START'))
	define('_PN_START','Inizio');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prec');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Pros');
if (!defined('_PN_END'))
	define('_PN_END','Fine');
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Risultati');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Nota che questo non &egrave; un modulo di prenotazione, ma stai inviando una email.<br/>Inserisci il messaggio, con le richieste che vuoi inviare a ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contatta struttura');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Richiesta da ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Grazie per la tua richiesta, il tuo messaggio &egrave; stato inviato al contatto email della struttura, una copia &egrave; stata inviata sul tuo indirizzo email come promemoria. Verrai ricontattato dalla struttura il prima possibile.');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' Oggetto ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Digita i caratteri che vedi, nel box sotto ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Non riesco a leggere i caratteri. Genera altri caratteri ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Invia');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','Nuova immagine');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Richiesta');
define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Seleziona il tipo di camera dalla lista sulla destra');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min camere gi&agrave; selezionato');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Numero minimo camere gi&agrave; selezionato nella prenotazione prima che la combinazione tariffe/camere possa essere abilitata. Permette di avere tariffe scontate quando piu di N camere sono gi&agrave; state selezionate nel modulo di prenotazione. ');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max camere gia selezionato');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Numero massimo camere gia selezionato nella prenotazione prima che la combinazione tariffe/camere possa essere disabilitata. Permette di fermare offerta di questa combinazione tipo camera/tariffa una volta che N camere sono gia state selezionate nel modulo di prenotazione. ');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Nota che i supplementi per persona singola impostati qui non saranno usati se sono gia stati impostati nella configurazione generale. Le impostazioni qui sono una alternativa ad avere tariffe flat sui supplementi per singola persona, non una aggiunta alla tariffa flat SPS.');
define('_JOMRES_AVLCAL_NOBOOKINGS',"Disponibile"); 
define('_JOMRES_AVLCAL_QUARTER',"Qualche prenotazione");
define('_JOMRES_AVLCAL_HALF',"meta prenotata");
define('_JOMRES_AVLCAL_THREEQUARTER',"Quasi tutta prenotata");
define('_JOMRES_AVLCAL_FULLYBOOKED',"Esaurita");
define('_JOMRES_COM_SEF_URL_PREFIX','Prefisso Url');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','Questo &egrave; il primo elemento viasualizzato dopo il dominio - cambiare in cio che desideri - Se non vuoi utilizzarlo allora lascia lo spazio vuoto');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Vedi alias task struttura');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','Vedi alias descrizione della struttura');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','Vedi alias task effettua prenotazione');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','Vedi alias task descrizione prenotazione effettuata');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Cerca alias task');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Aggiungi nazione alla url');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Aggiungi regione alla url');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Aggiungi comune alla url');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Aggiungi tipo struttura alla url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Aggiungi nome struttura alla url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Aggiungi codice struttura al nome della struttura');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Se il nome della struttura &egrave; impostato su NO il codice struttura non verra utilizzato. Se impostato su SI la Url verra visualizzata come fawlty_towers-1');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Cerca schema Url - Aggiungi nazione alla url');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Cerca schema Url - Nazione di default');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Se tutte le tue strutture sono in una sola nazione allora non avrai Nazione nella ricerca - inserisci la nazione di default qui se vuoi visualizzare un unica nazione');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Cerca schema Url - Aggiungi regione alla url');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Cerca schema Url - Regione di default');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Se tutte le tue strutture sono in una regione allora non avrai regione nella ricerca - inserisci una regione di default se vuoi visulizzare solo una regione');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Cerca schema Url - Aggiungi comune alla url');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Cerca schema Url - Comune di Default');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Cerca schema Url - Tipo Struttura');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Cerca schema Url - tipo struttura di default');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Usato nella url se la ricerca &egrave; per tutti i tipi di struttura');
define('_JOMRES_COM_SEF_NOTINSTALLED','O sh404sef non &egrave; installato, o non hai ancora copiato '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Una volta installato sh404sef  e/o copiato il file sara possibile configurare le tue sef Url da questo pannello. ');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autorileva linguaggio del calendario Javascript');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Abilita autorilevamento del linguaggio per i calendari Javascript? Se non possibile autorilevamento il linguaggio sara quello configurato subito sotto');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per settimana');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per giorno');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per prenotazione');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per persona per prenotazione');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per persona per giorno');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per persona per settimana');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per giorni (min giorni)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per giorni X camere selezionate');
define('_JOMRES_REGISTRYREBUILD','Ricostruisci il registro minicomponente');
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normalmente Il plugin jomres registry viene ricostruito automaticamente ogni volta che visualizzi il gestore plugin e aggiungi o rimuovi plugin, tuttavia &egrave; possibile che non si possano usare queste opzioni per qualsiasi motivo, quindi puoi usare questa funzione per ricostruire il registro manualmente. Se hai accesso al Gestore Plugin e alle opzioni di upgrade allora probabilmente non avrai bisogno di usare questa funzione. Dovrai ricostruire il registro plugin qualvolta tu aggiunga un minicomponente non utilizzando il gestore plugin per farlo.");
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registro ricostruito con successo');
define('_JOMRES_REGISTRYREBUILD_FAILURE','ERRORE di ricostruzione del registro dei minicomponenti. Controlla il log errori di Jomres per vedere se esiste un record relativo a cosa ha causato l errore of what triggered the error.');
define('_JOMRES_SEARCH_PRICERANGES','Cerca tramite fascia di prezzo.');
define('JOMRES_WORD_SAVING','Sto salvando...');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Usa Dettagli struttura compositi?');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduce i dettagli struttura compositi con cui ogni dettaglio struttura viene inviato ad un unico file di template (composite_property_details.html). Se non desideri usarla selezionare NO (solo ai vecchi utenti consigliamo di selezionare NO, i nuovi utenti vorranno sicuramente lasciare il SI)');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','Questa &egrave; una lista di tutti gli utenti del sistema. Non gestori-struttura avranno una iconcina Ospite, i gestori struttura avranno una icona di Reception/Gestore struttura/Super gestore struttura.<br/>Quando Jomres viene installato per la prima volta "admin" viene automaticamente aggiunto ai gestori struttura &egrave; considerato un utente autorizzato.<br/>Non-super gestori struttura dovranno avere in gestione almeno una struttura altrimenti vedranno un errore quando proveranno ad accedere e ad usare il sistema.<br/> Una volta che gli utenti vengono autorizzati poi &egrave; possibile modificare il profilo degli stessi, assegnare loro le strutture o dare loro i diritti di super gestore.<br/>Per autorizzare un utente, clicca sulla croce rossa a fianco al loro nome. Per revocare queste autorizzazioni clicca sulla spunta verde.<br/>Per assegnare a degli utenti solo alcune strutture, o dare loro diritti di super gestori struttura, autorizzarli &egrave; poi cliccare sul pulsante di modifica (il quale &egrave; visibile solamente una volta che sono stati autorizzati). Utenti che hanno registrato le loro strutture in autonomia verranno assegnati automaticamente alle stesse. I super gestori struttura hanno automaticamenti i diritti per tutte le strutture, e vedranno tutte le opzioni di configurazione anche se la opzione di configurazione ridotta &egrave; impostata nella configurazione del sito (Site Config).');
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Qui puoi assegnare ad un Gestore determinate strutture. Assicurati, se si tratta di non super gestori struttura, che abbiano i diritti almeno per una struttura altrimenti vedranno un errore quando tenteranno di accedere al sistema. Per dare ad un receptionist/gestore struttura i diritti solo per certe strutture,assicurati che il menu a tendina del super gestore struttura non sia impostato su SI.');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Non hai ancora effettuato nessuna prenotazione!');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Tipo struttura');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Modifica il tuo tipo struttura');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Seleziona il tuo tipo struttura');
define('_JOMRES_COM_LOGGING','Jomres logging');
define('_JOMRES_COM_LOGGING_WARNING','Queste opzioni ti permettono di abilitare/disabilitare il logging al sistema. Il logging di errore &egrave; sempre abilitato, altri log quali prenotazioni, Gateway, Sistema a richieste possono essere attivati o meno. Devi essere a conoscenza che <b>la possibilita di abilitare il logging &egrave; fornita solo come un modo per effettuare il debugging facilmente ma &egrave; rischioso dal punto di vista della sicurezza</b> infatti sara poi facile per utenti non autorizzati vedere i tuoi log quindi consigliamo fortemente di lasciarlo disabilitato la maggior parte del tempo. Se hai attivato il logging, quando lo disabiliti, devi assicurarti che la cartella <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> non contenga nessun vecchio file di log. Nota che abilitare il logging rallenta notevolmente il sistema in quanto registra moltissime informazioni.');
define('_JOMRES_COM_LOGGING_BOOKING','Logging modulo di prenotazione (Booking engine logs) ');
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (Es. paypal etc) ');
define('_JOMRES_COM_LOGGING_REQUEST','Log richieste (tutte le richieste provenienti dal server)');
define('_JOMRES_COM_LOGGING_SYSTEM','Sistema (misc log) ');
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (principalmente per registrare le commissioni) ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','La tua richiesta...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Form Prenotazione lista camere visualizza tipo camera immagine');
define('_JOMRES_COM_A_LISTLIMIT','Limite elenco strutture');
define('_JOMRES_COM_A_LISTLIMIT_DESC','Il numero di pagine da mostrare in una pagina dopo una ricerca');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Opzione di ricerca integrata');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','La Opzione di ricerca integrata permette ai tuoi utenti di ricercare nel sistema le strutture in relazione ad una serie di funzioni. Se hai gia utilizzato le funzioni di ricerca di Jomres in Joomla sarai sicuramente abituato a queste impostazioni.<br/>Questa funzione ci permette di offrire la gestione della ricerca direttamente in jomres per quegli utenti che non vogliono utilizzare un modulo di ricerca di Joomla, o per utenti che utilizzano altri cms, CMS che non hanno un modulo di ricerca Jomres.<br/>Ricorda che se scegli di ricercare qualcosa tramite link (non menu a tendina) le altre opzioni di ricerca non saranno disponibili, verra cercato il solo elemento che corrisponde al link cliccato.<br/>Nota che di default il layout della ricerca integrata non &egrave; bellissimo. Questo perche il file del template che genera il layout deve includere tutte le opzioni possibili, alcune delle quali sono incompatibili. Per migliorare il layout e avere il look che desideri, devi modificare <b>srch.html</b> nella cartella <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Attivare questa opzione?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Se questa opzione &egrave; attiva, allora qualsiasi chiamata verso Jomres che mostra la lista strutture mostrera anche le opzioni di ricerca.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Usa colonne');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Qualsiasi opzione di ricerca che hai definito come link (dove pertinente) sara mostrata come colonna (IE br messo alla fine del link)");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Colonne servizi offerti");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"Il numero di icone dei servizi offerti che puo essere mostrato prima che un br venga inserito per andare a capo.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Seleziona la regione tramite la combo menu a tendina");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offri un menu a tendina per effettuare la ricerca in base a Nazioni/Regioni/Comuni. Se vuoi usare questa opzione imposta su NO le opzioni di ricerca per province/comuni qui sotto.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Ricerca in base al nome struttura");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Visualizza la ricerca in base al nome struttura inserito.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Visualizza come menu a tendina?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Seleziona NO se vuoi visualizzare la lista come links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Ricerca in base al Comune/Regione");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Visualizza la ricerca in base alla Regione inserita");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Visualizza come menu a tendina?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Seleziona NO se vuoi visualizzare la lista come links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Ricerca in base al tipo struttura");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Visualizza la ricerca in base al tipo struttura inserito");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Visualizza come menu a tendina?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Seleziona NO se vuoi visualizzare la lista come links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Ricerca in base al tipo camera");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Visualizza la ricerca in base al tipo camera inserito");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Visualizza come menu a tendina?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Seleziona NO se vuoi visualizzare la lista come links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Ricerca in base ai servizi offerti");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Visualizza la ricerca in base al tipo di servizio inserito");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Visualizza come menu a tendina?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Seleziona NO se vuoi visualizzare la lista come immagini tooltip e caselle di spunta");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Ricerca in base alla descrizione");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Visualizza la ricerca in base alla descrizione inserita");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Ricerca in base alla disponibilita");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Visualizza la ricerca in base alla disponibilita desiderata inserita");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Ricerca in base alla fascia di prezzo ");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Visualizza la ricerca in base alla fascia di prezzo inserita");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Incrementi fascia di prezzo");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres cerchera tutti i valori delle tariffe che rientrano in una serie di fasce di prezzo basandosi sugli incrementi impostati qui.");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Come default, se una struttura non &egrave; selezionata in Jomres eseguira una ricerca. Se questa ricerca non viene attivata da un modulo di ricerca allora produrra risultati completamente casuali. Questa opzione ti permette di limitare il numero di risultati della stessa ricerca casuale.');
define('_JOMRES_COM_A_CRON_TITLE','Impostazioni Cron job e logs');
define('_JOMRES_COM_A_CRON_DESC','Informazioni Pseudocron job. La funzionalita pseudocron e richiesta per invio pagamenti e gestione commissioni.');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Minicomponenti cron installati. Per eseguire un cron job individuale usa il link specificato sotto. Nota che i cron jobs non producono nessun output quindi non vedrai nessuna informazione sulla pagina. Fanno riferimento invece al log dei job sotto.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Metodo');
define('_JOMRES_COM_A_CRON_METHOD_DESC',"Se non hai accesso ai cron jobs, Imposta questo come Minicomponente, altrimenti crea un cron job e fallo girare<br /> <i>curl -s http://".JOMRES_SITEPAGE_URL_ADMIN."&task=cronjobs&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
define('_JOMRES_COM_A_CRON_LOGGING','Visualizza logging sul browser');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Funziona solo se il metodo &egrave; impostato su Minicomponente.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging abilitato');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Seleziona SI per abilitare il logging. I risultati dei log verranno visualizzati sotto.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Modifica Template');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','Questa Funzione ci permette di modificare i template del frontend di jomres sul server, salvando i risultati sul database. Funzione avanzata, fai attenzione.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Nome Template');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Il Template &egrave; stato modificato?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Campi personalizzati');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Qui puoi impostare semplici campi personalizzati che verranno mostrati nel modulo di prenotazione.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Nome campo (niente spazi)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Valore di default');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Descrizione');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Richiesto');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Quantita massima');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Se la quantita massima &egrave; impostata su un numero maggiore di 1 allora verra visualizzato agli ospiti un menu a tendina da cui scegliere la quantita di extra che desiderano.');
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
define('_JRPORTAL_TAXRATES_TITLE',"Percentuale Tassa");
define('_JRPORTAL_TAXRATES_CODE',"Codice Tassa");
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Descrizione Prezzo");
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Non puoi eliminare questa Percentuale Tassa.");
define('_JRPORTAL_TAXRATES_RATE',"Prezzo");
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Non Pagato");
define('_JRPORTAL_INVOICES_STATUS_PAID',"Pagato");
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Annullata");
define('_JRPORTAL_INVOICES_STATUS_PENDING',"In sospeso");
define('_JRPORTAL_INVOICES_USER',"Utente");
define('_JRPORTAL_INVOICES_STATUS',"Stato");
define('_JRPORTAL_INVOICES_RAISED',"Aumentata");
define('_JRPORTAL_INVOICES_DUE',"Scadenza");
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Sottoscrizione");
define('_JRPORTAL_INVOICES_INITTOTAL',"Totale omnicomprensivo");
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Totale ricorrente");
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Frequenza ricorrente");
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Giorno del mese ricorrente");
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
define('_JRPORTAL_INVOICES_LINEITEMS',"Elementi in linea");
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Nome");
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Descrizione");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Prezzo iniziale");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Quantita iniziale");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Sconto iniziale");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Totale iniziale");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Prezzo ricorrente");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Quantita ricorrente");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Sconto ricorrente");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Totale ricorrente");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Codice Tassa");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Descrizione Tassa");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Percentuale tassa");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Impostazioni Paypal");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (es EUR)");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Usa sandbox?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Il tuo indirizzo email paypal");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Nota: Per usare paypal devi entrare nel tuo account paypal &egrave; disabilitare Autoreturn. (Profilo/Preferenze pagamenti), e selezionare IPN (Profilo/Preferenze di notifica pagamenti istantanei)nella URL di:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Questo pagamento &egrave; in scadenza. Cliccare il pulsante per entrare in paypal.");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Sovrascrivi impostazioni standard gateway di Jomres?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Se le impostazioni di sovrascrittura di paypal sono impostate su SI avvengono svariate modifiche: La configurazione generale non mostra piu nessuna impostazione gateway. e due, quando viene effettuata una prenotazione le impostazioni usate qui vengono utilizzate in modo che quel pagamento venga inviato all indirizzo inserito qui, e non a quello precedentemente impostato nella Configurazione generale.");
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Visualizza i miei pagamenti");
define('_JRPORTAL_COUPONS_TITLE',"Codici Sconto");
define('_JRPORTAL_COUPONS_DESC',"I codici sconto possono essere creati &egrave; passati agli utenti come incentivi ad affettuare prenotazioni. Le date di validita da-al si riferiscono al giorno in cui la prenotazione viene effettuata, non alle date della effettiva prenotazione.");
define('_JRPORTAL_COUPONS_CODE',"Codice Sconto");
define('_JRPORTAL_COUPONS_VALIDFROM',"Valido dal");
define('_JRPORTAL_COUPONS_VALIDTO',"Valido sino al");
define('_JRPORTAL_COUPONS_AMOUNT',"Ammontare sconto");
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Lo sconto &egrave; una percentuale");
define('_JRPORTAL_COUPONS_ROOMONLY',"Solo camera");
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Lo sconto viene applicato esclusivamente al costo della camera.Se selezionate No, allora lo sconto viene applicato al costo della prenotazione per intero.");
define('_JRPORTAL_COUPONS_SQLERROR',"Errore Sql di eliminazione/inserimento codice sconto");
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Se hai un codice sconto, inseriscilo nel box e clicca il link "Salva codice sconto" per salvare i dettagli dello sconto nella tua prenotazione.');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Salva codice sconto');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Codice sconto salvato');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Codice sconto non valido');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Valore Sconto');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Prenotazione scontata. Codice sconto/valore sconto/impostazioni codice sconto : ');
define('_JOMRES_COM_CACHING','Usa la opzione caching di Jomres?');
define('_JOMRES_COM_CACHING_DESC','Seleziona NO per disabilitare la funzione caching di Jomres.');
define('_JOMRES_COM_CHOOSELANGUAGES','Scegli lingue');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Scegli le opzioni lingua da mostrare nel menu a tendina delle lingue.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Mostrare il menu a tendina delle lingue?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Ospite in partenza e prenotazioni annullate');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Caro");
define('_JRPORTAL_NEWUSER_THANKYOU',"Grazie per esserti registrato");
define('_JRPORTAL_NEWUSER_USERNAME',"Il tuo Nome Utente : ");
define('_JRPORTAL_NEWUSER_PASSWORD',"La tua password : ");
define('_JRPORTAL_NEWUSER_LOG_IN',"Accedi per vedere le tue prenotazioni ");
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Codice sconto Salvato');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Codice sconto Eliminato');
// Not used yet
define('_JOMRES_COM_GROWL','Usa sistema di invio messaggi');
define('_JOMRES_COM_GROWL_DESC','Molti aggiornamenti struttura forniscono feedback nella forma di un messaggio javascript quando la pagina viene ricaricata, usa questa opzione per abilitare/disabilitare questi messaggi.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Nome utente");
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Numero mobile di notifica");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Usare il formato 'Codice nazione, numero mobile'. Per esempio un numero di cellulare italiano sarebbe qualcosa tipo '397979123456'. Lascia questo campo bianco se non vuoi che venga inviata nessuna notifica mail al tuo telefonino.");
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<b>Ovviamente, non puoi usare questo gateway in locale, avrai bisogno di testarlo in un server 'live'.</b>
<br/>
<br/>
Per usare il gateway Clickatell hai bisogno di un account Clickatell e almeno una connesiione registrata (API sub-product instance) tra il tuo sistema &egrave; il nostro gateway. Ogni metodo
di connessione &egrave; noto come sub-product. Istruzioni:<br/>
<br/>
<b>Passo 1 - registrati per un accountClickatell</b><br/>
Se non hai ancora un account Clickatell, devi registrarti come illustrato sotto. Altrimenti procedi al passo 2.<br/>
* Vai su http://www.clickatell.com/products/sms_gateway.php, e scegli la API subproduct appropriata (metodo connessione) ti consigliamo di usare ( Clickatell Central (API) )<br/>
* Clicca sul link di registrazione.<br/>
* Riempi il modulo di registrazione.<br/>
Dopo esserti autenticato con successo inviando il modulo avrai automaticamente accesso al tuo account &egrave; trasferito alla pagina di scelta della tua connessione API.<br/>
<b>Passo 2 - aggiungi una Connessione API registrata (sub-product)</b><br/>
Se hai ancora acceduto al tuo account, devi farlo su  http://www.clickatell.com/login.php<br/>
* Seleziona \"Manage my Products\" dal menu in alto.<br/>
* Seleziona il tipo di connessione API che desideri utilizzare (HTTP API) dal menu a tendina ('Add Connection').<br/>
* Completa il modulo. Assicurati di aver inserito il locked IP(IP di questo server), imposta Callback to HTTP POST. Devi impostare IP callback to ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback il nome utente e la password.<br/>
Se registri piu di una connessione API, il nome della descrizione che inserisci per ognuna deve essere unico - Non puoi avere API multiple con lo stesso nome.<br/>
Dopo aver inviato il modulo con successo, i tuoi dettagli di autenticazione saranno visualizzati, compresi tutti gli API ID delle connessioni impostate (api_id). Questi dettagli di autenticazione sono necessari durante la connessione al gateway Clickatell per spedire un messaggio.<br/>
<br/>
Usa il tuo Nome Utente, password e api_id per completare i campi sopra.<br/>

<br/>
");
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Form Prenotazione lista camere mostra accesso disabilitato');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Form Prenotazione lista camere mostra max persone');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Notare che i prezzi delle camere sono stimati e che il prezzo pieno della prenotazione non verra calcolato fino a quando non avrai aggiunto una o piu camere alla tua selezione.");
define('_JOMRES_LASTEDITED_DB','Database template Ultima modifica');
define('_JOMRES_LASTEDITED_DISK','Disk template Ultima modifica');
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template potrebbe non essere aggiornato');
define('_JOMRES_LASTEDITED_WARNING','Se &egrave; presente un icona sul template, allora Jomres ha rilevato che il template presente nel database <strong><i>potrebbe</i></strong> essere piu vecchio di quello registrato sul disco, in questo caso &egrave; possibile che il template sia stato aggiornato con una nuova versione di Jomres. Se questo &egrave; il tuo caso, allora &egrave; possibile che il tuo template non stia beneficiando di qualche nuova funzione di Jomres, o che una funzione esistente non stia funzionando come dovrebbe, dovresti confrontare il file sul disco con la tua personalizzazione per assicurarti che non ti stia perdendo nuove funzioni.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Pacchetti di sottoscrizione");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Nome");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Descrizione");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Pubblicato");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequenza");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Periodo di prova");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"ammontare periodo di prova");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Totale");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Limite camere"); // Not currently used, saved for a rainy day
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Limite strutture");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequenza: M/Q/B/A Mensile/Quadimestrale/Biannuale/Annuale");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Periodo di prova: Integer input, 0 (zero) per non impostato, 1 per un mese, 2 per due mesi etc");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Sottoscrivi");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Inserisci/aggiorna le informazioni relative alla tua sottoscrizione. Nota che tutti i campi sono obbligatori.");
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Nome");
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Cognome");
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Indirizzo");
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Nazione");
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"CAP");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Devi avere una sottoscrizione valida per creare nuove strutture. Sino ad ora, hai acuistato sottoscrizioni per ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," Strutture(a) pubblicate. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Puoi aumentare il numero di strutture che puoi creare <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>acquistando altri crediti qui.</a>");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," Hai usato ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," crediti struttura. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Per vedere una lista aggiornata delle tue strutture clicca <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>qui</a>. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Per vedere una lista aggiornata dei pacchetti di sottoscrizione disponibili, clicca <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>qui</a>. ");
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Sfortunatamente, non puoi pubblicare questa proprieta perche hai usato tutti i crediti disponibili per la creazione strutture.");
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Grazie per aver sottoscritto i nostri servizi di pubblicazione della tua struttura sui nostri server. Quando il tuo ordine risultera come pagato (potrebbe esserci un ritardo causa Paypal). <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>clicca qui per continuare con ad inserire la tua struttura(e).</a>");
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Ci dispiace molto che tu non abbia scelto di sottoscrivere i nostri servizi. Facci sapere se hai bisogno di ulteriori info o se possiamo aiutarti in qualsiasi modo a farlo");
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"Ci dispiace, ma hai esaurito i crediti disponibili per la pubblicazione delle tue strutture. Puoi aumentare il numero di strutture pubblicabili <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>acquistando altri crediti qui.</a> ");
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Usa la funzionalita di gestione sottoscrizione");
define('_JOMRES_COM_NEWUSER','Crea nuovo utente alla prenotazione');
define('_JOMRES_COM_NEWUSER_DESC','Crea un nuovo account utente su prenotazioni effettuate da utenti non registrati.');
define('_JOMRES_CLICKTOREGISTER','Clicca qui per inserire la tua struttura');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Sottoscrizioni attive");
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");
define('_JRPORTAL_NEWUSER_SUBJECT',"Grazie per la tua prenotazione - Seguono dettagli nuovo utente");
define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
define('_JOMRES_CONTROLPANEL','Pannello di controllo');
define('_JOMRES_COM_FAUXHEADERS','Inserire Jomres javascript headers nel tag body HTML?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Seleziona SI se stai avendo conflitti tra mootools e Jquery utilizzato da joomres. Questo obblighera Jomres ad inserire le chiamate Javascript nel corpo della pagina invece che nella HEAD area, che anche se non &egrave; HTML valido, sembra risolvere i problemi con jquery e mootools in conflitto tra loro.');
// Jomres v4.2
define('_JOMRES_MANAGER_SHOWINVOICE','Mostra ordine');
define('_JOMRES_MANAGER_SHOWINVOICES','Mostra ordini');
define('_JOMRES_USER_LISTMYPROPERTY','Inserisci la tua struttura');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Pericolo : ');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"Puoi avere un pacchetto sottoscrizione gratuito se lo desideri, creando un pacchetto &egrave; impostando sia lammontare del periodo di prova che il prezzo totale su 0.00");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Ci dispiace, ma il codice pacchetto di sottoscrizione non risulta presente.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Ci dispiace, hai gia sottoscritto un pacchetto gratuito, non puoi sottoscriverlo ancora.");
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Stato <b>0:</b> Pagamento in sospeso <b>1:</b> Creato <b>2:</b> Annullato <b>3:</b> Termine del servizio");
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"Il mio Account");
define('_JOMRES_COM_YOURBUSINESS','I tuoi dettagli commerciali');
define('_JOMRES_COM_YOURBUSINESS_NAME','Nome azienda');
define('_JOMRES_COM_YOURBUSINESS_VATNO','numero VAT');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Numero costruzione');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTA: Le seguenti aliquote sono valide per utilizzo nel mercato americano. Se vuoi usare una aliquota flat (es VAT) per le tue strutture, scegli una aliquota tra le opzioni mostrate sopra.</FONT>');
define('_JOMRES_INVOICE_NUMBER','Ordine N. ');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Seleziona le date che vuoi riservare, o inibire al sistema causa lavori di manutenzione, chiusura, motivi personali. Quando avrai selezionato le date appropriate, clicca sul pulsante "applica" per controllare nuovamente la disponibilita. <br/> 
<br/> 
Se la struttura ha gia prenotazioni per le date selezionate, non sara possibile selezionare le stesse date fino a quando queste prenotazioni non verranno cancellate o gli ospiti risulteranno in partenza.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Non puoi riservare la struttura per le date selezionate.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Puoi riservare la struttura per le date selezionate.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','La tua struttura &egrave; configurata su di un pagamento a persona per notte ma non hai creato o pubblicato nessun tipo ospite, ti preghiamo di creare &egrave; pubblicare uno o piu tipi ospite. ');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Non hai ancora nessuna tariffa configurata, non &egrave; possibile ricevere nessuna prenotazione per la tua struttura.');
define('_JOMRES_EDITINGMODE_ON','Modifiche on');
define('_JOMRES_EDITINGMODE_OFF','Modifiche off');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Addebita depositi variabili?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','I depositi variabili ti consentono di stabilire se non vuoi addebitare completamente la prenotazione se l\'arrivo degli ospiti e\' previsto entro N giorni da "oggi". Seleziona si per abilitare questa opzione, e inserisci il numero di giorni qui sotto, se per esempio il giorno di arrivo risulta entro 60 giorni, allora la somma addebitata sara il totale della prenotazione, altrimenti sara stabilito in base alle opzioni di deposito stabilite sopra.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','Il numero di giorni, entro i quali il totale prenotazione verra addebitato come deposito.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Invia le email di contatto della struttura all\'indirizzo alternativo');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Seleziona SI se vuoi che le email di contatto della struttura vengano inviate alla email indicata sotto. Lascia No per inviare le email all\'indirizzo email inserito nella sezione Configurazione struttura.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Indirizzo alternativo email di contatto della struttura .');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','La email di conferma &egrave; stata inviata. Ora puoi chiudere questa finestra.');
define('_JOMRES_REALESTATE_TITLE','Elenco immobiliare');
define('_JOMRES_REALESTATE_YESNO','Questa scheda struttura e\' di tipo immobiliare?');
define('_JOMRES_REALESTATE_YESNO_DESC','Seleziona SI se stai vendendo la struttura, seleziona NO se &egrave; una struttura di tipo hotel/b&b/casa vacanze/villa dove offrirai la struttura o le singole camere in affitto per brevi periodi e utilizzerai il sistema per ricevere prenotazioni.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contatta agente');
define('_JOMRES_INVOICE_MARKASPAID','Registra ordine come pagato');
define('_JOMRES_INVOICE_MARKEDASPAID','Ordine registrato come pagato');
define('_JOMRES_APIKEY_REMAKE','Crea una nuova chiave API');
define('_JOMRES_AUTOTRANSLATE_TITLE','Usa Google per le traduzioni iniziali?');
define('_JOMRES_AUTOTRANSLATE_DESC','Questa funzione &egrave; nuova e sperimentale, quindi usala a tuo rischio e pericolo. Lo scopo di questa funzione &egrave; interrogare google translate per tradurre automaticamente una data struttura. Nota che questa funzione azzera ogni input, quindi se usi un editor HTML per formattarre il testo dei dettagli struttura, questo rovinera quella formattazione.<br/>');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Questa &egrave; una installazione per una singola struttura?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Selezionando SI, la visualizzazione del frontend di Jomres agli utenti non autorizzati sara grandemente semplificata. Le chiamate di default del menu verso Jomres, non restituiranno piu la lista delle strutture, ma reindirizzera il cliente verso il modulo di prenotazione della prima struttura nel sistema. I Gestori Struttura non vedranno il pulsante di visualizzazione anteprima o il pulsante di inserimento nuova struttura. Ideale se vuoi inserire una sola struttura e prendere le prenotazioni per la stessa.<br/>');
/////////////////////////////////////////////////////////////////////////////////////////////////////




define('_JOMRES_HTMP_PURIFIER','Usare la funzione di pulizia automatica HTML?');
define('_JOMRES_HTMP_PURIFIER_DESC','Attivare per abilitare Jomres ad usare la libreria di pulizia automatica HTML (http://htmlpurifier.org/). La libreria &egrave; usata come un livello di sicurezza extra quando si ha a che fare con dati di input e output e ne &egrave; consigliato l&acute;utilizzo anche se utilizzer&agrave; pi&ugrave; memoria.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Pagamento saldo');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Saldo');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Nota, Stai usando Editing Mode con il Global Editing mode attivato. Va bene se si conosce cosa significa Global Editing, comunque se non conosci a fondo la cosa potresti causare problemi al sistema. Se non sei sicuro se usare Jomres in questo modo, vai su <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> per pi&ugrave; informazioni sull&acute;argomento.');
define('_JOMRES_SUPPORTKEY','Support key');
define('_JOMRES_SUPPORTKEY_DESC','Il tuo numero di licenza. Avrai bisogno di un numero di licenza per poter scaricare gli aggiornamenti ed i plugin per Jomres.');
define('_JOMRES_PERSONAL_DISCOUNT','Sconto personale');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limitare la registrazione delle strutture ad una Nazione?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Ti puoi assicurare che le strutture registrate siano limitate ad una sola Nazione selezionando Si per questa opzione e configurando la Nazione nell&acute;opzione seguente.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Le strutture si trovano in questa Nazione : ');
define('_JOMRES_JQUERYTHEME','Jquery theme');
define('_JOMRES_JQUERYTHEME_DESC','Scegli un jquery theme da usare per le schede dei dettagli-struttura.');
define('_JOMRES_PROPERTYNOTOUBLISHED','Ci dispiace, ma la struttura non &egrave; al momento disponibile.');
define('_JOMRES_REVIEWS','Recensioni');
define('_JOMRES_REVIEWS_TITLE','Titolo recensione');
define('_JOMRES_REVIEWS_DATE','Pubblicata il ');
define('_JOMRES_REVIEWS_NOREVIEWS','Non ci sono ancora recensioni per questa struttura.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Ti piacerebbe essere il primo a recensire questa struttura?');
define('_JOMRES_REVIEWS_IAGREE','Sono d&acute;accordo con questa recensione');
define('_JOMRES_REVIEWS_IDISAGREE','Non sono d&acute;accordo con questa recensione');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Valutazione media: ');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Voti totali:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Aggiungi una nuova recensione.');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Devi effettuare l&acute;accesso per inserire una recensione.');
define('_JOMRES_REVIEWS_REVIEWBODY','Dai il tuo parere su questa struttura : ');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','Questo cliente ci ha detto che : ');
define('_JOMRES_REVIEWS_PROS','Pro: ');
define('_JOMRES_REVIEWS_CONS','Contro: ');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Inviata il: ');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','Hai gi&agrave; recensito questa struttura, non puoi aggiungere un&acute;altra recensione.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Ci dispiace, ma non ti &egrave; permesso inviare scrivere recensioni su questo sito.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Clicca per visualizzare le recensioni');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' ospiti sono d&acute;accordo con questa recensione.');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' ospiti non sono d&acute;accordo con questa recensione.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' ospite concorda con questa recensione. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','ospite non concorda con questa recensione.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Grazie per aver condiviso la tua opinione su questa recensione.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Grazie, ma hai gi&agrave; condiviso la tua opinione su questa recensione.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Assicurati di aver compilato tutti i campi.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Cataloga la tua recensione inserendo un titolo');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Ti preghiamo di inserire una recensione pi&ugrave; accurata nel box di descrizione');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Ti preghiamo di inserire i lati positivi della tua esperienza in questa struttura');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Ti preghiamo di inserire i lati negativi della tua esperienza in questa struttura');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Ti preghiamo di votare l&acute;ospitalit&agrave; dello staff');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Ti preghiamo di votare la qualit&agrave; dei locali');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Ti preghiamo di votare la pulizia della struttura');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Ti preghiamo di votare il pernottamento. Confortevole o no?');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Ti preghiamo di votare il rapporto qualit&agrave;/prezzo');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Ti preghiamo di votare il servizio');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Riepilogo recensione');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','La tua esperienza nel dettaglio');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Grazie per aver inviato la tua recensione.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Grazie per aver inviato la tua recensione. Verr&agrave; pubblicata al pi&ugrave; presto dai nostri moderatori.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Usare la Funzione recensioni di Jomres?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Pubblicare automaticamente le recensioni?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Se selezioni NO dovrai pubblicare manualmente le recensioni');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Configurare le recensioni su test mode?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normalmente i gestori delle strutture non possono recensire le strutture. Con test mode attivo, possono. Naturalmente non &egrave; l&acute;ideale in un ambiente professionale.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Questa &egrave; una lista di tutte le strutture. Clicca su una struttura per vedere la recensione corrispondente. Da qui potrai pubblicare o eliminare una recensione.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Numero di recensioni non pubblicate');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Totale recensioni');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Pubblica/Sospendi recensione');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Elimina recensione');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Segnala recensione');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Esamina i report');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Inserisci la tua segnalazione');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','Pensi che questa recensione sia non obiettiva o inaccurata? segnalacelo e esamineremo la cosa per te.');
define('_JOMRES_REVIEWS_SUBMIT','Invia');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Segnalazione creata da ');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Le Segnalazioni sono inviate da utenti in disaccordo con il contenuto di una recensione. L&acute;unico modo di rimuovere una segnalazione &egrave; eliminare la recensione.');
define('_JOMRES_REVIEWS_RATING','Ratings (1 = pessimo 10 = eccellente) ');
define('_JOMRES_REVIEWS_RATING_1','Ospitalit&agrave;  ');
define('_JOMRES_REVIEWS_RATING_2','Posizione ');
define('_JOMRES_REVIEWS_RATING_3','Pulizia ');
define('_JOMRES_REVIEWS_RATING_4','Comodit&agrave; ');
define('_JOMRES_REVIEWS_RATING_5','Rapporto qualita&agrave;/prezzo ');
define('_JOMRES_REVIEWS_RATING_6','Servizi ');
define('_JOMRES_REVIEWS_REVIEWED_BY','Recensione by : ');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Nascondi recensioni');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Visualizza il modulo di prenotazione nella scheda struttura?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Seleziona SI per visualizzare il modulo di prenotazione nella scheda struttura. Se selezioni No, un link apparir&Agrave; nella scheda della struttura invece che puntare al modulo di prenotazione.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Le tariffe sono comprensive di tasse?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Le tariffe sono Tasse-incluse? Seleziona SI o NO.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Tasse extra:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','Il campo giorno della settimana permette di fissare una tariffa per un dato giorno della settimana, una volta cliccato il pulsante del giorno della settimana tutti i giorni della stessa avranno la tariffa stabilita  in precedenza.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','I selettori data e l&acute;imput di tariffa permettono di fissare una tariffa per un determinato periodo. Scegli una data di inizio e una di fine, inserisci la tariffa e clicca il pulsante Configura Tariffe.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Data di inizio');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','Data di fine');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Tariffa');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Configura tariffe');
define('_JOMRES_PARTNERS_TITLE','Partners');
define('_JOMRES_CALENDAR_TODAY','Oggi');
define('_JOMRES_CALENDAR_PREV','Precedente');
define('_JOMRES_CALENDAR_NEXT','Successivo');
define('_JOMRES_CALENDAR_RTL','falso');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Camera ');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','Ospite(i). ');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','Questo &egrave; il modo in cui abbiamo assegnato il numero dei tuoi ospiti alle loro camere. Se desideri cambiare l&acute;allocazione, devi contattare la struttura dopo aver prenotato. Ci potrebbero essere supplementi per i cambiamenti richiesti.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Nota che la tua struttura non &egrave; ancora stata pubblicata, solo tu puoi vederla, I visitatori del sito non la vedranno ancora");
// 4.5.5
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Ordine dei risultati di ricerca di default');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Cambia questa opzione per cambiare l&acute;ordine in cui i risultati vengono visualizzati.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Mostra il men&ugrave; a tendina dell&acute;ordinamento risultati');
define('_JOMRES_ROOMMSLIST_STYLE','Style lista camere');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','Nel modulo di prenotazione, usando lo stile classico offrirai camere individuali ai tuoi ospiti. Invece con la tipologia tipo camera, gli ospiti possono scegliere il numero ed il tipo di camera (Es. 2 doppie)');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classico');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Tipo Camera');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Ri)controllo disponibilit&agrave;');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Ricreazione elenco camere disponibili');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calcolo totali');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Aggiornamento modulo terminato');
define('_JOMRES_COM_CALENDAR_STARTDAY','Giorno di Inizio Settimana del calendario, Domenica o Luned&igrave;');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Solo gli ospiti possono inserire recensioni?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Seleziona SI se vuoi limitare le recensioni solo a quegli utenti che son gi&agrave; stati ospiti in questa struttura.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per camera');
define('_JOMRES_MAX_GUESTS_PER_ROOM','Ospiti per camera : ');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Ospiti per prenotazione : ');
define('_JOMRES_NUMBER_OF_ROOMS','Numero di camere');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariffe standard');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"Solo per le nuove tariffe");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Anni da mostrare");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Stabilisce il numero di anni da mostrare durante la modifica delle tariffe di microgestione");
define('_JRPORTAL_MONTHS_LONG_0','Gennaio');
define('_JRPORTAL_MONTHS_LONG_1','Febbraio');
define('_JRPORTAL_MONTHS_LONG_2','Marzo');
define('_JRPORTAL_MONTHS_LONG_3','Aprile');
define('_JRPORTAL_MONTHS_LONG_4','Maggio');
define('_JRPORTAL_MONTHS_LONG_5','Giugno');
define('_JRPORTAL_MONTHS_LONG_6','Luglio');
define('_JRPORTAL_MONTHS_LONG_7','Agosto');
define('_JRPORTAL_MONTHS_LONG_8','Settembre');
define('_JRPORTAL_MONTHS_LONG_9','Ottobre');
define('_JRPORTAL_MONTHS_LONG_10','Novembre');
define('_JRPORTAL_MONTHS_LONG_11','Dicembre');

define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Processo di gestione struttura");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"Ci sono diversi processi di gestione in relazione al modo in cui vuoi inserire la tua struttura/business.");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Affitto");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Scegli l'opzione Affitto se stai offrendo camere in una struttura (es. Hotel/B&B/Villa/Appartamento)");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Immobiliare/inserimento semplice");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Scegli l'opzione immobiliare se sei interessato solo alla vendita");

define('JOMRES_COM_A_MINIMALCONFIG_DESC','Seleziona SI per ridurre il numero di opzioni disponibili ai gestori delle strutture nella Sezione di Configurazione Generale. Questo &egrave; utile se on vuoi che i gestori delle strutture abbiano troppe opzioni da configurare, puoi comunque difinire la configurazione di default delle opzioni disponibili.');

define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Seleziona un opzione per la tua prenotazione');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Cambia su HTML editor nella pagina di configurazione della struttura. Inoltre, Se selezioni NO, tutto l&acute;HTML eccetto p e br &egrave; estrapolato da tutto il testo inserito e visualizzato.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Visualizzazione Gestione struttura");
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Visualizzazione anteprima del sito");
define('_JOMRES_COM_TIMEZONE_SWITCHER',"Visualizzare il selettore di Timezone nella toolbar del gestore struttura?");

define('_JOMRES_PARTNER_DISCOUNT',"Sconto Partner ");
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Cerca utente");
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Inserisci un p&ograve; di caratteri per carcare un utente.<br/>Selezionato l&acute;utente lo aggiungerai automaticamente ai tuoi partner e verrai indirizzato alla prossima pagina dove potrai assegnare all&acute;utente strutture e sconti.");
define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Partners presenti");
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Seleziona un partner e sarai indirizzato alla pagina di amministrazione partners.");

define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Cerca una Struttura");
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Inserisci un p&ograve; di caratteri del nome della struttura  e seleziona una struttura.<br/> Quando selezioni la struttura questa verr&agrave; automaticamente aggiunta al portfolio strutture del tuo partner, tuttavia non beneficeranno di nessuno sconto, fintanto che non ne stabilirai uno per quell&acute;utente.");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Strutture Correnti");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Clicca su una struttura per modificare le impostazioni di sconto sui partner per quella struttura.");


// 4.6
define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) ");
define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended.");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.");
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user.");
define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
define('_JOMRES_SEARCH_STARS','Number of stars');

define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of properties");
// 4.6.1
define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');
define('_JOMRES_TOUCHTEMPLATES','Label Translations');

define('_JRPORTAL_ROI_TAB',"ROI");
define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.");

//4.7.2
define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');

// 4.7.3
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');

// 4.7.7

define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');
// 4.7.8

define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");


// 5.2.1
define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
define('_JOMRES_DEBUGGING_TAB','Debugging');
define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
define('_JOMRES_DATEPERIOD_SECOND','second');
define('_JOMRES_DATEPERIOD_MINUTE','minute');
define('_JOMRES_DATEPERIOD_HOUR','hour');
define('_JOMRES_DATEPERIOD_DAY','day');
define('_JOMRES_DATEPERIOD_WEEK','week');
define('_JOMRES_DATEPERIOD_MONTH','month');
define('_JOMRES_DATEPERIOD_YEAR','year');
define('_JOMRES_DATEPERIOD_DECADE','decade');
define('_JOMRES_DATEPERIOD_S','s');
define('_JOMRES_DATEPERIOD_AGO','ago');
define('_JOMRES_DATEPERIOD_FROMNOW','from now');

define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

define('_JOMRES_EDIT_PROFILE','Edit Profile');
define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
define('_JOMRES_IMAGE','Image');
define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

define('_JOMRES_QUICK_INFO',"Quick Info");

define('_JOMRES_MENU_SHOW',"Show");
define('_JOMRES_MENU_HIDE',"Hide");
define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


define('_JOMRES_DEBUGGING_SUBJECT','Subject');
define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
define('_JOMRES_METATITLE','Meta title');
define('_JOMRES_METADESCRIPTION','Meta description');
define('_JOMRES_FOUNDPROPERTIES',"Properties found");
define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

define('_JOMRES_MYPROPERTIES','My properties');


define('_JOMRES_CART_TITLE','My proposed bookings');
define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
define('_JOMRES_CART_OR',' or ');
define('_JOMRES_CART_SAVEFORLATER','Save for later');
define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
define('_JOMRES_CART_VIEWCART','View cart');

define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
define('_JOMRES_CSS_CACHING_DESC',"");


define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

define('_JOMRES_COMPARE',"Compare");
define('_JOMRES_REMOVE',"Remove");
define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
define('_JOMRES_COOKIEPOLICY_3',"Read more...");
define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

define('_JOMRES_SAFEMODE',"Enable safe mode?");
define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

define('_JOMRES_PRICE_ON_APPLICATION',"POA");

define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

define('COMMON_NEXT',"Next");
define('COMMON_CANCEL',"Cancel");
define('COMMON_SUBMIT',"Submit");
define('COMMON_SAVE',"Save");
define('COMMON_DELETE',"Delete");
define('COMMON_RETURN',"Return");
define('COMMON_CLOSE',"Close");
define('COMMON_BACK',"Back");

define('COMMON_HOME',"Home");

define('COMMON_NEW',"New");

define('COMMON_SEND',"Send");

define('RECAPTCHA_TITLE',"reCaptcha");
define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
define('RECAPTCHA_PUBLIC_KEY',"Public key");
define('RECAPTCHA_PRIVATE_KEY',"Private key");


define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


define('_JOMRES_BOOTSTRAPSWITCH',"Enable Twitter Bootstrap templates");
define('_JOMRES_BOOTSTRAPSWITCH_DESC',"Joomla 2.5 only option. Setting this to Yes will tell Jomres to use it's bootstrap templates (frontend only). In Joomla 3 this option will be hidden and the switch is done automatically.");

define('COMMON_ACTION',"Action");
define('COMMON_VIEW',"View");

define('BACKTOTOP',"Back to top");
