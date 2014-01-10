<div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
			
<FORM method="post" action="traitement/traitement_modif.php" enctype="multipart/form-data">
		<input type="hidden" name="id" id="id" value="{$smarty_id}"/>
					<h2>Modifier un article</h2>
			<TABLE BORDER=0>
				<TR>
					<TD>Titre</TD>
						<TD>
							<INPUT type="text" name="titre" value="{$smarty_titre}"/>
						</TD>
				</TR>
				<TR>
					<TD>Contenu</TD>
						<TD>
							<INPUT type="text" name="Contenu" value="{$smarty_corps}"/>
						</TD>
				</TR>
				<TR>
					<TD>Image</TD>
						<TD>
							<INPUT type="file" name="image" id="image"/>
						</TD>
				</TR>
				<TR>
					<TD>Publication</TD>
						<TD>
							<INPUT type="checkbox" name="publication" value="1" checked="checked"/>
						</TD>
				</TR>
				
				<TR>
				
				<TD COLSPAN=2>
					<INPUT type="submit" name="modifier" value="modifier">
				</TD>
				</TR>
			</TABLE>
</FORM>
			