# Application REST PHP + SQLite : Gestion des Étudiants

Ce projet est une mini-application en PHP qui permet :

- L'inscription d'étudiants via un formulaire HTML
- L'enregistrement des données dans une base SQLite
- L'accès à une API REST (GET) qui retourne uniquement le nom, postnom et prénom de chaque étudiant

---

## Fichiers

- `formulaire.html` – Formulaire d'inscription des étudiants
- `ajouter_etudiant.php` – Enregistre les infos dans `etudiants.db`
- `liste_etudiants.php` – Affiche en JSON la liste des noms/prénoms des étudiants
- `etudiants.db` – Base de données SQLite 
- `README.md` – Ce fichier

---

## Utilisation

1. Ouvre `formulaire.html` dans un navigateur
2. Remplis le formulaire et envoie-le
3. Les données sont enregistrées dans `etudiants.db`
4. Pour consulter les étudiants en JSON :
   - Accède à : `http://localhost/ton_projet/etudiants_sqlite.php`

---

## Exemple de réponse JSON

```json
[
  {
    "nom": "Lumumba",
    "postnom": "Onore",
    "prenom": "Patrice"
  },
  {
    "nom": "Kabila",
    "postnom": "Mulumba",
    "prenom": "Laurent"
  }
]
