# Application REST PHP + SQLite : Inscription des Étudiants

Ce projet est une mini-application en PHP qui permet :

- L'inscription d'étudiants via un formulaire 
- L'enregistrement des données dans une base SQLite
- L'accès à une API REST (GET) qui retourne uniquement le nom, postnom et prénom de chaque étudiant `http://localhost:8086/liste_etudiants.php`

---

## Fichiers

- `index.php` – Formulaire d'inscription des étudiants
- `ajouter_etudiant.php` – Enregistre les infos dans `etudiants.db`
- `liste_etudiants.php` – Affiche en JSON la liste des noms/prénoms des étudiants
- `etudiants.db` – Base de données SQLite 


---

## Utilisation

1. Ouvre `formulaire` dans un navigateur
2. Remplis le formulaire et envoie-le
3. Les données sont enregistrées dans `etudiants.db`
4. Pour consulter les étudiants en JSON :
   - Accède à : `http://localhost:8086/liste_etudiants.php`

---

## Exemple de réponse JSON

```json
[
  {
    "nom": "MUTOMBO",
    "postnom": "MITSHABU",
    "prenom": "Nabil"
  },
  {
    "nom": "MUTAMBA",
    "postnom": "KITENGE",
    "prenom": "Neville"
  }
]
