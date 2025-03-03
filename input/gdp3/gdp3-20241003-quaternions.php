<?php  include 'entete.php';?>

  <p class="a rotatedFloralHeartBullet">
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  </p>
  <p>
    <h2>Les quaternions </h2>
    <h5>Notes du cours du 04 10 2024 à Isart </h5>
	  <p>

  </p>
  <p>Tout est déjà ici : <a href="https://www.designerfonctionnel.com/notes-formation-mathematiques/cours-unitaire-les-quaternions-theorie-et-application.php">https://www.designerfonctionnel.com/notes-formation-mathematiques/cours-unitaire-les-quaternions-theorie-et-application.php</a>. Dans cette page on reprend quelques éléments importants qui permettent d'avoir toutes les clés pour bien manipuler les quaternions. 

  </p>
  <p>
Bien que vous utilisiez des moteurs très puissants, tant pour les quaternions que pour le reste, ces notes doivent vous permettre de savoir quels sont les entrées et sorties lorsque vous manipulez les quaternions. Comment injecter angles et axes dans un même objet, comment réaliser les calculs. 

  </p>
  <p>En revanche avec l'ensemble de ce cours vous pourrez créer votre propre moteur de gestion des quaternions. Tous les éléments nécessaires pour leur construction sont présentés dans la page que je cite plus haut. 

  </p>
	  <h3 id="contexte">Petits rappels</h3>
  <p>
Un quaternion est un objet mathématiques purement abstrait : il appartient à un espace de dimension 4. Ces quatre dimensions sont réparties comme suit : 
 <ul>
      <li>une dimension scalaire : celle qui permet de définir l'angle de la rotation;</li>
      <li>trois dimension spatiales : permettent de définir l'axe de rotation.</li>
	</ul>
Ces objets de dimension 4 bien que purement abstraits ont des applications concrètes en 3D dans les modèles informatiques: ils permettent de réaliser des rotations absolues et sans blocage tels que le Gimbal lock (voir ici  que l'on peut éprouver avec les angles d'Euler. Angles que 'on voit pour comprendre que la seule véritable manière de réaliser des rotations dans l'espace passe par les quaternions. 
  </p>
  <p>

	  <h3 id="contexte">Propriétés des quaternions à avoir en tête </h3>

  </p>
  <p>Les quaternions des rotations sont unitaires : de norme 1;
  </p>
  <p>Le produit des quaternions n'est pas commutatif : $p$ et $q$ deux quaternions alors : $p.q = - q.p$.;
  </p>
  <p>Le quaternion d'un scalaire voit ses coordonnées axiales nulles';
  </p>
  <p>Le quaternion d'un vecteur voit sa coordonnées scalaire nulle et au moins une des composantes axiale (on dit vectorielle) non nulle;
  </p>
  <p>Lorsqu'on a quaternion d'une rotation, alors, ce quaternion n'est pas suffisant. La véritable rotation est données par le quaternion de la rotation et son conjugué. Comme on le voit dans la formule 
$$
q_{M^{'}} = q_\mathcal{R} . q_{M} . q^{\star}_\mathcal{R}
$$
Avec : 
  </p>
  <p>$q_{M} $ : le quaternion du point sur l'on fait tourner
  </p>
  <p>$q_{M^{'}} $ : le quaternion résultant, a savoir le quaternion résultant après la rotation. 
  </p>
  <p>$q_\mathcal{R}$ et $q^{\star}_\mathcal{R}$ sont les deux quaternions qui composent la rotation. 
  </p>
  <p>On pourrait noter de manière générique : 
$$
\mathcal{R}_{(\theta;\vec{u})}(.) =  q_\mathcal{R} \times . \times q^{\star}_\mathcal{R}
$$
Où la multiplication représente le produit de quaternions. 
  </p>
  <p> <h3 id="contexte">Rôle du conjugué</h3>
Le conjugué est une notion que l'on retrouve ici avec les quaternions. Elle est aussi présente dans les nombres complexes. Cette notion ne correspond a priori à aucune intuition. toutefois, on peut se les représenter dans les quaternions en extrapolant depuis cette notion issues des complexes. Indépendamment des complexe, la quantité conjuguée est une notion que l'on retrouve à beaucoup d'endroits des mathématiques. Quoi qu'il en soit on va cherche à se donner ici une représentation. '

  </p>
  <p>Soit $z$ un nombre complexe. Il existe alors $a$ et $b$ deux nombres réels tels que $z = a +ib$. On rappelle que $i$ par définition est tels que $i^{2} = -1$. Alors dans les complexes, on appelle $\bar{z}$ le conjugué de $z$. Pour se représenter les choses, le conjugué est l'élément symétrique par rapport à l'axe des réels. Ainsi pour les quaternions, bien qu'ils ne soient pas représentables, on peut se dire que le conjugué d'un quaternion est le symétrique par rapport à l'axe des scalaires du quaternion initial . 

  </p>
  <p>On rappelle le conjugué d'un quaternion $q = (a; b; c; d)$  quelconque. On appelle $q^{\star}$ son conjugué. Il vaut:
$$
q = (a; -b; -c; -d)
$$
Ou encore si :
$$
q = a+bi+cj+dk
$$  
Alors : 
$$
q^{\star} = a-bi-cj-dk
$$ 
  </p>
  <p>Dans la formule des quaternions, on a à la fois le quaternion construit pour la rotation dont on se sert et aussi son conjugué. Il faut noter que l'on utilise dans chaque quaternion la moitié de l'angle de la rotation. Disons que cette moitié d'angle de rotation est présent dans le quaternion et dans son conjugué. Comme nous utilisons les deux pour réaliser une rotation, on peut deviner que l'application du quaternion et de son conjugué, permette une rotation de l'angle complet de la rotation en question. Disons qu'il est normal que l'angle de la rotation soit divisé par deux, car le quaternions est en quelque sorte appliqué deux fois. L'une par le quaternion, l'autre par le conjugué. 



  </p>
  <p><h3>Exercice de réflexion</h3>
  
 Cette formule des quaternions : 
$$
q = (cos\theta/2; V_{x}.sin\theta/2; V_{y}.sin\theta/2; V_{z}.sin\theta/2)
$$
Est très pratique pour construire un quaternion pour une rotation. Il suffit de s'assurer que le vecteur $\overrightarrow{V}$ est unitaire (de norme 1). Comme vu en cours. 


  </p>
  <p>Cette formule permet de retrouver la rotation à partir de son quaternion. Par exemple soit $q$ le quaternion :
  $$
  q = 1/2+1/2i+1/2j+1/2k
  $$ 
  
 <ul>
      <li>Premièrement, <span title="Si sa norme vaut 1 oui (et que la partie vectorielle est non nulle!">Est-ce bien une rotation?</span> </li>
      <li><span title="Premier indice : la valeur de la coordonnée scalaire du quaternion">Quel est son angle? </span></li>
      <li>Quel est  <span title="à déduire sachant que le vecteur est unitaire et sachant les angles possibles">le vecteur directeur de son axe? </span></li>
	</ul>
  </p>
  <p>
<b>Réponse</b> : On s'assure que les coordonnées vectorielle sont non nulles et on doit calculer sa norme. Si elle vaut 1, c'est gagné. Donc pour sa norme, on a quatre fois un demi au carré, ce qui donne 1, donc on a le résultat voulu. C'est une rotation. 

  </p>
  <p>
Pour savoir son angle, on doit considérer la coordonnées scalaire du quaternion. Ici $1/2$. Pour quel angle, le $\cos$ vaut-il $1/2$? Pour plus ou moins $\pi / 3$. Donc on commence à avoir une bonne indication sur l'angle.

  </p>
  <p>
Comme $\sin \pi/3 = \sqrt{3}/2$ alors, on remarque que la norme du vecteur de coordonnées $\overrightarrow{V} = (\sqrt{3}/2;\sqrt{3}/2;\sqrt{3}/2)$ est bien de norme 1, on a trouvé l'angle : $2\pi/3$ et le vecteur directeur unitaire de l'axe de rotation : $\overrightarrow{V} = (\sqrt{3}/2;\sqrt{3}/2;\sqrt{3}/2)$.

  </p>
  <p>
 La rotation est la rotation $\mathcal{R}$ d'angle $2\pi/3$ et d'axe donné par $\overrightarrow{V} = (\sqrt{3}/2;\sqrt{3}/2;\sqrt{3}/2)$, souvent notée  : 
$$
\mathcal{R}_{2\pi/3;\overrightarrow{V}}
$$

  </p>
  <p><h3>Quelques ressources et les notes </h3>
  Sur le Gimbal Lock en modélisation 3D : 
  https://www.youtube.com/watch?v=epk-Uh2oJY8&t=4s&ab_channel=AdvancedSkeleton
  </p>
  <p>
<p>Une réponse à la question posée en début de cours : 
 </p>
  <p> En résumé, si on a un plan donné par trois points $A$, $B$ et $C$ et un point M du plan $ABC$, alors il faut trouver un manière de décomposer $\overrightarrow{OM}$ en un combinaison linéaire de $\overrightarrow{OA}$, $\overrightarrow{AB}$ et $\overrightarrow{AC}$.
 </p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 1-projection-plan.png?raw=true" width="100%">
</p>
  
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 2-projection-plan.png?raw=true" width="100%">
</p>
  
<p>Les notes projetées : 
 </p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 1.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 2.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 3.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 4.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 5.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 6.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 7.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 8.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 9.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 10.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 11.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 12.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 13.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 14.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 15.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 16.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 17.png?raw=true" width="100%">
</p>
  <p>
 <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Gdp3-20241003 - page 18.png?raw=true" width="100%">
</p>
  </p></p>
  <p class="a rotatedFloralHeartBullet">
</p>
  <br>
  <hr>
<a href="../index.php">Index &uarr;</a><br>
<?php  include '../pieddepage.php';?>
