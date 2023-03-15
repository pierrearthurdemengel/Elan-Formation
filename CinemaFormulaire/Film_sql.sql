-- a. Informations d’un film (id_film) : titre, année, durée (au format HH:MM) et réalisateur

SELECT f.titre, f.annee, f.duree, f.synopsis, f.note5, f.lien_affiche, p.nom, p.prenom, p.sexe, p.date_naissance
FROM film f 
INNER JOIN realisateur r ON f.realisateur_id = r.id_realisateur
INNER JOIN personne p ON r.personne_id = p.id_personne