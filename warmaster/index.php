<?php require_once("config.php"); ?>

<!-- header -->
<?php require_once("inc/header.php"); ?>
<!-- content -->
	<div id="melody-1" class="player" data-src="audio/gothic.mp3"></div>
	<audio id="my-hidden-player" loop></audio>
	<div class="container">
		<div class="box-top">
			<!-- Лавка -->
			<div class="box-item border marketPlace">
				<div class="npc_name">
					<p><b>Сантино (Торговец)</b></p>
				</div>
				<div class="shop_box bg_inner" id="shop_box">
					<ul>
						<li>
							<label>
								<input class="name" type="radio" value="Кожаная броня" name="shopItem"> Кожаная броня - <span>200</span> (Броня <em>5</em>)
							</label>
						</li>
						<li>
							<label>
								<input class="name" type="radio" value="Пластинчатый доспех" name="shopItem"> Пластинчатый доспех - <span>600</span> (Броня <em>10</em>)
							</label>
						</li>
						<li>
							<label>
								<input class="name" type="radio" value="Дубинка" name="shopItem"> Дубинка - <span>130</span> (Урон <em>5</em>)
							</label>
						</li>
						<li>
							<label>
								<input class="name" type="radio" value="Полуторный меч" name="shopItem"> Полуторный меч - <span>250</span> (Урон <em>10</em>)
							</label>
						</li>
						<li>
							<label>
								<input class="name" type="radio" value="Двуручный меч" name="shopItem"> Двуручный меч - <span>500</span> (Урон <em>15</em>)
							</label>
						</li>
						<li>
							<label>
								<input class="name" type="radio" value="Охотничий нож" name="shopItem"> Охотничий нож - <span>120</span> (<em>Охота</em>)
							</label>
						</li>
						<li>
							<label>
								<input class="name" type="radio" value="Сырая сталь" name="shopItem"> Сырая сталь - <span>110</span> (<em>Сырье</em>)
							</label>
						</li>
					</ul>
				</div>
				<div class="master_btn__box">
					<button class="btn" id="bye" type="button">Купить</button>
					<button class="btn" id="ShowTheProduct" type="button">Товары</button>
					<button class="btn" id="talkToSeller" type="button">Говорить</button>
				</div>
				<div class="dialog_box db db_market bg-img">
					<div class="db_close">х</div>
					<div class="dinamicTxt"></div>
				</div>
			</div>

			<!-- Персонаж -->
			<div class="box-item hero border">
				<div class="stata">
					<div class="npc_name"><b>Персонаж</b></div>
					<div class="bg_inner">
						<p class="hero_st">Характеристики:</p>
						<div class="stata_inner">
							<div class="stata_left">
								<p>Сила: <span id="hero_power"></span></p>
								<p>Урон: <span id="hero_atack"></span></p>
							</div>
							<div class="stata_right">
								<p>Броня: <span id="hero_armor"></span></p>
								<p>Крит: <span id="hero_krit"></span></p>
							</div>
						</div>
						<p>Здоровье: <span id="hero_hp"></span></p>
						<p>Золото: <span id="hero_gold"></span></p>
						<p class="hero_st hero_item__eqiped" id="hero_weapon">Оружие: <br> <span>Пусто</span></p>
						<p class="hero_st hero_item__eqiped" id="hero_armor_equiped">Доспех: <br> <span>Пусто</span></p>
					</div>
				</div>
				<div class="armor-crow Hero_Armor"><img src="img/crow-armor.png" alt=""></div>
				<div class="heavy-armor Hero_Armor"><img src="img/heavy-armor.png" alt=""></div>
				<div class="leather-armor Hero_Armor"><img src="img/leather-armor.png" alt=""></div>

				<div class="stick Hero_Weapon"><img src="img/dubinka.png" alt=""></div>
				<div class="sword Hero_Weapon"><img src="img/sword.png" alt=""></div>
				<div class="long-sword Hero_Weapon"><img src="img/longsword.png" alt=""></div>
				<div class="ripper Hero_Weapon"><img src="img/ripper.png" alt=""></div>

				<div class="master_btn__box">
					<button class="btn" type="button" class="btnJournal" id="journal">Журнал</button>
				</div>
				<div class="hero_img"><img src="img/hero.png" alt=""></div>
			</div>

			<!-- Дом -->
			<div class="box-item home border">
				<div class="npc_name"><b>Дом</b></div>
				<div class="bg_inner">
					<p class="hero_st">Сундук:</p>
					<div class="inventory" id="inventory">
						<div id="counter"></div>
						<ul id="inventory"></ul>
					</div>
				</div>
				<div class="master_btn__box">
					<div class="HomeMessageAlert">Невозможно экипировать</div>
					<button class="btn" id="equipItem" type="button">Экипировать</button>
					<button class="btn" id="sellItem" type="button">Продать</button>
					<button class="btn" id="toRest" type="button">Отдыхать</button>
				</div>
			</div>

		</div>
		<!-- end box-top -->

		<div class="box_middle">
			<!-- Ларес -->
			<div class="box-item master border">
				<div class="npc_name"><b>Ларес (Мастер меча)</b></div>
				<div class="npc lares"><img src="img/lars.png" alt=""></div>
				<div class="master_btn__box lares_btn">
					<button class="btn" id="btn_master" type="submit">Тренироваться</button>
					<button class="btn" id="btn_advice" type="submit">Совет</button>
				</div>
				<div class="dialog_box db db_lares bg-img">
					<div class="db_close">х</div>
					<div class="dinamicTxt"></div>
				</div>
			</div>

			<!-- Противник -->
			<div class="box-item enemy border">
				<div class="npc_name"><b>Туманная лощина</b></div>
				<div class="master_btn__box">
					<button class="btn" id="FoggyHollow">Разведать</button>
				</div>
				<div class="dialog_box db-hollow bg-img">
					<div class="db_close">х</div>
					<div id="dinamicTxtHollow"></div>
				</div>
			</div>

			<!-- Ферма Онара -->
			<div class="box-item farm border" id="farm">
				<div class="npc_name"><b>Ферма Онара</b></div>
				<div class="master_btn__box" id="div">
					<div class="tooltip">
						<span>Ты не знаешь где Онар</span>
					</div>
					<div class="tooltip2">
						<span>Говори с охраной</span>
					</div>
					<button class="btn" id="btn_farmeGuard" type="button">Сентеза (Охрана)</button>
					<button class="btn" id="btn_onar" type="button">Онар</button>
					<button class="btn" id="btn_workFarm" type="button">Работать</button>
				</div>
				<div class="dialog_box db_1 min_db" id="static-db">
					<div class="db_close">х</div>
					<p>Сентеза: Что тебе нужно? Хочешь пройти дальше, плати 100 монет!</p>
					<button class="btn" id="btn_pay_senteza">Согласен</button>
					<button class="btn" id="btn_not_pay_senteza">Послать к черту!</button>
					<button class="btn">Уйти</button>
				</div>
				<div class="dialog_box min_db" id="dinamicDbSenteza">
					<div class="db_close">х</div>
					<div id="dinamicTxtSenteza"></div>
					<div class="btn" id="btnNextSenteza"></div>
				</div>
			</div>
		</div>

		<div class="box_bottom">

			<!-- Лес -->
			<div class="box-item border wood">
				<div class="npc_name"><b>Лес</b></div>
				<div class="master_btn__box">
					<button class="btn" type="button" id="rat">Болотные крысы</button>
					<button class="btn" type="button" id="woolf">Волки</button>
					<button class="btn" type="button" id="mrakoris">Мракорис</button>
				</div>
			</div>

			<!-- Таверна -->
			<div class="box-item taverna border">
				<div class="npc_name"><b>Селина (Хозяйка таверны)</b></div>
				<div class="master_btn__box">
					<button class="btn" id="btn_toEat" type="button">Подкрепиться</button>
					<!-- <button class="btn" id="btn_rumors" type="button">Слухи</button> -->
					<button class="btn" id="btn_talkToSelina" type="button">Говорить</button>
					<button class="btn" id="btn_nagur" style="display:none;" type="button">Нагур</button>
				</div>
				<div class="dialog_box db_1 bg-img selinaDB">
					<div class="db_close">х</div>
					<div class="DialogWithSelina"></div>
				</div>
			</div>

			<!-- Кузница -->
			<div class="box-item forge border">
				<div class="npc_name"><b>Харальд (Кузнец)</b></div>
				<div class="bg_inner bg_inner__forge">
					<label for="shortSword">
						<input id="shortSword" name="forgeItem" value="Доспех Ворона" type="radio"> Доспех Ворона - <span class="priceItemHero">1000</span> (Броня <em>20</em>)
					</label><br>
					<label for="dragonSword">
						<input id="dragonSword" name="forgeItem" value="Потрошитель Дракона" type="radio"> Фростморн - <span class="priceItemHero">800</span> (Урон <em>25</em>)
					</label>
				</div>
				<div class="npc harald"><img src="img/harald.png" alt=""></div>
				<div class="master_btn__box harald_btn">
					<button class="btn" id="btn_forge">Ковать</button>
					<button class="btn" type="button" id="HaraldProduct">Товары</button>
					<button class="btn" type="button" id="btn_talkToHarald">Говорить</button>
				</div>
				<div class="dialog_box db bg-img db_forge" id="db_forge">
					<div class="db_close">х</div>
					<div class="dinamicTxt"></div>
				</div>
			</div>

		</div>
	</div>

	<!-- modals -->
	<?php require_once("inc/modals.php"); ?>
	<!-- footer -->
	<?php require_once("inc/footer.php"); ?>
