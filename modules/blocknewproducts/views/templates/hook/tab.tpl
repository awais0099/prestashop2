{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{* href="#blocknewproducts":it means that when v click on a-tag this will show related products or new-products/new-arrival-products, to remove this the new-products/new-arrival-products will not show in the tab-content div.
now what happened the tab-content show when the page is load, now to completely remove this we need to remov/commented content in blocknewproducts_home.tpl file
 *}

{* <li><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts">{l s='New arrivals' mod='blocknewproducts'}</a></li>
 *}

{* *************************************************************************************************** *}

<div class="col-12 col-md-4 p-5 mt-3">
    <a data-toggle="tab" href="#" class="blocknewproducts">
		<img src="./themes/zayshop/img/category_img_01.jpg" class="rounded-circle img-fluid border">
	</a>

    <h5 class="text-center mt-3 mb-3">
   	{l s='Watches' mod='blocknewproducts'}
 	</h5>
    <p class="text-center">
    	<a class="btn btn-success">
    		{l s='Go Shop' mod='blocknewproducts'}
    	</a>
    </p>
</div>

