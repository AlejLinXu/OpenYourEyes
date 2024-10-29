<?php
if($_POST['id']=='9'){
    
    echo '
<h2 style="color:#1a9dd9"><b>testați-vă cunoștințele</b></h2>

<div class="row">
<div class="col">
<p><span class="h5" style="color:#1a9dd9;font-weight:bold;">1</span>.  Ce este alfabetizarea?</p>
</div><div class="col-1" id="resultq1"></div>
</div>


<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="1a" name="q1">
  <label class="form-check-label" for="1a">
    Cunoașterea alfabetului

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="1b" name="q1" >
  <label class="form-check-label" for="1b">
     Abilitatea de a citi și de a scrie
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="1c" name="q1" >
  <label class="form-check-label" for="1c">
   Cunoașterea unui anumit subiect sau a unui anumit tip de cunoștințe

  </label>
</div>
</div>




</div>
<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">2</span>. Ce înseamnă a fi alfabetizat?</p>
</div><div class="col-1" id="resultq2"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="2a" name="q2">
  <label class="form-check-label" for="2a">
  Să fi citit mai mult de 100 de cărți

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="2b" name="q2">
  <label class="form-check-label" for="2b">
   O educație bună

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="2c" name="q2">
  <label class="form-check-label" for="2c">
    Abilitatea de a citi și de a scrie
  </label>
</div>
</div>

<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">3</span>.  Pe de altă parte, ce înseamnă termenul „analfabet”?
</p>
</div><div class="col-1" id="resultq3"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="3a" name="q3">
  <label class="form-check-label" for="3a">
   Inabilitatea de a înțelege cuvintele scrise
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="3b" name="q3">
  <label class="form-check-label" for="3b">
    Inabilitatea de a citi și scrie
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="3c" name="q3">
  <label class="form-check-label" for="3c">
     Inabilitatea de a înțelege și utiliza numerele
  </label>
</div>
</div>

<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">4</span>. Care este diferența dintre alfabetizarea digitală și alfabetizarea media?
</p>
</div><div class="col-1" id="resultq4"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="4a" name="q4">
  <label class="form-check-label" for="4a">
    Alfabetizarea media se referă la toate mijloacele de comunicare, în timp ce alfabetizarea
digitală se referă doar la mijloacele digitale de comunicare

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="4b" name="q4">
  <label class="form-check-label" for="4b">
    Sunt sinonime
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="4c" name="q4">
  <label class="form-check-label" for="4c">
   Alfabetizarea media se referă la citirea ziarelor, în timp ce alfabetizarea digitală se referă la
siguranța online
  </label>
</div>

</div>
<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">5</span>. Alfabetizarea media și alfabetizarea digitală implică dobândirea căreia dintre următoarele
competențe:</p>
</div><div class="col-1" id="resultq5"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="5a" name="q5">
  <label class="form-check-label" for="5a">
   Abilități tehnice sau abilități practice și funcționale
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="5b" name="q5">
  <label class="form-check-label" for="5b">
   Gândire critică și evaluare
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="5c" name="q5">
  <label class="form-check-label" for="5c">
    Colaborare și comunicare bună
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="d" id="5d" name="q5">
  <label class="form-check-label" for="5d">
    Înțelegere culturală și socială

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="e" id="5e" name="q5">
  <label class="form-check-label" for="5e">
   Creativitate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="f" id="5f" name="q5">
  <label class="form-check-label" for="5f">
   Etica în comunicare

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="g" id="5g" name="q5">
  <label class="form-check-label" for="5g">
   Siguranță și securitate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="h" id="5h" name="q5">
  <label class="form-check-label" for="5h">
    All of the above
  </label>
</div>
</div>

<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">6</span>. Învățarea pe tot parcursul vieții reprezintă toate activitățile de învățare intenționate, întreprinse în
mod continuu pentru a îmbunătăți cunoștințele, abilitățile și competențele.</p>
</div><div class="col-1" id="resultq6"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="radio"  id="6a" value="a" name="q6" >
  <label class="form-check-label" for="6a">
   Adevărat
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio"  id="6b" value="b" name="q6" >
  <label class="form-check-label" for="6b">
 Fals
  </label>
</div>
</div>
<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">7</span>. Mass-media poate fi definită în câteva cuvinte ca mijloace de comunicare pentru publicul larg.</p>
</div><div class="col-1" id="resultq7"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="radio"  id="7a" value="a" name="q7" >
  <label class="form-check-label" for="7a">
   Adevărat
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio"  id="7b" value="b" name="q7" >
  <label class="form-check-label" for="7b">
   Fals
  </label>
</div>
</div>
<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">8</span>. . Educația pe tot parcursul vieții este eficientă dacă cursantul:</p>
</div><div class="col-1" id="resultq8"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="8a" name="q8">
  <label class="form-check-label" for="8a">
   este axat doar pe interesele sale;
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="8b" name="q8">
  <label class="form-check-label" for="8b">
  este axat doar pe formare și cursuri în scopuri profesionale;

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="8c" name="q8">
  <label class="form-check-label" for="8c">
    demonstrează motivație și angajament față de învățare
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="d" id="8d" name="q8">
  <label class="form-check-label" for="8d">
  se înscrie întotdeauna la cursuri de formare obligatorii

  </label>
</div>
</div>

<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">9</span>. Educația non-formală și informală:</p>
</div><div class="col-1" id="resultq9"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="9a" name="q9">
  <label class="form-check-label" for="9a">
  Sunt forme de educație mai puțin valoroase

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="9b" name="q9">
  <label class="form-check-label" for="9b">
   Nu sunt niciodată recunoscute și nu sunt de încredere;

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="9c" name="q9">
  <label class="form-check-label" for="9c">
   Sunt cursuri de calitate mai scăzută decât educația formală;
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="d" id="9d" name="q9">
  <label class="form-check-label" for="9d">
 Se desfășoară în afara educației formale și sunt cheia învățării pe tot parcursul vieț
  </label>
</div>
</div>

<div class="mt-5 row ">
<button type="button" class="btn btn-primary" onclick="checkAnswers(9)">Check answers</button>
</div>


';
    
    
}else if($_POST['id']=='25'){
    
    echo '<h2 style="color:#1a9dd9"><b>Întrebări și aspecte teoretice</b></h2>
<p>
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">1</span>. În ce domenii se poate produce dezinformare?
</p>
</div><div class="col-1" id="resultq1"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="1a" name="q1">
  <label class="form-check-label" for="1a">
    Sănătate și bani.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="1b" name="q1" >
  <label class="form-check-label" for="1b">
   Identitate politică și socială.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="1c" name="q1" >
  <label class="form-check-label" for="1c">
    Toate cele de mai sus.

  </label>
</div>
</div>
<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">2</span>. Pe ce se bazează cel mai mult dezinformarea pentru a genera reacție?</p>
</div><div class="col-1" id="resultq2"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="2a" name="q2">
  <label class="form-check-label" for="2a">
   Stări emoționale.

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="2b" name="q2">
  <label class="form-check-label" for="2b">
  Neîncredere
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="2c" name="q2">
  <label class="form-check-label" for="2c">
   Verificarea informațiilor.
  </label>
</div>
</div>
<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">3</span>.  Satira sau parodia pot genera dezinformare?
</p>
</div><div class="col-1" id="resultq3"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="radio" id="3a" value="a" name="q3" >
  <label class="form-check-label" for="3a">
   Da
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio"  id="3b" value="b" name="q3" >
  <label class="form-check-label" for="3b">
   Nu
  </label>
</div>
</div>
<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">4</span>. Dezinformarea se poate baza pe fapte adevărate?
</p>
</div><div class="col-1" id="resultq4"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="4a" name="q4">
  <label class="form-check-label" for="4a">
 Da, distorsionând contextul sau alegând selectiv ce parte din fapte să prezinte
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="4b" name="q4" >
  <label class="form-check-label" for="4b">
 Nu, dezinformarea se bazează în totalitate pe fapte neadevărate.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="4c" name="q4" >
  <label class="form-check-label" for="4c">
    Niciunul dintre cele de mai sus.

  </label>
</div>
</div>
<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">5</span>. Ce tip de comportament contribuie la răspândirea dezinformării?</p>
</div><div class="col-1" id="resultq5"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="5a" name="q5">
  <label class="form-check-label" for="5a">
    Verificarea conținutului prin mai multe surse. 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="5b" name="q5" >
  <label class="form-check-label" for="5b">
  Încrederea în surse și conținut care reflectă exclusiv propriile opinii.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="5c" name="q5" >
  <label class="form-check-label" for="5c">
   Reflectarea asupra unui articol care vă declanșează anumite emoții. 

  </label>
</div>
</div>
<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">6</span>. Care dintre următoarele nu este un motiv pentru ca dezinformarea să aibă la fel de
mult succes pe social media?</p>
</div><div class="col-1" id="resultq6"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="6a" name="q6">
  <label class="form-check-label" for="6a">
    Algoritmi care identifică conținutul popular și îi permit să ajungă la mai mulți oameni.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="6b" name="q6" >
  <label class="form-check-label" for="6b">
     Caracteristicile tehnologice ale platformelor care identifică surse îndoielnice de informare.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="6c" name="q6" >
  <label class="form-check-label" for="6c">
    Rețele de canale care își partajează reciproc conținutul.
  </label>
</div>
</div>
<div class="mt-5 row ">
<button type="button" class="btn btn-primary" onclick="checkAnswers(25)">Check answers</button>
</div>
';
    
    
}else if($_POST['id']=='42'){
    
    echo '<h2 style="color:#1a9dd9"><b>Verify</b></h2>
<p >
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">1</span>. Biasul este un prejudiciu pentru sau împotriva unei persoane sau grup, mai ales într-un mod
considerat a fi nedrept. Este adevărat sau fals?</p>
</div><div class="col-1" id="resultq1"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="radio" name="q1" id="1a" value="a" >
  <label class="form-check-label" for="1a">
   Adevărat
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q1" id="1b" value="b" >
  <label class="form-check-label" for="1b">
   Fals
  </label>
</div>
</div>

<p class="mt-5" >
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">2</span>. Pentru a verifica credibilitatea unui site web, verificați dacă există secțiunea „Parteneri”. Lipsa unor
astfel de informații este un semn că sursa ar putea răspândi elemente de dezinformare.</p>
</div><div class="col-1" id="resultq2"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="radio" name="q2" id="2a" value="a" >
  <label class="form-check-label" for="2a">
   Adevărat
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q2" id="2b" value="b" >
  <label class="form-check-label" for="2b">
   Fals
  </label>
</div>
</div>


<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">3</span>.  Pentru a detecta dezinformarea, trebuie să:</p>
</div><div class="col-1" id="resultq3"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="3a"  name="q3">
  <label class="form-check-label" for="3a">
  Citiți articolul cu atenție
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="3b"  name="q3">
  <label class="form-check-label" for="3b">
   Verificați site-ul URL

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="3c"  name="q3">
  <label class="form-check-label" for="3c">
  Căutați alte articole scrise de autor

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="d" id="3d"  name="q3">
  <label class="form-check-label" for="3d">
  Toate cele de mai sus

  </label>
</div>
</div>



<p class="mt-5" >
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">4</span>. Un profil care postează întotdeauna același site web sau același tip de conținut într-un grup
Facebook este foarte probabil să fie fals.</p>
</div><div class="col-1" id="resultq4"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="radio" name="q4" id="4a" value="a" >
  <label class="form-check-label" for="4a">
   Adevărat
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q4" id="4b" value="b" >
  <label class="form-check-label" for="4b">
   Fals
  </label>
</div>
</div>




<p class="mt-5">
<div class="row">
<div class="col">
<span class="h5" style="color:#1a9dd9;font-weight:bold;">5</span>.  Dacă doriți să verificați de unde ar putea proveni o imagine, încercați o căutare inversă a imaginii cu
Google:</p>
</div><div class="col-1" id="resultq5"></div>
</div>
<div class="pl-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="a" id="5a" name="q5">
  <label class="form-check-label" for="5a">
 Încărcarea unei imagini

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="b" id="5b" name="q5">
  <label class="form-check-label" for="5b">
   Căutarea cu o adresă URL

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="c" id="5c" name="q5">
  <label class="form-check-label" for="5c">
  Căutarea cu o imagine de pe un site web

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="d" id="5d" name="q5">
  <label class="form-check-label" for="5d">
   Toate cele de mai sus

  </label>
</div>
</div>
<div class="mt-5 row ">
<button type="button" class="btn btn-primary" onclick="checkAnswers(42)">Check answers</button>
</div>

';
    
}else{

    echo '<embed id="myframe" src="https://openyoureyes.info/docs/'.$_POST['lang'].'/'.$_POST['id'].'.pdf#toolbar=0&amp;amp;navpanes=0&amp;amp;zoom=105&amp;amp;scrollbar=0view=fitH,100" type="application/pdf" width="100%" style="height: 90vh">';
}
?>