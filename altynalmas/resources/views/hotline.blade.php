@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
	Корпоративная этика и комплаенс
  @endif
  @if (app()->getLocale() == 'kz')
	Корпоративті этика және комплаенс
  @endif
  @if (app()->getLocale() == 'en')
	Corporate Ethics and Compliance
  @endif
@endsection

@section('main-content')

<div class="banner" style="background-image: url('img/main-deposits-slide.jpg');">
	<div class="container-fluid">
		<div class="flex align-items-baseline">
			<div class="title-wrapper">
				<div class="h1-wrap">
					<h1 class="small">
						@lang('messages.Корпоративная этика и комплаенс')
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
				<h3>@lang('messages.Дияр Канашев,<br> Президент – Председатель Правления')</h3>

				<div class="hotline__president-btns">
					<div class="hotline__president-download">
						@if (app()->getLocale() == 'ru')
							<p>Кодекс корпоративной этики АО "АК Алтыналмас"</p>
							<a href="{{ asset('/files/Кодекс_корпоративной_этики_АО_АК_Алтыналмаc.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
						@endif
						@if (app()->getLocale() == 'kz')
							<p>«АК Алтыналмас» АҚ Корпоративтік әдеп кодексі</p>
							<a href="{{ asset('/files/«АК_Алтыналмас»_АҚ_Корпоративтік_әдеп_кодексі.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
						@endif
						@if (app()->getLocale() == 'en')
							<p>Code of Conduct of JSC AK Altynalmas</p>
							<a href="{{ asset('/files/Code_of_Conduct_of_JSC_AK_Altynalmas.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
						@endif
					</div>
					<div class="hotline__president-download">
						@if (app()->getLocale() == 'ru')
							<p>Политика по урегулированию конфликта интересов</p>
							<a href="{{ asset('/files/Политика_по_урегулированию_конфликта_интересов_АО_АК_Алтыналмас.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
						@endif
						@if (app()->getLocale() == 'kz')
							<p>«Алтыналмас АК» АҚ Жұмыскерлер мен лауазымды тұлғалардың мүдделер қақтығысын реттеу жөніндегі саясаты</p>
							<a href="{{ asset('/files/«Алтыналмас_АК»_АҚ_Жұмыскерлер_мен_лауазымды_тұлғалардың_мүдделер_қақтығысын_реттеу_жөніндегі_саясаты.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
						@endif
						@if (app()->getLocale() == 'en')
							<p>JSC “AK Altynalmas” Employees and Officials Conflict of Interest Management Policy</p>
							<a href="{{ asset('/files/Employees_and_Officials_Conflict_of_interest_management_policy.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
						@endif
					</div>
					<div class="hotline__president-download">
						@if (app()->getLocale() == 'ru')
							<p>Положение по оповещению о нарушении этических норм законодательства и внутренних правил</p>
							<a href="{{ asset('/files/Положение_по_оповещению_о_нарушении_этических_норм_АО_АК_Алтыналмас.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
						@endif
						@if (app()->getLocale() == 'kz')
							<p>«Алтыналмас АК» АҚ этикалық нормалардын, заңнаманың және ішкі ережелердің бұзылуы туралы хабарлау жөніндегі ережесі</p>
							<a href="{{ asset('/files/«Алтыналмас_АК»_АҚ_этикалық_нормалардын,_заңнаманың_және_ішкі_ережелердің_бұзылуы_туралы_хабарлау_жөніндегі_ережесі.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
						@endif
						@if (app()->getLocale() == 'en')
							<p>Regulations for reporting violation of ethical standards, laws, and corporate policies of JSC “AK Altynalmas”</p>
							<a href="{{ asset('/files/Regulations_for_reporting_violation_of_ethical_standarts,_laws_and_corporate_policies.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
						@endif
					</div>
				</div>
			</div>
			<div class="hotline__president-description">
				<div class="hotline__president-headline">
					<h2>@lang('messages.Запуск "горячей линии"')</h2>
				</div>
				<div class="hotline__president-text">
					<p>@lang('messages.АО «АК Алтыналмас» придерживается высочайших стандартов честности, открытости, ответственности и дорожит своей репутацией, и мы ожидаем от сотрудников и партнеров компании соблюдения высочайших стандартов этики и добросовестности.')</p>

					<p>@lang('messages.Для поддержания принципов честного и добросовестного ведения бизнеса крайне важно, чтобы у руководства компании была возможность получать информацию о нарушениях этических норм, законодательства, Кодекса корпоративной этики АО «АК Алтыналмас» или других внутренних правил. Это позволит компании своевременно реагировать на нарушения и устранять их.')</p>

					<p>@lang('messages.В этой связи <strong>я рад сообщить о запуске «Горячей линии»  для всех сотрудников АО «АК Алтыналмас», дочерних компаний, а также деловых партнеров</strong>. Сообщение о любых предполагаемых нарушениях, совершаемых сотрудниками либо партнерами компании и дочерних предприятий, является крайне важным в соблюдении высочайших стандартов ведения бизнеса и сохранения репутации АО «АК Алтыналмас», как надежного бизнес-партнера.')</p>

					<p>@lang('messages.Мы призываем всех как можно раньше сообщать о своей обеспокоенности в отношении любых известных нарушений, инцидентов или ненадлежащем поведении на рабочем месте кем-либо из сотрудников компании – вне зависимости от должности. Мы понимаем, что вам может быть известна не вся информация о том, что вызывает у вас обеспокоенность, но это не должно быть причиной для отказа от подачи обращения.')</p>

					<p>@lang('messages.В соответствии с Положением по оповещению о нарушении этических норм, законодательства и внутренних правил, вы можете сообщить о любых случившихся или предполагаемых фактах хищений, мошенничества, коррупции и других нарушений этических норм и/или Кодекса корпоративной этики АО «АК Алтыналмас»:')​</p>

					<ul>
						<li>@lang('messages.позвонив по номеру  <a href="tel:88000809868">8 800 080 98 68</a> либо')</li>
						<li>@lang('messages.отправив сообщение на сайте  <a href="www.hihotline.com">www.hihotline.com</a>, используя ID компании: <span>0228-3300-9021-2601</span> и следуя инструкции;')</li>
					</ul>

					<p>​​@lang('messages.АО «АК Алтыналмас» не допускает какое-либо преследование или дискриминацию по отношению к работникам или к любым другим лицам, которые добросовестно заявляют о проблемах или сообщают о фактах нарушения деловой этики или законодательства. Вся информация принимается и обрабатывается внешней независимой компанией.')</p>

					<p>@lang('messages.В целях наиболее эффективной обработки вашего сообщения вам будет предложено оставить анонимное сообщение,однако вы также можете оставить контактную информацию, выбор придерживаться анонимности или нет остается завами. Все сообщения будут рассмотрены.')</p>

					<p>@lang('messages.Для получения более детальной информации о работе «Горячей линии» посетите раздел «Вопросы горячей линии».')
					</p>

					<p>@lang('messages.Честное и добросовестное отношение к компании, коллегам, партнерам и бизнес-сообществу – один из важнейшихприоритетов АО «АК Алтыналмас» в ведении бизнеса. Мы не толерантны к любого рода противоправным действиям и ожидаем такого же поведения от каждого работника компании и наших дочерних предприятий. Только неуклонноследуя принципу честностого и открытого бизнеса мы будем сохранять репутацию надежного бизнес-партнера ивыбираемого работодателя страны.')</p>
				</div>
				<div class="hotline__president-download">
					<a href="/img/pamyatka-kz-ru-en.pdf" class="btn btn-detail" download>@lang('messages.Скачать инструкции')</a>
				</div>
			</div>
		</div>

		<div class="hotline__description">
			<h2>@lang('messages.Вопросы по горячей линии')</h2>
			<div class="tabs-wrapper">
				<div class="tabs_head">
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.1. Для чего нужна горячая линия?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div></i>
						</div>
						<div class="tab_item">
							<p>@lang('messages.Горячая линия дает возможность конфиденциально сообщать о случившихся или предполагаемых фактах коррупции, мошенничества, дискриминации, а также об иных нарушениях действующего законодательства, этических норм или Кодекса корпоративной этики АО «АК Алтыналмас» со стороны любых лиц.')</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>​@lang('messages.2. О каких видах правонарушений я могу сообщить?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.Вы можете сообщить на горячую линию о:')​</p>
							<ul>
								<li>@lang('messages.действия или бездействие, способные причинить вред жизни или здоровью человека;')</li>
								<li>@lang('messages.нарушение техники безопасности;')</li>
								<li>@lang('messages.совершение уголовного или административного правонарушения;')</li>
								<li>@lang('messages.введение в заблуждение Компанию, ее работников или деловых партнеров с целью получения незаконных финансовых выгод для своего подразделения или себя лично;')</li>
								<li>@lang('messages.намеренное искажение информации, прямо или косвенно влияющее на финансовую отчетность;')</li>
								<li>@lang('messages.грубое нарушение должностных и прочих обязанностей, повлекших или могущих повлечь ущерб Компании;')</li>
								<li>@lang('messages.действия или бездействие со стороны Компании, ее работников, которые могут повлечь вред окружающей среде;')</li>
								<li>@lang('messages.грубое нарушение правил внутреннего финансового учета и контроля;')</li>
								<li>@lang('messages.шантаж, коммерческий подкуп, взяточничество или иные проявления коррупции;')</li>
								<li>@lang('messages.грубое нарушение профессиональных или этических норм;')</li>
								<li>@lang('messages.домогательства;')</li>
								<li>@lang('messages.угрозы в адрес работников;')</li>
								<li>@lang('messages.употребление алкоголя или других запрещенных веществ;')</li>
								<li>@lang('messages.намеренное сокрытие сведений, относящихся к вышеуказанному.')</li>
							</ul>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.3. Кто может воспользоваться горячей линией?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.Горячая линия доступна для всех работников АО «АК Алтыналмас», ее дочерних организаций, а также для любых третьих лиц (например, поставщиков, подрядчиков, исполнителей).')</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.4. Как я могу сообщить о нарушениях на горячую линию?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.Вы можете сообщить информацию:')</p>
							<ul>
								<li>@lang('messages.оставив сообщение, позвонив по номеру <a href="tel:88000809868">8 800 080 98 68</a>, либо')</li>
								<li>@lang('messages.отправив сообщение на сайте <a href="www.hihotline.com">www.hihotline.com</a>, используя ID Компании: <span>0228-3300-9021-2601</span> и следуя инструкции.')</li>
							</ul>
							<p>@lang('messages.Все указанные виды связи работают круглосуточно без выходных.')</p>
							​<p>@lang('messages.Телефонные звонки или аудиосообщения являются бесплатными, не отслеживаются и налагают искажение голоса на голос лица, сообщающего о нарушении.')</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.5. Какую информацию необходимо предоставить при обращении на горячую линию?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.Любая предоставляемая Вами информация будет принята во внимание. Однако предоставление более детальной информации и подтверждающих документов позволит рассмотреть Ваше обращение эффективно в кратчайшие сроки. Принимая во внимание этот факт, мы советуем Вам отразить в своем обращении следующую информацию:')</p>
							<ul>
								<li>@lang('messages.Что произошло?')</li>
								<li>@lang('messages.Где и когда произошел инцидент?')</li>
								<li>@lang('messages.При каких обстоятельствах Вам стало известно об инциденте?')</li>
								<li>@lang('messages.Кто был вовлечён в инцидент?')</li>
								<li>@lang('messages.Закончился ли инцидент или он продолжается в настоящее время?')</li>
								<li>@lang('messages.Какие подтверждающие документы Вы можете предоставить? Например, договоры, переписку, фотографии и пр.')</li>
								<li>@lang('messages.Иная дополнительная информация, которую Вы бы хотели сообщить.')</li>
							</ul>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.6. Как обрабатывается предоставляемая мной информация?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.В целях обеспечения конфиденциальности вся информация принимается и обрабатывается внешней независимой компанией.')</p>
							<p>@lang('messages.Независимая компания ежедневно составляет отчёт о поступивших обращениях и направляет его в Службу комплаенс АО «АК Алтыналмас».')</p>
							<p>@lang('messages.Сотрудники Службы комплаенс принимают решение о дальнейших действиях по рассмотрению поступивших обращений в соответствии с внутренними политиками.')</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.7. Каковы гарантии сохранения конфиденциальности и анонимности предоставляемой мной информации, если я желаю не раскрывать свою личность?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.Если Вы желаете не раскрывать своё имя при подаче сообщения, персональная информация не будет собираться на горячей линии и не будет передаваться в Службу комплаенс.')</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.8. Могу ли я быть уверен в отсутствии преследования или ответных мер в отношении себя после предоставления информации?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.АО «АК Алтыналмас» обеспечит защиту работников и лиц, сообщающих о проблемах и нарушениях, от запугивания, преследования и дискриминации. О любых предполагаемых ответных мерах или преследовании следует сообщить в Службу комплаенс для обеспечения незамедлительного должного противодействия.')</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.9. Каковы сроки рассмотрения сообщений?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.Срок рассмотрения сообщений зависит от многих факторов, в том числе полноты и точности информации, указанной в сообщении, от наличия подтверждающих документов, а также от вида нарушения.')</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.10. Как отследить/узнать статус исполнения о принятых мерах по обращению (обратная связь)?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.Каждому обращению присваивается регистрационный номер (уникальный код заявки), запишите его.')</p>
							<p>@lang('messages.Зайдите на сайт <a href="www.hihotline.com">www.hihotline.com</a>, далее перейдите в раздел – «Если вы хотите ознакомиться с результатами ранее отправленного обращения, нажмите сюда: Посмотреть»')</p>
						</div>
					</div>
					<div class="tab">
						<div class="tab_point">
							<div>@lang('messages.11. К кому следует обращаться, если у меня есть вопросы о горячей линии?')</div>
							<div class="tab_point-icon"><i class="icon-left"></i></div>
						</div>
						<div class="tab_item">
							<p>@lang('messages.Если у Вас возникнут любые вопросы, свяжитесь с сотрудниками Службы комплаенс:')</p>
							<p>@lang('messages.Вице-президент по правовым вопросам и комплаенс-контролю')</p>
							<p>@lang('messages.Маркашов Арман Досмуханович')</p>
							<p>@lang('messages.Тел: <a href="tel:+77273500200">+77273500200</a> вн. 3109')</p>
							<p>@lang('messages.Моб: <a href="+77717130852">+77717130852</a>')</p>
							<p><a href="mailto:Arman.Markashov@altynalmas.kz">Arman.Markashov@altynalmas.kz</a></p>
							<p>@lang('messages.Комплаенс менеджер')</p>
							<p>@lang('messages.Дарменов Ержан Канибекович')</p>
							<p>@lang('messages.Тел: <a href="tel:+77273500200">+77273500200</a> вн. 3222')</p>
							<p>@lang('messages.Моб: <a href="+77714520282">+77714520282</a>')</p>
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