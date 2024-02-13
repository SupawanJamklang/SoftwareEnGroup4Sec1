import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/');
  await page.locator('.thumbnail').first().click();
  await page.getByRole('button', { name: ' Add to cart' }).click();
  await page.getByRole('link', { name: ' Proceed to checkout' }).click();
  await page.getByRole('button', { name: 'Process with invoice' }).click();
  await page.getByLabel('Mr.').check();
  await page.getByLabel('First name').click();
  await page.getByLabel('First name').fill('Bannakorn');
  await page.getByLabel('Last name').click();
  await page.getByLabel('Last name').fill('Sunanta');
  await page.getByLabel('Email').click();
  await page.getByLabel('Email').fill('bannakorn.s@kkumail.com');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByLabel('Address', { exact: true }).click();
  await page.getByLabel('Address', { exact: true }).fill('123 KKU');
  await page.getByLabel('Zip/Postal Code').click();
  await page.getByLabel('Zip/Postal Code').fill('40002');
  await page.getByLabel('City').click();
  await page.getByLabel('City').fill('Khonkaen');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByLabel('Promptpay').check();
  await page.getByRole('textbox').setInputFiles('1707827611512.png');
  await page.goto('http://localhost:8080/en/order-confirmation?id_cart=19&id_module=68&id_order=16&key=55871d78e8404b4164f419298d27f0f3');
});