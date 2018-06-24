# BackToTheFuture
Aide Doc et Marty

Doc travaille sur sa nouvelle machine à voyager dans le temps portative. Il n'a guère de temps pour s'occuper d'autre chose et fait donc appel à ton brillant esprit pour l'aider dans ses calculs, et éviter de rompre ainsi le continuum espace-temps !

    Astuce : lis bien tout l’énoncé avant de commencer à coder ! Toutes les dates à utiliser sont fournies dans le texte et sont à utiliser directement dans le code, tu n'as pas besoin de développer une interface web administrable.
    Tu vas devoir créer une classe TimeTravel qui permettra de réaliser plusieurs calculs. Cette classe possédera deux propriétés, $start et $end, qui seront deux objets DateTime pour la date de départ et la date d'arrivée du voyage temporel !
    Une première méthode getTravelInfo() servira simplement à donner des informations sur le trajet. Il faudra qu'elle retourne la chaîne de caractères suivante : "Il y a ? années, ? mois, ? jours, ? heures, ? minutes et ? secondes entre les deux dates" en remplaçant bien entendu les points d'interrogation par les valeurs correctes (tu utiliseras les dates données dans le paragraphe suivant).


Suite à une expérience ratée avec sa nouvelle machine, le 31 décembre 1985, Doc s'est retrouvé projeté dans le temps. D'après les notes qu'il a laissées, Marty en déduit qu'il a été projeté 1 milliard de secondes dans le passé. Marty doit régler la DeLorean à la bonne date pour le retrouver. Il fait appel à vous pour l'aider.

    Ajoute la méthode findDate(DateInterval $interval) qui l'aidera à trouver la date en question (donc 1 milliard de seconde avant la propriété $start).

Tu as accompagné Marty dans le temps et vous avez retrouvé Doc mal en point. Il ne vous est d'aucune aide. Il faut le ramener au plus vite à votre époque pour le soigner. Mais le réservoir de la Dolorean est endommagé. Après une rapide expertise, tu estimes que la voiture ne peut plus faire des bonds dans le temps que, au mieux, d’1 mois plus 1 semaine et 1 jour. À chaque arrêt, il faudra refaire le plein de combustible.



    Tu dois donc écrire une dernière méthode backToFutureStepByStep(DatePeriod $step) qui devra renvoyer un tableau contenant toutes les dates auxquelles ils devront s'arrêter, afin de pouvoir régler au mieux le convecteur temporel. Les dates renvoyées devront être formatées selon les besoins du convecteur temporel, c'est-à-dire sous la forme 'Jan 22 1984 AM 06:35'.

        Tu l'auras compris, ici la step sera d'un mois, une semaine et un jour, utilise l'objet DatePeriod pour t'aider.


Critéres de validation

    La classe s'appelle TimeTravel et prend bien 2 paramètres DateTime à l'instanciation.
    La méthode getTravelInfo() renvoie bien une phrase décrivant la différence de temps (de l'année à la seconde) entre les deux propriétés $start et $end.
    La méthode findDate() renvoie bien une date d'arrivée qui est $interval secondes avant la $date de départ. Pour une date de départ au 31/12/1985, le résultat renvoie une réponse autour de 1954.
    En Option :* La méthode findDate() fonctionne avec n'importe quel intervalle, positif ou négatif, donc pour un voyage dans le passé ou dans le futur.
    La méthode backToFutureStepByStep() renvoie un tableau de N objets DateTime correctement formatés.
    La méthode backToFutureStepByStep() utilise bien l'objet DatePeriod

