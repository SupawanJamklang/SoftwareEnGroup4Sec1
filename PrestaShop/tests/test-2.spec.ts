import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/');
  await page.getByRole('link', { name: 'Vouchers 500 THB' }).nth(1).click();
  await page.getByRole('button', { name: ' Add to cart' }).click();
  await page.getByRole('link', { name: ' Proceed to checkout' }).click();
  await page.getByRole('button', { name: 'Process with invoice' }).click();
  await page.getByText('Mr.').click();
  await page.getByLabel('First name').click();
  await page.getByLabel('First name').fill('admin');
  await page.getByLabel('Last name').click();
  await page.getByLabel('Last name').fill('root');
  await page.getByLabel('Email').click();
  await page.getByLabel('Email').fill('admin@gmail.com');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByLabel('Address', { exact: true }).click();
  await page.getByLabel('Address', { exact: true }).fill('123 KKU');
  await page.getByLabel('Zip/Postal Code').click();
  await page.getByLabel('Zip/Postal Code').fill('40000');
  await page.getByLabel('City').click();
  await page.getByLabel('City').fill('Khonkaen');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByText('Choose Promptpay').click();
  await page.getByLabel('Promptpay').check();
  await page.getByRole('textbox').setInputFiles('1707827611512.png');
  await page.goto('http://localhost:8080/en/order-confirmation?id_cart=28&id_module=68&id_order=17&key=7747c8007834ea6261ed2aa592e5751a');
});