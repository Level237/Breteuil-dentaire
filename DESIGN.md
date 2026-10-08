---
name: Breteuil Dentaire
description: Cabinet dentaire de l’Abbaye de Breteuil, calme, pierre et bronze.
colors:
  primary: "#526F9E"
  primary-deep: "#3A5073"
  primary-soft: "#E8EEF5"
  accent: "#9E8152"
  accent-deep: "#6B5636"
  accent-soft: "#F3EDE3"
  paper: "#F6F3EE"
  ink: "#3E4A5A"
  muted: "#6A7380"
  white: "#FBF9F6"
  error: "#B42318"
typography:
  display:
    fontFamily: "Poppins, Helvetica, Arial, sans-serif"
    fontSize: "clamp(2rem, 4vw, 3.25rem)"
    fontWeight: 700
    lineHeight: 1.2
    letterSpacing: "normal"
  headline:
    fontFamily: "Poppins, Helvetica, Arial, sans-serif"
    fontSize: "clamp(1.5rem, 2.5vw, 2.25rem)"
    fontWeight: 700
    lineHeight: 1.25
  title:
    fontFamily: "Poppins, Helvetica, Arial, sans-serif"
    fontSize: "1.25rem"
    fontWeight: 600
    lineHeight: 1.35
  body:
    fontFamily: "Poppins, Helvetica, Arial, sans-serif"
    fontSize: "16px"
    fontWeight: 400
    lineHeight: 1.8
  label:
    fontFamily: "Poppins, Helvetica, Arial, sans-serif"
    fontSize: "14px"
    fontWeight: 600
    lineHeight: 1.5
    letterSpacing: "0.01em"
rounded:
  sm: "8px"
  md: "16px"
  pill: "99px"
spacing:
  sm: "8px"
  md: "16px"
  lg: "32px"
  xl: "48px"
components:
  button-primary:
    backgroundColor: "{colors.accent-deep}"
    textColor: "{colors.white}"
    rounded: "{rounded.pill}"
    padding: "14px 50px 14px 20px"
    typography: "{typography.label}"
  button-primary-hover:
    backgroundColor: "{colors.primary-deep}"
    textColor: "{colors.white}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    rounded: "{rounded.pill}"
    padding: "14px 50px 14px 20px"
---

# Design System: Breteuil Dentaire

## 1. Overview

**Creative North Star: "Pierre d’Abbaye"**

Le site du cabinet n’est pas une clinique générique cyan. Il emprunte à l’abbaye : pierre calcaire claire, vitrail bleu poussiéreux, bronze doré des ferronneries. Calme, ancré, professionnel, jamais froid.

La stratégie couleur est **committed** sur le public : le bleu porte l’identité (header, hero, footer, titres), le papier reste clair, le bronze est rare et sert à décider (rendez-vous, icônes, soulignements). L’admin peut suivre les mêmes jetons plus tard ; aujourd’hui le front public est la source de vérité.

Ce système refuse le teal dentaire de template (`#0E384C` / `#1E84B5`), le blanc clinique pur, le vert hôpital, et le luxe spa feuille d’or partout.

**Key Characteristics:**
- Surfaces claires teintées pierre, jamais blanc pur `#fff` ni noir pur `#000`
- Bleu d’identité, bronze d’action
- Boutons pilule, ombres ambiantes très légères
- Poppins, graisse 700 sur les titres, 400 sur le corps
- Photos du cabinet au premier plan ; la couleur encadre, elle n’écrase pas

## 2. Colors

Duo complémentaire froid / chaud : ardoise bleue et bronze d’abbaye. Le 60-30-10 se lit en **poids visuel**, pas en "inonder la page de bleu".

### Primary
- **Ardoise de vitrail** (`#526F9E`): couleur d’identité. Header, footer, overlays de hero, puces, états actifs du menu. Contraste sur papier clair : 5.09:1 (AA texte). Pas pour le corps de texte long.
- **Encre de choeur** (`#3A5073`): titres, liens au repos, texte sur fond clair qui doit tenir AAA. Contraste 8.16:1 sur blanc teinté.
- **Brume de nef** (`#E8EEF5`): bandes de section, cartes douces, hover de nav. C’est une part du 60 %, pas le bleu saturé.

### Secondary
- **Bronze d’abbaye** (`#9E8152`): accent 10 %. Icônes, filets, petits labels, hover décoratif. Contraste 3.67:1 : interdit en texte petit et en bouton 14 px. Réservé au grand texte et au décor.
- **Bronze ferronnerie** (`#6B5636`): remplissage des CTA (rendez-vous, envoyer). Blanc teinté dessus : 6.98:1, AA OK.
- **Sable de cloître** (`#F3EDE3`): fond d’accent très léger (encart contact, citation).

### Neutral
- **Pierre calcaire** (`#F6F3EE`): fond de page dominant (le vrai 60 %).
- **Ivoire** (`#FBF9F6`): cartes, champs, surfaces levées. Teinté, pas `#FFFFFF`.
- **Ardoise écrite** (`#3E4A5A`): corps de texte. Teinté vers le bleu.
- **Voile** (`#6A7380`): texte secondaire, légendes, horaires.

### Semantic
- **Erreur** (`#B42318`): formulaires uniquement. Pas de vert succès criard ; un état calme suffit.

### Named Rules
**The Cloister Rule.** 60 % pierre / ivoire, 30 % bleu d’identité, 10 % bronze. Le bleu `#526F9E` n’est jamais un fond de page entière.

**The Gilt Rule.** Le bronze attire l’œil parce qu’il est rare. Un écran avec plus de deux CTA bronze a trop d’accents.

**The Contrast Rule.** Texte courant : encre `#3A5073` ou `#3E4A5A`. CTA : `#6B5636` + ivoire, jamais `#9E8152` + blanc en 14 px.

## 3. Typography

**Display Font:** Poppins (Helvetica, Arial, sans-serif)
**Body Font:** Poppins (même famille)
**Label/Mono Font:** JetBrains Mono côté admin seulement

**Character:** Une seule famille, hiérarchie par graisse et taille. Sobre, lisible, sans serif décoratif pour l’instant (un serif d’abbaye pourra venir plus tard sur le display, pas sur le corps).

### Hierarchy
- **Display** (700, clamp 2–3.25rem, 1.2): H1 de page et hero.
- **Headline** (700, clamp 1.5–2.25rem, 1.25): H2 de section (`text-anime-style-2`).
- **Title** (600, 1.25rem, 1.35): H3, cartes, accordion FAQ.
- **Body** (400, 16px, 1.8): paragraphes, max ~70ch.
- **Label** (600, 14px, 1.5): boutons, nav, breadcrumbs.

### Named Rules
**The One Family Rule.** Pas de troisième font sur le site public. Admin : Plus Jakarta Sans + JetBrains Mono, hors de ce document visuel public.

## 4. Elevation

Hybride : surfaces plates au repos, ombre unique et très douce pour les pastilles / cartes flottantes. Pas de glassmorphism, pas de neon glow.

### Shadow Vocabulary
- **Ambient** (`box-shadow: 0 0 40px 0 #3A50731A`): icônes hero, cartes flottantes. Teintée primaire, jamais grise pure.
- **Rest:** aucune ombre sur les blocs de contenu et le header.

### Named Rules
**The Flat-By-Default Rule.** L’ombre n’apparaît que si l’élément flotte au-dessus d’une photo ou d’un hero.

## 5. Components

### Buttons
- **Shape:** pilule (`99px`), padding 14px 50px 14px 20px, flèche circulaire à droite (héritage du thème).
- **Primary (action réelle):** fond `{colors.accent-deep}`, texte ivoire. Hover : fond `{colors.primary-deep}`, la flèche tourne.
- **Secondary (navigation douce):** fond `{colors.primary}`, même forme.
- **Focus:** anneau 2px `{colors.accent}` décalé, jamais outline navigateur par défaut laissé vide.

### Cards / Containers
- **Corner Style:** 16px sur les cartes cabinet / services ; cercles 100% pour les pastilles icône.
- **Background:** ivoire ou brume de nef.
- **Border:** aucune, ou filet 1px bronze à 20 % d’opacité si besoin de séparer sans ombre.
- **Internal Padding:** 24–32px.

### Inputs / Fields
- **Style:** fond ivoire, rayon 8px, bordure `#526F9E33`.
- **Focus:** bordure `{colors.primary}`, pas de glow coloré.
- **Error:** bordure `{colors.error}`, message en `#B42318`.

### Header / Navigation
- Fond bleu d’identité ou ivoire selon le hero. Lien actif : bronze, pas un soulignement épais.
- CTA "Rendez-vous" : unique bouton bronze de l’en-tête.

### FAQ accordion
- Question en title 600, réponse en body. Premier item ouvert. Filet pierre, chevron bronze.

## 6. Do's and Don'ts

**Do:** laisser les photos du cabinet respirer sur fond pierre ; un CTA bronze par vue ; titres en `#3A5073`.

**Do:** garder le 60 % clair. Un header bleu + footer bleu suffisent à signer la marque.

**Don't:** repeindre tout le body en `#526F9E` (effet intranet, fatigue visuelle, photos tuées).

**Don't:** texte blanc 14px sur `#9E8152` (3.67:1, hors AA). Descendre au bronze ferronnerie.

**Don't:** réintroduire le cyan template `#1E84B5` ni le navy `#0E384C` sur le public une fois le passage effectué.

**Don't:** filets verticaux épais colorés, texte en dégradé, cartes identiques icône + titre en grille infinie.
