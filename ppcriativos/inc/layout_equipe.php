<div id="equipe">
	<div class="container">
		<h2>Conheça a equipe</h2>
		<div class="cont-equipes">

			<?php 
			$args = array( 
				'post_type' => 'equipe', 
				'offset'=> 0, 
				'numberposts' => 100, 
				'order' => DESC
				); 
			$postslist = get_posts( $args ); 
			foreach ( $postslist as $post ) : 
			setup_postdata( $post ); ?>

		          	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div>
							<h3><?php the_title(); ?></h3>
							<p><?php the_field('ultima_titulacao'); ?></p>
						</div>
					</div>
					
			<?php endforeach; wp_reset_postdata(); ?>


			<?php /* ?>
			<div>
				<div>
					<h3>Adair Marques</h3>
					<p>Doutor pela Universidade de Brasília</p>
				</div>
			</div>
			<div>
				<div>
					<h3>Décio Coutinho</h3>
					<p>Mestre pela Universidade Católica de Goiás</p>
				</div>
			</div>
			<div>
				<div>
					<h3>Dorivalda Neira de Medeiros</h3>
					<p>Doutora pela Universidade Federal do Rio Grande do Norte </p>
				</div>
			</div>
			<div>
				<div>
					<h3>Fábio Lima</h3>
					<p>Doutor pela Universidade de Brasília</p>
				</div>
			</div>
			<div>
				<div>
					<h3>Lavínnia Seabra</h3>
					<p>Doutora pela Universidade de Brasília</p>
				</div>
			</div>
			<div>
				<div>
					<h3>Lilian Ucker</h3>
					<p>Doutora pela Universidade de Barcelona, Espanha</p>
				</div>
			</div>
			<div>
				<div>
					<h3>Lorena Abdala</h3>
					<p>Doutora pela Universidade Federal de Goiás</p>
				</div>
			</div>
			<div>
				<div>
					<h3>Márcio da Rocha</h3>
					<p>Ph.D pela Universidade de Plymouth, Reino Unido</p>
				</div>
			</div>
			<div>
				<div>
					<h3>Raimundo Martins</h3>
					<p>Pós-doutor pelas Universidade de Londres e Universidade de Barcelona</p>
				</div>
			</div>
			<div>
				<div>
					<h3>Ravi Passos</h3>
					<p>Doutor pela Universidade de Aveiro, Portugal</p>
				</div>
			</div>
			<div>
				<div>
					<h3>Ricardo Limongi</h3>
					<p>Doutorando pela EAESP-FGV com período sanduíche na Universidade de Cornell, EUA</p>
				</div>
			</div>
			<?php */ ?>
			
		</div>
	</div>
</div>