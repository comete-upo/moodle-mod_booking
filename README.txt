BOOKING MODULE
----------------

This activity allows you to manage bookings for courses, either moodle-courses or other offline courses.
Please contact info@edulabs.org for improvements bug reports etc.

Supported languages: English and German. Please post your translations or improvements on github or send it via mail to us.

   Documentation:  http://docs.moodle.org/22/en/Booking_module

Additional features added by Davo Smith of Synergy Learning, on behalf of BP

Changes
-------

05-10-2012 (Synergy Learning features):
- Extra option to allow users to be automatically enrolled / unenrolled to/from the associated courses when they make a
booking or the booking is cancelled
- Booking email messages can now be customised via the booking settings page
- Booking times displayed, as well as dates
- Can now specify a maximum number of bookings that any one user can make in one booking activity (more bookings can be
made after the endtime has passed for those bookings).
- New global setting to include iCal attachments with email notifications (for bookings that have start & end dates)




22-01-2012 (Université Paris Ouest Nanterre La Défense, service COMETE)
- Retrait de la ligne "createdby" (view.php)
- Retrait/mise en option ajout dans un cours :

* lib.php : rien à changer en fait.

* mod_form.php
2 lignes ajoutées : 129 et 132

* report.php : 
2 lignes ajoutées : 100 et 113 (pas obligatoire, optimisation only)

* bookingmanageusers.class.php
2 lignes ajoutées : 65 et 69

* bookingform.class.php
2 lignes ajoutées : 35, 43, 44


- Fix bad optionid 
* report.php : ligne 33,34,35


- last : lib.php : ajout des links !!


Nouvelles traductions : (à mettre dans l'allemand !!)

$string['linktocourse'] = 'Permettre l\'inscription dans un cours Moodle via le module';

$string['linktocoursedesc'] = 'Il est possible d\'inscrire les participants qui réservent des créneaux dans d\'autres cours de Moodle. Attention cependant, la liste des cours dans laquelle l\'enseignant peut choisir le cours en question n\'est pas filtrée pour le moment !';


$string['booking:addinstance'] = 'Ajouter un évènement'; # Il manquait cette ligne 

$string['booking:return'] = 'Revenir à l\'évènement';

$string['modulename_help'] = 'L\'activité Évènement permet à l\'enseignant(e) de proposer aux étudiant(e)s de s\'inscrire à un évènement.
L\'enseignant(e) présente l\'évènement et ajoute une ou plusieurs options de réservation au(x)quelle(s) les étudiant(e)s pourront s\'inscrire.

Il est possible 
* de définir un nombre limite d\'inscription pour chaque option de réservation
* de proposer l\'inscription sur liste d\'attente
* de spécifier un créneau horaire
* de limiter le nombre d\'inscription par personne
* de restreindre la période de réservation

L\'enseignant(e) récupère ensuite la liste des personnes inscrites à l\'évènement en général et/ou à chaque option de réservation possible.

';



Choses à revoir à mon avis : 
- afficher "Pas encore réservé" ?
- afficher "Les invités ne peuvent pas faire de réservation" ? Tester si role = guest peut etre ? Quid de la permission "R"server une option" à donner au enseignant ? > en fait bloquer directement l'accès aux invités et c tout !

- icones !!!