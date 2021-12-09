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
{if isset($HOOK_HOME_TAB_CONTENT) && $HOOK_HOME_TAB_CONTENT|trim}
    {if isset($HOOK_HOME_TAB) && $HOOK_HOME_TAB|trim}
    	<section>
    		<div class="row text-center pt-3">
	            <div class="col-lg-6 m-auto">
	                <h1 class="h1">Categories of The Month</h1>
	                <p>
	                	{l s="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
	                    deserunt mollit anim id est laborum" mod=""}
	                </p>
	            </div>
        	</div>
        	<div class="row">
        		{* this is original tab *}
		        <ul id="home-page-tabs" class="nav nav-tabs clearfix" style="border: 1px solid red;">
					{$HOOK_HOME_TAB}
				</ul>	
				{* close original tab *}
        	</div>
    	</section>
    	
		{* <section id="home-page-tabs">	
			{$HOOK_HOME_TAB}
		</section> *}
	{/if}
	<div class="tab-content" style="margin-top: 0px;">
		<section>
			
		</section>
		<section class="bg-light">
			{$HOOK_HOME_TAB_CONTENT}
		</section>
	</div>
{/if}
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
	<div class="clearfix">{$HOOK_HOME}</div>
{/if}
