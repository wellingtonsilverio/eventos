<div class="ui grid container top-space">
	<div class="ten wide column">
		<div class="ui items">
		  <div class="item">
		    <div class="image">
		      <img src="src/semantic-ui/image.png">
		    </div>
		    <div class="content">
		      <a href="event/1" class="header">ArráIA</a>
		      <div class="meta">
		        <span>10 de junho - 11 de junho</span>
		      </div>
		      <div class="extra">
		        Barão Geraldo - Campinas
		      </div>
		      <div class="description">
		        <p>
		        	Uma das FEXTAX mais esperadas do ano está chegando e vcs preguiçosxs não podem ficar de fora dessa! Vai ter muita música, dança, COMIDA, VINHO...
		        </p>
		      </div>
		      <div class="extra">
		        <div class="ui label">#arraial</div>
		        <div class="ui label">#festaEmREP</div>
		        <div class="ui right floated primary button">
		          Comprar Ingresso
		          <i class="right chevron icon"></i>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div class="six wide column">
		<div class="ui card">
		  <div class="content">
		    <div class="header">Pesquisando em</div>
		  </div>
		  <div class="content">
		    <div class="ui fluid icon input">
			  <input type="text" placeholder="CEP ou nome da cidade...">
			  <i class="search icon"></i>
			</div>
		    <div class="ui small feed">
		      <div class="event">
		        <div class="content">
		          <div class="summary">
			          <div class="field">
			          	<label>Incluir cidades até</label>
				        <select name="gender" class="ui fluid dropdown" id="select">
						  <option value="" distable>Selecionar</option>
						  <option value="10">10km</option>
						  <option value="25">25km</option>
						  <option value="50">50km</option>
						  <option value="100">100km</option>
						  <option value="500">500km</option>
						  <option value="1000">1000km</option>
						</select>
					  </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="ui bottom attached button">
	        <i class="filter icon"></i>
	        Filtrar
	      </div>
		</div>
		<div class="ui card">
		  <div class="content">
		    <div class="header">Filtrar por</div>
		  </div>
		  <div class="content">
		    <form class="ui form">
			  <h4 class="ui dividing header">Ordenar por</h4>
			  <div class="field">
			    <div class="field">
			      <select name="sort" class="ui fluid dropdown" id="selectSort">
					  <option value="10">Relevância</option>
					  <option value="25">Maior valor</option>
					  <option value="50">Menor valor</option>
					  <option value="100">Data</option>
				  </select>
				</div>
			  </div>
			  <h4 class="ui dividing header">Preço</h4>
			  <div class="field">
			    <div class="two fields">
			      <div class="field">
			        <input type="text" name="price[mix]" placeholder="Minimo">
			      </div>
			      <div class="field">
			        <input type="text" name="price[max]" placeholder="Maximo">
			      </div>
			    </div>
			  </div>
			  <h4 class="ui dividing header">Quando</h4>
			  <div class="ui form">
			    <div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Hoje</label>
				  </div>
				</div>
				<div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Amanhã</label>
				  </div>
				</div>
				<div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Este fim de semana</label>
				  </div>
				</div>
				<div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Próxima semana</label>
				  </div>
				</div>
				<div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Próximo fim de semana</label>
				  </div>
				</div>
				<div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Próximos Meses</label>
				  </div>
				</div>
			  </div>
			  <h4 class="ui dividing header">Caracteristicas</h4>
			  <div class="ui form">
			    <div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Em REP</label>
				  </div>
				</div>
				<div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Ambiênte Fechado</label>
				  </div>
				</div>
				<div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Open Bar</label>
				  </div>
				</div>
				<div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Entrada Gratuita</label>
				  </div>
				</div>
				<div class="inline field">
				  <div class="ui checkbox">
				    <input type="checkbox" tabindex="0" class="hidden">
				    <label>Com Piscina</label>
				  </div>
				</div>
			  </div>
			</form>
		  </div>
		  <div class="ui bottom attached button">
	        <i class="filter icon"></i>
	        Filtrar
	      </div>
		</div>
	</div>
</div>