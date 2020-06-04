@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
		Горячая линия
  @endif
  @if (app()->getLocale() == 'kz')
    Қызметтің негізгі бағыттары
  @endif
  @if (app()->getLocale() == 'en')
    Operations
  @endif
@endsection

@section('main-content')

<div class="banner" style="background-image: url('img/main-deposits-slide.jpg');">
	<div class="container-fluid">
		<div class="flex align-items-baseline">
			<div class="title-wrapper">
				<div class="h1-wrap">
					<h1 class="small">
						Горячая линия
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="hotline">
	<div class="container-fluid">

		<div class="hotline__president">
			<div class="hotline__president-img">
				<img src="img/president.jpg" alt="Ельбаси">
				<h3>Дияр Канашев,
					Президент – Председатель Правления</h3>
			</div>
			<div class="hotline__president-description">
				<div class="hotline__president-headline">
					<h2>Запуск "горячей линии"</h2>
				</div>
				<div class="hotline__president-text">
					<p>АО «АК Алтыналмас» придерживается высочайших стандартов честности, открытости, ответственности и дорожит
						своей
						репутацией, и мы ожидаем от сотрудников и партнеров компании соблюдения высочайших стандартов этики и
						добросовестности.</p>

					<p>Для поддержания принципов честного и добросовестного ведения бизнеса крайне важно, чтобы у руководства
						компании была возможность получать информацию о нарушениях этических норм, законодательства, Кодекса
						корпоративной этики АО «АК Алтыналмас» или других внутренних правил. Это позволит компании своевременно
						реагировать на нарушения и устранять их.</p>

					<p>В этой связи <strong>я рад сообщить о запуске «Горячей линии»  для всех сотрудников АО «АК Алтыналмас»,
							дочерних
							компаний, а также деловых партнеров</strong>. Сообщение о любых предполагаемых нарушениях, совершаемых
						сотрудниками либо партнерами компании и дочерних предприятий, является крайне важным в соблюдении высочайших
						стандартов ведения бизнеса и сохранения репутации АО «АК Алтыналмас», как надежного бизнес-партнера.</p>

					<p>Мы призываем всех как можно раньше сообщать о своей обеспокоенности в отношении любых известных нарушений,
						инцидентов или ненадлежащем поведении на рабочем месте кем-либо из сотрудников компании – вне зависимости от
						должности. Мы понимаем, что вам может быть известна не вся информация о том, что вызывает у вас
						обеспокоенность, но это не должно быть причиной для отказа от подачи обращения.</p>

					<p>В соответствии с Положением по оповещению о нарушении этических норм, законодательства и внутренних
						правил, вы
						можете сообщить о любых случившихся или предполагаемых фактах хищений, мошенничества, коррупции и других
						нарушений этических норм и/или Кодекса корпоративной этики АО «АК Алтыналмас»:​</p>

					<ul>
						<li>позвонив по номеру  <a href="tel:88000809868">8 800 080 98 68</a> либо</li>
						<li>отправив сообщение на сайте  <a href="www.hihotline.com">www.hihotline.com</a>, используя ID
							компании: <span>0228-3300-9021-2601</span> и следуя
							инструкции;</li>
					</ul>

					<p>​​АО «АК Алтыналмас» не допускает какое-либо преследование или дискриминацию по отношению к работникам или
						к
						любым другим лицам, которые добросовестно заявляют о проблемах или сообщают о фактах нарушения деловой этики
						или законодательства. Вся информация принимается и обрабатывается внешней независимой компанией.</p>

					<p>В целях наиболее эффективной обработки вашего сообщения вам будет предложено оставить анонимное сообщение,
						однако вы также можете оставить контактную информацию, выбор придерживаться анонимности или нет остается за
						вами. Все сообщения будут рассмотрены.</p>

					<p>Для получения более детальной информации о работе «Горячей линии» посетите раздел «Вопросы горячей линии».
					</p>

					<p>Честное и добросовестное отношение к компании, коллегам, партнерам и бизнес-сообществу – один из важнейших
						приоритетов АО «АК Алтыналмас» в ведении бизнеса. Мы не толерантны к любого рода противоправным действиям и
						ожидаем такого же поведения от каждого работника компании и наших дочерних предприятий. Только неуклонно
						следуя принципу честностого и открытого бизнеса мы будем сохранять репутацию надежного бизнес-партнера и
						выбираемого работодателя страны.</p>
				</div>
				<div class="hotline__president-download">
					<a href="/img/pamyatka-kz-ru-en.pdf" class="btn btn-detail" download>Скачать инструкции</a>
				</div>
			</div>
		</div>

		<div class="hotline__description">
			<h2>Вопросы по горячей линии</h2>
			<div class="tabs-wrapper">
				<div class="tabs_head">
					<div class="tab">
						<div class="tab_point">
							<div>1. Для чего нужна горячая линия?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div></i>
						</div>
						<div class="tab_item">
							<p>Горячая линия дает возможность конфиденциально сообщать о
								случившихся или предполагаемых фактах коррупции, мошенничества,
								дискриминации, а также об иных нарушениях действующего
								законодательства, этических норм или Кодекса корпоративной этики АО
								«АК Алтыналмас» со стороны любых лиц.</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>​2. О каких видах правонарушений я могу сообщить?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>Вы можете сообщить на горячую линию о:​</p>
							<ul>
								<li>действия или бездействие, способные причинить вред жизни или
									здоровью человека;</li>
								<li>нарушение техники безопасности;</li>
								<li>совершение уголовного или административного правонарушения;</li>
								<li>введение в заблуждение Компанию, ее работников или деловых
									партнеров с целью получения незаконных финансовых выгод для
									своего подразделения или себя лично;</li>
								<li>намеренное искажение информации, прямо или косвенно влияющее
									на финансовую отчетность;</li>
								<li>грубое нарушение должностных и прочих обязанностей, повлекших
									или могущих повлечь ущерб Компании;</li>
								<li>действия или бездействие со стороны Компании, ее работников,
									которые могут повлечь вред окружающей среде;</li>
								<li>грубое нарушение правил внутреннего финансового учета и контроля;</li>
								<li>шантаж, коммерческий подкуп, взяточничество или иные проявления
									коррупции;</li>
								<li>грубое нарушение профессиональных или этических норм;</li>
								<li>домогательства;</li>
								<li>угрозы в адрес работников;</li>
								<li>употребление алкоголя или других запрещенных веществ;</li>
								<li>намеренное сокрытие сведений, относящихся к вышеуказанному.</li>
							</ul>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>3. Кто может воспользоваться горячей линией?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>Горячая линия доступна для всех работников АО «АК Алтыналмас», ее
								дочерних организаций, а также для любых третьих лиц (например,
								поставщиков, подрядчиков, исполнителей).</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>4. Как я могу сообщить о нарушениях на горячую линию?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>Вы можете сообщить информацию:</p>
							<ul>
								<li>оставив сообщение, позвонив по номеру <a href="tel:88000809868">8 800 080 98 68</a>, либо</li>
								<li>отправив сообщение на сайте <a href="www.hihotline.com">www.hihotline.com</a>, используя ID
									Компании: <span>0228-3300-9021-2601</span> и следуя инструкции.</li>
							</ul>
							<p>Все указанные виды связи работают круглосуточно без выходных.</p>
							​<p>Телефонные звонки или аудиосообщения являются бесплатными, не
								отслеживаются и налагают искажение голоса на голос лица, сообщающего
								о нарушении.</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>5. Какую информацию необходимо предоставить при обращении на
								горячую линию?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>Любая предоставляемая Вами информация будет принята во внимание.
								Однако предоставление более детальной информации и подтверждающих
								документов позволит рассмотреть Ваше обращение эффективно в
								кратчайшие сроки. Принимая во внимание этот факт, мы советуем Вам
								отразить в своем обращении следующую информацию:</p>
							<ul>
								<li>Что произошло?</li>
								<li>Где и когда произошел инцидент?</li>
								<li>При каких обстоятельствах Вам стало известно об инциденте?</li>
								<li>Кто был вовлечён в инцидент?</li>
								<li>Закончился ли инцидент или он продолжается в настоящее время?</li>
								<li>Какие подтверждающие документы Вы можете предоставить? Например, договоры, переписку, фотографии и
									пр.</li>
								<li>Иная дополнительная информация, которую Вы бы хотели сообщить.</li>
							</ul>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>6. Как обрабатывается предоставляемая мной информация?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>В целях обеспечения конфиденциальности вся информация принимается и
								обрабатывается внешней независимой компанией.</p>
							<p>Независимая компания ежедневно составляет отчёт о поступивших
								обращениях и направляет его в Службу комплаенс АО «АК Алтыналмас».</p>
							<p>Сотрудники Службы комплаенс принимают решение о дальнейших
								действиях по рассмотрению поступивших обращений в соответствии с
								внутренними политиками.</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>7. Каковы гарантии сохранения конфиденциальности и анонимности
								предоставляемой мной информации, если я желаю не раскрывать
								свою личность?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>Если Вы желаете не раскрывать своё имя при подаче сообщения,
								персональная информация не будет собираться на горячей линии и не
								будет передаваться в Службу комплаенс.</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>8. Могу ли я быть уверен в отсутствии преследования
								или ответных мер в отношении себя после предоставления
								информации?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>АО «АК Алтыналмас» обеспечит защиту работников и лиц, сообщающих о
								проблемах и нарушениях, от запугивания, преследования и дискриминации.
								О любых предполагаемых ответных мерах или преследовании следует
								сообщить в Службу комплаенс для обеспечения незамедлительного
								должного противодействия.</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>9. Каковы сроки рассмотрения сообщений?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>Срок рассмотрения сообщений зависит от многих факторов, в том числе
								полноты и точности информации, указанной в сообщении, от наличия
								подтверждающих документов, а также от вида нарушения.</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>10. Как отследить/узнать статус исполнения о принятых мерах по
								обращению (обратная связь)?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>Каждому обращению присваивается регистрационный номер (уникальный
								код заявки), запишите его.</p>
							<p>Зайдите на сайт <a href="www.hihotline.com">www.hihotline.com</a>, далее перейдите в раздел – «Если вы
								хотите ознакомиться с результатами ранее отправленного обращения,
								нажмите сюда: Посмотреть»</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>11. К кому следует обращаться, если у меня есть вопросы о горячей
								линии?</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>Если у Вас возникнут любые вопросы, свяжитесь с сотрудниками Службы
								комплаенс:</p>
							<p>Вице-президент по правовым вопросам и комплаенс-контролю</p>
							<p>Маркашов Арман Досмуханович</p>
							<p>Тел: <a href="tel:+77273500200">+77273500200</a> вн. 3109</p>
							<p>Моб: <a href="+77717130852">+77717130852</a></p>
							<a href="mailto:Arman.Markashov@altynalmas.kz">Arman.Markashov@altynalmas.kz</a>
							<p>Комплаенс менеджер</p>
							<p>Дарменов Ержан Канибекович</p>
							<p>Тел: <a href="tel:+77273500200">+77273500200</a> вн. 3222</p>
							<p>Моб: <a href="+77714520282">+77714520282</a></p>
							<p><a href="mailto:Yerzhan.Darmenov@altynalmas.kz">Yerzhan.Darmenov@altynalmas.kz</a></p>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /.committee -->


@endsection