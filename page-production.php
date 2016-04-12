<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<main class="production container" role="main">
		<?php the_title( sprintf( '<h1 class="page-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
		<div class="content-area col-sm-9">			
			<article class="article production__article">
				<p>Мы проектируем и производим для наших клиентов:</p>
				<ul>
					<li>полнокомплектные здания индивидуального проектирования; </li>
					<li>серийные здания;</li>
					<li>металлоконструкции; </li>
					<li>сварные балки постоянного и переменного сечения; </li>
					<li>вальцовку (гибку) профилей;</li>
					<li>профилированный настил (14 видов); </li>
					<li>фасадные облицовки; </li>
					<li>металлочерепицу (3 вида); </li>
					<li>сайдинг (3 вида); </li>
					<li>фальцевую кровлю; </li>
					<li>водосточные системы; </li>
					<li>широкий спектр доборных элементов; </li>
					<li>продольно-поперечную резку рулонной стали; </li>
					<li>поставки стали оцинкованной и стали оцинкованной с полимерным покрытием; </li>
					<li>трёхслойные сэндвич-панели с минераловатным наполнителем; </li>
					<li>оцинкованную сталь в рулонах и оцинкованную сталь в рулонах с полимерным покрытием.</li>
				</ul>
			</article>
			<div class="production__showcase">
				<div>
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#prod-1" aria-controls="prod-1" role="tab" data-toggle="tab">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/production/1.jpg" alt="">
						<h5>Завод профнастила</h5>
						</a></li>
						<li role="presentation"><a href="#prod-2" aria-controls="prod-2" role="tab" data-toggle="tab">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/production/2.jpg" alt="">
						<h5>Завод металлоконструкций</h5></a></li>
						<li role="presentation"><a href="#prod-3" aria-controls="prod-3" role="tab" data-toggle="tab">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/production/3.jpg" alt="">
						<h5>Завод теплоизоляционных изделий</h5></a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="prod-1">
							<p>Производство из стали оцинкованной и с полимерным покрытием широкой цветовой гаммы:
							<ul>
								<li>профнастила Н158, Н153, Н114 (600 и 750), Н75, Н60, С44, НС35, С21, С18, В18, С17, С13, C8 по ГОСТ 24045-94 и ТУ 1122-079-02494680-01;
								<li>металлочерепицы «Монтеррей» с универсальным шагом черепицы и фигурной обрезкой переднего края;
								<li>фальцевой кровли «Классика»;
								<li>трех видов сайдинга;
								<li>водосточной системы прямоугольного сечения;
								<li>всех необходимых доборных элементов для монтажа кровли и сайдинга.
								<li>Продольная и поперечная резка рулонной стали толщиной 0,4-1,5 мм.
							</ul>							
							<p>Завод выпускает до 1 млн.кв.метров продукции в месяц.
							В производстве используется сталь оцинкованная по ГОСТ Р 52246-2004, ГОСТ 14918-80, EN 10147, EN 10346 и сталь оцинкованная с полимерным покрытием по ГОСТ Р 52146-2003, EN 10169.
						</div>
						<div role="tabpanel" class="tab-pane" id="prod-2">
							<p>Завод оснащен высокотехнологичным металлообрабатывающим оборудованием ведущих фирм-производителей Германии, Италии и США. 
							<p>Высокая точность изготавливаемых металлоконструкций достигается за счет: 
							<ul>
							<li>оснащения всех автоматизированных линий ЧПУ, интегрированным в общую систему управления; 
							<li>применения новой технологии разметки и маркировки на металлических заготовках для установки и сварки закладных деталей, которая осуществляется в автоматическом режиме специальным маркером (скрайбинг), что практически исключает ошибки при сборке металлоконструкций. 
							</ul>
							Завод оснащен комплексной автоматизированной системой управления, которая охватывает: 
							<ul>
							<li>склад металлопроката; 
							<li>автоматизированные линии, производящие обработку металла; 
							<li>участки сборки и сварки; 
							<li>участок окраски и сушки (до 80°С); 
							<li>склад готовой продукции 
							<li>процесс отгрузки потребителям. 
							</ul>
							<p>Отличительные особенности завода металлоконструкций: <ul>
							<li>Комплексная автоматизированная система управления.
							<li>Высокая точность изготавливаемых конструкций; 
							<li>Высокое качество окраски поверхности металлоконструкций (100% дробеметная обработка входящего металла и дробеструйная обработка готовых изделий перед покраской); 
							<li>Постоянный контроль качества продукции на всех этапах; 
							<li>Возможность производства вальцованных балок позволяет разнообразить архитектурные и объёмно-планировочные решения проектируемых зданий; 
							<li>Сжатые сроки проектирования и поставки. 
							</ul>
							<p>Преимущества для клиентов 
							<ul>
							<li>Качество - как гарантия инвестиций; 
							<li>Скорость строительства – быстрый возврат вложенных клиентом инвестиций; 
							<li>Высокая степень заводской готовности 
							<li>Возможность комплектования зданий производственного и складского назначения современными ресурсосберегающими кранами Konecranes; 
							<li>Возможность заказать и получить все здание сразу; 
							<li>Применение передовых материалов и технологий при проектировании и изготовлении; 
							<li>Своевременность поставок. 
							<li>Монтаж с колес.
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="prod-3">
							<p>Завод теплоизоляционных изделий включает в себя два вида производства:
							<ul>
							<li>производство минераловатных плит на основе горных пород базальтовой группы; 
							<li>производство стеновых и кровельных сэндвич-панелей с наполнителем из минеральной ваты и всех необходимых доборных элементов для них. 
							</ul>
							<p>Производство минераловатных плит было запущено в конце апреля 2012 года. Линия укомплектована современным оборудованием фирмы “Gamma Meccanica S.p.A.” (Италия), которое производит минераловатные плиты плотностью от 35 до 220 кг/м3. Особое внимание при разработке конструкции этой линии уделялось производству минераловатных плит для использования в качестве среднего теплоизоляционного слоя при изготовлении трехслойных стеновых и кровельных сэндвич-панелей. 

							<p>Линия по изготовлению сэндвич-панелей произведена компанией “Industrie Pu.ma. S.r.l” (Италия). 

							<p>Плиты теплоизоляционные минераловатные на основе горных пород базальтовой группы. . 

							<p>Основные свойства продукции: 
							<ul>
							<li>низкий коэффициент теплопроводности; 
							<li>устойчивость к деформации; 
							<li>звукоизоляция; 
							<li>гидрофобность; 
							<li>паропроницаемость; 
							<li>негорючесть; 
							<li>экологичность; 
							<li>срок службы не менее 50 лет.
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- #primary -->
		<?php get_sidebar($name = 'test'); ?>
	</main><!-- #main -->

<?php get_footer(); ?>
