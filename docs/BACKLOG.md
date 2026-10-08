# Backlog - Breteuil Dentaire

Marco lit ce fichier avant de construire quoi que ce soit.
Ordre = priorité. Un item à la fois, testé (docs/QA.md) avant le suivant.

Périmètre **immédiat** (décision du chef de projet) : tableau de bord admin, **galeries** du cabinet, **personnel** de travail. Rien d’autre (pas de planning, pas de file de messages, pas d’édition des pages soins).

---

## À faire

### 1. Espace admin (socle)
- [x] Connexion admin (e-mail + mot de passe, session Laravel)
- [x] Déconnexion
- [x] Tableau de bord : liens vers Galeries et Personnel uniquement
- [x] Routes admin protégées : un visiteur non connecté est renvoyé vers la page de connexion
- [x] Seeder admin (`AdminUserSeeder`, variables `ADMIN_*` dans `.env`)

### 2. Gestion des galeries
L’admin ajuste les photos de la visite du cabinet depuis le tableau de bord, sans toucher au code.
- [x] Lister les images de la galerie (aperçu, ordre d’affichage)
- [x] Ajouter une image (upload)
- [x] Compresser l’image **lors du store** (création) avant enregistrement : réduire poids / dimensions, garder un rendu correct sur la page publique
- [x] Champ **alt** obligatoire (backend + formulaire admin)
- [x] Modifier (alt / ordre, remplacement de fichier)
- [x] Supprimer une image
- [x] La page publique « Visite du cabinet » affiche uniquement les images gérées en admin (plus d’images en dur dans la vue)

### 3. Gestion du personnel
L’admin gère l’équipe visible sur le site.
- [x] Lister le personnel (nom, rôle, photo, visible ou non)
- [x] Ajouter un membre (nom, fonction, photo, texte de présentation, lien de fiche si besoin)
- [x] Modifier un membre
- [x] Supprimer un membre (ou le masquer du site public)
- [x] Les pages publiques « Notre équipe » et fiches praticiens affichent les données gérées en admin

### 3 bis. Gestion des services (pages de soins)
- [x] Lister / ajouter / modifier / masquer un service depuis l’admin
- [x] Image bandeau + image principale + contenu HTML (éditeur simple)
- [x] Menu public groupé par catégories (Soins, Implantologie, Esthétique)
- [x] URLs existantes conservées (implant-dentaire, facette-dentaire, etc.)

### 4. Vérification
- [ ] @emile : checklist QA sur connexion, galeries, personnel, et pages publiques concernées
- [ ] @paul : audit du login et des uploads (hors template vitrine sans comptes)

---

## En cours

- Vérification QA et sécurité du socle Admin + Galeries + Personnel + Services.

---

## Terminé - vitrine publique (déjà en place)

Contenu statique actuel. Ne plus reconstruire ces pages sauf correction validée.

- [x] Accueil
- [x] Notre équipe (Dr Dassie, Dr Aboulker, Dr Nana Lowe) - branché dynamiquement sur la base
- [x] Fiches praticiens (Dr Fabrice DASSIE, Dr Mickael ABOULKER, Dr Priscile NANA LOWE) - branchées dynamiquement sur la base
- [x] Visite du cabinet / galerie - branchée dynamiquement sur la base
- [x] Urgences dentaires
- [x] Prothèses dentaires
- [x] Implantologie et pages associées
- [x] Esthétique (éclaircissement, sourire, facettes)
- [x] Dentisterie numérique
- [x] Services
- [x] Contact (formulaire e-mail)
- [x] Prendre un rendez-vous
- [ ] Mentions légales *(hors périmètre immédiat)*

---

## Hors périmètre pour le moment

Ne pas construire tant que le chef de projet ne les remet pas dans « À faire » :

- Gestion des demandes contact / rendez-vous
- Planning / disponibilités
- Édition des textes des pages de soins *(fait : module Services, D-006)*
- Mentions légales
- Dossier médical patient
