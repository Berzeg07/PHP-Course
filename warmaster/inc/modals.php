    <div class="overlay"></div>
	<!-- Журнал -->
	<div class="journal_box messWindow">
		<div class="close">x</div>
		<p>Прогресс по сюжету:</p>
		<ul id="journal_box__inner"></ul>
	</div>
	<!-- Окно боя -->
	<div class="fight-box">
		<div class="fight-box__inner">
			<div class="fb_overlay"></div>
			<div class="hero_avatar" id="hero_avatar"><img src="img/avatar.png" alt=""></div>
			<div class="stat-box">
				<div class="stat-box_list stat-box__left">
					<ul>
						<li>Герой</li>
						<li><span>Сила: </span><span class="HeroPower"></span></li>
						<li><span>Урон: </span><span class="HeroDamage"></span></li>
						<li><span>Крит: </span><span class="HeroCrit"></span></li>
						<li><span>Броня: </span><span class="HeroArmor"></span></li>
						<li><span>Здоровье: </span><span class="HeroHP"></span></li>
					</ul>
				</div>
				<div class="stat-box_list stat-box__right">
					<ul>
						<li id="enemy_name"></li>
						<li><span>Мощь:</span> <span>???</span></li>
						<li><span>Урон:</span> <span>???</span></li>
						<li><span>Крит:</span> <span>???</span></li>
						<li><span>Крепость:</span> <span>???</span></li>
						<li><span>Здоровье:</span> <span>???</span></li>
					</ul>
				</div>
			</div>
			<div class="enemy_avatar" id="enemy_avatar"></div>
			<div class="dialog_box db db_fight" id="db_fight">
				<!-- <div class="db_close">х</div> -->
				<div class="dinamicTxt"></div>
			</div>
			<div class="fight-buttons">
				<button type="button" id="AtackToBattle">Атаковать</button>
				<button type="button" id="RetreatFromBattle">Отступить</button>
			</div>
		</div>
	</div>

	<!-- Онар -->
	<div class="OnarDialogBox">
		<div class="dialog_box db db-onar">
			<div class="dinamicTxt"></div>
		</div>
	</div>

	<!-- Туманная лощина -->
	<div class="BanditsDialogBox">
		<div class="dialog_box db db-bandits">
			<div class="dinamicTxt"></div>
		</div>
	</div>

	<!-- Развязка -->
	<div class="KillersDialogBox">
		<div class="dialog_box db db-killers">
			<div class="dinamicTxt"></div>
		</div>
	</div>

	<!-- Работа на ферме -->
	<div class="FarmWorker">
		<div class="messWindow" id="messWindow">
			<div class="close">x</div>
			<p id="messWindowInner"></p>
			<span id="stop"></span>
			<span id="timeOfwork"></span>
		</div>
	</div>

	<div class="messWindow HollowDB">
		<div class="dinamicTxt"></div>
	</div>
