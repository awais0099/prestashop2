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
<!-- Block Newsletter module-->
{* <div id="newsletter_block_left" class="block">
	<h4>{l s='Newsletter' mod='blocknewsletter'}</h4>
	<div class="block_content">
		<form action="{$link->getPageLink('index', null, null, null, false, null, true)|escape:'html':'UTF-8'}" method="post">
			<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
				<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{if isset($msg) && $msg}{$msg}{elseif isset($value) && $value}{$value}{else}{l s='Enter your e-mail' mod='blocknewsletter'}{/if}" />
				<button type="submit" name="submitNewsletter" class="btn btn-default button button-small">
					<span>{l s='Ok' mod='blocknewsletter'}</span>
				</button>
				<input type="hidden" name="action" value="0" />
			</div>
			{if isset($id_module)}
				{hook h='displayGDPRConsent' id_module=$id_module}
			{/if}
		</form>
	</div>
	{hook h="displayBlockNewsletterBottom" from='blocknewsletter'}
</div>
<!-- /Block Newsletter module-->
{strip}
{if isset($msg) && $msg}
{addJsDef msg_newsl=$msg|@addcslashes:'\''}
{/if}
{if isset($nw_error)}
{addJsDef nw_error=$nw_error}
{/if}
{addJsDefL name=placeholder_blocknewsletter}{l s='Enter your e-mail' mod='blocknewsletter' js=1}{/addJsDefL}
{if isset($msg) && $msg}
	{addJsDefL name=alert_blocknewsletter}{l s='Newsletter : %1$s' sprintf=$msg js=1 mod="blocknewsletter"}{/addJsDefL}
{/if}
{/strip} *}


{* ******************************************************************************************** *}

<div id="newsletter_block_left" style="width: 40%;text-align: right;">
	{* <h4>{l s='Newsletter' mod='blocknewsletter'}</h4> *}
	<div class="block_content">
		<form action="{$link->getPageLink('index', null, null, null, false, null, true)|escape:'html':'UTF-8'}" method="post">
			<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
				<input class="inputNew form-control bg-dark border-light newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{if isset($msg) && $msg}{$msg}{elseif isset($value) && $value}{$value}{else}{l s='Enter your e-mail' mod='blocknewsletter'}{/if}" 
				style="width: 255px;display: inline-block;padding: 20px 10px;line-height: 1.5;color: #6b6f73;border-radius: .25rem;margin-right: 0px;" 
				/>
				<button type="submit" name="submitNewsletter" class="btn btn-default button button-small btn-success text-light" style="padding: 10px 10px;margin-left: -8px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;font-weight: 300; font-size: 18px;">
					{* <span>{l s='Submit' mod='blocknewsletter'}</span> *}
					{l s='Subscribed' mod='blocknewsletter'}
				</button>
				<input type="hidden" name="action" value="0" />
			</div>
			{if isset($id_module)}
				{hook h='displayGDPRConsent' id_module=$id_module}
			{/if}
		</form>
	</div>
	{hook h="displayBlockNewsletterBottom" from='blocknewsletter'}
</div>
<!-- /Block Newsletter module-->
{strip}
{if isset($msg) && $msg}
{addJsDef msg_newsl=$msg|@addcslashes:'\''}
{/if}
{if isset($nw_error)}
{addJsDef nw_error=$nw_error}
{/if}
{addJsDefL name=placeholder_blocknewsletter}{l s='Enter your e-mail' mod='blocknewsletter' js=1}{/addJsDefL}
{if isset($msg) && $msg}
	{addJsDefL name=alert_blocknewsletter}{l s='Newsletter : %1$s' sprintf=$msg js=1 mod="blocknewsletter"}{/addJsDefL}
{/if}
{/strip}

	{* <div class="col-auto">
		<label class="sr-only" for="subscribeEmail">Email address</label>
		<div class="input-group mb-2">
			<input type="text" class="form-control border-light" id="subscribeEmail" placeholder="Email address">
			<div class="input-group-text btn-success text-light">Subscribe</div>
		</div>
	</div> *}
</div>

