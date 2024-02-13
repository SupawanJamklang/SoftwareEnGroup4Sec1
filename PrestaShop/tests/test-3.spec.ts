import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/');
  await page.getByText('Vouchers 1000 THB').first().click();
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
  await page.getByLabel('Address', { exact: true }).fill('123 kku');
  await page.getByLabel('Zip/Postal Code').click();
  await page.getByLabel('Zip/Postal Code').fill('40002');
  await page.getByLabel('City').click();
  await page.getByLabel('City').fill('khonkaen');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByLabel('Promptpay').check();
  await page.getByRole('textbox').click();
  await page.getByRole('textbox').setInputFiles('1707827611512.png');
  await page.getByLabel('I agree to the terms of').check();
  await page.goto('http://localhost:8080/en/order-confirmation?id_cart=29&id_module=68&id_order=18&key=72aaaad0d8bc1f11bdf83e711d0d2ca8');
});