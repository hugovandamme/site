

          <div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
			
{foreach from=$data_tab item=data}
<h2>{$data['titre']}</h2>
{$data['corps']}
<p><em>Publie le:{$data['date']} </em>
<p><img src="traitement/img/{$data['id']}.jpg" alt="image"/></p>


<p style="text-align:justify;">
{/foreach}  
                         			
			
<form method="POST" action="traitement/traitement_com.php" enctype="application/x-www-form-urlencoded" name="formulaire" onSubmit="return check();">
	
    
	<p>
        <label for="pseudo">Votre pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Ex : pseudo" size="30" maxlength="10"  />
    </p>
	<p>
        <label for="email">E mail :</label>
        <input type="text" name="email" id="email" placeholder="Ex : toto@gmail.com" size="30"   />
    </p>
    <p>
       <label for="com">Commentaire</label><br />
       <textarea name="com" id="com" onKeyUp="javascript:couleur(this);" ></textarea>
    </p>
	<TD COLSPAN=2>
					<INPUT type="submit" name="deposer commentaire" value="commenter">
				</TD>
</form>

<H2> Commentaires </H2>


