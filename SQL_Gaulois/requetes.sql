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

SELECT nom_specialite, COUNT(p.id_specialite) AS nbperso
FROM specialite s
INNER JOIN personnage p ON p.id_specialite = s.id_specialite
GROUP BY p.id_specialite
ORDER BY nbperso DESC 

-- 5. Nom, date et lieu des batailles, classées de la plus récente à la plus ancienne (dates affichées 
-- au format jj/mm/aaaa).

SELECT nom_bataille, DATE_FORMAT(date_bataille, "%d-%m-%Y") AS dateB, nom_lieu
FROM bataille b
INNER JOIN lieu l ON l.id_lieu = b.id_lieu
ORDER BY date_bataille

-- 6. Nom des potions + coût de réalisation de la potion (trié par coût décroissant).

SELECT nom_potion, SUM(i.cout_ingredient * c.qte) AS cout_realisation 
FROM composer c
INNER JOIN ingredient i ON c.id_ingredient = i.id_ingredient
INNER JOIN potion p ON c.id_potion = p.id_potion
GROUP BY nom_potion
ORDER BY cout_realisation DESC 

-- 7. Nom des ingrédients + coût + quantité de chaque ingrédient qui composent la potion 'Santé'.

SELECT i.nom_ingredient, c.qte, i.cout_ingredient*c.qte AS cout_realisation
FROM potion p
INNER JOIN composer c ON p.id_potion = c.id_potion
INNER JOIN ingredient i ON c.id_ingredient = i.id_ingredient
WHERE p.nom_potion = 'Santé'
ORDER BY i.nom_ingredient;


-- 8. Nom du ou des personnages qui ont pris le plus de casques dans la bataille 'Bataille du village 
-- gaulois'.

SELECT nom_personnage, pc.qte
FROM prendre_casque pc
INNER JOIN personnage p ON pc.id_personnage = p.id_personnage
INNER JOIN bataille b ON pc.id_bataille = b.id_bataille
WHERE b.nom_bataille = 'Bataille du village gaulois'
ORDER BY pc.qte

-- 9. Nom des personnages et leur quantité de potion bue (en les classant du plus grand buveur 
-- au plus petit).

SELECT nom_personnage, b.dose_boire
FROM boire b
INNER JOIN personnage pe ON pe.id_personnage = b.id_personnage
INNER JOIN potion po ON po.id_potion = b.id_potion
ORDER BY b.dose_boire DESC 

-- 10. Nom de la bataille où le nombre de casques pris a été le plus important.

SELECT nom_bataille, pc.qte
FROM prendre_casque pc
INNER JOIN bataille b ON pc.id_bataille = pc.id_bataille
ORDER BY pc.qte DESC 
LIMIT 50

-- 11. Combien existe-t-il de casques de chaque type et quel est leur coût total ? (classés par 
-- nombre décroissant)

-- 12. Nom des potions dont un des ingrédients est le poisson frais.

-- 13. Nom du / des lieu(x) possédant le plus d'habitants, en dehors du village gaulois.
0
-- 14. Nom des personnages qui n'ont jamais bu aucune potion.

-- 15. Nom du / des personnages qui n'ont pas le droit de boire de la potion 'Magique'.