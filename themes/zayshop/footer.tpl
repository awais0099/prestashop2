{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if !isset($content_only) || !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			{if isset($HOOK_FOOTER)}
				<!-- Footer original -->
					{* <div class="footer-container">
						<footer id="footer"  class="container">
							<div class="row">{$HOOK_FOOTER}</div>
						</footer>
					</div> *}
				<!-- #footer -->

				<footer class="bg-dark" id="tempaltemo_footer">
					<div class="container">
						{$HOOK_FOOTER}
					</div>
					<div class='w-100 bg-black py-3'>
						<div class="container">
							<div class="row pt-2">
								<div class="col-12">
									<p class="text-left text-light">
	                            		Copyright &copy; 2021 Company Name
	                            		| Designed by <a rel="sponsored" href="https://	templatemo.com" target="_blank">TemplateMo</a>
                        			</p>
								</div>
							</div>
						</div>
					</div>
				</footer>

			{/if}
		</div><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
	</body>
</html>


{* <footer class="bg-dark" id="tempaltemo_footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 pt-5">
				<h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay Shop
				</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
			</div>
		</div>
	</div>
</footer> *}