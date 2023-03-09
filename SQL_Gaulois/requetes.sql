-- 1. Nom des lieux qui finissent par 'um'.


-- 2. Nombre de personnages par lieu (trié par nombre de personnages décroissant).

SELECT nom_lieu, COUNT(p.id_lieu) AS nbHabitant
FROM lieu l
INNER JOIN personnage p ON l.id_lieu = p.id_lieu
GROUP BY l.id_lieu
ORDER BY nbHabitant DESC

-- 3. Nom des personnages + spécialité + adresse et lieu d'habitation, triés par lieu puis par nom de personnage.

SELECT nom_personnage, adresse_personnage, nom_specialite, nom_lieu
FROM personnage p
INNER JOIN specialite s ON s.id_specialite = p.id_specialite
INNER JOIN lieu l ON p.id_lieu = l.id_lieu
ORDER BY nom_lieu, nom_personnage

-- 4. Nom des spécialités avec nombre de personnages par spécialité (trié par nombre de 
-- personnages décroissant).

-- 5. Nom, date et lieu des batailles, classées de la plus récente à la plus ancienne (dates affichées 
-- au format jj/mm/aaaa).

-- 6. Nom des potions + coût de réalisation de la potion (trié par coût décroissant).

-- 7. Nom des ingrédients + coût + quantité de chaque ingrédient qui composent la potion 'Santé'.

-- 8. Nom du ou des personnages qui ont pris le plus de casques dans la bataille 'Bataille du village 
-- gaulois'.

-- 9. Nom des personnages et leur quantité de potion bue (en les classant du plus grand buveur 
-- au plus petit).

-- 10. Nom de la bataille où le nombre de casques pris a été le plus important.

-- 11. Combien existe-t-il de casques de chaque type et quel est leur coût total ? (classés par 
-- nombre décroissant)

-- 12. Nom des potions dont un des ingrédients est le poisson frais.

-- 13. Nom du / des lieu(x) possédant le plus d'habitants, en dehors du village gaulois.

-- 14. Nom des personnages qui n'ont jamais bu aucune potion.

-- 15. Nom du / des personnages qui n'ont pas le droit de boire de la potion 'Magique'.