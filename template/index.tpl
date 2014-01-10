
          <div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
			
{foreach from=$data_tab item=data}
<h2>{$data['titre']}</h2>
{$data['corps']}
<p><em>Publie le:{$data['date_fr']} </em>
<p><img src="traitement/img/{$data['id']}.jpg" alt="image"/></p>
</p><li><a href="modif.php?id={$data['id']}">Modifier article</a></li>
<p></p><li><a href="commentaire.php?id={$data['id']}">Commenter l'article</a></li>
<p></p><li><a href="sup.php?id={$data['id']}" onclick="return confirm('Etes-vous sûr ?');">Supprimer l'article</a></li>

<p style="text-align:justify;">
{/foreach}                          