<div id="sljarInsurance">
	<div v-cloak >
		<div class="container-fluid">
			<div class="row">

				<div class='col-lg-9 col-md-8 col-sm-10 col-xs-12'>		
					<div class='sljar_form'>
						<h3 class="text-center sljar_title">КАЛЬКУЛЯТОР АВТОЦИВІЛКИ</h3>
							<span class="sljar_colSpan">Тип транспортного засобу</span><br>
							<select class="sljar_colSelect" v-model="k11">
								<option v-for="option in options_k1" :value="option.value">
									{{ option.type }} {{ option.name }}
								</option>
							</select><br>

							<span class="sljar_colSpan">Місце реєстрації транспортного засобу</span><br>
							<span class="sljar_colSpan">Населені пункти з населенням</span><br>
							<select class="sljar_colSelect" v-model="k21">
								<option v-for="option in options_k2" :value="option.value">
									{{ option.text }}
								</option>
							</select><br>

							<span class="sljar_colSpan">Використання</span><br>
							<select class="sljar_colSelect" v-model="k31">
								<option v-for="option in options_k3" :value="option.value">
									{{ option.text }}
								</option>
							</select><br>

							<span class="sljar_colSpan">Власник ТЗ</span><br>
							<select class="sljar_colSelect" v-model="k41">
								<option v-for="option in options_k4" :value="option.value">
									{{ option.text }}
								</option>
							</select><br>

							<span class="sljar_colSpan">Термін дії поліса</span><br>
							<select class="sljar_colSelect" v-model="k51">
								<option v-for="option in options_k5" :value="option.value">
									{{ option.text }}
								</option>
							</select><br>

							<span class="sljar_colSpan">Строк дії договору</span><br>
							<select class="sljar_colSelect" v-model="k71">
								<option v-for="option in options_k7" :value="option.value">
									{{ option.text }}
								</option>
							</select><br>

							<span class="sljar_colSpan">Спосіб укладення договору</span><br>
							<select class="sljar_colSelect" v-model="k8">
								<option v-for="option in options_k8" :value="option.value">
									{{ option.text }}
								</option>
							</select><br>

							<span class="sljar_colSpan">Пільги</span><br>
							<select class="sljar_colSelect" v-model="k9">
								<option v-for="option in options_k9" :value="option.value">
									{{ option.text }}
								</option>
							</select><br>

							<span class="sljar_colSpan">Франшиза</span><br>
							<select class="sljar_colSelect" v-model="fr">
								<option v-for="option in options_Fr" :value="option.value">
									{{ option.text }}
								</option>
							</select><br><br>

						<div class="text-center sljar_title">Вартість {{ suma }} грн</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 sljar_colSpan">
					<div v-show="showk1" class="text-center sljar_showinfok1">
						{{showname}} страхуються тільки на 6 місяців
					</div>
					<div v-show="showk41" class="text-center sljar_showinfok41">
						<br>для надання послуг (таксі) застосовується франшиза тільки 2600
					</div>
					<div v-show="showk42" class="text-center sljar_showinfok42">
						<br>для надання послуг (таксі) застосовується франшиза тільки 2600
					</div>	
				</div>					
			</div>
		</div>
	</div>
</div>