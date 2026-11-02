# MDJ - Match du Jour 🏉

**MDJ (Match du Jour)** est une application web légère, autonome et pensée pour le terrain, conçue pour gérer en direct et en temps réel les feuilles de match de rugby (score, chronomètre, essais, transformations, pénalités, cartons et changements de joueurs). 

Développée pour répondre aux exigences des règlements de la FFR (notamment pour les compétitions U16/U19 et championnats régionaux), elle permet un suivi multi-utilisateurs instantané grâce à une synchronisation Cloud (Firebase Firestore).

---

## 🚀 Fonctionnalités principales

- **Chronomètre dynamique & Gestion des périodes :** Gestion des mi-temps / périodes réglementaires avec alertes de dépassement.
- **Feuille de match chronologique en direct :** Tableau complet tracé en temps réel (Marqueur, Transformateur, pénalités, drops, essais de pénalité, cartons jaunes, blancs, bleus, rouges).
- **Gestion des remplacements :** Interface bi-colonne dédiée (Joueur Sortant / Joueur Entrant) avec suivi des joueurs déjà sortis.
- **Règlement intégré (FDM) :** Accès rapide aux grilles officielles de la FFR (R1, R2, R3, formats de jeu XV, XII, X, nombre de joueurs et règles d'arrêt de match).
- **Bloc-notes Live (Pense-bête) :** Prise de notes rapide synchronisée en temps réel (ex: consignes du staff, annonces de changements).
- **Export Excel (.xls) stylisé :** Clôture du match avec génération d'un fichier Excel complet et mise en forme professionnelle directement stocké sur le serveur.
- **Sécurité & Confort :** Écran de verrouillage tactile anti-fausse manip sur tablette/smartphone.

---

## 🛠️ Stack technique

- **Frontend :** HTML5, Tailwind CSS (via CDN), JavaScript Vanilla, FontAwesome.
- **Backend / Temps réel :** Firebase Firestore (v9 Compat).
- **Exports Serveur :** Scripts PHP légers pour l'enregistrement, la consultation et la suppression des archives `.xls`.

---

## 📦 Installation rapide

Pour installer et configurer l'application, consultez le guide complet dans le fichier [INSTALL.md](INSTALL.md).
