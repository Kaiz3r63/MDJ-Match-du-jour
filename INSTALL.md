# Guide d'installation et de déploiement — MDJ (Match du Jour)

Ce guide détaille la procédure pas à pas pour installer l'application sur votre serveur web et configurer l'accès à la base de données Firebase en temps réel.

---

## 1. Cloner ou télécharger le projet

Placez les fichiers du projet sur votre serveur web compatible PHP (ex: Apache, Nginx, Synology NAS, etc.).

Le projet s'articule généralement ainsi :
- `index.html` (Interface principale)
- `config.js` (Fichier de configuration)
- `save_export.php` (Script d'enregistrement des fichiers XLS)
- `list_exports.php` (Script d'affichage des archives)
- `delete_export.php` (Script de suppression d'archive)
- Dossier `fdm_exports/` (Dossier de stockage des feuilles de match générées, droits d'écriture `755` ou `777` requis)

---

## 2. Configuration de Firebase Firestore

Pour que la synchronisation en direct fonctionne entre les différents appareils (tablette de la table de marque, smartphones, etc.), vous devez configurer un projet Firebase.

1. Rendez-vous sur la [Console Firebase](https://console.firebase.google.com/).
2. Cliquez sur **Créer un projet** (ou *Ajouter un projet*) et suivez les étapes.
3. Une fois le projet créé, ajoutez une application **Web** (`</>`) à votre projet.
4. Donnez-lui un surnom et validez. Firebase va vous fournir un bloc de code contenant votre configuration (`firebaseConfig`).
5. Copiez ces identifiants pour l'étape suivante.

### Configuration des règles Firestore
Dans votre console Firebase, allez dans **Firestore Database** > **Règles**, et assurez-vous d'autoriser la lecture/écriture pour le développement (ou sécurisez-les selon vos besoins) :

```javascript
rules_version = '2';
service cloud.firestore {
  match /databases/{database}/documents {
    match /matches/{document=**} {
      allow read, write: if true;
    }
  }
}
