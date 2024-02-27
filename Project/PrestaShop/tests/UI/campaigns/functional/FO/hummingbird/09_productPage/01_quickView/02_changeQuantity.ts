// Import utils
import helper from '@utils/helpers';
import testContext from '@utils/testContext';
import files from '@utils/files';

// Import common tests
import {installHummingbird, uninstallHummingbird} from '@commonTests/FO/hummingbird';

// Import pages
import homePage from '@pages/FO/hummingbird/home';

import {expect} from 'chai';
import type {BrowserContext, Page} from 'playwright';

const baseContext: string = 'functional_FO_hummingbird_productPage_quickView_changeQuantity';

/*
Pre-condition:
- Install hummingbird theme
Scenario:
- Go to FO
- Quick view third product
- Click up/down on quantity input
- Set quantity input (good/bad value)
Post-condition:
- Uninstall hummingbird theme
 */
describe('FO - Product page - Quick view : Change quantity', async () => {
  let browserContext: BrowserContext;
  let page: Page;

  // Pre-condition : Install Hummingbird
  installHummingbird(`${baseContext}_preTest`);

  // before and after functions
  before(async function () {
    browserContext = await helper.createBrowserContext(this.browser);
    page = await helper.newTab(browserContext);
  });

  after(async () => {
    await helper.closeBrowserContext(browserContext);
    await files.deleteFile('../../admin-dev/hummingbird.zip');
  });

  describe('Change quantity', async () => {
    it('should go to FO home page', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'goToFoToCreateAccount', baseContext);

      await homePage.goToFo(page);

      const isHomePage = await homePage.isHomePage(page);
      expect(isHomePage).to.eq(true);
    });

    it('should quick view the third product', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'quickView', baseContext);

      await homePage.quickViewProduct(page, 3);

      const isModalVisible = await homePage.isQuickViewProductModalVisible(page);
      expect(isModalVisible).to.eq(true);
    });

    it('should change the quantity by using the arrow \'UP\' button', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'incrementQuantity', baseContext);

      await homePage.setQuantityByArrowUpDown(page, 5, 'increment');

      const productQuantity = await homePage.getProductQuantityFromQuickViewModal(page);
      expect(productQuantity).to.equal(5);
    });

    it('should change the quantity by using the arrow \'Down\' button', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'incrementQuantity2', baseContext);

      await homePage.setQuantityByArrowUpDown(page, 1, 'decrement');

      const productQuantity = await homePage.getProductQuantityFromQuickViewModal(page);
      expect(productQuantity).to.equal(1);
    });

    it('should add quantity of the product by setting input value', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'updateQuantityByInput', baseContext);

      await homePage.changeQuantity(page, 12);
      await homePage.addToCartByQuickView(page);

      const isVisible = await homePage.isBlockCartModalVisible(page);
      expect(isVisible).to.eq(true);
    });

    it('should click on continue shopping and check that the modal is not visible', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'clickOnContinueShopping', baseContext);

      const isNotVisible = await homePage.continueShopping(page);
      expect(isNotVisible).to.eq(true);
    });

    it('should check the cart notifications number', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'checkNotificationsNumber', baseContext);

      const notificationsNumber = await homePage.getCartNotificationsNumber(page);
      expect(notificationsNumber).to.equal(12);
    });

    it('should quick view the third product', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'quickView2', baseContext);

      await homePage.quickViewProduct(page, 3);

      const isModalVisible = await homePage.isQuickViewProductModalVisible(page);
      expect(isModalVisible).to.eq(true);
    });

    // @todo : https://github.com/PrestaShop/PrestaShop/issues/35219
    it.skip('should set \'-24\' in the quantity input', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'updateQuantityByInput2', baseContext);

      await homePage.changeQuantity(page, '-24');
      await homePage.addToCartByQuickView(page);

      const isVisible = await homePage.isBlockCartModalVisible(page);
      expect(isVisible).to.eq(true);
    });

    it.skip('should click on continue shopping and check that the modal is not visible', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'clickOnContinueShopping2', baseContext);

      const isNotVisible = await homePage.continueShopping(page);
      expect(isNotVisible).to.eq(true);
    });

    it.skip('should check the cart notifications number', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'checkNotificationsNumber2', baseContext);

      const notificationsNumber = await homePage.getCartNotificationsNumber(page);
      expect(notificationsNumber).to.equal(12);
    });

    it.skip('should quick view the third product', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'quickView3', baseContext);

      await homePage.quickViewProduct(page, 3);

      const isModalVisible = await homePage.isQuickViewProductModalVisible(page);
      expect(isModalVisible).to.eq(true);
    });

    it('should set \'Prestashop\' in the quantity input and check that add to cart button is disabled', async function () {
      await testContext.addContextItem(this, 'testIdentifier', 'updateQuantityByInput3', baseContext);

      await homePage.changeQuantity(page, 'Prestashop');
      await homePage.addToCartByQuickView(page);

      const isEnabled = await homePage.isAddToCartButtonEnabled(page);
      expect(isEnabled, 'Add to cart button is not disabled').to.eq(false);
    });
  });

  // Post-condition : Uninstall Hummingbird
  uninstallHummingbird(`${baseContext}_postTest`);
});
