<?php  include 'entete.php';?>
  <p class="a rotatedFloralHeartBullet">
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  </p>
  
  <p>
    <h1>Notes de cours :  </h1>
    <h2>Rotations dans le plan </h2>
    <ul>
      <li><a href="#contexte">Périmètre de ces notes</a></li>
      <li><a href="#premdef">Les matrices : présentation</a></li>
      <li><a href="#oslquat">Les matrices de rotation dans le plan</a></li>
	</ul>
	  <p>
	  <h2 id="contexte">Périmètre de ces notes</h2>
	 Ces notes permettent de comprendre de manière appliquée comment on utilise les matrices pour réaliser des rotations dans le plan, cadre dans lequel on va travailler dans ce chapitre. On rappelle que le plan est représenté par $\mathbb{R}^2$. Voir $\mathbb{C}$.
	  </p>
	  <p>
	En général on a même : 
	<img src="https://raw.githubusercontent.com/IamHenri/G1-Geometrie/main/images/Meme-plan-R2-C.jpg">
	
	C'est un peu exagéré, dans ces pages nous resterons dans $\mathbb{R}^2$. 
	
	Plus mathématiquement, quand on travail avec des matrices, on suppose que leurs éléments font partie d'un ensemble particulier qu'on appelle corps. Très rapidement, on a en général le choix entre $\mathbb{R}$ ou $\mathbb{C}$. Ici on sera toujours dans $\mathbb{R}$. Quand on veut rester générique, on dit que l'on travaille sur le corps $\mathbb{K}$. 
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 
  
  
  INTRO
                                    
                                    

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%	-->  
	  
	  <h2>Rotation dans le plan </h2> 
	  <p>Pour permettre d'aborder les rotations dans le plan, on se sert des matrices. Dans la suite, on décrit comment on utilise ces matrices carrées. 
	  </p>
	  <p>
	  <h3>Première approche des matrices</h3> 
	  Les matrices sont des tableaux de nombres. La résolution d'un certain nombre de problèmes mathématiques peuvent l'être grâce à l'algèbre linéaire. L'algèbre linaire consiste beaucoup en des manipulations sur les matrices. Ceci est vrai en particulier pour la résolution des systèmes linéaires.  
	</p>
	<p>
	&#707; Une matrice est un tableau d'au moins deux colonnes et deux lignes. </p>
	<p>
	&#707;&#707; S'il a une ligne ou une colonne c'est un vecteur (bien que l'on puisse le voir comme une matrice). </p>
	<p>
	&#707;&#707;&#707; Et s'il a une ligne et une colonne, c'est un scalaire. 
	</p>
	<p>
	On va donc commencer par les matrices les plus simples, les matrices carrées à deux lignes et deux colonnes avant de parler de rotation. Exemple, soit $M$ la matrice carrée à coefficients réels : 
	
\[
M=\begin{pmatrix} 
a& b\cr 
c& d\cr 
\end{pmatrix}
\]
	</p>
	<p>
	En général quand on parle de matrices, on parle implicitement de tableaux de valeurs. En revanche la taille est contextuelle. Si on a une application linéaire de  $\mathbb{R}^2$ dans  $\mathbb{R}^2$, <i title="idem est en latin qui signifie c'est à dire">i.e</i> du plan dans lui même alors la matrice associée a trois colonnes et deux lignes, par exemple soit la matrice $M$ : 
	
\[
M=\begin{pmatrix} 
a_{1,1}& a_{1,2}\cr 
a_{2,1}& a_{2,2}\cr 
\end{pmatrix}
\]
	  ou
\[
M= \Big(a_{i,j}\Big)_{\substack{1\leq i \leq 2 \\ 1\leq j \leq 2}}

\]
	</p>
	<h3>C'est super mais à quoi ça sert?</h3>
	<p>
	Une matrice peut être utilisée pour transformer un vecteur en un autre. Dans notre cas, on a une matrice carrée à deux lignes et colonnes. donc intuitivement on peut se dire que si on veut appliquer cette matrice il faut choisir un élément qui lui "corresponde". Dans le sens où puisse le combiner avec la matrice. Ici, spoiler alert, on prend un vecteur de dimension 2, un vecteur du plan autrement. La matrice va le transformer en un autre vecteur lui aussi dans le plan. 
	
	</p>
	<h3>Ok et comment on fait? </h3>
	<p>
	
	Pour illustrer ce que l'on vient de dire, on prend un vecteur quelconque du plan, $\mathbb{R}^2$ auquel on applique la matrice pour obtenir un autre vecteur qui lui sera dans le plan,  $\mathbb{R}^2$ toujours. Donc soit $\vec{u}$ et  $\vec{v}$ et la matrice $M$ telle que l'on ait: 
	
	</p>
	<p>\[
	M \times \vec{u}= \vec{v}
\]
	</p>
	<p>Concrètement, soient la matrice $M$ et le vecteur $\vec{u}$ suivants :  
\[	 M = \begin{pmatrix}
a & b \\
c & d 
\end{pmatrix}
u = 
\begin{pmatrix}
u_1\\
u_2
\end{pmatrix}
\]

Où $a$, $b$, $c$ et $c$ sont des valeurs réelles, tuot comme $u_1$ et $u_2$.

On applique à ce vecteur cette matrice comme ceci : 
	
	</p>
	<p>
\[	\begin{pmatrix}
a & b\\
c & d
\end{pmatrix}
\begin{pmatrix}
u_1\\
u_2
\end{pmatrix}
=
\begin{pmatrix}
a.u_1 + b.u_2\\
c.u_1 + d.u_2
\end{pmatrix}
\]
	</p>
	<p>
	Le résultat de l'application de la matrice $M$ au vecteur  $\vec{u}$ donne un vecteur  $\vec{v}$ dont les coordonnées sont 
	\[ \vec{v} = 
	\begin{pmatrix}
	a.u_1 + b.u_2\\
	c.u_1 + d.u_2
	\end{pmatrix}
	\]
	</p>
	
	<h3>Et avec un exemple?</h3>
	<p>
	Prenons  $M$ et le vecteur $\vec{u}$ suivants :  
\[	 M = \begin{pmatrix}
1 & -1 \\
1 & 1 
\end{pmatrix}
u = 
\begin{pmatrix}
1\\
1
\end{pmatrix}
\]
On veut calculer $M.\vec{u}$. Son résultat sera un vecteur, appelons le $\vec{v}$. 
Alors pour obtenir $\vec{v}$ on réalise les calculs suivants : 
\[
M.\vec{u} =
	\begin{pmatrix}
1 & -1 \\
1 & 1 
\end{pmatrix}
\begin{pmatrix}
1\\
1
\end{pmatrix}
=
\begin{pmatrix}
1.1+(-1).1\\
1.1+1.1
\end{pmatrix}
=
\begin{pmatrix}
0\\
2
\end{pmatrix}
= \vec{v}
\]
On remarque que la matrice $M$ transforme le vecteur $u =
\begin{pmatrix}
1\\
1
\end{pmatrix}$ en un nouveaux vecteur : 
\[ \vec{v} = 
\begin{pmatrix}
0\\
2
\end{pmatrix}
\]

	</p>
	<h3>Il y a une méthode pour ces calculs plus ou moins systématique? </h3>
	<p>
	Oui elle est basée sur la formule du produit scalaire. Pour appliquer la matrice $M$ au vecteur $\vec{u}$ il suffit de calculer les deux produits scalaires suivants : 
	
\[	\begin{pmatrix}
a & b
\end{pmatrix}
\begin{pmatrix}
u_1\\
u_2
\end{pmatrix}
=
a.u_1 + b.u_2
\]

et


\[	\begin{pmatrix}
c & d
\end{pmatrix}
\begin{pmatrix}
u_1\\
u_2
\end{pmatrix}
=
c.u_1 + d.u_2
\]

Et donc :

\[	\begin{pmatrix}
a & b\\
c & d
\end{pmatrix}
\begin{pmatrix}
u_1\\
u_2
\end{pmatrix}
=
\begin{pmatrix}
a.u_1 + b.u_2\\
c.u_1 + d.u_2
\end{pmatrix}
\]

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


autre écriture
\[
\begin{tabular}
	&
	\begin{pmatrix}
	u_1\\
	u_2
	\end{pmatrix}\\
	\begin{pmatrix}
	a & b\\
	c & d
	\end{pmatrix}
	=&
	\begin{pmatrix}
	a.u_1 + b.u_2
	c.u_1 + d.u_2
	\end{pmatrix}
\end{tabular}
\]

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	</p>
	<p>
	Pour décrire ce qu'il se passe, on prend la première ligne de la matrice que l'on considère comme un vecteur, pour en calculer le produit scalaire avec le vecteur. On voit clairement que pour appliquer une matrice à un vecteur ce dernier doit avec autant de composantes que la matrice a de colonnes. 
	</p>
	<p>
	
	</p>
	<p>
	
	<h3>Opérations sur les matrices </h3>
	</p>
	
	<p>Un autre aspect à connaître consiste en les opérations possible entre matrices. On peut les additionner, les soustraire, ce qui ne révèle pas grand intérêt ni complexité. Le produit des matrices en revanche est moins trivial. Il le devient dès qu'on a compris le principe. Comme le reste. La division existe, mais nécessite des hypothèses pas nécessaires ici. 
	</p>
	
	<p>
	On va donc se concentrer sur le produit des matrices. 
	</p>
	
	<p>
	En français, on utilise deux fois de suite la formule pour calculer l'application d'une matrice à une vecteur. 
	</p>
	
	<p>
	</p>
	
	<p>
	</p>
	

	
	<p style="text-align:center">
	
	_________________________________________________
	</p>
	
	  <h2>Les rotations dans le plan </h2> 
	  <p>Les matrices sont particulièrement pratiques pour modéliser les rotations dans le plan. En revanche plusieurs conventions ou hypothèses sont à considérer : 
	  </p>
	  <p>
	  <b>Hypothèse 1</b> : le centre de la rotation est toujours celui du repère dans lequel on applique cette rotation. Par conséquent si vous voulez faire tourner un objet dans un plan où le centre de la rotation n'est pas au centre du repère, il faut créer un repère dont l'origine est le centre de la rotation. 
	  
	  
	  </p>
	  <p>
	  <b>Hypothèse 2</b>: c'est plus une convention. Il faut bien prendre en compte le sens positif comme étant le sens anti horaire et réciproquement. 
	  </p>
	  <p>
	  <b>Hyptohèse 3</b> : l'angle de la rotation est exprimé en radians et sa valeur est comprise entre $0$ et $2\pi$. Sinon on applique un modulo $[2\pi]$. 
	  </p>
	  <h3>Les matrices de rotations dans le plan </h3>
	  <p>
	  Soit $\theta$ l'angle de la rotation. Alors la matrice de toute rotation de centre l'origine du repère et d'angle $\theta$ s'écrit : 
	  
	  
\[	 M = \begin{pmatrix}
\cos \theta & -\sin \theta \\
\sin \theta & \cos \theta 
\end{pmatrix}
\]
Donc soit maintenant un point $P = (x_P ; y_P)$ que lon veut faire tourner d'un angle $\theta$ alors on réalise le calcul suivant : 

\[	\begin{pmatrix}
\cos \theta & -\sin \theta \\
\sin \theta & \cos \theta 
\end{pmatrix}
\begin{pmatrix}
x_P\\
y_P
\end{pmatrix}
=
\begin{pmatrix}
x_P.\cos \theta  -y_P.\sin \theta \\
x_P.\sin \theta + y_P.\cos \theta 
\end{pmatrix}
\]
Si on appelle $P'$ le point image par cette rotation, on a:

\[	 
P' = \begin{pmatrix}
x_P.\cos \theta  -y_P.\sin \theta \\
x_P.\sin \theta + y_P.\cos \theta 
\end{pmatrix}
\]
Ceci est en quelque sorte la formule générique de la rotation d'un point par rapport au centre du repère. 
	  </p>
	<h3>Et comment faire tourner un point par rapport à n'importe quel point du plan?</h3>
	  <p>
	  Pour ce faire, on utilise le principe du changement de repère. On se place dans celui centré sur la rotation, puis on revient dans le repère initial. 
	  </p>
	  <p>
	  Point sur le changement de repère. Soit $\mathfrak{R}$ le repère canonique du plan : $\mathfrak{R} = (O;\vec{};\vec{j})$ et $\mathfrak{R}_\Omega$, le repère d'origine $\Omega$ :  $\mathfrak{R}_\Omega = (\Omega;\vec{i};\vec{j})$.
	  </p>

	
	<p>
	Dans $\mathfrak{R}$ on a $\Omega =(x_\Omega;y_\Omega)$ et soit $P$ un point du plan dans $\mathfrak{R}$ : $P =(x_P ; y_P)$. Ou encore $\overrightarrow{OP} =(x_P ; y_P)$. Avec ce vecteur on définit explicitement la position de $P$ par rapport à $O$. Et si on connaît les coordonnées de $\Omega$ dans $\mathfrak{R}$ alors on peut passer de l'un à l'autre. 
	  </p>

	
	<p>La relation vectorielle qui résume tout est une application directe de la relation de Chasles sur le point $P$ entre $O$ et $\Omega$: 
	$$
	\overrightarrow{OP} = \overrightarrow{O\Omega} + \overrightarrow{\Omega P}
 	$$
	$\overrightarrow{O P}$ est le vecteur qui donne les coordonnées de $P$ dans le repère $\mathfrak{R}$ </p>

	
	<p>
	
	
	$\overrightarrow{\Omega P}$ est le vecteur qui donne les coordonnées de $P$ dans le repère $\mathfrak{R'}$
	
	Dans le principe on a le point $P$ dans le repère $\mathfrak{R}$, on l'écrit dans le repère $\mathfrak{R'}$, on lui applique la rotation et on retrouve les cordonnées de l'image dans le repère initial  $\mathfrak{R}$.
	  </p>


	
	<p>
	Dans le contexte de la rotation, si on a un point que l'on veut faire tourner autour d'un point $\Omega$, on se place dans le repère d'origine $\Omega$, on applique la rotation et on retourne dans le repère $\mathfrak{R}$.
	  </p>

	
	<p>
	Concrètement, cela donne la formule suivante, si $P = (x_P ; y_P)$ dans  $\mathfrak{R}$ est le point que l'on veut faire tourner par rapport à un point $\Omega$ et selon un angle $\theta$ alors avec $P' = (x_{P'} ; y_{P')}$ le point image est définit comme suit : 


\[

\begin{pmatrix}
x_{P'}\\
y_{P'}
\end{pmatrix}
=
	\begin{pmatrix}
\cos \theta & -\sin \theta \\
\sin \theta & \cos \theta 
\end{pmatrix}
\begin{pmatrix}
x_P - x_\Omega\\
y_P - y_\Omega
\end{pmatrix}+
\begin{pmatrix}
x_\Omega\\
y_\Omega
\end{pmatrix}
=
\begin{pmatrix}
(x_P - x_\Omega).\cos \theta  -(y_P- y_\Omega).\sin \theta +  x_\Omega\\
(x_P - x_\Omega).\sin \theta + (y_P- y_\Omega).\cos \theta + y_\Omega
\end{pmatrix}
\]
	 
	  </p>

	
	<p>
	En résumé, pour faire tourner un point (ou un ensemble de points ) autour d'un centre de rotation quelconque, alors: 
	<lu>
	<li>On a le point dans le repère initial;</li>
	<li>On trouve ses coordonnées dans le repère d'origine $\Omega$,  le centre de la rotation ; </li>
	<li>On applique la rotation : on obtient de nouvelles coordonnées par rapport à $\Omega$</li>
	<li>On calcule les coordonnées dans le repère initial. </li>
	</lu>

	  </p>

	
	<p>
<h3>Quelques exercices d'application</h3>
<h4>Déterminer des matrices de rotation</h4>
Dans la suite, $R_{\theta}$ représente la rotation d'angle $\theta$. Pour l'instant, on ne considère pas de centre de rotation, inutile pour déterminer ces matrices de rotation. 
<h5>Matrice de rotation selon l'angle $\pi / 2$</h5>
On a tout d'abord : 
$$
\cos \pi / 2 = 0 \text{ et } \sin \pi / 2 = 1
$$
Donc :

$$
R_{\pi/2}
=
	\begin{pmatrix}
0 & -1 \\
1& 0
\end{pmatrix}
$$
<h5>Matrice de rotation selon l'angle $\pi $</h5>
On a tout d'abord : 
$$
\cos \pi = -1 \text{ et } \sin \pi = 0
$$
Donc :

$$
R_{\pi}
=
	\begin{pmatrix}
-1 & 0 \\
0& -10
\end{pmatrix}
$$

<h5>Matrice de rotation selon l'angle $3\pi / 2$</h5>


<h5>Matrice de rotation selon l'angle $\pi / 4$</h5>


<h5>Matrice de rotation selon l'angle $\pi / 3$</h5>


<h5>Matrice de rotation selon l'angle $4\pi / 3$</h5>


<h5>Matrice de rotation selon l'angle $3\pi / 7$</h5>



	  </p>

	
	<p>	

	</p>

	
	<p>\[
	\begin{array}{cc}
 & \begin{pmatrix}
   a&b\\c&d
  \end{pmatrix}
\\
  \begin{pmatrix}
   4&2\\3&1
  \end{pmatrix}
 &
  \begin{pmatrix}
   a&b\\c&d
  \end{pmatrix}
\end{array}
\]
	
	</p>
	<p>
	\[ \left (
\begin{array}{c c c c}
1 & 3 & 9 & 27\\
1 & 4 & 16 & 64\\
1 & 5 & 25 & 125\\
1 & 6 & 36 & 216\\
\end{array}
\right )
\left (
\begin{array}{c}
a_{1,1}\\
a_{2,1}\\
a_{3,1}\\
a_{4,1}\\
\end{array}
\right )
=
\left (
\begin{array}{c}
690\\
1440\\
2590\\
4224\\
\end{array}
\right )
\]
	</p>
	<p>
\[	\begin{pmatrix}
a & b & c\\
d & e & f\\
g & h & i
\end{pmatrix}
\begin{pmatrix}
1\\
2\\
3
\end{pmatrix}
=
\begin{pmatrix}
4\\
5\\
6
\end{pmatrix}
\]
	</p>
	<p>
\[
A=\begin{pmatrix} 
a_{1,1}& a_{1,2}& \dots & a_{1,j}& \dots & a_{1,p}\cr 
a_{2,1}& a_{2,2}& \dots & a_{2,j}& \dots &a_{2,p}\cr
\dots & \dots & \dots & \dots & \dots & \dots \cr
a_{i,1}& a_{i,2} & \dots & a_{i,j}& \dots &a_{i,p} \cr
\dots & \dots & \dots & \dots & \dots & \dots \cr
a_{n,1}& a_{n,2}& \dots & a_{n,j}& \dots & a_{n,p}\cr 
\end{pmatrix}
\]
ou 
\[
A= \Big(a_{i,j}\Big)_{\substack{1\leq i \leq m \\ 1\leq j \leq n}}
% \qquad \text{ ou } \qquad
% \Big(a_{i,j}\Big)
\]


\[
A=\begin{pmatrix} 
a& b\cr 
c& d\cr 
\end{pmatrix}
\]
	  
	  <h2>Les matrices : intro et mise en situation </h2> 
	  
	  </p>

	  <p>
	  </p>


    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 
  _      _           _ _            
 | |    (_)         (_) |           
 | |     _ _ __ ___  _| |_ ___  ___ 
 | |    | | '_ ` _ \| | __/ _ \/ __|
 | |____| | | | | | | | ||  __/\__ \
 |______|_|_| |_| |_|_|\__\___||___/
                                    
                                    

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%	-->

	  <p id="limites"><h2>Limites de ces pages - <a href="#">UP</a></h2>
	  
</p>
  <p class="a rotatedFloralHeartBullet">
</p>
  <br>
  <hr>
  <a href="index.html">Retour à l'accueil &rarr;</a><br>

  <script src="jsfile/jquery.js"></script>
  <script src="jsfile/modernizr.js"></script>
  <script src="jsfile/dih5.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DSGSHE1GR2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DSGSHE1GR2');
</script>
</body>
</html>