import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/');
  await page.getByText('Vouchers 500 THB').first().click();
  await page.getByRole('button', { name: ' Add to cart' }).click();
  await page.getByRole('link', { name: ' Proceed to checkout' }).click();
  await page.getByRole('button', { name: 'Process with invoice' }).click();
  await page.getByText('Mr.').click();
  await page.getByLabel('First name').click();
  await page.getByLabel('First name').fill('Ch');
  await page.getByLabel('Last name').click();
  await page.getByLabel('Last name').fill('Choke');
  await page.getByLabel('Email').click();
  await page.getByLabel('Email').fill('Ch@gmail.com');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByLabel('Address', { exact: true }).click();
  await page.getByLabel('Address', { exact: true }).fill('123 KKU');
  await page.getByLabel('Zip/Postal Code').click();
  await page.getByLabel('Zip/Postal Code').fill('40002');
  await page.getByLabel('City').click();
  await page.getByLabel('City').fill('KKU');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByLabel('Pay by Counter service').check();
  await page.getByLabel('I agree to the terms of').check();
  await page.getByRole('button', { name: 'Place order' }).click();
});