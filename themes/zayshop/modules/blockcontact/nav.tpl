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

{* <div id="contact-link" {if isset($is_logged) && $is_logged} class="is_logged"{/if}>
	<a href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}" title="{l s='Contact us' mod='blockcontact'}">{l s='--Contact us' mod='blockcontact'}</a>
</div> *}

{if $telnumber}
	<div style="color: white;" class="{if isset($is_logged) && $is_logged} 	is_logged{/if}">
		<i class="fa fa-envelope mx-2"></i>
		{l s='' mod='blockcontact'} 
		<a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">{'info@company.com'}</a>

		<i class="fa fa-phone mx-2"></i>
        <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">{$telnumber}</a>
	</div>

	{* <span style="color: white;" class="shop-phone{if isset($is_logged) && $is_logged} is_logged{/if}">
		<i class="icon-phone"></i>
		{l s='' mod='blockcontact'} 
		<strong>{$telnumber}</strong>
	</span> *}
{/if}


{* original-code <div id="contact-link" {if isset($is_logged) && $is_logged} class="is_logged"{/if}>
	<a href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}" title="{l s='Contact us' mod='blockcontact'}">
		{l s='Contact us' mod='blockcontact'}
	</a>
</div> *}

<div {if isset($is_logged) && $is_logged} class="is_logged"{/if}>
	<a class="text-light" href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}" title="{l s='Contact us' mod='blockcontact'}">
		{l s='Contact us' mod='blockcontact'}
	</a>
	<a class="text-light" href="https://fb.com/templatemo" target="_blank">
		<i class="fab fa-facebook-f fa-sm fa-fw me-2"></i>
	</a>
    
    <a class="text-light" href="https://www.instagram.com/" target="_blank">
    	<i class="fab fa-instagram fa-sm fa-fw me-2"></i>
    </a>
    
    <a class="text-light" href="https://twitter.com/" target="_blank">
    	<i class="fab fa-twitter fa-sm fa-fw me-2"></i>
    </a>
    
    <a class="text-light" href="https://www.linkedin.com/" target="_blank">
    	<i class="fab fa-linkedin fa-sm fa-fw"></i>
    </a>
</div>

