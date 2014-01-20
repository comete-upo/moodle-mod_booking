<?PHP // $Id: booking.php,v 1.6.4.5 2011-02-01 23:05:09 dasistwas Exp $


$string['addmorebookings'] = 'Ajouter d\'autres réservation'; # Apparait nulle part dans le code ?
$string['allowupdate'] = 'Autoriser le changement de réservation';
$string['answered'] = 'Répondu'; # Réponder ?
$string['attachical'] = 'Attacher l\'événement dans le calendrier';
$string['attachicaldesc'] = 'Notification par email comprenant l\'événement inclut dans le calendrier, si celui-ci le permet';
$string['linktocourse'] = 'Permettre l\'inscription dans un cours Moodle via le module';
$string['linktocoursedesc'] = 'Il est possible d\'inscrire les participants qui réservent des créneaux dans d\'autres cours de Moodle. Attention cependant, la liste des cours dans laquelle l\'enseignant peut choisir le cours en question n\'est pas filtrée pour le moment !';
$string['booking'] = 'Intitulé'; # Intitulé / titre de l'option de réservation
$string['booking:addinstance'] = 'Ajouter un événement'; # Il manquait cette ligne 
$string['booking:choose'] = 'Faire une réservation';
$string['booking:deleteresponses'] = 'Supprimer les réservations';
$string['booking:downloadresponses'] = 'Télécharger les réservations';
$string['booking:readresponses'] = 'Lire les réservations';
$string['booking:updatebooking'] = 'Gérer les options de réservation';
$string['bookingclose'] = 'jusqu\'au';
$string['bookingfull'] = 'Il n\'y a plus de places disponibles';
$string['bookingname'] = 'Titre de l\'événement';
$string['bookingopen'] = 'Disponible dès le';
$string['bookingtext'] = 'Description de l\'événement';
$string['expired'] = 'Les réservations sont fermées depuis {$a}';
$string['fillinatleastoneoption'] = 'Vous devez faire deux réservations au minimum.';  # Apparait nulle part dans le code ?
$string['full'] = 'Complet';
$string['havetologin'] = 'Les invités ne peuvent pas faire de réservation';  # Ce texte est plus parlant que l'original
$string['limit'] = 'Limite';
$string['modulename'] = 'Événement'; # Nom de l'activité (apparait qd on l'ajoute dans un cours)
$string['modulename_help'] = 'Cette activité peut être un peu complexe à configurer. N\'hésitez pas à prendre contact avec le service COMETE.

L\'activité Événement permet à l\'enseignant(e) de proposer aux étudiant(e)s de s\'inscrire à un événement.
L\'enseignant(e) présente l\'événement et ajoute une ou plusieurs options de réservation au(x)quelle(s) les étudiant(e)s pourront s\'inscrire.
Il est ensuite possible de récupérer la liste des participants inscrits à l\'événement en général et/ou à chaque option de réservation.

Il est possible 
* de définir un nombre limite de participants pour chaque option de réservation
* de proposer l\'inscription sur liste d\'attente
* de spécifier un créneau horaire
* de restreindre la période de réservation
* de limiter le nombre d\'inscription par personne

';
$string['pluginname'] = 'Événement'; # Nom du plugin (apparait au niveau des roles par exemple)
$string['pluginadministration'] = 'Administration d\'Événement';
$string['modulenameplural'] = 'Événements';
$string['mustchooseone'] = 'Vous devez choisir une option de réservation avant d\'enregistrer. Rien n\'a été enregistré.';
$string['noguestchoose'] = 'Désolé, les invités ne sont pas autorisés à saisir des informations'; # Nom du plugin (apparait au niv. des roles par ex)
$string['noresultsviewable'] = 'Les résultats ne sont pas visibles actuellement.';
$string['notopenyet'] = 'Les réservations ne seront possibles qu\'à partir du {$a} ';
$string['removeresponses'] = 'Effacer toutes les réservations';
$string['responses'] = 'Réponses'; # Faut voir le contexte
$string['responsesto'] = 'Réponses de {$a} '; # Faut voir le contexte
$string['spaceleft'] = 'place disponible';
$string['spacesleft'] = 'places disponibles';
$string['taken'] = 'Pris';
$string['timerestrict'] = 'Restreindre la période de réservation';
$string['viewallresponses'] = 'Gérer les {$a} réservations';
$string['yourselection'] = 'Votre sélection';

// view.php
$string['coursedate'] = 'Date/Heure';
$string['select'] = 'Sélection';
$string['availability'] = 'Disponibilité';
$string['booknow'] = 'Réserver maintenant';
$string['notbooked'] = 'Pas encore réservé';
$string['available'] = 'Places disponibles';
$string['placesavailable'] = 'Places disponibles';
$string['waitingplacesavailable'] = 'Liste d\'attente de places disponibles';
$string['confirmbookingoffollowing'] = 'Merci de confirmer la réservation';
$string['agreetobookingpolicy'] = 'J\'ai lu et j\'accepte de suivre les conditions de réservations';
$string['bookingsaved'] = 'Votre réservation est enregistrée.';
$string['booked'] = 'Réservé';
$string['cancelbooking'] = 'Annuler la réservation';
$string['deletebooking'] = 'Etes-vous sûr de vouloir vous désinscrire de cette option de réservation ? <br /><br /> <b>{$a} </b>';
$string['bookingdeleted'] = 'Votre réservation a été annulée';
$string['nobookingselected'] = 'Pas d\'option de réservation choisie';
$string['updatebooking'] = 'Modifier cette option de réservation';
$string['managebooking'] = 'Consulter';
$string['downloadusersforthisoptionods'] = 'Télécharger la liste des participants au format .ods';
$string['downloadusersforthisoptionxls'] = 'Télécharger la liste des participants au format .xls';
$string['download'] = 'Télécharger';
$string['userdownload'] = 'Télécharger la liste des participants';
$string['allbookingoptions'] = 'Télécharger les listes des participants pour toutes les options de réservation';
$string['subscribetocourse'] = 'Inscrire les participants au cours';
$string['closed'] = 'Date limite de réservation dépassée'; # Message qui apparait lorsque la période de réservation de l'option est passée.
$string['waitspaceavailable'] = 'Places disponibles de la liste d\'attente';
$string['onwaitinglist'] = 'Vous êtes inscrit sur la liste d\'attente';
$string['bookingmeanwhilefull'] = 'Il n\'y a plus de place disponible';
$string['unlimited'] = 'Illimité';
$string['starttimenotset'] = 'Date de début non renseignée';
$string['endtimenotset'] = 'Date de fin non renseignée';
$string['mustfilloutuserinfobeforebooking'] = 'Avant de remplir le formulaire de réservation, remplisser les informations personnelles de réservation';
$string['subscribeuser'] = 'Inscrire les participants dans ce cours';
$string['deleteuserfrombooking'] = 'Supprimer les participants de la réservation ?'; # Utilisé ??
$string['showallbookings'] = 'Voir toutes les options de réservations';
$string['showmybookings'] = 'Voir seulement mes réservations';
$string['mailconfirmationsent'] = 'Vous allez recevoir un mail de confirmation';
$string['deletebookingoption'] = 'Supprimer cette option de réservation';
$string['confirmdeletebookingoption'] = 'Supprimer réellement l\'option de réservation ';
$string['norighttobook'] = 'Votre rôle utilisateur ne vous permet pas de réserver. Contacter, s\'il vous plait, l\'administrateur du site pour qu\'il vous donne les droits appropriés.';
#$string['createdby'] = 'Le module Événement a été créé par edulabs.org';
$string['createdby'] = '';
#$string['maxperuserwarning'] = 'Vous avez actuellement atteint le nombre {$a->count}/{$a->limit} du maximum de vos réservations permises';
$string['maxperuserwarning'] = '';
$string['bookedpast'] = 'Réservé (obselète)';

// mod_form
$string['limitanswers'] = 'Limiter le nombre de participants';
$string['maxparticipantsnumber'] = 'Nombre maximum de participants';
$string['maxoverbooking'] = 'Nombre maximum de participants sur la liste d\'attente';
$string['defaultbookingoption'] = 'Options par défaut';
$string['sendconfirmmail'] = 'Envoyer une confirmation par email';
$string['sendconfirmmailtobookingmanger'] = 'Envoyer une confirmation par mail au responsable de l\'événement';
$string['allowdelete'] = 'Autoriser les participants à annuler eux-mêmes leur réservation';
$string['bookingpolicy'] = 'Conditions de réservation';
$string['confirmationmessagesettings'] = 'Réglages de l\'email de confirmation';
$string['usernameofbookingmanager'] = 'Nom du responsable de l\'événement';
$string['autoenrol'] = 'Inscrire automatiquement les participants';
$string['autoenrol_help'] = 'Si vous activez cette option, les participants seront inscrits au cours associé dès leur réservation et désinscrits de du cours s\'ils annulent leur réservation.';
$string['bookedtext'] = 'Message de confirmation de la réservation';
$string['waitingtext'] = 'Message de confirmation sur la liste d\'attente';
$string['statuschangetext'] = 'Message de confirmation du changement de statut';
$string['deletedtext'] = 'Message d\'annulation de la réservation';
$string['bookedtext_help'] = 'Laissez vide si vous voulez utiliser les textes par défaut. Vous pouvez utilisez ces variables dans le texte :
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
</ul>';
$string['waitingtext_help'] = $string['bookedtext_help'];
$string['statuschangetext_help'] = $string['bookedtext_help'];
$string['deletedtext_help'] = $string['bookedtext_help'];
$string['maxperuser'] = 'Réservation maximum par participant (lisez l\'aide ! =>)';
$string['maxperuser_help'] = 'Nombre maximum de réservation par participant pour cet événement. ATTENTION : cette limite ne prends en compte que les options pour lesquelles la date de fin est définie ET non dépassée !';

// editoptions.php
$string['submitandaddnew'] = 'Enregistrer et ajouter une nouvelle option de réservation';
$string['choosecourse'] = 'Choisir un cours';
$string['startendtimeknown'] = 'Indiquer les dates de début et de fin';
$string['coursestarttime'] = 'Date et heure de début';
$string['courseendtime'] = 'Date et heure de fin';
$string['addeditbooking'] = 'Ajout d\'une nouvelle option de réservation';
$string['donotselectcourse'] = 'Pas de cours sélectionné';
$string['waitinglisttaken'] = 'Inscrit sur la liste d\'attente';
$string['addnewbookingoption'] = 'Ajouter une nouvelle option de réservation';


// Confirmation mail
$string['days'] = '{$a} days';
$string['hours'] = '{$a} hours';
$string['minutes'] = '{$a} minutes';

$string['deletedbookingsubject'] = 'Annuler la réservation : {$a->title} by {$a->participant}';
$string['deletedbookingmessage'] = 'Message d\'annulation de cours supprimés : {$a->title}

Participant : {$a->participant}
Titre : {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Url du cours : {$a->courselink}
URL : {$a->bookinglink}

';

$string['confirmationsubject'] = 'Message de confirmation de la réservation {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'Message de confirmation de la nouvelle réservation à {$a->title} par {$a->participant}';
$string['confirmationmessage'] = 'Votre réservation a bien été enregistrée.

Statut de la réservation : {$a->status}
Participant :   {$a->participant}
Évé,nement :   {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Pour voir toutes vos réservations, cliquez sur le lien suivant : {$a->bookinglink}

'; # J'ai retiré "Le cours associé est le suivant : {$a->courselink}"
$string['confirmationsubjectwaitinglist'] = 'Statut de la réservation à {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'Statut de la réservation {$a->title}';
$string['confirmationmessagewaitinglist'] = 'Bonjour {$a->participant},

Votre réservation a bien été enregistrée.

Statut de la réservation : {$a->status}
Participant : {$a->participant}
Événement : {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Pour voir toutes vos réservations, cliquez sur le lien suivant : {$a->bookinglink}

';
$string['statuschangebookedsubject'] = 'Message de confirmation du changement de statut à {$a->title}';
$string['statuschangebookedmessage'] = 'Bonjour {$a->participant},

Le statut de votre réservation a changé. Vous êtes maintenant enregistré à {$a->title}.

Statut de la réservation : {$a->status}
Participant :   {$a->participant}
Événement :   {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Pour voir toutes vos réservations, cliquez sur le lien suivant : {$a->bookinglink}

'; # J'ai retiré "Le cours associé est le suivant : {$a->courselink}"
$string['deletedbookingusersubject'] = 'Message d\'annulation de la réservation {$a->title}';
$string['deletedbookingusermessage'] = 'Bonjour {$a->participant},

Votre réservation à {$a->title} ({$a->startdate} {$a->starttime}) a été annulée.
';

$string['error:failedtosendconfirmation'] = 'L\'utilisateur n\'a pas reçu d\'email de confirmation

Statut de la réservation : {$a->status}
Participant :   {$a->participant}
Événement :   {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
URL : {$a->bookinglink}
URL cours associé : {$a->courselink}

';
//report.php
$string['withselected'] = 'Avec les participants sélectionnés'; 
$string['associatedcourse'] = 'Cours associé';
$string['bookedusers'] = 'Participants';
$string['nobookedusers'] = 'Personne n\'a réservé cette option';
$string['waitinglistusers'] = 'Participants de la liste d\'attente';
$string['downloadallresponses'] = 'Télécharger toutes les listes de participants ';
$string['return'] = 'Revenir à l\'événement';
$string['badoptionid'] = 'Cette option de réservation n\'existe pas ou plus (Option ID error).';
$string['coursemisconfig'] = 'Erreur de configuration Module/Cours (Course ID error).';
$string['badcoursemoduleid'] = 'Cet événement n\'existe pas ou plus (Course Module ID error).';

