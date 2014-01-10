         <div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->

<form method="POST" action="traitement/traitement_form.php" enctype="multipart/form-data" name="formulaire" onSubmit="return check();">
	
    
	<p>
        <label for="title">Titre :</label></br>
        <input type="text" name="title" id="title"  />
    </p>
    <p>
       <label for="Contenu">Contenu</label></br>
       <textarea name="Contenu" id="Contenu" onKeyUp="javascript:couleur(this);" ></textarea>
    </p>
	
	<TR>
					<TD>Image</TD>
						<TD>
							<INPUT type="file" name="image" id="image"/>
						</TD>
				</TR>
				<TR>
				</p>
					<TD>Publication</TD>
						<TD>
							<INPUT type="checkbox" name="publication" value =1 checked="checked"/>
						</TD>
				</TR>
				</p>
				<TR>
				<TD COLSPAN=2>
					<INPUT type="submit" name="envoyer" value="Envoyer">
				</TD>
				</TR>
</form>