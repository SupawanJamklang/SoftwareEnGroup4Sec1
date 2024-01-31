{*
 * 2017-2022 PrestaShop
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
 * @author    MBE Worldwide
 * @copyright 2017-2024 MBE Worldwide
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of MBE Worldwide
*}

<div id="mbeshipping_welcome_page" class="welcome-page {if Context::getContext()->isMobile()}tab-content col-lg-12 clearfix{/if}">
    <div class="panel mbe">
        <div class="panel-heading mbe">
            {l s='Welcome' mod='mbeshipping'}
        </div>
    </div>

    <div class="first_banner_landing" style="background-image: url({$banner_background|escape:'htmlall':'UTF-8'})">
        <div class="txt_banner_lading">
            <h1 class="title_txt_banner">{l s='eShip ' mod='mbeshipping'}
                <span class="txt-red">{l s='for' mod='mbeshipping'}</span>
                <span style="margin-left: -10px;"> {l s='PrestaShop' mod='mbeshipping'}<span>
            </h1>
            <h2 class="subtitle_txt_banner">
                {l s='The suite of digital solutions' mod='mbeshipping'}
                <br>
                {l s='for e-commerce logistics' mod='mbeshipping'}
            </h2>
        </div>
    </div>

    <div class="content-wrapper">
        <h2 class="title text-center">{l s='Automate the processes of logistics, shipping and' mod='mbeshipping'}</h2>
        <h2 class="title text-center" style="margin-top:0px;">{l s='order management with' mod='mbeshipping'}</h2>
        <img class="banner-welcome" src="{$banner_eship|escape:'htmlall':'UTF-8'}" alt="Image"/>
        <h4 class="mt-2 text-center">
            {l s='MBE eShip plug-in' mod='mbeshipping'}
            <b>{l s='automates your e-commerce order and returns' mod='mbeshipping'}</b>
            {l s='management by connecting your online store to MBE\'s systems, allowing our experts to take care of all logistics operations. The ideal solution for companies that want to sell online, even in the start-up phase, thanks to its' mod='mbeshipping'}
            <b>{l s='flexibility and highly customisable functionality' mod='mbeshipping'}</b>.
        </h4>


        {if Context::getContext()->isMobile()}
            <div class="row-of-button-mb">
                <div class="col col-12">
                    <button class="btn btn-primary" onclick="loginMbeUser()" id="btn_login_mbe_user">{l s='Login' mod='mbeshipping'}</button>
                </div>
                <div class="col col-12">
                    <button class="btn btn-secondary" onclick="registerMbeUser()" id="btn_register_mbe_user">{l s='Register' mod='mbeshipping'}</button>
                </div>
            </div>
        {else}
            <div class="row buttons my-2    ">
                <button class="btn btn-primary" onclick="loginMbeUser()" id="btn_login_mbe_user">{l s='Login' mod='mbeshipping'}</button>
                <button class="btn btn-secondary" onclick="registerMbeUser()" id="btn_register_mbe_user">{l s='Register' mod='mbeshipping'}</button>
            </div>
        {/if}


        {* CONTENT DESKTOP *}
        {if !Context::getContext()->isMobile()}
            <div class="row second_section_welcome">
                <div class="col col-lg-6 column-img-left">
                    <img src="{$banner_advantage|escape:'htmlall':'UTF-8'}" alt="Image" width="400" height="400"/>
                </div>
                <div class="col col-12 col-lg-6 column-txt-right">
                    <h2 class="text-left">
                        <strong>{l s='Main advantages' mod='mbeshipping'}:</strong>
                    </h2>
                    <img width="100" src="{$banner_eship|escape:'htmlall':'UTF-8'}" alt="Image"/>
                    <ul class="ul-second-section">
                        <li>
                            <h4>
                                <img src="{$checklist|escape:'htmlall':'UTF-8'}" width="25">
                                {l s='It is easy to install' mod='mbeshipping'}
                            </h4>
                        </li>
                        <li>
                            <h4>
                                <img src="{$checklist|escape:'htmlall':'UTF-8'}" width="25">
                                {l s='Allows customisation of shipment prices' mod='mbeshipping'}
                            </h4>
                        </li>
                        <li>
                            <h4>
                                <img src="{$checklist|escape:'htmlall':'UTF-8'}" width="25">
                                {l s='Enables automatic creation of shipments on MBE systems' mod='mbeshipping'}
                            </h4>
                        </li>
                    </ul>
                    <br><br>
                    <h4>
                        {l s='The MBE eShip Plugin is the ideal solution for you if you are looking for a' mod='mbeshipping'}
                        <b>{l s='smart and efficient tool to sell products online' mod='mbeshipping'}</b>
                        {l s='via e-commerce' mod='mbeshipping'}.
                    </h4>
                    <br>
                    <h4>
                        {l s='Make your e-commerce shipping process simple, cost-effective and fast, giving your customers an unforgettable delivery experience' mod='mbeshipping'}
                        .
                    </h4>

                    <div class="row mt-2 text-align-left">
                        <button class="btn btn-primary"
                                onclick="registerMbeUser()" id="btn_start_your_experience_now">{l s='Start your experience now' mod='mbeshipping'}</button>
                    </div>
                </div>
            </div>
        {/if}

        {* CONTENT MOBILE*}
        {if Context::getContext()->isMobile()}
            <hr class="welcome-hr">
            <div class="container_img_banner_advantage_welcome">
                <img src="{$banner_advantage|escape:'htmlall':'UTF-8'}" alt="Image" width="150" height="150"/>
            </div>
            <div>
                <h2 class="text-left">
                    <strong>{l s='Main advantages' mod='mbeshipping'}:</strong>
                </h2>
                <img class="banner-welcome" src="{$banner_eship|escape:'htmlall':'UTF-8'}" alt="Image"/>
                <ul class="ul-second-section">
                    <li>
                        <h4>
                            <img src="{$checklist|escape:'htmlall':'UTF-8'}" width="25">
                            {l s='It is easy to install' mod='mbeshipping'}
                        </h4>
                    </li>
                    <li>
                        <h4>
                            <img src="{$checklist|escape:'htmlall':'UTF-8'}" width="25">
                            {l s='Allows customisation of shipment prices' mod='mbeshipping'}
                        </h4>
                    </li>
                    <li>
                        <h4>
                            <img src="{$checklist|escape:'htmlall':'UTF-8'}" width="25">
                            {l s='Enables automatic creation of shipments on MBE systems' mod='mbeshipping'}
                        </h4>
                    </li>
                </ul>
                <br>
                <h4>
                    {l s='The MBE eShip Plugin is the ideal solution for you if you are looking for a' mod='mbeshipping'}
                    <b>{l s='smart and efficient tool to sell products online' mod='mbeshipping'}</b>
                    {l s='via e-commerce' mod='mbeshipping'}.
                </h4>
                <br>
                <h4>
                    {l s='Make your e-commerce shipping process simple, cost-effective and fast, giving your customers an unforgettable delivery experience' mod='mbeshipping'}
                    .
                </h4>
                <div class="row mt-2 text-align-left">
                    <button class="btn btn-primary"
                            onclick="registerMbeUser()" id="btn_start_your_experience_now">{l s='Start your experience now' mod='mbeshipping'}</button>
                </div>
            </div>
        {/if}
    </div>
</div>
