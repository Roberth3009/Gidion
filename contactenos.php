<form method="POST" action="registro.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Nombre</label>
											<input type="text" name="name" id="name" required />
										</div>
										<div class="field half">
											<label for="email">Em@il</label>
											<input type="text" name="email" id="email" required/>
										</div>
										<div class="field">
											<label for="message">Escriba su comentario</label>
											<textarea name="message" id="message" rows="6" required> </textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar Mensaje" class="primary" /></li>
										<li><input type="reset" value="Limpiar" /></li>
									</ul>
								</form>