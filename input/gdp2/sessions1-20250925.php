<?php  include 'entete.php';?>

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <h1>Premiere session GDP2</h1>

   <h2>Sujets abordes</h2>
   
   <p>Petit abstract des points vus ce premier cours 
</p>
<p>
   
</p>
<p>
<strong></strong><!-- ok -->
<h3>Notes sur les angles d'Euler et notions connexes</h3>
Toutes les formules sont dans  <a href="https://exo7math.github.io/mathgame-exo7/rotation/rotation.pdf" target="_blank"> l'ouvrage de référence sur Exo7  au chapitre <b>2.2 Angles d'Euler.</a> </b>
</p>
<p>
<h4>Les radians</h4>
Pour rappel, on mesure les angles à l'aide de plusieurs unités. Principalement deux: les degrés et les radians. Pou rles degrés, on par du principe que un tour complet représente $360°$ et par conséquent il est facile de s'orienter par exemple. Pour les deuxièmes, les radians, encore un outil inventé par les mathématiciens pour simplifier les choses. Où l'on part du principe que un tour vaut $2\pi$. Je suis le cap $4.712 rad$... Bien plus clair que de dire je suis le cap $270°$. Blague mise à part, ils sont néanmoins très pratiques dans de multiples paradigmes mathématiques. 
<p>Tout d'abord un détail qu'on oublie souvent, la valeur d'un radian. Radian rappelle un peu rayon... Comme le montre l'animation ci-dessous : 
</p>
<p>
 <img src="https://raw.githubusercontent.com/IamHenri/G1-Geometrie/refs/heads/main/images/radian.valeur-explication.gif" width="50%">
</p>
<p>L'angle représenté ci-dessus vaut $1 rad$
</p>
<p>
Un radian est l'angle donné par l'arc dont la longueur vaut celle du rayon. Et combien y a-t-il de rayon dans la circonférence d'un cercle? $2\pi$. Ce qui rend l'idée des radian pas si absurde que ça. Disons que ce n'est pas intuitif a priori.
</p>
<p>
Voici quelques valeurs caractéristiques de certains angles avec leur version en degrés et en radians:
 <img src="https://raw.githubusercontent.com/IamHenri/G1-Geometrie/refs/heads/main/images/cercle-trigonometrique.png" width="100%">
 
</p>
<p>
Sous forme de tableau avec les valeurs des fonctions trigonométriques usuelles:
\[
\begin{array}{|c|c|c|c|c|c|c|c|c|}
\hline
\text{Angle} & 0^\circ & 30^\circ & 45^\circ & 60^\circ & 90^\circ & 120^\circ & 135^\circ & 150^\circ & 180^\circ & 270^\circ \\
\hline
\sin & 0 & \frac{1}{2} & \frac{\sqrt{2}}{2} & \frac{\sqrt{3}}{2} & 1 & \frac{\sqrt{3}}{2} & \frac{\sqrt{2}}{2} & \frac{1}{2} & 0 & -1 \\
\hline
\cos & 1 & \frac{\sqrt{3}}{2} & \frac{\sqrt{2}}{2} & \frac{1}{2} & 0 & -\frac{1}{2} & -\frac{\sqrt{2}}{2} & -\frac{\sqrt{3}}{2} & -1 & 0 \\
\hline
\tan & 0 & \frac{1}{\sqrt{3}} & 1 & \sqrt{3} & \text{-} & -\sqrt{3} & -1 & -\frac{1}{\sqrt{3}} & 0 & \text{-} \\
\hline
\end{array}
\]


</p>
<p>

<h4>Les matrices de rotations</h4>
Matrice de rotation d'angle $\alpha$ selon l'axe des $x$: 
\[
R_x(\alpha) = \begin{pmatrix}
1 & 0 & 0 \\
0 & \cos \alpha & -\sin \alpha \\
0 & \sin \alpha & \cos \alpha
\end{pmatrix}
\]


Matrice de rotation d'angle $\beta$ selon l'axe des $y$: 

\[
R_y(\beta) = \begin{pmatrix}
\cos \beta & 0 & \sin \beta \\
0 & 1 & 0 \\
-\sin \beta & 0 & \cos \beta
\end{pmatrix}
\]

Matrice de rotation d'angle $\gamma$ selon l'axe des $z$: 

\[
R_z(\gamma) = \begin{pmatrix}
\cos \gamma & -\sin \gamma & 0 \\
\sin \gamma & \cos \gamma & 0 \\
0 & 0 & 1
\end{pmatrix}
\]



</p>
<p>
Lorsque l'on opère une rotation $R$ on la décompose en trois rotations, selon les trois axes. Pour ce faire on opère le produit des matrices pour obtenir une matrice contenant les trois rotations : 
</p>
<p>
$$
R = R_z.R_y.R_x
$$

On obtient : 
\[
R = \begin{pmatrix}
\cos \gamma \cos \beta & \cos \gamma \sin \beta \sin \alpha - \sin \gamma \cos \alpha & \cos \gamma \sin \beta \cos \alpha + \sin \gamma \sin \alpha \\
\sin \gamma \cos \beta & \sin \gamma \sin \beta \sin \alpha + \cos \gamma \cos \alpha & \sin \gamma \sin \beta \cos \alpha - \cos \gamma \sin \alpha \\
-\sin \beta & \cos \beta \sin \alpha & \cos \beta \cos \alpha
\end{pmatrix}
\]

</p>
<h3>Propriété des matrices de rotation</h3>
<h4>Matrice identité </h4>
<p>
Prenons par exemple la matrice de rotation se l'axe des $y$ : 

\[
R_y(\beta) = \begin{pmatrix}
\cos \beta & 0 & \sin \beta \\
0 & 1 & 0 \\
-\sin \beta & 0 & \cos \beta
\end{pmatrix}
\]
Pour l'angle nul, $\beta = 0$ on a : 

\[
R_y(0) = \begin{pmatrix}
1 & 0 & 0 \\
0 & 1 & 0 \\
0 & 0 & 1
\end{pmatrix}
La matrice résultante est la matrice identité. Soit, l'élément neutre des matrice carrées $3x3$.

</p>
<p>Il en sera de même pour les autres matrices. Si l'angle est nul la matrice résultante est celle de l'identité. 
</p>

<h3>Produit matriciel</h3>
On a les matrice $A$ et $B$, dont le produit donne la matrice $C$:
\[
\begin{pmatrix}
a_{11} & a_{12} & a_{13} \\
a_{21} & a_{22} & a_{23} \\
a_{31} & a_{32} & a_{33}
\end{pmatrix}
\cdot
\begin{pmatrix}
b_{11} & b_{12} & b_{13} \\
b_{21} & b_{22} & b_{23} \\
b_{31} & b_{32} & b_{33}
\end{pmatrix}
=
\begin{pmatrix}
c_{11} & c_{12} & c_{13} \\
c_{21} & c_{22} & c_{23} \\
c_{31} & c_{32} & c_{33}
\end{pmatrix}
\]

Quand on opère les calculs à la main la méthode est la suivante : 
\[
\begin{array}{c c}
  & \begin{pmatrix}
b_{11} & b_{12} & b_{13} \\
b_{21} & b_{22} & b_{23} \\
b_{31} & b_{32} & b_{33}
\end{pmatrix} \\
\begin{pmatrix}
a_{11} & a_{12} & a_{13} \\
a_{21} & a_{22} & a_{23} \\
a_{31} & a_{32} & a_{33}
\end{pmatrix}
& \begin{pmatrix}
c_{11} & c_{12} & c_{13} \\
c_{21} & c_{22} & c_{23} \\
c_{31} & c_{32} & c_{33}
\end{pmatrix} \\
\end{array}
\]

Avec, très explicitement la matrice $C$ : 
\[
C =
\begin{pmatrix}
a_{11}b_{11} + a_{12}b_{21} + a_{13}b_{31} & a_{11}b_{12} + a_{12}b_{22} + a_{13}b_{32} & a_{11}b_{13} + a_{12}b_{23} + a_{13}b_{33} \\
a_{21}b_{11} + a_{22}b_{21} + a_{23}b_{31} & a_{21}b_{12} + a_{22}b_{22} + a_{23}b_{32} & a_{21}b_{13} + a_{22}b_{23} + a_{23}b_{33} \\
a_{31}b_{11} + a_{32}b_{21} + a_{33}b_{31} & a_{31}b_{12} + a_{32}b_{22} + a_{33}b_{32} & a_{31}b_{13} + a_{32}b_{23} + a_{33}b_{33}
\end{pmatrix}
\]


<h3>Méthodologie</h3>
<p>Disposant de toutes les formules pour vous permettre de vous en servir, parlons maintenant de méthode. 

Admettons que vous avez une rotation $R$ décomposée en trois rotations, l'une autour de l'axe de $x$, puis autour de l'axe des $y$ et pour finir autour de $z$. Il faut donc les appliquer à chaque point de l'ensemble que vous voulez faire tourner. Choississons un des points de cet objet, appelons le $M$, $M ( x,y,z)$. Comme j'ai déjà pu l'expliquer, on oublie cette notion de point et on le voit comme un vecteur, à savoir le ecteur $\overrightarrow{OM}$. Qui a donc les coordonnées 
$$
\overrightarrow{OM}= \begin{pmatrix} x \\y \\z \end{pmatrix}.
$$
</p>
<p>
Pour faire tourner ce point $M$ il faut faire tourner $\overrightarrow{OM}$ à laide des matrices de rotations dont on dispose. Et ceci, dans un sens précis : 
 </p>
<p>Dans $R$ : 
$$
R = R_z.R_y.R_x
$$
On applique à  $\overrightarrow{OM}$ la rotation $R_x$, puis $R_y$, puis $R_z$.
</p>
<p>
On peut écrire pour se représenter les choses : 

$$
R.\overrightarrow{OM}= R_z.R_y.R_x.\overrightarrow{OM}= R_z.(R_y.(R_x.\overrightarrow{OM}))
$$


</p>
<h4>Deux multiplications de matrices</h4>

<p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp2-20240925PDTMatrice02.png?raw=true" width="100%">
</p>

<p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp2-20240925PDTMatrice01.png?raw=true" width="100%">
</p>



      <hr/>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

   
   <br>
   <hr>
   <a href="../index.php">Index &uarr;</a><br>
   <?php  include 'pieddepage.php';?>
