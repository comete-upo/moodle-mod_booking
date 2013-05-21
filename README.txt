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




22-01-2012 (Universit� Paris Ouest Nanterre La D�fense, service COMETE)
- Retrait de la ligne "createdby" (view.php)
- Retrait/mise en option ajout dans un cours :

* lib.php : rien � changer en fait.

* mod_form.php
2 lignes ajout�es : 129 et 132

* report.php : 
2 lignes ajout�es : 100 et 113 (pas obligatoire, optimisation only)

* bookingmanageusers.class.php
2 lignes ajout�es : 65 et 69

* bookingform.class.php
2 lignes ajout�es : 35, 43, 44


- Fix bad optionid 
* report.php : ligne 33,34,35


- last : lib.php : ajout des links !!


Nouvelles traductions : (� mettre dans l'allemand !!)

$string['linktocourse'] = 'Permettre l\'inscription dans un cours Moodle via le module';

$string['linktocoursedesc'] = 'Il est possible d\'inscrire les participants qui r�servent des cr�neaux dans d\'autres cours de Moodle. Attention cependant, la liste des cours dans laquelle l\'enseignant peut choisir le cours en question n\'est pas filtr�e pour le moment !';


$string['booking:addinstance'] = 'Ajouter un �v�nement'; # Il manquait cette ligne 

$string['booking:return'] = 'Revenir � l\'�v�nement';

$string['modulename_help'] = 'L\'activit� �v�nement permet � l\'enseignant(e) de proposer aux �tudiant(e)s de s\'inscrire � un �v�nement.
L\'enseignant(e) pr�sente l\'�v�nement et ajoute une ou plusieurs options de r�servation au(x)quelle(s) les �tudiant(e)s pourront s\'inscrire.

Il est possible 
* de d�finir un nombre limite d\'inscription pour chaque option de r�servation
* de proposer l\'inscription sur liste d\'attente
* de sp�cifier un cr�neau horaire
* de limiter le nombre d\'inscription par personne
* de restreindre la p�riode de r�servation

L\'enseignant(e) r�cup�re ensuite la liste des personnes inscrites � l\'�v�nement en g�n�ral et/ou � chaque option de r�servation possible.

';



Choses � revoir � mon avis : 
- afficher "Pas encore r�serv�" ?
- afficher "Les invit�s ne peuvent pas faire de r�servation" ? Tester si role = guest peut etre ? Quid de la permission "R"server une option" � donner au enseignant ? > en fait bloquer directement l'acc�s aux invit�s et c tout !

- icones !!!