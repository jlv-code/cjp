<?php

	/**
		@author: jlv
		@file: footer.php
		@version: 1.0
	 */

?>

			</div> <!-- CLASS MAIN-INNER END -->
		</main> <!-- MAIN END -->

		<footer id="footer" class="Footer">
			<div class="Footer-inner">
				<div class="Block Foot Foot--top u-br-orange">
					<div class="Block-inner u-inner">
						<a class="Box Footer-icon" target="_blank" href="http://www.defensapublica.gob.ve/"><img src="<?php echo get_template_directory_uri() ?>/static/images/defensa-publica.png" alt=""></a>
						<a class="Box Footer-icon" target="_blank" href="http://tsj-dem.gob.ve/"><img src="<?php echo get_template_directory_uri() ?>/static/images/dem.png" alt=""></a>
						<a class="Box Footer-icon" target="_blank" href="http://www.defensoria.gob.ve"><img src="<?php echo get_template_directory_uri() ?>/static/images/defensoria-del-pueblo.png" alt=""></a>
						<a class="Box Footer-icon" target="_blank" href="http://www.ministeriopublico.gob.ve/"><img src="<?php echo get_template_directory_uri() ?>/static/images/ministerio-publico.png" alt=""></a>
						<a class="Box Footer-icon" target="_blank" href="http://www.tsj.gob.ve/"><img src="<?php echo get_template_directory_uri() ?>/static/images/tsj.png" alt=""></a>
						<a class="Box Footer-icon" target="_blank" href="http://enm.tsj.gob.ve/"><img src="<?php echo get_template_directory_uri() ?>/static/images/enm.png" alt=""></a>
					</div>
				</div>
				<div class="Block Foot Foot--bottom u-bg-black">
					<div class="Block-inner u-inner">
						<p class="Rights u-txt-orange">&copy;<?php echo date('Y') ?> | Todos los Derechos Reservados<br>Circuito Judicial Penal del Estado Bolivariano de Miranda</p>
					</div>
				</div>
			</div>
		</footer>
	</section> <!-- SECTION END -->
	<?php wp_footer() ?>
</body>
</html>