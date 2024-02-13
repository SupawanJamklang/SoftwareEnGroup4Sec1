import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/');
  await page.getByText('Vouchers 1000 THB').first().click();
  await page.getByRole('button', { name: ' Add to cart' }).click();
  await page.getByRole('link', { name: ' Proceed to checkout' }).click();
  await page.getByRole('button', { name: 'Process with invoice' }).click();
  await page.getByLabel('Mr.').check();
  await page.getByLabel('First name').click();
  await page.getByLabel('First name').fill('Ch');
  await page.getByLabel('Last name').click();
  await page.getByLabel('Last name').fill('Choke');
  await page.getByLabel('Email').click();
  await page.getByLabel('Email').fill('Ch@kkumail.com');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByLabel('Address', { exact: true }).click();
  await page.getByLabel('Address', { exact: true }).fill('123 KKu');
  await page.getByLabel('Zip/Postal Code').click();
  await page.getByLabel('Zip/Postal Code').fill('40002');
  await page.getByLabel('City').click();
  await page.getByLabel('City').fill('KKC');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByLabel('Pay by bank wire').check();
  await page.getByRole('textbox').click();
  await page.getByRole('textbox').setInputFiles('1707827611512.png');
  await page.getByLabel('I agree to the terms of').check();
  await page.goto('http://localhost:8080/en/order-confirmation?id_cart=33&id_module=68&id_order=21&key=ba5a858336b2ceec27997d624fdfa417');
});