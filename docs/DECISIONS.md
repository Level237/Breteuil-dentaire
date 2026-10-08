# DECISIONS - journal des choix du projet

Règles d'utilisation :
- Toute décision importante est écrite ici LE JOUR où elle est prise, avec
  sa raison.
- On ne supprime JAMAIS une ligne : une décision annulée est suivie d'une
  nouvelle ligne marquée "ANNULE D-00X".
- Marco et Julio doivent relire ce fichier avant de proposer ou juger une
  solution technique - ça évite de rediscuter dix fois le même choix.

| ID | Date | Décision | Raison | Alternative écartée |
|----|------|----------|--------|----------------------|
| D-001 | JJ/MM | Stack : Laravel + SQLite pour démarrer | Zéro configuration, on se concentre sur le contenu du site | MySQL dès le départ : mise en place inutile à ce stade |
| D-002 | 07/10/2026 | Premier lot gestion = login admin + galeries + personnel. Les pages publiques galerie et équipe lisent ces données. | Le chef de projet a borné le besoin : ajuster les photos du cabinet et gérer l’équipe depuis un tableau de bord, rien d’autre pour l’instant | Planning, file de messages, CMS des pages soins, multi-rôles (praticien / accueil) dès maintenant |
| D-003 | 07/10/2026 | Auth session Laravel maison (login / logout / seeder admin). Pas de Breeze, Fortify ni starter kit. | Un seul compte admin ; Breeze imposerait Tailwind / inscription / reset et casserait le thème Bootstrap existant | Laravel Breeze, Fortify, Sanctum pour le back-office |
| D-004 | 07/10/2026 | Galerie = table `galleries` (path, alt obligatoire, sort_order). Compression JPEG via GD PHP à l’enregistrement, disque `public`. | Accessibilité (alt) demandée par le chef de projet ; pas de package image supplémentaire | Intervention Image / Spatie Media Library |
| D-005 | 07/10/2026 | Personnel = table `team_members` (name, slug, role, photo, diplomas json, appointment_url, sort_order, is_active). CRUD admin + page équipe et fiches individuelles dynamiques. | Gestion autonome des fiches praticiens depuis le tableau de bord avec préservation des URLs existantes | Fiches statiques en dur dans les fichiers Blade |
| D-006 | 07/10/2026 | Services = table `services` (title, slug, category Soins/Implantologie/Esthétique, images, excerpt, body HTML nettoyé, sort_order, is_published). CRUD admin, menu public dynamique, URLs existantes conservées. | Le client ajoute et modifie les pages de soins depuis le tableau de bord, sans constructeur de pages | WordPress / Gutenberg / CMS par blocs |

## Décisions à prendre plus tard (en attente)
- Faut-il passer à MySQL avant la mise en ligne (uploads + comptes) ?
- Plusieurs comptes / rôles (praticien, accueil) plus tard ? Pour l’instant : un admin (D-003).
- Mentions légales et file de demandes contact / RDV : quand les remettre au backlog ?
