# Exercice sur les tests unitaires

## Service Calculatrice
En TDD (test driven development) : développer la classe de test et le service Calculator qui permettra d'effectuer les opérations classiques (addition, soustraction, multiplication, division)

## Model
Créer les classes suivantes : 
- Matiere, composée d'un nom et d'un coefficient
- Devoir : objet composé d'une matière et d'une note
- Eleve : objet composé du service calculator, d'un nom et d'une collection de devoirs, d'une moyenne par matière et d'une moyenne générale.
- Promo : objet composé d'une collection d'élèves, et de la moyenne de chaque élève par matière et générale. 

Les objets Promo et Eleve devront utiliser l'injection de dépendance afin de pouvoir utiliser le service calculator qui servira au calcul des moyennes. 

Créer les fonctions de calcul de moyennes sur la classe Eleve et Promo et les tests associés. Il faudra mocker le service calculator.