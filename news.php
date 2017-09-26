<html>
<head>
<style>
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: #c61201;color:white;}
footer {background: #e85f53;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}

p{
text-align:justify;
width:700px;
}
h2{
text-align:justify;
width:700px;
}
.img
{
  position:absolute;
  left:60%;
  top:30%;
  
}
</style>
</head>
<body>
<div class="flex-container">
<header>
<h1>BLOOD DONATION NEWS AND RESEARCH</h1>
</header>
<article class="article">
<h2>Researchers develop robust technique for efficient manufacture of red blood cells</h2>
<p>Researchers have generated the first immortalised cell lines which allow more efficient manufacture of red blood cells.</p>


<h2>
Scientists seeking blood donations from people exposed to arboviruses for dengue, Zika vaccine research</h2>
<p>Researchers at the University of North Carolina School of Medicine are conducting studies that utilize blood donations from individuals who 
have been diagnosed with or potentially exposed to mosquito-borne viruses as part of ongoing dengue and Zika research and vaccine development.</p>

<h2>
VUMC researchers aim to decode genetic underpinnings of human immune system</h2>
<p>Researchers at Vanderbilt University Medical Center this month began recruiting volunteers to participate in a clinical trial aimed at decoding the
 human "immunome," the genetic underpinnings of the immune system.</p>

<h2>
WHO urges all countries to establish blood services based on voluntary non-remunerated blood donations</h2>
<p>Voluntary, unpaid blood donations must be increased rapidly in more than half the world’s countries in order to ensure a reliable supply of safe blood for 
patients whose lives depend on it, the World Health Organization said on World Blood Donor Day..</p>

<h2>

Study shows pulmonary alveolar proteinosis can be cured by single transfer of monocytes</h2>
<p>Researchers from VIB-UGent reveal that adult circulating monocytes that get access to the macrophage niche in the liver or the lung can acquire identical 
tissue-specific macrophage functions and self-maintenance capacities as macrophages of embryonic origin.</p>

<h2>

Certain red blood cell manufacturing methods may be less damaging to cells than others</h2>
<p>Scientists from Blood Systems Research Institute in San Francisco, California, and Canadian Blood Services' Centre for Innovation lab in Edmonton, Alberta, report for the first time that specific red blood cell manufacturing methods may be less damaging to cells than others.
.</p>
<div>
<img  class="img" src="blood.jpg" width="400px" height="500px">
<footer>Copyright &copy; Blood Bank management system @Vit University</footer>

</div>
</body>
</html>
