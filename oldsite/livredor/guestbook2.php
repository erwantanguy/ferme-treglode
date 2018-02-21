<table width="80%"><tr><td>
<form method="post" action="<?php echo $url; ?>" onSubmit="return testform(this.name,this.lemail,this.comment)">
<input type="hidden" name="ajout" value="true" />
<table cellspacing="0" cellpadding="0" style="border: 1px solid white;" height="288">
<tr>
<td width="130"><font color="white">Nom</font></td>
<td width="205"><input name="name" size="20" /></td>
</tr>
<tr>
<td width="130"><font color="white">Votre Email :</font></td>
<td width="205"><font color="white"><input name="lemail" size="20" /></font></td>
</tr>
<tr>
<td colspan="2">
<textarea name="comment" rows="4" cols="55"></textarea>
<br /><br />
<input type="Submit" value="Valider" />
<br /><br />
<a href="#">Haut</a><br />
</td>
</tr>
</table>
</form>
</td></tr></table> 