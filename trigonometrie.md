---
layout: default
title: "Trigonométrie"
---

# Trigonométrie

Ce cours construit la trigonométrie pas à pas : on part du cercle et des angles, on définit le cosinus et le sinus, puis on en tire toutes les formules, les équations, les fonctions et les applications aux triangles.

## Sommaire

1. Angles et mesures (degrés, radians)
2. Le cercle trigonométrique
3. Cosinus et sinus
4. Valeurs remarquables
5. Relations fondamentales
6. Parité, périodicité, angles associés
7. La tangente
8. Trigonométrie du triangle rectangle
9. Équations et inéquations trigonométriques
10. Formules d'addition et de duplication
11. Linéarisation, transformation somme/produit, angle moitié
12. Forme $a\cos x + b\sin x$
13. Fonctions trigonométriques : courbes, variations, dérivées, limites
14. Triangle quelconque : lois des sinus et des cosinus
15. Lien avec les nombres complexes
16. Exercices

---

## 1. Angles et mesures

### 1.1 Les degrés

Un tour complet vaut $360^\circ$. Un angle plat vaut $180^\circ$, un angle droit $90^\circ$.

### 1.2 Les radians

Dans un cercle de rayon $R$, un angle au centre intercepte un arc de longueur $\ell$. La **mesure en radians** de cet angle est

$$\theta = \frac{\ell}{R}.$$

Cette définition ne dépend pas de $R$ : si on multiplie $R$ par $k$, $\ell$ est multiplié par $k$ aussi. Pour un tour complet, $\ell = 2\pi R$, donc

$$360^\circ = 2\pi \text{ rad}, \qquad 180^\circ = \pi \text{ rad}.$$

**Conversion.** La mesure en degrés $d$ et la mesure en radians $x$ sont proportionnelles :

$$\frac{d}{180} = \frac{x}{\pi}.$$

| Degrés | $0^\circ$ | $30^\circ$ | $45^\circ$ | $60^\circ$ | $90^\circ$ | $120^\circ$ | $135^\circ$ | $150^\circ$ | $180^\circ$ | $270^\circ$ | $360^\circ$ |
|---|---|---|---|---|---|---|---|---|---|---|---|
| Radians | $0$ | $\frac{\pi}{6}$ | $\frac{\pi}{4}$ | $\frac{\pi}{3}$ | $\frac{\pi}{2}$ | $\frac{2\pi}{3}$ | $\frac{3\pi}{4}$ | $\frac{5\pi}{6}$ | $\pi$ | $\frac{3\pi}{2}$ | $2\pi$ |

**Longueur d'arc.** Avec $\theta$ en radians : $\ell = R\theta$.
**Aire d'un secteur.** $\mathcal{A} = \dfrac{1}{2}R^2\theta$.

> En analyse, on travaille **toujours en radians** : c'est avec cette unité que les dérivées de $\sin$ et $\cos$ sont simples.

---

## 2. Le cercle trigonométrique

On se place dans un plan muni d'un repère orthonormé $(O ; \vec{i}, \vec{j})$.

Le **cercle trigonométrique** $\mathcal{C}$ est le cercle de centre $O$ et de rayon $1$. On l'oriente : le sens direct (ou **trigonométrique**) est le sens inverse des aiguilles d'une montre.

### Enroulement de la droite réelle

Imaginons la droite numérique tangente au cercle en $I(1,0)$. On l'enroule autour du cercle : la partie positive dans le sens direct, la partie négative dans le sens indirect. À chaque réel $x$ correspond ainsi un unique point $M(x)$ du cercle.

Comme le cercle a pour périmètre $2\pi$, les réels $x$ et $x + 2\pi$ donnent le même point. Plus généralement, $x$ et $x + 2k\pi$ ($k \in \mathbb{Z}$) donnent le même point.

### Mesures d'un angle orienté

Si $M$ est un point du cercle, l'angle orienté $(\overrightarrow{OI}, \overrightarrow{OM})$ admet une infinité de mesures, qui diffèrent d'un multiple de $2\pi$ : on dit qu'elles sont **congrues modulo $2\pi$** et on écrit

$$x \equiv y \pmod{2\pi} \iff x - y = 2k\pi,\ k \in \mathbb{Z}.$$

La **mesure principale** est celle qui appartient à $]-\pi\,;\,\pi]$.

**Exemple.** $\dfrac{17\pi}{4} = 4\pi + \dfrac{\pi}{4}$, donc la mesure principale est $\dfrac{\pi}{4}$.

---

## 3. Cosinus et sinus

### Définition

Soit $x$ un réel et $M(x)$ le point correspondant du cercle trigonométrique. Les coordonnées de $M$ dans le repère $(O;\vec{i},\vec{j})$ définissent :

$$\boxed{M(x) = (\cos x\,;\,\sin x)}$$

- $\cos x$ est l'**abscisse** de $M(x)$ ;
- $\sin x$ est l'**ordonnée** de $M(x)$.

Autrement dit : $\overrightarrow{OM} = \cos x\ \vec{i} + \sin x\ \vec{j}$.

### Conséquences immédiates

- Pour tout réel $x$ : $-1 \le \cos x \le 1$ et $-1 \le \sin x \le 1$, car $M$ est sur le cercle de rayon $1$.
- $\cos(x + 2\pi) = \cos x$ et $\sin(x + 2\pi) = \sin x$ : ces fonctions sont **$2\pi$-périodiques**.
- Points particuliers :

| $x$ | $0$ | $\frac{\pi}{2}$ | $\pi$ | $\frac{3\pi}{2}$ |
|---|---|---|---|---|
| $\cos x$ | $1$ | $0$ | $-1$ | $0$ |
| $\sin x$ | $0$ | $1$ | $0$ | $-1$ |

### Lecture sur le cercle

- Le cosinus se lit sur l'axe **horizontal**, le sinus sur l'axe **vertical**.
- Dans le premier quadrant ($0 < x < \frac{\pi}{2}$), $\cos x > 0$ et $\sin x > 0$.
- Signes selon le quadrant :

| Quadrant | $x \in$ | $\cos x$ | $\sin x$ |
|---|---|---|---|
| I | $]0\,;\frac{\pi}{2}[$ | $+$ | $+$ |
| II | $]\frac{\pi}{2}\,;\pi[$ | $-$ | $+$ |
| III | $]\pi\,;\frac{3\pi}{2}[$ | $-$ | $-$ |
| IV | $]\frac{3\pi}{2}\,;2\pi[$ | $+$ | $-$ |

---

## 4. Valeurs remarquables

### Les trois angles clés

**Angle $\frac{\pi}{4}$ ($45^\circ$).** Le triangle $OHM$ (avec $H$ le projeté de $M$ sur l'axe des abscisses) est rectangle isocèle : $\cos x = \sin x$. Avec $\cos^2 x + \sin^2 x = 1$ on obtient $2\cos^2 x = 1$, donc $\cos\frac{\pi}{4} = \sin\frac{\pi}{4} = \dfrac{\sqrt{2}}{2}$.

**Angle $\frac{\pi}{3}$ ($60^\circ$).** Le triangle $OIM$ est isocèle en $O$ avec un angle de $60^\circ$ : il est équilatéral de côté $1$. Le pied $H$ de la hauteur issue de $M$ est le milieu de $[OI]$, donc $\cos\frac{\pi}{3} = \dfrac{1}{2}$. Alors $\sin\frac{\pi}{3} = \sqrt{1 - \frac14} = \dfrac{\sqrt{3}}{2}$.

**Angle $\frac{\pi}{6}$ ($30^\circ$).** Par symétrie par rapport à la bissectrice du premier quadrant ($y = x$), qui échange $\frac{\pi}{3}$ et $\frac{\pi}{2} - \frac{\pi}{3} = \frac{\pi}{6}$ :
$\cos\frac{\pi}{6} = \dfrac{\sqrt{3}}{2}$ et $\sin\frac{\pi}{6} = \dfrac{1}{2}$.

### Tableau à retenir

| $x$ | $0$ | $\frac{\pi}{6}$ | $\frac{\pi}{4}$ | $\frac{\pi}{3}$ | $\frac{\pi}{2}$ |
|---|---|---|---|---|---|
| $\sin x$ | $0$ | $\frac{1}{2}$ | $\frac{\sqrt{2}}{2}$ | $\frac{\sqrt{3}}{2}$ | $1$ |
| $\cos x$ | $1$ | $\frac{\sqrt{3}}{2}$ | $\frac{\sqrt{2}}{2}$ | $\frac{1}{2}$ | $0$ |
| $\tan x$ | $0$ | $\frac{\sqrt{3}}{3}$ | $1$ | $\sqrt{3}$ | — |

**Moyen mnémotechnique.** Pour le sinus, on lit $\frac{\sqrt{0}}{2},\frac{\sqrt{1}}{2},\frac{\sqrt{2}}{2},\frac{\sqrt{3}}{2},\frac{\sqrt{4}}{2}$ ; pour le cosinus, on lit la même suite à l'envers.

---

## 5. Relations fondamentales

### 5.1 La relation de Pythagore

Pour tout réel $x$ :

$$\boxed{\cos^2 x + \sin^2 x = 1}$$

*Preuve.* $M(x)$ appartient au cercle de rayon $1$ : $OM^2 = \cos^2 x + \sin^2 x = 1$. $\square$

**Conséquences.** $\cos^2 x = 1 - \sin^2 x$, $\sin^2 x = 1 - \cos^2 x$. Si l'on connaît $\cos x$, on connaît $\sin x$ au signe près : $\sin x = \pm\sqrt{1 - \cos^2 x}$, le signe étant donné par le quadrant.

**Exemple.** Si $\cos x = \dfrac{3}{5}$ et $x \in ]-\pi\,;0[$, alors $\sin^2 x = 1 - \dfrac{9}{25} = \dfrac{16}{25}$, et comme $x$ est dans le bas du cercle, $\sin x = -\dfrac{4}{5}$.

---

## 6. Parité, périodicité, angles associés

Toutes ces relations se lisent par des **symétries du cercle**. On note $M(x)$ le point d'angle $x$.

### 6.1 Angle opposé : $-x$

Le point $M(-x)$ est le symétrique de $M(x)$ par rapport à l'axe des abscisses.

$$\cos(-x) = \cos x, \qquad \sin(-x) = -\sin x.$$

Le cosinus est **pair**, le sinus est **impair**.

### 6.2 Angle supplémentaire : $\pi - x$

$M(\pi - x)$ est le symétrique de $M(x)$ par rapport à l'axe des ordonnées.

$$\cos(\pi - x) = -\cos x, \qquad \sin(\pi - x) = \sin x.$$

### 6.3 Angle $\pi + x$

$M(\pi + x)$ est le symétrique de $M(x)$ par rapport à $O$.

$$\cos(\pi + x) = -\cos x, \qquad \sin(\pi + x) = -\sin x.$$

### 6.4 Angle complémentaire : $\frac{\pi}{2} - x$

$M\left(\frac{\pi}{2} - x\right)$ est le symétrique de $M(x)$ par rapport à la première bissectrice $y = x$ (qui échange abscisse et ordonnée).

$$\cos\left(\tfrac{\pi}{2} - x\right) = \sin x, \qquad \sin\left(\tfrac{\pi}{2} - x\right) = \cos x.$$

### 6.5 Angle $\frac{\pi}{2} + x$

On compose les deux relations précédentes ($\frac{\pi}{2} + x = \frac{\pi}{2} - (-x)$) :

$$\cos\left(\tfrac{\pi}{2} + x\right) = -\sin x, \qquad \sin\left(\tfrac{\pi}{2} + x\right) = \cos x.$$

### 6.6 Périodicité

$$\cos(x + 2k\pi) = \cos x, \quad \sin(x + 2k\pi) = \sin x \qquad (k \in \mathbb{Z}).$$

### Récapitulatif

| Angle | $-x$ | $\pi - x$ | $\pi + x$ | $\frac{\pi}{2} - x$ | $\frac{\pi}{2} + x$ |
|---|---|---|---|---|---|
| cosinus | $\cos x$ | $-\cos x$ | $-\cos x$ | $\sin x$ | $-\sin x$ |
| sinus | $-\sin x$ | $\sin x$ | $-\sin x$ | $\cos x$ | $\cos x$ |

### Exemple d'utilisation

$$\cos\frac{2\pi}{3} = \cos\left(\pi - \frac{\pi}{3}\right) = -\cos\frac{\pi}{3} = -\frac12, \qquad \sin\frac{7\pi}{6} = \sin\left(\pi + \frac{\pi}{6}\right) = -\frac12.$$

Pour tout angle, on se ramène ainsi à un angle de $[0\,;\frac{\pi}{2}]$.

---

## 7. La tangente

### Définition

Pour $x \not\equiv \dfrac{\pi}{2} \pmod{\pi}$ (c'est-à-dire $\cos x \neq 0$) :

$$\boxed{\tan x = \frac{\sin x}{\cos x}}$$

### Interprétation géométrique

On trace la tangente au cercle en $I(1,0)$ (la droite d'équation $x = 1$). La droite $(OM)$ coupe cette tangente en un point $T$, et $\tan x$ est l'**ordonnée** de $T$. En effet, par Thalès dans les triangles $OHM$ et $OIT$ : $\dfrac{IT}{OI} = \dfrac{HM}{OH}$, soit $IT = \dfrac{\sin x}{\cos x}$.

Géométriquement, $\tan x$ est aussi la **pente** de la droite $(OM)$.

### Propriétés

- $\tan$ est **impaire** : $\tan(-x) = -\tan x$.
- $\tan$ est **$\pi$-périodique** : $\tan(x + \pi) = \tan x$ (car $\sin$ et $\cos$ changent tous deux de signe).
- $\tan\left(\tfrac{\pi}{2} - x\right) = \dfrac{\cos x}{\sin x} = \dfrac{1}{\tan x}$.
- Relation utile :

$$1 + \tan^2 x = \frac{1}{\cos^2 x}.$$

*Preuve.* On divise $\cos^2 x + \sin^2 x = 1$ par $\cos^2 x$. $\square$

La **cotangente** est l'inverse : $\cot x = \dfrac{\cos x}{\sin x}$ (pour $\sin x \neq 0$).

---

## 8. Trigonométrie du triangle rectangle

Soit un triangle $ABC$ rectangle en $A$, et $\alpha$ l'angle en $B$. Le côté $[BC]$ est l'**hypoténuse**, $[AC]$ est le côté **opposé** à $\alpha$, $[AB]$ est le côté **adjacent** à $\alpha$.

$$\cos\alpha = \frac{\text{adjacent}}{\text{hypoténuse}} = \frac{AB}{BC}, \qquad \sin\alpha = \frac{\text{opposé}}{\text{hypoténuse}} = \frac{AC}{BC}, \qquad \tan\alpha = \frac{\text{opposé}}{\text{adjacent}} = \frac{AC}{AB}.$$

(Moyen mnémotechnique anglo-saxon : **SOH-CAH-TOA**.)

*Justification.* On place le triangle dans un cercle trigonométrique : après agrandissement ou réduction (Thalès) de rapport $BC$, on retrouve exactement les coordonnées du cercle unité. Cette définition coïncide donc avec celle du §3, pour $\alpha \in ]0\,;\frac{\pi}{2}[$.

**Exemple.** Une échelle de $4$ m, inclinée à $70^\circ$ sur le sol, atteint une hauteur $4\sin 70^\circ \approx 3{,}76$ m et son pied est à $4\cos 70^\circ \approx 1{,}37$ m du mur.

**Rappel.** Les angles aigus d'un triangle rectangle sont complémentaires, d'où $\sin\alpha = \cos(90^\circ - \alpha)$ : c'est exactement la relation du §6.4.

---

## 9. Équations et inéquations trigonométriques

### 9.1 Équations de base

Soit $a$ un réel. Pour tout $x \in \mathbb{R}$ :

$$\cos x = \cos a \iff x \equiv a \pmod{2\pi}\ \text{ ou }\ x \equiv -a \pmod{2\pi}$$

$$\sin x = \sin a \iff x \equiv a \pmod{2\pi}\ \text{ ou }\ x \equiv \pi - a \pmod{2\pi}$$

$$\tan x = \tan a \iff x \equiv a \pmod{\pi}$$

*Justification.* Deux points du cercle ont même abscisse s'ils sont égaux ou symétriques par rapport à l'axe des abscisses ; même ordonnée s'ils sont égaux ou symétriques par rapport à l'axe des ordonnées.

### 9.2 Exemples

**(a)** $\cos x = \dfrac{1}{2}$. Comme $\dfrac12 = \cos\dfrac{\pi}{3}$ : $x = \pm\dfrac{\pi}{3} + 2k\pi$.

**(b)** $\sin x = -\dfrac{\sqrt{2}}{2}$. Comme $-\dfrac{\sqrt{2}}{2} = \sin\left(-\dfrac{\pi}{4}\right)$ : $x = -\dfrac{\pi}{4} + 2k\pi$ ou $x = \pi + \dfrac{\pi}{4} + 2k\pi = \dfrac{5\pi}{4} + 2k\pi$.

**(c)** $\cos(2x) = \sin x$. On écrit $\sin x = \cos\left(\frac{\pi}{2} - x\right)$, donc $2x \equiv \frac{\pi}{2} - x$ ou $2x \equiv -\frac{\pi}{2} + x \pmod{2\pi}$, soit
$x = \frac{\pi}{6} + \frac{2k\pi}{3}$ ou $x = -\frac{\pi}{2} + 2k\pi$.

**(d)** $2\cos^2 x + \cos x - 1 = 0$. On pose $X = \cos x$ : $2X^2 + X - 1 = 0$, de racines $X = \frac12$ et $X = -1$. Donc $\cos x = \frac12$ ($x = \pm\frac{\pi}{3} + 2k\pi$) ou $\cos x = -1$ ($x = \pi + 2k\pi$).

**(e)** $2\sin^2 x + \cos x = 2$. On remplace $\sin^2 x = 1 - \cos^2 x$ : $-2\cos^2 x + \cos x = 0$, donc $\cos x(1 - 2\cos x) = 0$ : $\cos x = 0$ ou $\cos x = \frac12$.

### 9.3 Résolution sur un intervalle

On résout d'abord dans $\mathbb{R}$, puis on garde les solutions de l'intervalle, en cherchant les entiers $k$ qui conviennent.

**Exemple.** Résoudre $\sin x = \frac{1}{2}$ sur $[0\,;2\pi[$. Solutions : $x = \frac{\pi}{6}$ et $x = \pi - \frac{\pi}{6} = \frac{5\pi}{6}$.

### 9.4 Inéquations

Méthode : on se place sur un tour de cercle et on lit les points du cercle qui vérifient la condition.

**Exemple.** $\cos x \ge \dfrac{1}{2}$ sur $]-\pi\,;\pi]$. Les points d'abscisse $\ge \frac12$ forment un arc symétrique autour de $I$ : $x \in \left[-\dfrac{\pi}{3}\,;\dfrac{\pi}{3}\right]$. Dans $\mathbb{R}$ : $x \in \left[-\dfrac{\pi}{3} + 2k\pi\,;\ \dfrac{\pi}{3} + 2k\pi\right]$.

**Exemple.** $\sin x < -\dfrac{\sqrt{2}}{2}$ sur $[0\,;2\pi[$. Les points d'ordonnée $< -\frac{\sqrt2}{2}$ forment l'arc de $\frac{5\pi}{4}$ à $\frac{7\pi}{4}$ (bornes exclues) : $x \in \left]\dfrac{5\pi}{4}\,;\dfrac{7\pi}{4}\right[$.

---

## 10. Formules d'addition et de duplication

### 10.1 Formules d'addition

Pour tous réels $a$ et $b$ :

$$\boxed{\cos(a - b) = \cos a\cos b + \sin a\sin b}$$
$$\boxed{\cos(a + b) = \cos a\cos b - \sin a\sin b}$$
$$\boxed{\sin(a + b) = \sin a\cos b + \cos a\sin b}$$
$$\boxed{\sin(a - b) = \sin a\cos b - \cos a\sin b}$$

*Preuve de la première.* Soient $M(a)$ et $N(b)$ deux points du cercle. Les vecteurs $\overrightarrow{OM} = (\cos a, \sin a)$ et $\overrightarrow{ON} = (\cos b, \sin b)$ sont unitaires. Leur produit scalaire s'écrit de deux façons :

- avec les coordonnées : $\overrightarrow{OM}\cdot\overrightarrow{ON} = \cos a\cos b + \sin a\sin b$ ;
- avec les normes et l'angle : $\overrightarrow{OM}\cdot\overrightarrow{ON} = 1 \times 1 \times \cos(a - b)$.

D'où le résultat. $\square$

*Les trois autres.*
- $\cos(a+b)$ : on remplace $b$ par $-b$ dans la première (cos pair, sin impair).
- $\sin(a+b) = \cos\left(\frac{\pi}{2} - a - b\right) = \cos\left(\left(\frac{\pi}{2} - a\right) - b\right) = \sin a\cos b + \cos a\sin b$.
- $\sin(a-b)$ : on remplace $b$ par $-b$. $\square$

### 10.2 Tangente

Pour $a$, $b$, $a+b$ différents de $\frac{\pi}{2} \pmod\pi$ :

$$\tan(a + b) = \frac{\tan a + \tan b}{1 - \tan a\tan b}, \qquad \tan(a - b) = \frac{\tan a - \tan b}{1 + \tan a\tan b}.$$

*Preuve.* On divise numérateur et dénominateur de $\frac{\sin(a+b)}{\cos(a+b)}$ par $\cos a\cos b$.

### 10.3 Formules de duplication

On pose $b = a$ dans les formules d'addition :

$$\boxed{\sin 2a = 2\sin a\cos a}$$
$$\boxed{\cos 2a = \cos^2 a - \sin^2 a = 2\cos^2 a - 1 = 1 - 2\sin^2 a}$$
$$\tan 2a = \frac{2\tan a}{1 - \tan^2 a}$$

(Les deux dernières expressions de $\cos 2a$ viennent de $\cos^2 a + \sin^2 a = 1$.)

### 10.4 Application : valeurs exactes de $\frac{\pi}{12}$ et $\frac{\pi}{8}$

**$\frac{\pi}{12} = \frac{\pi}{3} - \frac{\pi}{4}$ :**

$$\cos\frac{\pi}{12} = \cos\frac{\pi}{3}\cos\frac{\pi}{4} + \sin\frac{\pi}{3}\sin\frac{\pi}{4} = \frac{1}{2}\cdot\frac{\sqrt2}{2} + \frac{\sqrt3}{2}\cdot\frac{\sqrt2}{2} = \frac{\sqrt{2} + \sqrt{6}}{4}.$$

De même $\sin\dfrac{\pi}{12} = \dfrac{\sqrt6 - \sqrt2}{4}$.

**$\frac{\pi}{8}$ :** on utilise $\cos\frac{\pi}{4} = 2\cos^2\frac{\pi}{8} - 1$, d'où $\cos^2\frac{\pi}{8} = \dfrac{2 + \sqrt2}{4}$. Comme $\cos\frac{\pi}{8} > 0$ :

$$\cos\frac{\pi}{8} = \frac{\sqrt{2 + \sqrt2}}{2}, \qquad \sin\frac{\pi}{8} = \frac{\sqrt{2 - \sqrt2}}{2}.$$

---

## 11. Linéarisation, somme/produit, angle moitié

### 11.1 Linéarisation des carrés

En inversant les formules de duplication :

$$\boxed{\cos^2 a = \frac{1 + \cos 2a}{2}}, \qquad \boxed{\sin^2 a = \frac{1 - \cos 2a}{2}}$$

Très utile pour calculer des intégrales (voir §13).

### 11.2 Produit en somme

En additionnant ou soustrayant les formules d'addition :

$$\cos a\cos b = \frac{1}{2}\left[\cos(a - b) + \cos(a + b)\right]$$
$$\sin a\sin b = \frac{1}{2}\left[\cos(a - b) - \cos(a + b)\right]$$
$$\sin a\cos b = \frac{1}{2}\left[\sin(a + b) + \sin(a - b)\right]$$

### 11.3 Somme en produit

On pose $p = a + b$ et $q = a - b$ (soit $a = \frac{p+q}{2}$, $b = \frac{p-q}{2}$) :

$$\cos p + \cos q = 2\cos\frac{p+q}{2}\cos\frac{p-q}{2}$$
$$\cos p - \cos q = -2\sin\frac{p+q}{2}\sin\frac{p-q}{2}$$
$$\sin p + \sin q = 2\sin\frac{p+q}{2}\cos\frac{p-q}{2}$$
$$\sin p - \sin q = 2\cos\frac{p+q}{2}\sin\frac{p-q}{2}$$

Ces formules servent à **factoriser** une expression pour résoudre une équation.

**Exemple.** $\sin 3x + \sin x = 0$. On factorise : $2\sin 2x\cos x = 0$, donc $\sin 2x = 0$ ou $\cos x = 0$ :
$x = \dfrac{k\pi}{2}$ ou $x = \dfrac{\pi}{2} + k\pi$. Le second cas est inclus dans le premier : $x = \dfrac{k\pi}{2}$, $k \in \mathbb{Z}$.

### 11.4 Formules de l'angle moitié (paramétrage par $t$)

Soit $t = \tan\dfrac{x}{2}$ (avec $x \not\equiv \pi \pmod{2\pi}$). Alors

$$\cos x = \frac{1 - t^2}{1 + t^2}, \qquad \sin x = \frac{2t}{1 + t^2}, \qquad \tan x = \frac{2t}{1 - t^2}.$$

*Preuve.* $\cos x = \cos^2\frac{x}{2} - \sin^2\frac{x}{2} = \cos^2\frac{x}{2}\,(1 - t^2)$ et $\cos^2\frac{x}{2} = \frac{1}{1+t^2}$. De même $\sin x = 2\sin\frac{x}{2}\cos\frac{x}{2} = 2t\cos^2\frac{x}{2}$. $\square$

Cette substitution ramène toute fraction rationnelle en $\sin x$ et $\cos x$ à une fraction rationnelle en $t$ (utile pour les primitives).

---

## 12. La forme $a\cos x + b\sin x$

Soient $a$ et $b$ deux réels non tous deux nuls. Posons $R = \sqrt{a^2 + b^2} > 0$. Le point $\left(\frac{a}{R}, \frac{b}{R}\right)$ est sur le cercle unité, donc il existe $\varphi$ tel que $\cos\varphi = \dfrac{a}{R}$ et $\sin\varphi = \dfrac{b}{R}$. Alors

$$a\cos x + b\sin x = R\left(\cos\varphi\cos x + \sin\varphi\sin x\right) = R\cos(x - \varphi).$$

$$\boxed{a\cos x + b\sin x = R\cos(x - \varphi)}, \qquad R = \sqrt{a^2 + b^2}.$$

**Conséquences.**
- La fonction $x \mapsto a\cos x + b\sin x$ est une sinusoïde d'**amplitude** $R$ et de **déphasage** $\varphi$.
- Son maximum est $R$, son minimum est $-R$.
- L'équation $a\cos x + b\sin x = c$ a des solutions si et seulement si $|c| \le R$.

**Exemple.** Résoudre $\cos x + \sqrt3\sin x = 1$. Ici $R = 2$, $\cos\varphi = \frac12$, $\sin\varphi = \frac{\sqrt3}{2}$, donc $\varphi = \frac{\pi}{3}$. L'équation devient $2\cos\left(x - \frac{\pi}{3}\right) = 1$, soit $\cos\left(x - \frac{\pi}{3}\right) = \frac12 = \cos\frac{\pi}{3}$. Donc $x - \frac{\pi}{3} = \pm\frac{\pi}{3} + 2k\pi$ :

$$x = \frac{2\pi}{3} + 2k\pi \quad\text{ou}\quad x = 2k\pi.$$

---

## 13. Les fonctions trigonométriques

### 13.1 Courbes

La courbe de $\sin$ est la **sinusoïde**. Celle de $\cos$ s'en déduit par une translation de vecteur $-\frac{\pi}{2}\vec{i}$ (car $\cos x = \sin\left(x + \frac{\pi}{2}\right)$).

| Fonction | $f(x) = \sin x$ | $f(x) = \cos x$ | $f(x) = \tan x$ |
|---|---|---|---|
| Domaine | $\mathbb{R}$ | $\mathbb{R}$ | $\mathbb{R}\setminus\left\{\frac{\pi}{2} + k\pi\right\}$ |
| Parité | impaire | paire | impaire |
| Période | $2\pi$ | $2\pi$ | $\pi$ |
| Image | $[-1\,;1]$ | $[-1\,;1]$ | $\mathbb{R}$ |

On étudie donc $\sin$ et $\cos$ sur $[0\,;\pi]$ puis on complète par symétrie et translation.

### 13.2 Variations sur $[0\,;\pi]$

- $\sin$ : croissante de $0$ à $1$ sur $\left[0\,;\frac{\pi}{2}\right]$, décroissante de $1$ à $0$ sur $\left[\frac{\pi}{2}\,;\pi\right]$.
- $\cos$ : décroissante de $1$ à $-1$ sur $[0\,;\pi]$.
- $\tan$ : strictement croissante sur chaque intervalle $\left]-\frac{\pi}{2} + k\pi\,;\ \frac{\pi}{2} + k\pi\right[$, avec des asymptotes verticales en $x = \frac{\pi}{2} + k\pi$.

### 13.3 Limites fondamentales

**Encadrement.** Pour $0 < x < \dfrac{\pi}{2}$, en comparant l'aire du triangle $OIM$, celle du secteur $OIM$ et celle du triangle $OIT$ :

$$\frac{1}{2}\sin x < \frac{1}{2}x < \frac{1}{2}\tan x,$$

c'est-à-dire $\sin x < x < \tan x$, donc $\cos x < \dfrac{\sin x}{x} < 1$. Le théorème des gendarmes donne :

$$\boxed{\lim_{x\to 0}\frac{\sin x}{x} = 1}$$

(la parité de $\frac{\sin x}{x}$ permet de conclure aussi à gauche de $0$). On en déduit :

$$\lim_{x\to 0}\frac{1 - \cos x}{x} = 0, \qquad \lim_{x\to 0}\frac{1 - \cos x}{x^2} = \frac{1}{2}, \qquad \lim_{x\to 0}\frac{\tan x}{x} = 1.$$

*Preuve de la deuxième.* $1 - \cos x = 2\sin^2\frac{x}{2}$, donc $\dfrac{1 - \cos x}{x^2} = \dfrac{1}{2}\left(\dfrac{\sin(x/2)}{x/2}\right)^2 \to \dfrac12$. $\square$

### 13.4 Dérivées

La limite précédente est le nombre dérivé de $\sin$ en $0$ : $\sin'(0) = 1$. Avec la formule d'addition :

$$\frac{\sin(x + h) - \sin x}{h} = \sin x\cdot\frac{\cos h - 1}{h} + \cos x\cdot\frac{\sin h}{h} \xrightarrow[h\to 0]{} \cos x.$$

D'où :

$$\boxed{\sin' = \cos}, \qquad \boxed{\cos' = -\sin}, \qquad \boxed{\tan' = 1 + \tan^2 = \frac{1}{\cos^2}}.$$

Dérivées composées : $(\sin u)' = u'\cos u$ et $(\cos u)' = -u'\sin u$.

### 13.5 Primitives et intégrales

$$\int \cos x\,dx = \sin x + C, \qquad \int \sin x\,dx = -\cos x + C.$$

**Exemple.** $\displaystyle\int_0^{\pi}\sin^2 x\,dx = \int_0^{\pi}\frac{1 - \cos 2x}{2}\,dx = \left[\frac{x}{2} - \frac{\sin 2x}{4}\right]_0^{\pi} = \frac{\pi}{2}.$

### 13.6 Fonctions sinusoïdales

Une fonction $f(t) = A\sin(\omega t + \varphi)$ modélise un phénomène périodique (son, courant alternatif, oscillations). Ici :

- $A > 0$ est l'**amplitude** ;
- $\omega$ est la **pulsation** (rad/s) ;
- $T = \dfrac{2\pi}{\omega}$ est la **période** et $f = \dfrac{1}{T}$ la **fréquence** ;
- $\varphi$ est la **phase** à l'origine.

---

## 14. Triangle quelconque

Soit $ABC$ un triangle, avec $a = BC$, $b = CA$, $c = AB$ et les angles $\widehat{A}$, $\widehat{B}$, $\widehat{C}$. Soit $R$ le rayon du cercle circonscrit et $\mathcal{S}$ l'aire.

### 14.1 Formule d'aire

$$\mathcal{S} = \frac{1}{2}bc\sin\widehat{A} = \frac{1}{2}ac\sin\widehat{B} = \frac{1}{2}ab\sin\widehat{C}.$$

*Preuve.* Soit $H$ le pied de la hauteur issue de $C$. Alors $CH = b\sin\widehat{A}$ et $\mathcal{S} = \frac{1}{2}\,c\cdot CH$. $\square$

### 14.2 Loi des sinus

$$\boxed{\frac{a}{\sin\widehat{A}} = \frac{b}{\sin\widehat{B}} = \frac{c}{\sin\widehat{C}} = 2R}$$

*Preuve de l'égalité des trois premiers rapports.* En égalant les trois expressions de l'aire et en divisant par $\frac{1}{2}abc$. $\square$

### 14.3 Loi des cosinus (Al-Kashi)

$$\boxed{a^2 = b^2 + c^2 - 2bc\cos\widehat{A}}$$

(et deux formules analogues par permutation circulaire).

*Preuve.* $a^2 = BC^2 = \|\overrightarrow{AC} - \overrightarrow{AB}\|^2 = b^2 + c^2 - 2\,\overrightarrow{AB}\cdot\overrightarrow{AC} = b^2 + c^2 - 2bc\cos\widehat{A}$. $\square$

Si $\widehat{A} = 90^\circ$, on retrouve le théorème de Pythagore.

### 14.4 Résolution de triangles

| Données | Méthode |
|---|---|
| deux angles et un côté | troisième angle ($180^\circ$), puis loi des sinus |
| deux côtés et l'angle compris | loi des cosinus, puis loi des sinus |
| trois côtés | loi des cosinus pour chaque angle |
| deux côtés et un angle non compris | loi des sinus (attention : 0, 1 ou 2 solutions) |

**Exemple.** $b = 5$, $c = 7$, $\widehat{A} = 60^\circ$. Alors $a^2 = 25 + 49 - 70\cdot\frac12 = 39$, donc $a = \sqrt{39} \approx 6{,}24$. L'aire vaut $\frac12\cdot 5\cdot 7\cdot\frac{\sqrt3}{2} = \frac{35\sqrt3}{4}$.

---

## 15. Lien avec les nombres complexes

### Formule d'Euler

Pour tout réel $\theta$ :

$$e^{i\theta} = \cos\theta + i\sin\theta.$$

Le point d'affixe $e^{i\theta}$ est le point $M(\theta)$ du cercle trigonométrique. On en tire

$$\cos\theta = \frac{e^{i\theta} + e^{-i\theta}}{2}, \qquad \sin\theta = \frac{e^{i\theta} - e^{-i\theta}}{2i}.$$

### Formule de Moivre

Pour tout entier $n$ :

$$(\cos\theta + i\sin\theta)^n = \cos n\theta + i\sin n\theta.$$

Elle découle de $\left(e^{i\theta}\right)^n = e^{in\theta}$.

### Les formules d'addition retrouvées en une ligne

$$e^{i(a+b)} = e^{ia}e^{ib} \implies \cos(a+b) + i\sin(a+b) = (\cos a + i\sin a)(\cos b + i\sin b).$$

En identifiant parties réelle et imaginaire, on retrouve $\cos(a+b)$ et $\sin(a+b)$.

### Formes polaires

Tout complexe non nul s'écrit $z = r(\cos\theta + i\sin\theta) = re^{i\theta}$ avec $r = |z|$ et $\theta = \arg z$.

### Application : linéarisation d'un $\cos^n$

$$\cos^3 x = \left(\frac{e^{ix} + e^{-ix}}{2}\right)^3 = \frac{e^{3ix} + 3e^{ix} + 3e^{-ix} + e^{-3ix}}{8} = \frac{\cos 3x + 3\cos x}{4}.$$

---

## 16. Exercices

### Niveau 1 : cours

1. Convertir en radians : $15^\circ$, $75^\circ$, $210^\circ$, $-120^\circ$. Convertir en degrés : $\frac{5\pi}{12}$, $\frac{7\pi}{6}$, $2$ rad.
2. Donner la mesure principale de $\dfrac{25\pi}{6}$, $-\dfrac{13\pi}{3}$, $\dfrac{100\pi}{7}$.
3. Calculer $\cos\dfrac{5\pi}{6}$, $\sin\dfrac{11\pi}{6}$, $\cos\left(-\dfrac{3\pi}{4}\right)$, $\tan\dfrac{2\pi}{3}$.
4. Sachant que $\sin x = \dfrac{5}{13}$ et $x \in \left]\dfrac{\pi}{2}\,;\pi\right[$, calculer $\cos x$ et $\tan x$.
5. Simplifier $\cos(\pi - x) + \sin\left(\frac{\pi}{2} + x\right) - \cos(\pi + x)$.

### Niveau 2 : équations

6. Résoudre dans $\mathbb{R}$ : $\cos x = -\dfrac{\sqrt3}{2}$ ; $\sin 2x = \dfrac{1}{2}$ ; $\tan 3x = 1$.
7. Résoudre dans $[0\,;2\pi[$ : $2\sin^2 x - 3\sin x + 1 = 0$.
8. Résoudre dans $]-\pi\,;\pi]$ : $\cos 2x = \cos\left(x + \frac{\pi}{3}\right)$.
9. Résoudre dans $[0\,;2\pi[$ l'inéquation $2\cos x - 1 \le 0$.
10. Résoudre dans $\mathbb{R}$ : $\sqrt3\cos x - \sin x = \sqrt2$.

### Niveau 3 : formules

11. Démontrer que $\cos 3x = 4\cos^3 x - 3\cos x$ et $\sin 3x = 3\sin x - 4\sin^3 x$.
12. Calculer la valeur exacte de $\cos\dfrac{\pi}{12}$ de deux façons ($\frac{\pi}{3} - \frac{\pi}{4}$ et $\frac{1}{2}\cdot\frac{\pi}{6}$) et vérifier la cohérence.
13. Démontrer que pour $\cos a \neq 0$ et $\cos b \neq 0$ : $\tan a + \tan b = \dfrac{\sin(a+b)}{\cos a\cos b}$.
14. Montrer que $\sin\dfrac{\pi}{10} = \dfrac{\sqrt5 - 1}{4}$. *(Indication : poser $x = \frac{\pi}{10}$, remarquer que $\sin 3x = \cos 2x$.)*
15. Linéariser $\sin^4 x$ puis calculer $\displaystyle\int_0^{\pi/2}\sin^4 x\,dx$.

### Niveau 4 : analyse et géométrie

16. Calculer $\displaystyle\lim_{x\to 0}\frac{\sin 5x}{3x}$, $\displaystyle\lim_{x\to 0}\frac{1 - \cos 3x}{x^2}$ et $\displaystyle\lim_{x\to 0}\frac{\tan 2x}{\sin 3x}$.
17. Étudier la fonction $f(x) = \sin x + \frac{1}{2}\sin 2x$ sur $[0\,;2\pi]$ : parité, périodicité, dérivée, variations.
18. Dans un triangle $ABC$ : $a = 8$, $\widehat{B} = 45^\circ$, $\widehat{C} = 75^\circ$. Calculer $b$, $c$, le rayon $R$ du cercle circonscrit et l'aire.
19. Un triangle a pour côtés $5$, $6$ et $7$. Calculer ses angles (à $0{,}1^\circ$ près) et son aire.
20. Montrer que pour tout triangle $ABC$ : $\sin\widehat{A} + \sin\widehat{B} + \sin\widehat{C} = 4\cos\dfrac{\widehat{A}}{2}\cos\dfrac{\widehat{B}}{2}\cos\dfrac{\widehat{C}}{2}$.

---

## Formulaire récapitulatif

**Bases**
$$\cos^2 x + \sin^2 x = 1, \qquad \tan x = \frac{\sin x}{\cos x}, \qquad 1 + \tan^2 x = \frac{1}{\cos^2 x}$$

**Addition**
$$\cos(a\pm b) = \cos a\cos b \mp \sin a\sin b, \qquad \sin(a\pm b) = \sin a\cos b \pm \cos a\sin b$$

**Duplication**
$$\sin 2a = 2\sin a\cos a, \qquad \cos 2a = \cos^2 a - \sin^2 a = 2\cos^2 a - 1 = 1 - 2\sin^2 a$$

**Linéarisation**
$$\cos^2 a = \frac{1 + \cos 2a}{2}, \qquad \sin^2 a = \frac{1 - \cos 2a}{2}$$

**Dérivées**
$$\sin' = \cos, \qquad \cos' = -\sin, \qquad \tan' = \frac{1}{\cos^2}$$

**Triangle**
$$\frac{a}{\sin A} = \frac{b}{\sin B} = \frac{c}{\sin C} = 2R, \qquad a^2 = b^2 + c^2 - 2bc\cos A$$
